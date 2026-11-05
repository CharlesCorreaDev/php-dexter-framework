# Afirmações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.assertions.php

---

## Afirmações

Uma afirmação é um teste nos caracteres posteriores ou
anteriores ao ponto atual de correspondência que efetivamente não
consome nenhum caractere. As afirmações simples codificadas como \b,
\B, \A, \Z, \z, ^ e $ estão descritas na seção sobre [sequências de escape](regexp.reference.escape.md). Afirmações mais
complexas são codificadas como sub-expressões. Existem dois
tipos: aquelas que *olham para frente* da posição atual na
string de entrada e aquelas que *olham para trás* dela.

Uma sub-expressão de afirmação é correspondida da maneira usual, exceto
que ela não faz com que a posição atual de correspondência seja
alterada. Afirmações que olham *para frente* iniciam com (?= para afirmações
positivas e com (?! para afirmações negativas. Por exemplo,
`\w+(?=;)`
corresponde a uma palavra seguida por ponto-e-vírgula, mas não inclui
o ponto-e-vírgula na correspondência, e
`foo(?!bar)`
corresponde a qualquer ocorrência de "foo" que não seja seguida por
"bar". Observe que a expressão aparentemente similar
`(?!foo)bar`
não encontra uma ocorrência de "bar" que seja precedida por
algo além de "foo"; ela encontra qualquer ocorrência de "bar"
de todo modo, porque a afirmação (?!foo) é sempre **`true`**
quando os três próximos caracteres são "bar". Uma afirmação que
olha para trás é necessária para conseguir este efeito.

Afirmações que olham *para trás* iniciam com (?<= para afirmações positivas
e (?<! para afirmações negativas. Por exemplo,
`(?<!foo)bar`
encontra uma ocorrência de "bar" que não seja precedida por
"foo". Uma afirmação que olha para trás pode corresponder a strings de tamanhos
variáveis, até um limite definido pela implementação.
Alternativas de tamanhos diferentes como
`(?<!dogs?|cats?)`
e ramos de nível superior que podem corresponder a mais que um comprimento como
`(?<=ab(c|de))`
são permitidos.
A implementação de afirmações que olham para trás é, para cada
alternativa, mover temporariamente a posição atual para trás
pela largura fixa e então tentar a correspodência. Se houver
caracteres insuficientes antes da posição atual, a
correspondência falhará. Afirmações que olham para trás em conjunção com
sub-expressões de ocorrência única podem ser particularmente úteis para ter correspondência
nos finais de strings; um exemplo é mostrado no final
da seção sobre sub-expressões de ocorrência única.

Antes do PHP 8.4.0, que inclui o PCRE2 10.44, o conteúdo de uma afirmação
que olha para trás era restrito de forma que todas as strings que ela correspondia tinham que ter um
comprimento fixo. Se houvessem várias alternativas, nem todas elas precisavam ter
o mesmo comprimento fixo, então
`(?<=bullock|donkey)`
era permitido, mas
`(?<!dogs?|cats?)`
causava um erro no momento da compilação. Ramos que correspondiam a strings
de diferentes comprimentos eram permitidas somente no nível superior de
uma afirmação que olha para trás. Isto era uma extensão comparado com o
Perl 5.005, que requeria que todos os ramos correspondessem o mesmo
comprimento de string. Um afirmação como
`(?<=ab(c|de))`
não era permitida porque seu ramo superior único poderia
corresponder a dois comprimentos diferentes mas era aceita se fosse reescrita
para usar dois ramos de nível superior:
`(?<=abc|abde)`

Várias afirmações (de qualquer tipo) podem ocorrer sucessivamente.
Por exemplo,
`(?<=\d{3})(?<!999)foo`
corresponde a "foo" precedida por três dígitos que não são "999".
Note que cada afirmação é aplicada independentemente
no mesmo ponto da string de entrada. Primeiro é
verificado se os três caracteres anteriores são todos dígitos
e depois é verificado se os mesmos três caracteres não são
"999". Esta expressão não corresponde a "foo" precedida por seis
caracteres, os primeiros três dos quais são dígitos e os últimos três
deles não são "999". Por exemplo, ela não corresponde a
"123abcfoo". Uma expressão para fazer isso é
`(?<=\d{3}...)(?<!999)foo`

Agora a primeira afirmação olha para os seis caracteres
precedentes, verificando se os primeiros três são dígitos e
depois a segunda afirmação verifica se os três caracteres
precedentes não são "999".

Afirmações podem ser aninhadas em qualquer combinação. Por exemplo,
`(?<=(?<!foo)bar)baz`
corresponde a uma ocorrência de "baz" que é precedida por "bar"
que por sua vez não é precedida por "foo", enquanto que
`(?<=\d{3}...(?<!999))foo`
é outra expressão que corresponde a "foo" precedida por três
dígitos e quaisquer três caracteres que não sejam "999".

Sub-expressões de afirmação não são sub-expressões de captura, e podem
não ser repetidas, porque não faz sentido afirmar a
mesmo coisa várias vezes. Se qualquer tipo de afirmação coniver
sub-expressões de captura dentro dela, estas são contadas para os
propósitos de numeração dos grupos de captura em toda
a expressão. Porém, a captura de substring acontece somente
para afirmações positivas, porque não faz sentido para
afirmações negativas.

Afirmações contam até o máximo de 200 sub-expressões
entre parênteses.

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
