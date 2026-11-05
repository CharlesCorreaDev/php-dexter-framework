# Verifica se um nó representa um comentário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.iscomment.php

---

# tidyNode::isComment

(PHP 5, PHP 7, PHP 8)

tidyNode::isComment — Verifica se um nó representa um comentário

### Descrição

public function **tidyNode::isComment**(): [bool](language.types.boolean.md)

Informa se o nó é um comentário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o nó for um comentário, **`false`** caso contrário.

### Examples

**Exemplo #1 Extraindo comentários de um documento HTML misto**

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
    if($node->isComment()) {
        echo "\n\n# nó de comentário #" . ++$GLOBALS['num'] . "\n";
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
# nó de comentário #1
<!-- Comentários -->
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
