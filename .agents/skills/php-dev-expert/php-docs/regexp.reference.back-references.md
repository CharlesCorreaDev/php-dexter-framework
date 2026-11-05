# Referências retroativas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.back-references.php

---

## Referências retroativas

Fora de uma classe de caracteres, uma barra invertida seguida por um dígito
maior que 0 (e possivelmente dígitos adicionais) é uma referência
retroativa a um grupo de captura realizada anteriormente (isto é, à sua
esquerda) na expressão, desde que tenha havido previamente essa quantidade
de captura entre parênteses.

Porém, se um número decimal seguindo a barra invertida for
menor que 10, ele sempre será interpretado como uma referência retroativa e
causará um erro somente se não tiver havido essa quantidade de
grupos de captura em toda a expressão. Em outras palavras, os
parênteses que são referenciados não precisam estar à esquerda da
referência para números menores que 10.
Uma "referência retroativa à frente" pode fazer sentido quando uma repetição
está envolvida e a sub-expressão à direita tenha participado
de uma iteração anterior. Consulte a seção sobre
[sequências de escape](regexp.reference.escape.md) para detalhes adicionais da manipulação
de dígitos que seguem uma barra invertida.

Uma referência retroativa corresponde a qualquer coisa que verdadeiramente correspondeu à sub-expressão
de captura na string de entrada atual, e não
a qualquer coisa que corresponda à sub-expressão em si. Portanto, a expressão
`(sens|respons)e and \1ibility`
corresponde a "sense and sensibility" e "response and responsibility",
mas não a "sense and responsibility". Se a correspondência for sensível a
maiúsculas/minúsculas no momento da referência retroativa, a forma
das letras será relevante. Por exemplo,
`((?i)rah)\s+\1`
corresponde a "rah rah" e "RAH RAH", mas não a "RAH rah", embora
a sub-expressão de captura original seja correspondida
de forma insensível a maiúsculas/minúsculas.

Pode haver mais que uma referência retroativa à mesma sub-expressão.
Se uma sub-expressão não tiver sido usada em uma correspondência
em particular, qualquer referência retroativa a ela sempre
falhará. Por exemplo, a expressão
`(a|(bc))\2`
sempre falhará se ele iniciar correspondendo a "a" ao invés de "bc".
Como podem haver até 99 referências retroativas, todos os dígitos
seguindo a barra invertida são consideradas como parte de um potencial número
de identificador de referência retroativa. Se a expressão continua com um caractere de
dígito, algum delimitador precisa ser usado para terminar a
referência retroativa. Se a opção [PCRE\_EXTENDED](reference.pcre.pattern.modifiers.md)
estiver definida, o delimitador pode ser um espaço em branco. Caso contrário um comentário vazio pode ser usado.

Uma referência retroativa que ocorre dentro dos parênteses aos quais ela
se refere falha quando a sub-expressão é usada pela primeira vez, portanto, por
exemplo, (a\1) nunca será correspondida. No entanto, tais referências podem
ser úteis dentro de sub-expressões repetidas. Por exemplo, a expressão
`(a|b\1)+`
corresponde a qualquer número de "a"s e também a "aba", "ababba" etc. A
cada iteração da sub-expressão, a referência retroativa corresponde
à string de caracteres relativa à iteração anterior.
Para que isso funcione, a expressão precisa ser tal
que a primeira iteração não precise corresponder à referência
retroativa. Isto pode ser feito usando alternância, como no
exemplo acima, ou por um quantificador com um mínimo de zero.

A sequência de escape `\g` pode ser
usada para referências absolutas e relativas de sub-expressões.
Esta sequência de escape precisa ser seguida por um número sem sinal ou
negativo, opcionalmente envolvido por chaves. As sequências `\1`,
`\g1` e `\g{1}` são sinônimos
entre si. O uso desta expressão com um número sem sinal pode
ajudar a remover a ambiguidade inerente ao usar dígitos após uma
barra invertida. A sequência ajuda a distinguir referências de caracteres
octais e também torna mais fácil ter uma referência seguida
por um número literal, ex.: `\g{2}1`.

O uso da sequência `\g` com um número negativo
significa uma referência relativa. Por exemplo, `(foo)(bar)\g{-1}`
corresponderia à sequência "foobarbar" e `(foo)(bar)\g{-2}`
corresponderia a "foobarfoo". Isto pode ser útil em expressões longas como uma alternativa
para manter rastreamento do número de sub-expressões para referenciar
uma sub-expressão anterior específica.

Referências às sub-expressões nomeadas podem ser obtidas com
`(?P=nome)`,
`\k<nome>`, `\k'nome'`,
`\k{nome}`, `\g{nome}`,
`\g<nome>` ou `\g'nome'`.

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
