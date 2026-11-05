# Obtém o nó raiz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.getrootnode.php

---

# DOMNode::getRootNode

(PHP 8 >= 8.3.0)

DOMNode::getRootNode — Obtém o nó raiz

### Descrição

public function **DOMNode::getRootNode**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [DOMNode](class.domnode.md)

Obtém o nó raiz.

### Parâmetros

`options`
:   Este parâmetro ainda não tem efeito.

### Valor Retornado

Retorna o nó raiz.

### Examples

**Exemplo #1 Exemplo de **DOMNode::getRootNode()****

```
<?php

$dom = new DOMDocument();
$dom->loadXML('<?xml version="1.0"?><html><body/></html>');

var_dump($dom->documentElement->firstElementChild->getRootNode() === $dom);
?>
```

O exemplo acima produzirá:

```
bool(true)
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
