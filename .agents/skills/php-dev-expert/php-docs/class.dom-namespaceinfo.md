# A Classe Dom\NamespaceInfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-namespaceinfo.php

---

# A Classe Dom\NamespaceInfo

(PHP 8 >= 8.4.0)

## Introdução

Isso representa informações imutáveis ​​sobre namespaces de um elemento.
Isso desacopla namespaces de atributos, que estavam interligados incorretamente para as antigas classes DOM.

## Resumo da classe

final
readonly
class ****Dom\NamespaceInfo****
{

/\* Propriedades \*/

public
?[string](language.types.string.md)
[$prefix](class.dom-namespaceinfo.md#dom-namespaceinfo.props.prefix);

public
?[string](language.types.string.md)
[$namespaceURI](class.dom-namespaceinfo.md#dom-namespaceinfo.props.namespaceuri);

public
[Dom\Element](class.dom-element.md)
[$element](class.dom-namespaceinfo.md#dom-namespaceinfo.props.element);

}

## Propriedades

prefix
:   O prefixo do namespace do atributo.

namespaceURI
:   O URI do namespace do atributo.

element
:   O elemento do qual tratam essas informações de namespace.

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
