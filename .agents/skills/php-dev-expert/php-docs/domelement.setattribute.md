# Adiciona ou modifica um atributo existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.setattribute.php

---

# DOMElement::setAttribute

(PHP 5, PHP 7, PHP 8)

DOMElement::setAttribute — Adiciona ou modifica um atributo existente

### Descrição

public function **DOMElement::setAttribute**([string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value`): [DOMAttr](class.domattr.md)|[bool](language.types.boolean.md)

Define um atributo com o nome `qualifiedName` para o valor fornecido.
Se o atributo não existir, ele será criado.

### Parâmetros

`qualifiedName`
:   O nome do atributo.

`value`
:   O valor do atributo.

### Valor Retornado

O [DOMAttr](class.domattr.md) criado ou modificado, ou **`false`** se ocorrer um erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se o nó for somente leitura.

### Examples

**Exemplo #1 Setando um atributo**

```
<?php
$doc = new DOMDocument("1.0");
$node = $doc->createElement("para");
$newnode = $doc->appendChild($node);
$newnode->setAttribute("align", "left");
?>
```

### Veja também

- [DOMElement::hasAttribute()](domelement.hasattribute.md) - Verifica se o atributo existe
- [DOMElement::getAttribute()](domelement.getattribute.md) - Retorna o valor do atributo
- [DOMElement::removeAttribute()](domelement.removeattribute.md) - Remove atributo

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
