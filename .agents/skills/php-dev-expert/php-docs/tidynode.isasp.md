# Verifica se este nó é ASP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.isasp.php

---

# tidyNode::isAsp

(PHP 5, PHP 7, PHP 8)

tidyNode::isAsp — Verifica se este nó é ASP

### Descrição

public function **tidyNode::isAsp**(): [bool](language.types.boolean.md)

Informa se o nó atual é ASP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o nó for ASP, **`false`** caso contrário.

### Examples

**Exemplo #1 Extraindo código ASP de um documento HTML misto**

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
    if($node->isAsp()) {
        echo "\n\n# asp node #" . ++$GLOBALS['num'] . "\n";
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
# asp node #1
<%
  /* Código ASP */
  response.write("Olá, Mundo!")
%>
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
