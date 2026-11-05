# Verifica se o atributo existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.hasattribute.php

---

# DOMElement::hasAttribute

(PHP 5, PHP 7, PHP 8)

DOMElement::hasAttribute — Verifica se o atributo existe

### Descrição

public function **DOMElement::hasAttribute**([string](language.types.string.md) `$qualifiedName`): [bool](language.types.boolean.md)

Indica se o atributo com o nome `qualifiedName`
existe como membro do elemento.

### Parâmetros

`qualifiedName`
:   O nome do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [DOMElement::hasAttributeNS()](domelement.hasattributens.md) - Verifica se o atributo existe
- [DOMElement::getAttribute()](domelement.getattribute.md) - Retorna o valor do atributo
- [DOMElement::setAttribute()](domelement.setattribute.md) - Adiciona ou modifica um atributo existente
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
