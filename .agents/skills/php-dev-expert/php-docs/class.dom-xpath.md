# A Classe Dom\XPath

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-xpath.php

---

# A Classe Dom\XPath

(PHP 8 >= 8.4.0)

## Introdução

Permite usar consultas XPath 1.0 em documentos HTML ou XML.

Este é o equivalente moderno e compatível com as especificações de
[DOMXPath](class.domxpath.md).

## Resumo da classe

final
class ****Dom\XPath****
{

/\* Propriedades \*/

public
readonly
[Dom\Document](class.dom-document.md)
[$document](class.dom-xpath.md#dom-xpath.props.document);

public
[bool](language.types.boolean.md)
[$registerNodeNamespaces](class.dom-xpath.md#dom-xpath.props.registernodenamespaces);

/\* Métodos \*/

/\* Not documented yet \*/

}

## Propriedades

document
:   O documento que está vinculado a este objeto.

registerNodeNamespaces
:   Quando definido como **`true`**, os namespaces no nó são registrados.

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
