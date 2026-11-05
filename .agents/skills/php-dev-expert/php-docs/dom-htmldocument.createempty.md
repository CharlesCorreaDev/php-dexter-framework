# Cria um documento HTML vazio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-htmldocument.createempty.php

---

# Dom\HTMLDocument::createEmpty

(PHP 8 >= 8.4.0)

Dom\HTMLDocument::createEmpty — Cria um documento HTML vazio

### Descrição

public static function **Dom\HTMLDocument::createEmpty**([string](language.types.string.md) `$encoding` = "UTF-8"): [Dom\HTMLDocument](class.dom-htmldocument.md)

Cria um documento HTML vazio sem nenhum elemento.

### Parâmetros

`encoding`
:   A codificação de caracteres do documento, usada para serialização ao
    chamar os métodos de salvamento.

### Valor Retornado

Um documento HTML vazio.

### Examples

**Exemplo #1 Exemplo de **Dom\HTMLDocument::createEmpty()****

Cria um documento vazio e o serializa.

```
<?php
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->saveHtml());
?>
```

O exemplo acima produzirá:

```
string(0) ""
```

### Veja também

- [Dom\HTMLDocument::createFromString()](dom-htmldocument.createfromstring.md) - Analisa um documento HTML a partir de uma string
- [Dom\HTMLDocument::createFromFile()](dom-htmldocument.createfromfile.md) - Analisa um documento HTML a partir de um arquivo

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
