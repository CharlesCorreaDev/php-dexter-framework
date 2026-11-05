# Procura por todos os elementos com uma determinada tag name local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.getelementsbytagname.php

---

# DOMDocument::getElementsByTagName

(PHP 5, PHP 7, PHP 8)

DOMDocument::getElementsByTagName — Procura por todos os elementos com uma determinada tag name local

### Descrição

public function **DOMDocument::getElementsByTagName**([string](language.types.string.md) `$qualifiedName`): [DOMNodeList](class.domnodelist.md)

Esta função retorna uma nova instância da classe
[DOMNodeList](class.domnodelist.md) contendo todos os elementos com uma determinada
tag name local.

### Parâmetros

`qualifiedName`
:   O name local (sem namespace) da tag a ser correspondida. O valor especial `*`
    corresponde a todas as tags.

### Valor Retornado

Um novo objeto [DOMNodeList](class.domnodelist.md) contendo todos os
elementos correspondentes.

### Examples

**Exemplo #1 Exemplo Básico de Uso**

```
<?php
$xml = <<< XML
<?xml version="1.0" encoding="utf-8"?>
<books>
 <book>Patterns of Enterprise Application Architecture</book>
 <book>Design Patterns: Elements of Reusable Software Design</book>
 <book>Clean Code</book>
</books>
XML;

$dom = new DOMDocument;
$dom->loadXML($xml);
$books = $dom->getElementsByTagName('book');
foreach ($books as $book) {
    echo $book->nodeValue, PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
Patterns of Enterprise Application Architecture
Design Patterns: Elements of Reusable Software Design
Clean Code
```

### Veja também

- [DOMDocument::getElementsByTagNameNS()](domdocument.getelementsbytagnamens.md) - Procura por todos os elementos com uma determinada tag name em um namespace específico

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
