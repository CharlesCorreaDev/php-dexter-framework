# Remove um filho da lista de filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.removechild.php

---

# DOMNode::removeChild

(PHP 5, PHP 7, PHP 8)

DOMNode::removeChild — 
Remove um filho da lista de filhos

### Descrição

public function **DOMNode::removeChild**([DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

Esta função remove um filho da lista de filhos.

### Parâmetros

`child`
:   O filho removido.

### Valor Retornado

Se o filho puder ser removido, a função retorna o antigo filho ou **`false`** em caso de erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se este nó for somente leitura.

**`DOM_NOT_FOUND_ERR`**
:   Gerado se `child` não for um filho deste nó.

### Examples

O exemplo a seguir excluirá o elemento `chapter` do nosso documento XML.

**Exemplo #1 Removendo um filho**

```
<?php

$doc = new DOMDocument;
$doc->load('examples/book-docbook.xml');

$book = $doc->documentElement;

// recuperamos o capítulo e o removemos do livro
$chapter = $book->getElementsByTagName('chapter')->item(0);
$oldchapter = $book->removeChild($chapter);

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE book PUBLIC "-//OASIS//DTD DocBook XML V4.1.2//EN"
          "http://www.oasis-open.org/docbook/xml/4.1.2/docbookx.dtd">
<book id="listing">
 <title>My lists</title>

</book>
```

### Veja também

- [DOMChildNode::remove()](domchildnode.remove.md) - Remove o nó
- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMNode::replaceChild()](domnode.replacechild.md) - Substitui um filho

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
