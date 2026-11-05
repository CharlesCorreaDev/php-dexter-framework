# Sub-expressões de ocorrência única

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.onlyonce.php

---

## Sub-expressões de ocorrência única

Tanto com a maximização quanto com a minimização da repetição, a falha no
que se segue normalmente faz com que o item repetido seja
reavaliado para ver se um número diferente de repetições permite que o
resto da expressão corresponda. Às vezes é útil
evitar isso, seja para mudar a natureza da correspondência ou
para fazer com que ela falhe antes do que aconteceria de outra forma, quando o
autor da expressão sabe que não há sentido em
continuar.

Considere, por exemplo, a expressão \d+foo quando aplicada à
linha
`123456bar`

Depois de corresponder a todos os 6 dígitos e depois falhar em corresponder a "foo",
a ação normal do algoritmo de correspondência é tentar novamente com somente 5
dígitos correspondendo ao item \d+, e depois com 4, e assim por diante,
até falhar na última vez. Sub-expressões de ocorrência única fornecem o
meio de especificar que uma vez que a parte da expressão tenha sido
correspondida, ela não deve ser reavaliada desta forma, portanto o
algoritmo desistiria imediatamente ao falhar na correspondência a "foo"
na primeira vez. A notação é um outro tipo de parêntese
especial, iniciando com (?> como neste exemplo:
`(?>\d+)bar`

Este tipo de parênteses "trava" a parte da expressão
que eles contém uma vez que tenha sido correspondida, e uma falha mais para a frente na
expressão é impedida de rastreá-la retroativamente.
O restreamento retroativo depois deles para itens anteriores, entretanto, funciona normalmente.

Uma descrição alternativa é que uma sub-expressão deste tipo
corresponde à string de caracteres que uma expressão idêntica
avulsa corresponderia, se ancorada no ponto atual
da string de entrada.

Sub-expressões de ocorrência única não são sub-expressões de captura. Casos
simples como o exemplo acima podem sem pensados como uma repetição de
maximização que precisa consumir tudo o que ela puder. Portanto,
enquanto ambos \d+ e \d+? são preparados para ajustar o número de
dígitos que eles correspondem para fazer com o que o resto da expressão
tenha correspondência, (?>\d+) pode somente corresponder a uma sequência inteira de dígitos.

Obviamente, esta contrução pode conter sub-expressões arbitrariamente
complexas, e ela pode ser aninhada.

Sub-expressões de ocorrência única podem ser usadas em conjunção com
afirmações que olham para trás para especificar correspondência eficiente no final
da string. Considere a expressão simples
`abcd$`
quando aplicada a uma string longa que não corresponde. Como
a correspondência procede da esquerda para a direita, o PCRE irá procurar
cada "a" na string e depois ver se o que vem a seguir corresponde ao
resto da expressão. Se a expressão for especificada como
`^.*abcd$`,
o .\* inicial corresponderá à string inteira primeito, mas
quando isso falhar (porque não existe um "a" a seguir), ela
faz um rastreamento retroativo para corresponder a todos os caracteres exceto ao último, e depois todos exceto
os últimos dois, e assim por diante. Uma vez mais a pesuisa
por "a" cobre a string inteira, da direita para a esquerda, portanto
não melhorou em nada. Porém, se a expressão for escrita como
`^(?>.*)(?<=abcd)`,
não poderá haver rastreamento retroativo para o item ".\*". ele pode
corresponder somente à string inteira. A afirmação subsequente
faz um teste simples nos últimos quatro caracteres. Se
ela falhar, a correspondência falha imediatamente. Para strings longas,
este métodos faz uma diferença significativa no tempo de processamento.

Quando uma expressão contém uma repetição ilimitada dentro de uma sub-expressão
que pode ser repetida um número ilimitado de
vezes, o uso de uma sub-expressão de ocorrência única é a única maneira de
evitar que algumas correspondências com falha demorem muito tempo.
A expressão
`(\D+|<\d+>)*[!?]`
corresponde a um número ilimitado de sub-expressões que consistem
de não-dígitos, ou de dígitos envolvidos por <>, seguidos por
! ou ?. Quando ela é correspondida, é executada rapidamente. Porém, se
for aplicada a
`aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa`,
ela leva um longo tempo antes de reportar falha. Isso ocorre
porque a string pode ser dividida entre as duas repetições de
várias maneiras e todas precisam ser tentadas. (O exemplo
usou [!?] em vez de um único caractere no final,
porque tanto o PCRE quanto o Perl têm uma otimização que permite
falha rápida quando um único caractere é usado. Eles
lembram o último caractere único necessário para uma
correspondência, e falhar antecipadamente se não estiver presente na string.)
Se a expressão for alterada para
`((?>\D+)|<\d+>)*[!?]`,
sequências de não-dígitos não podem ser quebradas, e a falha acontece rapidamente.

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
