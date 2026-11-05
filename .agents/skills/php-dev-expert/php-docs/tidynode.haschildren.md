# Verifica se um nó tem filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.haschildren.php

---

# tidyNode::hasChildren

(PHP 5, PHP 7, PHP 8)

tidyNode::hasChildren — Verifica se um nó tem filhos

### Descrição

public function **tidyNode::hasChildren**(): [bool](language.types.boolean.md)

Informa se o nó tem filhos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o nó tiver filhos, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **tidyNode::hasChildren()****

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

// a tag 'head'
var_dump($tidy->html()->child[0]->hasChildren());

// o PHP dentro da tag 'head'
var_dump($tidy->html()->child[0]->child[0]->hasChildren());

?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
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
