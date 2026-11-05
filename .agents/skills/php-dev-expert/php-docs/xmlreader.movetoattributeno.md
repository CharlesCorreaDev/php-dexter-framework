# Move o cursor para um atributo pelo índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.movetoattributeno.php

---

# XMLReader::moveToAttributeNo

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::moveToAttributeNo — Move o cursor para um atributo pelo índice

### Descrição

public function **XMLReader::moveToAttributeNo**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Posiciona o cursor no atributo com base na sua posição.

### Parâmetros

`index`
:   A posição do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [XMLReader::moveToElement()](xmlreader.movetoelement.md) - Posiciona o cursor no elemento pai do atributo atual
- [XMLReader::moveToAttribute()](xmlreader.movetoattribute.md) - Move o cursor para um atributo nomeado
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
