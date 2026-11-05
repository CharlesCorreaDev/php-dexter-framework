# Desempenho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.performance.php

---

## Desempenho

Certos itens que podem aparecer nas expressões são mais eficientes
que outros. É mais eficiente usar uma classe de caracteres
como [aeiou] do que um conjunto de alternativas como (a|e|i|o|u).
Em geral, a construção mais simples que proporciona o
comportamento requerido é normalmente a mais eficiente. O livro
de Jeffrey Friedl contém muita discussão sobre como otimizar
expressões regulares para um desempenho eficiente.

Quando uma expressão começa com .\* e a opção [PCRE\_DOTALL](reference.pcre.pattern.modifiers.md) está
definida, a expressão é implicitamente ancorada pelo PCRE, pois ela
pode corresponder apenas ao início de um string de entrada. Porém, se
[PCRE\_DOTALL](reference.pcre.pattern.modifiers.md)
não estiver definida, o PCRE não poderá fazer esta otimização,
pois o metacaractere . não corresponderá a uma nova linha
e, se a string de entrada contiver novas linhas, a expressão poderá
corresponder a partir do caractere imediatamente após um deles,
em vez de desde o início. Por exemplo, a expressão
`(.*) second`
corresponde à string "first\nand second" (onde \n representa
um caractere de nova linha) com a primeira substring capturada igual a
"and". Para fazer isso, o PCRE precisa tentar a correspondência novamente
iniciando após cada caractere de nova linha na string.

Se uma expressão como essa estiver sendo usada com uma string de entrada que
não contêm novas linhas, o melhor desempenho será obtido
definindo [PCRE\_DOTALL](reference.pcre.pattern.modifiers.md)
ou iniciando a expressão com ^.\* para
indicar ancoragem explícita. Isso evita que o PCRE tenha que
varrer a string em busca de uma nova linha para reiniciar.

Cuidado com expressões que contêm repetições indefinidas aninhadas.
Elas podem levar muito tempo para serem executadas quando aplicados a uma string
que não corresponde. Considere o fragmento de expressão
`(a+)*`

Isso pode corresponder a "aaaa" de 33 maneiras diferentes, e esse número
aumenta muito rapidamente à medida que a string fica mais longa. (A repetição
\* pode corresponder a 0, 1, 2, 3 ou 4 vezes e, para cada um
desses casos diferentes de 0, as repetições + podem corresponder a diferentes
números de vezes.) Quando o restante da expressão é tal
que toda a correspondência irá falhar, o PCRE tem que, em princípio,
tentar todas as variações possíveis, e isso pode levar
muito tempo.

Uma otimização captura alguns dos casos mais simples
como
`(a+)*b`,
onde um carectere literal aparece na sequência. Antes de embarcar no
procedimento padrão de correspondência, o PCRE verifica se existe um "b"
mais à frente na string de entrada, e se não houver, ele falha
a correspondência imediatamente. Porém, quando não há um caractere literal
na sequência, esta otimização não pode ser usada. Pode-se ver a
deferença comparando o comportamento de
`(a+)*\d`
com a expressão mais acima. A anterior falha quase
instantaneamente quando aplicada a uma linha inteira de caracteres "a",
enquanto que a última leva um tempo apreciável com strings
mais longas que aproximadamente 20 caracteres.

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
