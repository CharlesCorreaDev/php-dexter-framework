# Remove atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.removeattributens.php

---

# DOMElement::removeAttributeNS

(PHP 5, PHP 7, PHP 8)

DOMElement::removeAttributeNS — Remove atributo

### Descrição

public function **DOMElement::removeAttributeNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [void](language.types.void.md)

Remove o atributo `localName` no namespace `namespace` do elemento.

### Parâmetros

`namespace`
:   O URI do namespace.

`localName`
:   O nome local.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se o nó for somente leitura.

### Veja também

- [DOMElement::hasAttributeNS()](domelement.hasattributens.md) - Verifica se o atributo existe
- [DOMElement::getAttributeNS()](domelement.getattributens.md) - Retorna o valor do atributo
- [DOMElement::setAttributeNS()](domelement.setattributens.md) - Adiciona um novo atributo

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
