# Retorna uma string representando a marcação Tidy analisada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tidy-get-output.php

---

# tidy\_get\_output

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy\_get\_output — Retorna uma string representando a marcação Tidy analisada

### Descrição

function **tidy\_get\_output**([tidy](class.tidy.md) `$tidy`): [string](language.types.string.md)

Obtém uma string com o html reparado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna a marcação Tidy analisada.

### Examples

**Exemplo #1 Exemplo de **tidy\_get\_output()****

```
<?php

$html = '<p>paragraph</i>';
$tidy = tidy_parse_string($html);

$tidy->cleanRepair();

echo tidy_get_output($tidy);
?>
```

O exemplo acima produzirá:

```
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title></title>
</head>
<body>
<p>paragraph</p>
</body>
</html>
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
