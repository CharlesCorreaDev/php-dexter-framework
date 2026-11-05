# Verifica se um nó representa texto (sem marcação)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.istext.php

---

# tidyNode::isText

(PHP 5, PHP 7, PHP 8)

tidyNode::isText — Verifica se um nó representa texto (sem marcação)

### Descrição

public function **tidyNode::isText**(): [bool](language.types.boolean.md)

Informa se o nó representa um texto (sem nenhuma marcação).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o nó representa um texto, **`false`** caso contrário.

### Examples

**Exemplo #1 Extraindo texto de um documento HTML misto**

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
    if($node->isText()) {
        echo "\n\n# nó de texto #" . ++$GLOBALS['num'] . "\n";
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
# nó de texto #1
Olá, Mundo!

# nó de texto #2
Fora do HTML
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
