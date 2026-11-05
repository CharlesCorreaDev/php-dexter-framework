# Move para o próximo nó no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.read.php

---

# XMLReader::read

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::read — Move para o próximo nó no documento

### Descrição

public function **XMLReader::read**(): [bool](language.types.boolean.md)

Move o cursor para o próximo nó no documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [XMLReader::moveToElement()](xmlreader.movetoelement.md) - Posiciona o cursor no elemento pai do atributo atual
- [XMLReader::moveToAttribute()](xmlreader.movetoattribute.md) - Move o cursor para um atributo nomeado
- [XMLReader::next()](xmlreader.next.md) - Move o cursor para o próximo nó pulando todas as subárvores

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
