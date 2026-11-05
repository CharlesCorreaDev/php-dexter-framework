# Considerações de Desempenho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.gc.performance-considerations.php

---

## Considerações de Desempenho

Já foi mencionado na seção anterior que simplesmente coletar as
raízes possíveis tem um impacto muito pequeno em desempenho, mas isso quando
compara-se o PHP 5.2 com o PHP 5.3. Embora o registro de raízes possíveis
comparado ao não registro, como no PHP 5.2, seja mais lento, outras
mudanças em tempo de execução no PHP 5.3 evitam que esta perda particular
de desempenho apareça.

Existem duas grandes áreas onde o desempenho é afetado. A primeira
é o uso reduzido de memória, e a segunda é o atraso em tempo de execução
quando o mecanismo de coleta de lixo faz suas limpezas de memória. Estes
dois problemas serão mostrados a seguir.

### Uso Reduzido de Memória

Primeiramente, o grande motivo pelo qual o mecanismo de coleta de lixo
existe é para reduzir o uso de memória através de limpeza de variáveis
em referência circular assim que os pré-requisitos são preenchidos. Na
implementação do PHP, isso acontece assim que o buffer de raízes fica cheio, ou
quando a função [gc\_collect\_cycles()](function.gc-collect-cycles.md) é chamada. No
gráfico abaixo, é mostrado o uso de memória do script a seguir,
tanto no PHP 5.2 quanto no PHP 5.3, excluindo a memória básica que o próprio
PHP usa quando se inicia.

**Exemplo #1 Exemplo de uso de memória**

```
<?php
class Foo
{
    public $var = '3.14159265359';
    public $self;
}

$baseMemory = memory_get_usage();

for ( $i = 0; $i <= 100000; $i++ )
{
    $a = new Foo;
    $a->self = $a;
    if ( $i % 500 === 0 )
    {
        echo sprintf( '%8d: ', $i ), memory_get_usage() - $baseMemory, "\n";
    }
}
?>
```

![Comparação de uso de memória entre o PHP 5.2 e o PHP 5.3](images/12f37b1c6963c1c5c18f30495416a197-gc-benchmark.png)

Neste exemplo bem acadêmico, está sendo criado um objeto no qual
uma propriedade é definida para apontar para o próprio objeto. Quando a variável $a
no script é re-atribuída na iteração seguinte do loop, um vazamento de
memória normalmente iria acontecer. Neste caso, dois contêineres são vazados
(o zval objeto e o zval propriedade), mas apenas uma raiz possível é
encontrada: a variável que perdeu a atribuição. Quando o buffer de raízes está cheio
depois de 10.000 iterações (com um total de 10.000 raízes possíveis), o mecanismo
de coleta de lixo entra e libera a memória associada com essas
raízes possíveis. Isto pode ser visto claramente com o gráfico irregular
de uso de memória para o PHP 5.3. Depois de 10.000 iterações, o mecanismo entre
e libera a memória associada com as variáveis com referência circular..
O mecanismo em si não tem muito trabalho neste exemplo,
porque a estrutura que é vazada é extremamente simples. Pelo
diagrama, pode-se verificar que o uso de memória no PHP 5.3 é de aproximadamente
9Mb, enquanto que no PHP 5.2 o uso de memória continua crescendo.

### Atraso em Tempo de Execução

A segunda área onde o mecanismo de coleta de lixo influencia o
desempenho é o tempo gasto quando o mecanismo entra
para liberar a memória "vazada". Para verificar quanto é este tempo,
o script anterior foi minimamente modificado para permitir um número maior de
iterações e a remoção dos números de uso de memória intermediária. O
segundo script está apresentado a seguir:

**Exemplo #2 Influência do Coletor de Lixo no desempenho**

```
<?php
class Foo
{
    public $var = '3.14159265359';
    public $self;
}

for ( $i = 0; $i <= 1000000; $i++ )
{
    $a = new Foo;
    $a->self = $a;
}

echo memory_get_peak_usage(), "\n";
?>
```

O script será executado duas vezes, uma com a configuração
[zend.enable\_gc](info.configuration.md#ini.zend.enable-gc) habilitada,
e outra desabilitada:

**Exemplo #3 Executando o script acima**

```
time php -dzend.enable_gc=0 -dmemory_limit=-1 -n example2.php
# e
time php -dzend.enable_gc=1 -dmemory_limit=-1 -n example2.php
```

Em uma máquina específica, o primeiro comando parece levar 10.7 segundos,
enquanto que o segundo leva 11.4 segundos. Isto é um atraso de
aproximadamente 7%. Entretanto, a quantidade máxima de memória usada pelo
script é reduzida em 98%, de 931Mb para 10Mb. Esta referência não é muito
científica, ou mesmo representativa para aplicações do mundo real, mas
demonstra os benefícios de uso de memória que este mecanismo de coleta
de lixo fornece. A boa notícia é que este atraso é sempre de
7% para este script particular, enquanto que as capacidades de
redução de memória economizam mais e mais memória quando referências
circulares adicionais são encontradas durante a execução do script.

### Estatísticas de GC Internas do PHP

É possível obter um pouco mais de informação sobre como o
o mecanismo de coleta de lixo é executado no PHP. Mas para fazer isto,
deve-se recompilar o PHP para habilitar o benchmark e o
código de coleta de dados. Deve-se definir a variável de ambiente
`CFLAGS` para `-DGC_BENCH=1` antes de executar
`./configure` com as opções desejadas. A sequência a
seguir deve fazer este truque:

**Exemplo #4 Recompilando o PHP para habilitar o benchmarking de GC**

```
export CFLAGS=-DGC_BENCH=1
./config.nice
make clean
make
```

Quando o exemplo acima for executado novamente com o novo
binário do PHP, o resultado abaixo será visualizado assim que o
PHP terminar a execução:

**Exemplo #5 Estatísticas GC**

```
GC Statistics
-------------
Runs:               110
Collected:          2072204
Root buffer length: 0
Root buffer peak:   10000

      Possible            Remove from  Marked
        Root    Buffered     buffer     grey
      --------  --------  -----------  ------
ZVAL   7175487   1491291    1241690   3611871
ZOBJ  28506264   1527980     677581   1025731
```

As estatísticas mais informativas são mostradas no primeiro bloco. Pode-se
ver aqui que o mecanismo de coleta de lixo foi executado 110 vezes, e no
total, mais de 2 milhões de alocações de memória foram liberadas durante estas
110 execuções. Assim que o mecanismo tenha sido executado pelo menos
uma vez, o "Root buffer peak" (pico do buffer de raízes) será sempre 10.000.

### Conclusão

Em geral, o coletor de lixo no PHP irá causar um atraso apenas quando
o algoritmo de coleta realmente for executado, enquanto que em scripts normais
(menores), não deve haver nenhum prejuízo no desempenho.

Entretanto, em casos onde o mecanismo de coleta é executado em
scripts normais, a redução de memória que ele vai proporcionar irá permitir
que mais desses scripts possam ser executados ao mesmo tempo no servidor, já que
a quantidade de memória usada no total não será muito grande.

Os benefícios são mais aparentes para scripts de longa execução, como os
scripts de conjunto de testes ou daemons. Adicionalmente, para aplicações [» PHP-GTK](https://gtk.php.net/)
que geralmente tendem a rodar por mais tempo que scripts para a Web, o novo
mecanismo deve fazer uma diferença considerável em relação a vazamentos
de memória que insistem em acontecer.

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
