# Posiciona o cursor no próximo atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.movetonextattribute.php

---

# XMLReader::moveToNextAttribute

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::moveToNextAttribute — Posiciona o cursor no próximo atributo

### Descrição

public function **XMLReader::moveToNextAttribute**(): [bool](language.types.boolean.md)

Move o cursor para o próximo atributo se estiver posicionado em um atributo ou
move para o primeiro atributo se estiver posicionado em um elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [XMLReader::moveToElement()](xmlreader.movetoelement.md) - Posiciona o cursor no elemento pai do atributo atual
- [XMLReader::moveToAttribute()](xmlreader.movetoattribute.md) - Move o cursor para um atributo nomeado
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
