# Serializa o documento como um arquivo XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-htmldocument.savexmlfile.php

---

# Dom\HTMLDocument::saveXmlFile

(PHP 8 >= 8.4.0)

Dom\HTMLDocument::saveXmlFile — Serializa o documento como um arquivo XML

### Descrição

public function **Dom\HTMLDocument::saveXmlFile**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

Serializa o documento como um arquivo XML.

### Parâmetros

`filename`
:   O caminho para o arquivo que será gravado.

`options`
:   Opções Adicionais.
    As opções **`LIBXML_NOEMPTYTAG`**
    e **`LIBXML_NOXMLDECL`** são suportadas.
    Antes do PHP 8.3.0, apenas a opção **`LIBXML_NOEMPTYTAG`**
    era suportada.

### Valor Retornado

O número de bytes escritos em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  `filename` for uma string vazia ou contiver algum
  byte nulo.

### Veja também

- [Dom\HTMLDocument::saveXml()](dom-htmldocument.savexml.md) - Serializa o documento como uma string XML
- [Dom\HTMLDocument::saveHtmlFile()](dom-htmldocument.savehtmlfile.md) - Serializa o documento como um arquivo HTML

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
