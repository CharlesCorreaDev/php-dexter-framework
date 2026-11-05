# Recupera um nó especificado pelo índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnodelist.item.php

---

# DOMNodeList::item

(PHP 5, PHP 7, PHP 8)

DOMNodeList::item — 
Recupera um nó especificado pelo índice

### Descrição

public function **DOMNodeList::item**([int](language.types.integer.md) `$index`): [DOMElement](class.domelement.md)|[DOMNode](class.domnode.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md)

Recupera um nó especificado pelo índice `index` dentro do
objeto [DOMNodeList](class.domnodelist.md).

**Dica**

Se for necessário saber o número de nós na coleção, use
a propriedade `length` do
objeto [DOMNodeList](class.domnodelist.md).

### Parâmetros

`index`
:   Índice do nó na coleção.

### Valor Retornado

O nó na posição `index` na
[DOMNodeList](class.domnodelist.md), ou **`null`** se esse não for um
índice válido.

### Examples

**Exemplo #1 Percorrendo todas as entradas da tabela**

```
<?php
$doc = new DOMDocument;
$doc->load('examples/book-docbook.xml');

$items = $doc->getElementsByTagName('entry');

for ($i = 0; $i < $items->length; $i++) {
    echo $items->item($i)->nodeValue . "\n";
}
?>
```

**Exemplo #2 Acessando item com sintaxe de array**

```
<?php
$doc = new DOMDocument;
$doc->load('examples/book-docbook.xml');

$items = $doc->getElementsByTagName('entry');

for ($i = 0; $i < $items->length; $i++) {
    echo $items[$i]->nodeValue . "\n";
}

?>
```

**Exemplo #3 Navegando pelos itens com [`foreach`](control-structures.foreach.md)**

```
<?php
$doc = new DOMDocument;
$doc->load('examples/book-docbook.xml');

$items = $doc->getElementsByTagName('entry');

foreach ($items as $item) {
    echo $item->nodeValue . "\n";
}
?>
```

O exemplo acima produzirá:

```
Title
Author
Language
ISBN
The Grapes of Wrath
John Steinbeck
en
0140186409
The Pearl
John Steinbeck
en
014017737X
Samarcande
Amine Maalouf
fr
2253051209
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
