# Verifica se um nó tem irmãos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidynode.hassiblings.php

---

# tidyNode::hasSiblings

(PHP 5, PHP 7, PHP 8)

tidyNode::hasSiblings — Verifica se um nó tem irmãos

### Descrição

public function **tidyNode::hasSiblings**(): [bool](language.types.boolean.md)

Informa se o nó tem irmãos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o nó tiver irmãos, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **tidyNode::hasSiblings()****

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

// a tag 'html'
var_dump($tidy->html()->hasSiblings());

// a tag 'head'
var_dump($tidy->html()->child[0]->hasSiblings());

?>
```

O exemplo acima produzirá:

```
bool(false)
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
