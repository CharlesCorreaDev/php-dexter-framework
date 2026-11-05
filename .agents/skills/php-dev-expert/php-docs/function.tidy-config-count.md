# Retorna o número de erros de configuração do Tidy encontrados para o documento especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tidy-config-count.php

---

# tidy\_config\_count

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy\_config\_count — Retorna o número de erros de configuração do Tidy encontrados para o documento especificado

### Descrição

function **tidy\_config\_count**([tidy](class.tidy.md) `$tidy`): [int](language.types.integer.md)

Retorna o número de erros encontrados na configuração do
`tidy` especificado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna o número de erros.

### Examples

**Exemplo #1 Exemplo de **tidy\_config\_count()****

```
<?php
$html = '<p>test</I>';

$config = array('doctype' => 'bogus');

$tidy = tidy_parse_string($html, $config);

/* Isso gera 1, porque 'bogus' não é um doctype válido */
echo tidy_config_count($tidy);
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
