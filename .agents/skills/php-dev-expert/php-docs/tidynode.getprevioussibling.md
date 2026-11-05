# Retorna o nó irmão anterior do nó atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.getprevioussibling.php

---

# tidyNode::getPreviousSibling

(PHP 8 >= 8.4.0)

tidyNode::getPreviousSibling — Retorna o nó irmão anterior do nó atual

### Descrição

public function **tidyNode::getPreviousSibling**(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

Retorna o nó irmão anterior do nó atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [tidyNode](class.tidynode.md) se o nó tiver um irmão anterior, ou **`null`**
caso contrário.

### Examples

**Exemplo #1 Exemplo de **tidyNode::getPreviousSibling()****

```
<?php

$html = <<< HTML
<html>
 <head>
 </head>
 <body>
  <p>Hello</p><p>World</p>
 </body>
</html>

HTML;

$tidy = tidy_parse_string($html);

$node = $tidy->body();
var_dump($node->child[1]->getPreviousSibling()->value);

?>
```

O exemplo acima produzirá:

```
string(13) "<p>Hello</p>
"
```

### Veja também

- [tidyNode::getParent()](tidynode.getparent.md) - Retorna o nó pai do nó atual
- [tidyNode::getNextSibling()](tidynode.getnextsibling.md) - Retorna o próximo nó irmão do nó atual

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
