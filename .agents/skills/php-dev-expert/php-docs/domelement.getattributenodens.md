# Retorna o nó do atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.getattributenodens.php

---

# DOMElement::getAttributeNodeNS

(PHP 5, PHP 7, PHP 8)

DOMElement::getAttributeNodeNS — 
Retorna o nó do atributo

### Descrição

public function **DOMElement::getAttributeNodeNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [DOMAttr](class.domattr.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md)

Retorna o nó do atributo no namespace `namespace`
com o nome local `localName` para o nó atual.

### Parâmetros

`namespace`
:   O URI do namespace.

`localName`
:   O nome local.

### Valor Retornado

O nó do atributo. Observe que, para declarações de espaço para nomes XML
(atributos `xmlns` e `xmlns:*`), uma
instância de [DOMNameSpaceNode](class.domnamespacenode.md) é retornada em vez de um
objeto [DOMAttr](class.domattr.md).

### Veja também

- [DOMElement::hasAttributeNS()](domelement.hasattributens.md) - Verifica se o atributo existe
- [DOMElement::setAttributeNodeNS()](domelement.setattributenodens.md) - Adiciona um novo nó de atributo ao elemento
- [DOMElement::removeAttributeNode()](domelement.removeattributenode.md) - Remove atributo

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
