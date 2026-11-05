# Remove atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.removeattribute.php

---

# DOMElement::removeAttribute

(PHP 5, PHP 7, PHP 8)

DOMElement::removeAttribute — Remove atributo

### Descrição

public function **DOMElement::removeAttribute**([string](language.types.string.md) `$qualifiedName`): [bool](language.types.boolean.md)

Remove o atributo com o nome `qualifiedName` do elemento.

### Parâmetros

`qualifiedName`
:   O nome do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se o nó for somente leitura.

### Veja também

- [DOMElement::hasAttribute()](domelement.hasattribute.md) - Verifica se o atributo existe
- [DOMElement::getAttribute()](domelement.getattribute.md) - Retorna o valor do atributo
- [DOMElement::setAttribute()](domelement.setattribute.md) - Adiciona ou modifica um atributo existente

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
