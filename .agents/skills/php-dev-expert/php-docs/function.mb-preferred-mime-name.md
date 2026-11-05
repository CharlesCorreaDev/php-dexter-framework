# Obter uma string MIME charset

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-preferred-mime-name.php

---

# mb\_preferred\_mime\_name

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_preferred\_mime\_name — Obter uma string MIME charset

### Descrição

function **mb\_preferred\_mime\_name**([string](language.types.string.md) `$encoding`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém MIME charset [string](language.types.string.md) para uma codificação específica.

### Parâmetros

`encoding`
:   A codificação que está sendo verificada.

### Valor Retornado

A [string](language.types.string.md) contendo o conjunto de caracteres MIME (`charset`) para a codificação de caracteres
especificada em `encoding`,
ou **`false`** se nenhum conjunto de caracteres for preferido para a codificação informada em `encoding`.

### Examples

**Exemplo #1 Exemplo de **mb\_preferred\_mime\_name()****

```
<?php
$outputenc = "sjis-win";
mb_http_output($outputenc);
ob_start("mb_output_handler");
header("Content-Type: text/html; charset=" . mb_preferred_mime_name($outputenc));
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
