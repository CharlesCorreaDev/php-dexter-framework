# Remove atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.removeattributenode.php

---

# DOMElement::removeAttributeNode

(PHP 5, PHP 7, PHP 8)

DOMElement::removeAttributeNode — Remove atributo

### Descrição

public function **DOMElement::removeAttributeNode**([DOMAttr](class.domattr.md) `$attr`): [DOMAttr](class.domattr.md)|[false](language.types.singleton.md)

Remove o atributo `attr` do elemento.

### Parâmetros

`attr`
:   O nó do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se o nó for somente leitura.

**`DOM_NOT_FOUND_ERR`**
:   Gerado se `attr` não for um atributo do elemento.

### Veja também

- [DOMElement::hasAttribute()](domelement.hasattribute.md) - Verifica se o atributo existe
- [DOMElement::getAttributeNode()](domelement.getattributenode.md) - Retorna o nó do atributo
- [DOMElement::setAttributeNode()](domelement.setattributenode.md) - Adiciona um novo nó de atributo ao elemento

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
