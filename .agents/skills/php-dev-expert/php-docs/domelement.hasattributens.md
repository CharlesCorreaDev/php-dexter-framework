# Verifica se o atributo existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.hasattributens.php

---

# DOMElement::hasAttributeNS

(PHP 5, PHP 7, PHP 8)

DOMElement::hasAttributeNS — 
Verifica se o atributo existe

### Descrição

public function **DOMElement::hasAttributeNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [bool](language.types.boolean.md)

Indica se o atributo no namespace `namespace`
com o nome `localName` existe como membro do elemento.

### Parâmetros

`namespace`
:   O URI do namespace.

`localName`
:   O nome local.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [DOMElement::hasAttribute()](domelement.hasattribute.md) - Verifica se o atributo existe
- [DOMElement::getAttributeNS()](domelement.getattributens.md) - Retorna o valor do atributo
- [DOMElement::setAttributeNS()](domelement.setattributens.md) - Adiciona um novo atributo
- [DOMElement::removeAttributeNS()](domelement.removeattributens.md) - Remove atributo

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
