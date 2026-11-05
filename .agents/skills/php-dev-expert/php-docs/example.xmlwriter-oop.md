# Trabalhando com a API Orientada a Objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/example.xmlwriter-oop.php

---

## Trabalhando com a API Orientada a Objeto

Este exemplo mostra como trabalhar com a API orientada a objetos do XMLWriter.

**Exemplo #1 Trabalhando com a API Orientada a Objeto**

```
<?php

$xw = new XMLWriter();
$xw->openMemory();
$xw->startDocument("1.0");
$xw->startElement("book");
$xw->text("example");
$xw->endElement();
$xw->endDocument();
echo $xw->outputMemory();
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<book>example</book>
```

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
