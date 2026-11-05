# Move o cursor para um atributo nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.movetoattributens.php

---

# XMLReader::moveToAttributeNs

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::moveToAttributeNs — Move o cursor para um atributo nomeado

### Descrição

public function **XMLReader::moveToAttributeNs**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

Posiciona o cursor no atributo nomeado no namespace especificado.

### Parâmetros

`name`
:   O nome local.

`namespace`
:   O URI do namespace.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [XMLReader::moveToElement()](xmlreader.movetoelement.md) - Posiciona o cursor no elemento pai do atributo atual
- [XMLReader::moveToAttribute()](xmlreader.movetoattribute.md) - Move o cursor para um atributo nomeado
- [XMLReader::moveToAttributeNo()](xmlreader.movetoattributeno.md) - Move o cursor para um atributo pelo índice
- [XMLReader::moveToFirstAttribute()](xmlreader.movetofirstattribute.md) - Posiciona o cursor no primeiro atributo

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
