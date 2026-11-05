# Recupera um nó especificado pelo nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnamednodemap.getnameditem.php

---

# DOMNamedNodeMap::getNamedItem

(PHP 5, PHP 7, PHP 8)

DOMNamedNodeMap::getNamedItem — 
Recupera um nó especificado pelo nome

### Descrição

public function **DOMNamedNodeMap::getNamedItem**([string](language.types.string.md) `$qualifiedName`): [?](language.types.null.md)[DOMNode](class.domnode.md)

Recupera um nó especificado pelo seu `nodeName`.

### Parâmetros

`qualifiedName`
:   O `nodeName` do nó a ser recuperado.

### Valor Retornado

Um nó (de qualquer tipo) com o `nodeName` especificado, ou
**`null`** se nenhum nó for encontrado.

### Examples

**Exemplo #1 Obtendo um atributo de um nó**

```
<?php
$doc = new DOMDocument;
$doc->load('examples/book.xml');

$id = $doc->firstChild->nextSibling->nextSibling->firstChild->nextSibling->attributes->getNamedItem('id');
?>
```

**Exemplo #2 Acessando atributos com sintaxe de array**

```
<?php
$doc = new DOMDocument;
$doc->load('examples/book.xml');

$id = $doc->firstChild->nextSibling->nextSibling->firstChild->nextSibling->attributes['id'];
?>
```

### Veja também

- [DOMNamedNodeMap::getNamedItemNS()](domnamednodemap.getnameditemns.md) - Recupera um nó especificado pelo nome local e URI do namespace

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
