# Verifica se um nó é um nó de elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.ishtml.php

---

# tidyNode::isHtml

(PHP 5, PHP 7, PHP 8)

tidyNode::isHtml — Verifica se um nó é um nó de elemento

### Descrição

public function **tidyNode::isHtml**(): [bool](language.types.boolean.md)

Informa se o nó é um nó de elemento, mas não o nó raiz do documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o nó for um nó de elemento, mas não o nó raiz do documento, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.24, 7.4.12 | Esta função foi corrigida para ter um comportamento razoável. Anteriormente, quase todos os nós eram relatados como sendo um nó HTML. |

### Examples

**Exemplo #1 Extraindo código HTML de um documento HTML misto**

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
    if($node->isHtml()) {
        echo "\n\n# nó html #" . ++$GLOBALS['num'] . "\n";
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
# nó html #1
<html>
<head>
<?php echo '<title>Título</title>'; ?><#
  /* Código JSTE */
  alert('Olá, Mundo!');
#>
<title></title>
</head>
<body>
<?php
  // Código PHP
  echo 'Olá, Mundo!';
?><%
  /* Código ASP */
  response.write("Olá, Mundo!")
%><!-- Comentários -->
Olá, Mundo!Fora do HTML
</body>
</html>

# nó html #2
<head>
<?php echo '<title>Título</title>'; ?><#
  /* Código JSTE */
  alert('Olá, Mundo!');
#>
<title></title>
</head>

# nó html #3
<title></title>

# nó html #4
<body>
<?php
  // Código PHP
  echo 'Olá, Mundo!';
?><%
  /* Código ASP */
  response.write("Olá, Mundo!")
%><!-- Comentários -->
Olá, Mundo!Fora do HTML
</body>
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
