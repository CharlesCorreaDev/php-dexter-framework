# Retorna o nó do atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.getattributenode.php

---

# DOMElement::getAttributeNode

(PHP 5, PHP 7, PHP 8)

DOMElement::getAttributeNode — Retorna o nó do atributo

### Descrição

public function **DOMElement::getAttributeNode**([string](language.types.string.md) `$qualifiedName`): [DOMAttr](class.domattr.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[false](language.types.singleton.md)

Retorna o nó do atributo com o nome `qualifiedName` para o
elemento atual.

### Parâmetros

`qualifiedName`
:   O nome do atributo.

### Valor Retornado

O nó do atributo. Observe que, para declarações de espaço para nomes XML
(atributos `xmlns` e `xmlns:*`), uma
instância de [DOMNameSpaceNode](class.domnamespacenode.md) é retornada em vez de um
[DOMAttr](class.domattr.md).

### Veja também

- [DOMElement::hasAttribute()](domelement.hasattribute.md) - Verifica se o atributo existe
- [DOMElement::setAttributeNode()](domelement.setattributenode.md) - Adiciona um novo nó de atributo ao elemento
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
