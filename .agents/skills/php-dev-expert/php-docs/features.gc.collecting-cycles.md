# Ciclos de Coleta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.gc.collecting-cycles.php

---

## Ciclos de Coleta

Tradicionalmente, mecanismos de memória de contagem de referência, como os
usados anteriormente pelo PHP, falham ao lidar com vazamentos de memória de referência circular;
entretanto, desde a versão 5.3.0, o PHP implementa o algoritmo síncrono do artigo
[» Concurrent Cycle Collection in Reference Counted Systems](https://pages.cs.wisc.edu/~cymen/misc/interests/Bacon01Concurrent.pdf)
que lida com este problema.

Uma explicação completa de como o algoritmo funciona estaria um pouco além do
escopo desta seção, mas o básico é explicado aqui. Primeiramente,
deve-se estabelecer algumas regras gerais. Se um "refcount" é incrementado, ele
ainda está em uso e, portanto, não é lixo. Se o refcount é reduzido e
alcança zero, o zval pode ser liberado. Isso significa que os ciclos de coleta
somente podem ser criados quando um argumento "refcount" é reduzido para um valor diferente de zero.
Adicionalmente, em um ciclo de coleta, é possível descobrir quais partes são lixo,
verificando se é possível reduzir seus "refcounts" em uma unidade,
e então observando quais dos zvals têm um "refcount" diferente de zero.

![Algoritmo de coleta de lixo](images/12f37b1c6963c1c5c18f30495416a197-gc-algorithm.png)

Para evitar chamadas de verificação de ciclos de coleta com qualquer
redução possível de um refcount, o algoritmo em vez disso coloca todas as
raízes (zvals) possíveis no "buffer de raízes" (tornando-os "roxos"). Ele também
certifica que cada raiz possível chegue ao buffer apenas uma vez. Apenas quando
o buffer de raízes está cheio é que o mecanismo de coleta se inicia para todos
os diferentes zvals contidos. Veja o passo A na figura acima.

No passo B, o algoritmo executa uma pesquisa em profundidade em todas as raízes possíveis
para reduzir em um os refcounts de cada zval que ele encontra, certificando-se de não
reduzir um refcount no mesmo zval duas vezes (marcando-os de "cinza"). No
passo C, o algoritmo novamente executa uma pesquisa em profundidade a partir de cada nó de raiz,
para verificar o refcount de cada zval de novo. Se ele encontra o valor zero,
o zval é marcado de "branco" (azul na figura). Se ele for maior que
zero, ele reverte a redução do refcount em uma unidade com uma pesquisa em
profundidade daquele ponto em diante, e eles são marcados de "preto" novamente. No último
passo (D), o algoritmo percorre o buffer de raízes removendo as raízes de zval
de lá e, ao mesmo tempo, verifica quais zvals foram marcados de "branco" no
passo anterior. Cada zval marcado de "branco" será liberado da memória.

Agora que há um entendimento básico de como o algoritmo funciona, vejamos
como isto se integra com o PHP. Por padrão, o coletor de lixo do
PHP fica habilitado. Existe, porém uma configuração
do php.ini que permite mudar isso:
[zend.enable\_gc](info.configuration.md#ini.zend.enable-gc).

Quando o coletor de lixo é habilitado, o algoritmo de pesquisa de ciclos como
descrito acima é executado toda vez que o buffer ficar cheio. O buffer
de raízes tem um tamanho fixo de 10.000 raízes possíveis (embora isso possa ser
alterado mudando-se a constante **`GC_THRESHOLD_DEFAULT`** em
`Zend/zend_gc.c` no código-fonte do PHP, e recompilando-o).
Quando o coletor de lixo é desabilitado, o algoritmo de pesquisa
de ciclos nunca será executado. Entretanto, possíveis raízes serão sempre registradas
no buffer de raízes, não importando se o mecanismo de coleta de lixo tenha
sido ou não habilitado com esta configuração.

Se o buffer de raízes ficar cheio de raízes possíveis enquanto o mecanismo de
coleta de lixo está desabilitado, as possíveis raízes adicionais simplesmente
não serão registradas. Essas raízes não registradas nunca serão
analisadas pelo algoritmo. Se eles fossem parte de um ciclo de referência
circular, eles nunca seriam eliminados e iriam criar um vazamento de memória.

O motivo pelo qual as raízes possíveis são registradas mesmo se o mecanismo
for desabilitado é porque é mais rápido registrar raízes possíveis do que ter que
verificar se o mecanismo está ligado toda vez que uma raiz possível puder
ser encontrada. O próprio mecanismo de coleta e análise de lixo, no entanto,
pode levar um tempo considerável.

Além de mudar a configuração [zend.enable\_gc](info.configuration.md#ini.zend.enable-gc),
também é possível habilitar e desabilitar o mecanismo de coleta de lixo
chamando-se [gc\_enable()](function.gc-enable.md) ou
[gc\_disable()](function.gc-disable.md) respectivamente. Chamar estas funções tem
o mesmo efeito de ligar ou desligar o mecanismo com a configuração.
Também é possível forçar a coleta de ciclos mesmo se o
buffer de raízes possíveis não estiver cheio. Para isto, pode-se usar
a função [gc\_collect\_cycles()](function.gc-collect-cycles.md). Esta função retorna
quantos ciclos foram coletados pelo algoritmo.

A razão por trás da possibilidade do próprio usuário ligar e desligar o mecanismo, e
iniciar a coleta de ciclos, é que algumas partes de aplicações podem ser
altamente sensíveis a tempo de execução. Nesses casos, pode não ser desejado que
o mecanismo de coleta inicie. Obviamente, desligar o coletor
de lixo para certas partes de uma aplicação cria o risco
de gerar vazamentos de memória porque algumas raízes possíveis podem não
caber no buffer limitado. Portanto, provavelmente é mais sábio chamar
a função [gc\_collect\_cycles()](function.gc-collect-cycles.md) logo antes de chamar
a função [gc\_disable()](function.gc-disable.md) para liberar a memória que poderia ser perdida
através de raízes possíveis que estariam já registradas no buffer. Isso
então leva a um buffer vazio para que haja mais espaço para armazenar
raízes possíveis enquanto o mecanismo de ciclos de coleta está desligado.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
