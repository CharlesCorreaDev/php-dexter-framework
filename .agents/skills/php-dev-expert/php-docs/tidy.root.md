# Retorna um objeto tidyNode que representa a raiz da árvore de análise do Tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.root.php

---

# tidy::root

# tidy\_get\_root

(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)

tidy::root -- tidy\_get\_root — Retorna um objeto [tidyNode](class.tidynode.md) que representa a raiz da árvore de análise do Tidy

### Descrição

Estilo orientado a objetos

public function **tidy::root**(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

Estilo procedural

function **tidy\_get\_root**([tidy](class.tidy.md) `$tidy`): [?](language.types.null.md)[tidyNode](class.tidynode.md)

Retorna um objeto [tidyNode](class.tidynode.md) que representa a
raiz da árvore de análise do Tidy.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna o objeto [tidyNode](class.tidynode.md).

### Examples

**Exemplo #1 Exemplo de **tidy::root()****

```
<?php

$html = <<< HTML
<html><body>

<p>paragraph</p>
<br/>

</body></html>
HTML;

$tidy = tidy_parse_string($html);
dump_nodes($tidy->root(), 1);

function dump_nodes($node, $indent) {

    if($node->hasChildren()) {
        foreach($node->child as $child) {
            echo str_repeat('.', $indent*2) . ($child->name ? $child->name : '"'.$child->value.'"'). "\n";

            dump_nodes($child, $indent+1);
        }
    }
}
?>
```

O exemplo acima produzirá:

```
..html
....head
......title
....body
......p
........"paragraph"
......br
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
