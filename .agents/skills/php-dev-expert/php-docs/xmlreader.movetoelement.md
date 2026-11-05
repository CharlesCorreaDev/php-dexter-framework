# Posiciona o cursor no elemento pai do atributo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.movetoelement.php

---

# XMLReader::moveToElement

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::moveToElement — Posiciona o cursor no elemento pai do atributo atual

### Descrição

public function **XMLReader::moveToElement**(): [bool](language.types.boolean.md)

Move o cursor para o elemento pai do atributo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se for bem sucedido e **`false`** se falhar ou se não estiver posicionado em um
atributo quando este método for chamado.

### Veja também

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
