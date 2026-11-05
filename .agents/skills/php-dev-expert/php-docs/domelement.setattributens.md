# Adiciona um novo atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.setattributens.php

---

# DOMElement::setAttributeNS

(PHP 5, PHP 7, PHP 8)

DOMElement::setAttributeNS — Adiciona um novo atributo

### Descrição

public function **DOMElement::setAttributeNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

Define um atributo com namespace `namespace` e
nome `qualifiedName` para o valor fornecido. Se o atributo
não existir, ele será criado.

### Parâmetros

`namespace`
:   O URI do namespace.

`qualifiedName`
:   O nome qualificado do atributo, como`prefix:tagname`.

`value`
:   O valor do atributo.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se o nó for somente leitura.

**`DOM_NAMESPACE_ERR`**
:   Gerado se `qualifiedName` for um nome qualificado mal formado,
    ou se `qualifiedName` tiver um prefixo e
    `namespace` for **`null`**.

### Veja também

- [DOMElement::hasAttributeNS()](domelement.hasattributens.md) - Verifica se o atributo existe
- [DOMElement::getAttributeNS()](domelement.getattributens.md) - Retorna o valor do atributo
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
