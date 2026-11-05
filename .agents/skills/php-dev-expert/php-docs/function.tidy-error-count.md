# Retorna o número de erros de Tidy encontrados para o documento especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tidy-error-count.php

---

# tidy\_error\_count

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy\_error\_count — Retorna o número de erros de Tidy encontrados para o documento especificado

### Descrição

function **tidy\_error\_count**([tidy](class.tidy.md) `$tidy`): [int](language.types.integer.md)

Retorna o número de erros de Tidy encontrados para o documento especificado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna o número de erros.

### Examples

**Exemplo #1 Exemplo de **tidy\_error\_count()****

```
<?php
$html = '<p>test</i>
<bogustag>bogus</bogustag>';

$tidy = tidy_parse_string($html);

echo tidy_error_count($tidy) . "\n"; //1

echo $tidy->errorBuffer;
?>
```

O exemplo acima produzirá:

```
1
line 1 column 1 - Warning: missing <!DOCTYPE> declaration
line 1 column 8 - Warning: discarding unexpected </i>
line 2 column 1 - Error: <bogustag> is not recognized!
line 2 column 1 - Warning: discarding unexpected <bogustag>
line 2 column 16 - Warning: discarding unexpected </bogustag>
line 1 column 1 - Warning: inserting missing 'title' element
```

### Veja também

- [tidy\_access\_count()](function.tidy-access-count.md) - Retorna o número de avisos de acessibilidade do Tidy encontrados para o documento especificado
- [tidy\_warning\_count()](function.tidy-warning-count.md) - Retorna o número de avisos do Tidy encontrados para o documento especificado

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
