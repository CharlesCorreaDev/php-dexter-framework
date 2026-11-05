# Serializa o documento como uma string HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-htmldocument.savehtml.php

---

# Dom\HTMLDocument::saveHtml

(PHP 8 >= 8.4.0)

Dom\HTMLDocument::saveHtml — Serializa o documento como uma string HTML

### Descrição

public function **Dom\HTMLDocument::saveHtml**([?](language.types.null.md)[Dom\Node](class.dom-node.md) `$node` = **`null`**): [string](language.types.string.md)

Serializa o documento como uma string HTML.

### Parâmetros

`node`
:   O nó a serializar.
    Se não informado, o documento inteiro é serializado.

### Valor Retornado

A string do documento HTML serializado na codificação
atual do documento.

### Erros/Exceções

- Lança uma exceção **Dom\DOMException** com código
  **`Dom\WRONG_DOCUMENT_ERR`** se `node`
  for de outro documento.

### Veja também

- [Dom\HTMLDocument::saveHtmlFile()](dom-htmldocument.savehtmlfile.md) - Serializa o documento como um arquivo HTML
- [Dom\HTMLDocument::saveXml()](dom-htmldocument.savexml.md) - Serializa o documento como uma string XML

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
