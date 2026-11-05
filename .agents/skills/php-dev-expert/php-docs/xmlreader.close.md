# Fecha a entrada XMLReader

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.close.php

---

# XMLReader::close

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::close — Fecha a entrada XMLReader

### Descrição

public function **XMLReader::close**(): [true](language.types.singleton.md)

Fecha a entrada que o objeto XMLReader está analisando no momento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [XMLReader::open()](xmlreader.open.md) - Define o URI que contém o XML a ser analisado
- [XMLReader::XML()](xmlreader.xml.md) - Define os dados contendo o XML a ser analisado

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
