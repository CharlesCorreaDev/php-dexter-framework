# Move o cursor para um atributo nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.movetoattribute.php

---

# XMLReader::moveToAttribute

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::moveToAttribute — Move o cursor para um atributo nomeado

### Descrição

public function **XMLReader::moveToAttribute**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Posiciona o cursor no atributo nomeado.

### Parâmetros

`name`
:   O nome do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [XMLReader::moveToElement()](xmlreader.movetoelement.md) - Posiciona o cursor no elemento pai do atributo atual
- [XMLReader::moveToAttributeNo()](xmlreader.movetoattributeno.md) - Move o cursor para um atributo pelo índice
- [XMLReader::moveToAttributeNs()](xmlreader.movetoattributens.md) - Move o cursor para um atributo nomeado
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
