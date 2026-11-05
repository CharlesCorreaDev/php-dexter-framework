# A classe DOMNameSpaceNode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domnamespacenode.php

---

# A classe DOMNameSpaceNode

(PHP 5, PHP 7, PHP 8)

## Resumo da classe

class ****DOMNameSpaceNode****
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$nodeName](class.domnamespacenode.md#domnamespacenode.props.nodename);

public
readonly
?[string](language.types.string.md)
[$nodeValue](class.domnamespacenode.md#domnamespacenode.props.nodevalue);

public
readonly
[int](language.types.integer.md)
[$nodeType](class.domnamespacenode.md#domnamespacenode.props.nodetype);

public
readonly
[string](language.types.string.md)
[$prefix](class.domnamespacenode.md#domnamespacenode.props.prefix);

public
readonly
?[string](language.types.string.md)
[$localName](class.domnamespacenode.md#domnamespacenode.props.localname);

public
readonly
?[string](language.types.string.md)
[$namespaceURI](class.domnamespacenode.md#domnamespacenode.props.namespaceuri);

public
readonly
[bool](language.types.boolean.md)
[$isConnected](class.domnamespacenode.md#domnamespacenode.props.isconnected);

public
readonly
?[DOMDocument](class.domdocument.md)
[$ownerDocument](class.domnamespacenode.md#domnamespacenode.props.ownerdocument);

public
readonly
?[DOMNode](class.domnode.md)
[$parentNode](class.domnamespacenode.md#domnamespacenode.props.parentnode);

public
readonly
?[DOMElement](class.domelement.md)
[$parentElement](class.domnamespacenode.md#domnamespacenode.props.parentelement);

/\* Métodos \*/

public function [\_\_sleep](domnamespacenode.sleep.md)(): [array](language.types.array.md)

public function [\_\_wakeup](domnamespacenode.wakeup.md)(): [void](language.types.void.md)

}

## Propriedades

nodeName
:   O nome qualificado deste nó.

nodeValue
:   O URI do namespace declarado por este nó, ou **`null`** se o namespace estiver vazio.

nodeType
:   O tipo do nó. Neste caso, retorna
    [**`XML_NAMESPACE_DECL_NODE`**](dom.constants.md).

prefix
:   O prefixo de namespace declarado por este nó.

localName
:   A parte local do nome qualificado deste nó.

namespaceURI
:   O URI do namespace declarado por este nó, ou **`null`** se não estiver especificado.

isConnected
:   Se o nó está conectado a um documento.

ownerDocument
:   O objeto [DOMDocument](class.domdocument.md) associado a este nó,
    ou **`null`** se este nó for um [DOMDocument](class.domdocument.md).

parentNode
:   O pai deste nó.
    Se não houver tal nó, isso retorna **`null`**.

parentElement
:   O elemento pai deste nó.
    Se não houver tal elemento, isso retorna **`null`**.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | As propriedades [DOMNameSpaceNode::$parentElement](class.domnamespacenode.md#domnamespacenode.props.parentelement) e [DOMNameSpaceNode::$isConnected](class.domnamespacenode.md#domnamespacenode.props.isconnected) foram adicionadas. |

## Índice

- [DOMNameSpaceNode::\_\_sleep](domnamespacenode.sleep.md) — Proíbe a serialização a menos que métodos de serialização estejam implementados em uma subclasse
- [DOMNameSpaceNode::\_\_wakeup](domnamespacenode.wakeup.md) — Proíbe a desserialização a menos que métodos de desserialização estejam implementados em uma subclasse

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
