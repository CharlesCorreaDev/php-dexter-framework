# Codificação de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.encoding.php

---

# Codificação de caracteres

A Extensão XML do PHP suporta o conjunto de caracteres [» Unicode](https://www.unicode.org/) definido por
diferentes codificações de caracteres
diferentes. Há dois tipos de codificação de caracteres, codificação
da fonte e codificação do destino.
A apresentação interna do PHP do documento é sempre codificada
com `UTF-8`.

Codificação na fonte é feita quando um documento XML é [analisado](function.xml-parse.md). Ao [criar um analisador
XML](function.xml-parser-create.md), uma codificação na fonte pode ser especificada (esta codificação
não poderá ser alterada mais tarde durante a atividade do analisador XML). As
codificações na fonte suportadas são `ISO-8859-1`,
`US-ASCII` e `UTF-8`. As duas
primeiras são codificações de um byte, o que significa que cada
caractere é representado por um único byte.
`UTF-8` pode codificar caracteres compostos por
um número variável de bits (até 21) em um a quatro bytes. A
codificação na fonte padrão usada pelo PHP é
`ISO-8859-1`.

Codificação no destino é feita quando o PHP passa dados para as funções
do analisador XML. Quando um analisador XML é criado, a codificação no destino
é definido como a mesma da fonte, mas isto pode ser
alterado a qualquer momento. A codificação no destino afetará dados de caracteres
e também nomes de etiquetas e alvos de instrução de processamento.

Se o analisador XML encontrar caracteres de fora da faixa na qual
sua codificação na fonte seja capaz de representar, ele retornará
um erro.

Se o PHP encontrar caracteres no documento XML analisado que não
possam ser representados na codificação de destino escolhida, os caracteres com
problema serão "rebaixados". Atualmente, isto significa que tais caracteres serão
substituídos por um sinal de interrogação.

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
