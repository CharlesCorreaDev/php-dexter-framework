# Serializa o documento como um arquivo HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-htmldocument.savehtmlfile.php

---

# Dom\HTMLDocument::saveHtmlFile

(PHP 8 >= 8.4.0)

Dom\HTMLDocument::saveHtmlFile — Serializa o documento como um arquivo HTML

### Descrição

public function **Dom\HTMLDocument::saveHtmlFile**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Serializa o documento como um arquivo HTML.

### Parâmetros

`filename`
:   O caminho para o arquivo que será gravado.

### Valor Retornado

O número de bytes escritos em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  `filename` for uma string vazia ou contiver algum
  byte nulo.

### Veja também

- [Dom\HTMLDocument::saveHtml()](dom-htmldocument.savehtml.md) - Serializa o documento como uma string HTML
- [Dom\HTMLDocument::saveXmlFile()](dom-htmldocument.savexmlfile.md) - Serializa o documento como um arquivo XML

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
