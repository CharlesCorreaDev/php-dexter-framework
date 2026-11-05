# Serializa o documento como uma string XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-htmldocument.savexml.php

---

# Dom\HTMLDocument::saveXml

(PHP 8 >= 8.4.0)

Dom\HTMLDocument::saveXml — Serializa o documento como uma string XML

### Descrição

public function **Dom\HTMLDocument::saveXml**([?](language.types.null.md)[Dom\Node](class.dom-node.md) `$node` = **`null`**, [int](language.types.integer.md) `$options` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Serializa o documento como uma string XML.

### Parâmetros

`node`
:   O nó a serializar.
    Se não informado, o documento inteiro é serializado.

`options`
:   Opções Adicionais.
    As opções **`LIBXML_NOEMPTYTAG`**
    e **`LIBXML_NOXMLDECL`** são suportadas.
    Antes do PHP 8.3.0, apenas a opção **`LIBXML_NOEMPTYTAG`**
    era suportada.

### Valor Retornado

A string do documento XML serializado na codificação
atual do documento ou **`false`** em caso de falha.

### Erros/Exceções

- Lança uma exceção **Dom\DOMException** com código
  **`Dom\WRONG_DOCUMENT_ERR`** se `node`
  for de outro documento.

### Veja também

- [Dom\HTMLDocument::saveXmlFile()](dom-htmldocument.savexmlfile.md) - Serializa o documento como um arquivo XML
- **Dom\XMLDocument::saveHtml()**

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
