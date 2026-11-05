# Verifica se um nó é PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.isphp.php

---

# tidyNode::isPhp

(PHP 5, PHP 7, PHP 8)

tidyNode::isPhp — Verifica se um nó é PHP

### Descrição

public function **tidyNode::isPhp**(): [bool](language.types.boolean.md)

Informa se o nó é PHP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o nó atual for código PHP, **`false`** caso contrário.

### Examples

**Exemplo #1 Extraindo código PHP de um documento HTML misto**

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

<?php
  // Código PHP
  echo 'Olá, Mundo!';
?>

<%
  /* Código ASP */
  response.write("Olá, Mundo!")
%>

<!-- Comentários -->
Olá, Mundo!
</body></html>
Fora do HTML
HTML;

$tidy = tidy_parse_string($html);
$num = 0;

get_nodes($tidy->html());

function get_nodes($node) {

    // verifica se o nó atual é do tipo solicitado
    if($node->isPhp()) {
        echo "\n\n# nó php #" . ++$GLOBALS['num'] . "\n";
        echo $node->value;
    }

    // verifica se o nó atual tem filhos
    if($node->hasChildren()) {
        foreach($node->child as $child) {
            get_nodes($child);
        }
    }
}

?>
```

O exemplo acima produzirá:

```
# nó php #1
<?php echo '<title>Título</title>'; ?>

# nó php #2
<?php
  // Código PHP
  echo 'Olá, Mundo!';
?>
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
