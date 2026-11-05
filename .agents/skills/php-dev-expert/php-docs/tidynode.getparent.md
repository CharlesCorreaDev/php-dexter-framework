# Retorna o nó pai do nó atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.getparent.php

---

# tidyNode::getParent

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

tidyNode::getParent — Retorna o nó pai do nó atual

### Descrição

public function **tidyNode::getParent**(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

Retorna o nó pai do nó atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [tidyNode](class.tidynode.md) se o nó tiver um pai, ou **`null`**
caso contrário.

### Examples

**Exemplo #1 Exemplo de **tidyNode::getParent()****

```
<?php

$html = <<< HTML
<html><head>
<?php echo '<title>Título</title>'; ?>
<#
  /* Código JSTE */
  alert('Olá, Mundo!');
#>
 </head>
 <body>
 Olá, Mundo!
 </body>
</html>

HTML;

$tidy = tidy_parse_string($html);
$num = 0;

$node = $tidy->html()->child[0]->child[0];

var_dump($node->getParent()->name);
?>
```

O exemplo acima produzirá:

```
string(4) "head"
```

### Veja também

- [tidyNode::getPreviousSibling()](tidynode.getprevioussibling.md) - Retorna o nó irmão anterior do nó atual
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
