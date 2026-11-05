# Expressões recursivas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.recursive.php

---

## Expressões recursivas

Considere o problema de corresponder a uma string entre parênteses,
permitindo parênteses aninhados ilimitados. Sem o uso
de recursão, o melhor que pode ser feito é usar uma expressão
que corresponda a uma profundidade fixa de aninhamento. Não é
possível lidar com uma profundidade de aninhamento arbitrária. O Perl 5.6
forneceu um recurso experimental que permite a recursividade
de expressões regulares (entre outras coisas). O item
especial (?R) é fornecido para o caso específico de recursão.
Esta expressão PCRE resolve o problema dos parênteses (suponha
que a opção [PCRE\_EXTENDED](reference.pcre.pattern.modifiers.md)
esteja definida para que o espaço em branco seja
ignorado):
`\( ( (?>[^()]+) | (?R) )* \)`

Primeiro, ela corresponde a um parêntese de abertura. Em seguida, ela corresponde a qualquer
número de substrings que podem ser uma sequência de
não-parênteses ou uma correspondência recursiva da própria expressão
(ou seja, uma substring colocada de forma correta entre parênteses). Finalmente há
um parêntese de fechamento.

Esta expressão de exemplo em particular contém repetições ilimitadas
aninhadas e, portanto, o uso de uma sub-expressão de ocorrência única para correspondência
a strings de não-parênteses é importante ao aplicar
a expressão em strings que não correspondem. Por exemplo, quando
é aplicada a
`(aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa()`
ela gera uma "não correspondência" rapidamente. Entretanto, se uma expressão de ocorrência única
nao for usada, a correspondência é executada por um longo tempo
porque existem muitas formas diferentes das repetições + e \*
dividirem a string, e todas têm que ser testadas
antes que a falha possa ser reportada.

Os valores definidos para quaisquer sub-expressões de captura são aqueles do
nível mais externo da recursão no qual o valor da
sub-expressão é definido. Se a expressão acima for comparada com
`(ab(cd)ef)`,
o valor para os parênteses de captura será "ef", que é
o último valor considerado no nível mais alto. Se parênteses
extras forem acrescentados, resultando em
`\( ( ( (?>[^()]+) | (?R) )* ) \)`,
a string que eles irão capturar
será "ab(cd)ef", o conteúdo dos parênteses do nível mais alto. Se
houver mais de 15 parênteses de captura em uma expressão,
o PCRE precisa obter memória extra para armazenar dados durante uma
recursão, o que ele faz usando pcre\_malloc, liberando-a
posteriormente via pcre\_free. Se nenhuma memória puder ser obtida, ele
salva os dados apenas dos primeiros 15 parênteses de captura, pois
não há como gerar um erro de falta de memória dentro de uma
recursão.

`(?1)`, `(?2)`, e assim por diante,
também podem ser usados para sub-expressões recursivas. também é possível usar sub-expressões
nomeadas: `(?P>nome)` ou
`(?&nome)`.

Se a sintaxe para uma referência de sub-expressão recursiva (seja por número ou
por nome) for usada fora dos parênteses aos quais se refere, ela funcionará
como uma sub-rotina em uma linguagem de programação. Um exemplo anterior
apontou que a expressão
`(sens|respons)e and \1ibility`
corresponde a "sense and sensibility" e "response and responsibility", mas
não a "sense and responsibility". Se, em vez disso, a expressão
`(sens|respons)e and (?1)ibility`
for usada, ela corresponderá a "sense and responsibility", bem como às outras
duas strings. Tais referências devem, contudo, seguir a sub-expressão a
que se referem.

O comprimento máximo de uma string de entrada é o maior número positivo
que uma variável inteira pode conter. No entanto, o PCRE usa recursão para
lidar com sub-expressões e repetições indefinidas. Isso significa que o
espaço de pilha disponível pode limitar o tamanho de uma string de entrada que pode ser
processada por determinadas expressões.

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
