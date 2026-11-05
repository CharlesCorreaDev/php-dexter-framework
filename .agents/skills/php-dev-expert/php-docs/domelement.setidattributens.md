# Declara que o atributo especificado pelo nome local e pelo URI do namespace é do tipo ID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.setidattributens.php

---

# DOMElement::setIdAttributeNS

(PHP 5, PHP 7, PHP 8)

DOMElement::setIdAttributeNS — Declara que o atributo especificado pelo nome local e pelo URI do namespace é do tipo ID

### Descrição

public function **DOMElement::setIdAttributeNS**([string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$qualifiedName`, [bool](language.types.boolean.md) `$isId`): [void](language.types.void.md)

Declara que o atributo especificado por `qualifiedName` e
`namespace` é do tipo ID.

### Parâmetros

`namespace`
:   O URI do namespace do atributo.

`qualifiedName`
:   O nome local do atributo, como `prefix:tagname`.

`isId`
:   Defina como **`true`** se deseja que `name` seja do tipo
    ID, **`false`** caso contrário.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se o nó estiver somente leitura.

**`DOM_NOT_FOUND_ERR`**
:   Gerado se `name` não for um atributo deste elemento.

### Veja também

- [DOMDocument::getElementById()](domdocument.getelementbyid.md) - Procura por um elemento com um determinado ID
- [DOMElement::setIdAttribute()](domelement.setidattribute.md) - Declara que o atributo especificado pelo nome é do tipo ID
- [DOMElement::setIdAttributeNode()](domelement.setidattributenode.md) - Declara que o atributo especificado pelo nó é do tipo ID

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
