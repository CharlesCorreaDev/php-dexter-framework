# Adiciona um novo nó de atributo ao elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.setattributenode.php

---

# DOMElement::setAttributeNode

(PHP 5, PHP 7, PHP 8)

DOMElement::setAttributeNode — Adiciona um novo nó de atributo ao elemento

### Descrição

public function **DOMElement::setAttributeNode**([DOMAttr](class.domattr.md) `$attr`): [DOMAttr](class.domattr.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Adiciona um novo nó de atributo `attr` ao elemento.
Se um atributo com o mesmo nome já existir no elemento, esse atributo será substituído por `attr`.

### Parâmetros

`attr`
:   O nó de atributo.

### Valor Retornado

Retorna o atributo antigo se tiver sido substituído ou **`null`** se não houver atributo antigo.
Se ocorrer um erro de **`DOM_WRONG_DOCUMENT_ERR`**, e strictErrorChecking for **`false`**, **`false`** será retornado.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_WRONG_DOCUMENT_ERR`**
:   Gerado se `attr` pertencer a um documento diferente do elemento.

### Veja também

- [DOMElement::hasAttribute()](domelement.hasattribute.md) - Verifica se o atributo existe
- [DOMElement::getAttributeNode()](domelement.getattributenode.md) - Retorna o nó do atributo
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
