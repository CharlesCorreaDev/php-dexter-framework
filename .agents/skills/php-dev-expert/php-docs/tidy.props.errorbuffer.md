# Retorna avisos e erros que ocorreram ao analisar o documento especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.props.errorbuffer.php

---

# tidy::$errorBuffer

# tidy\_get\_error\_buffer

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::$errorBuffer -- tidy\_get\_error\_buffer — Retorna avisos e erros que ocorreram ao analisar o documento especificado

### Descrição

Estilo orientado a objetos (propriedade):

public ?[string](language.types.string.md) [$tidy->errorBuffer](tidy.props.errorbuffer.md);

Estilo procedural:

function **tidy\_get\_error\_buffer**([tidy](class.tidy.md) `$tidy`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna avisos e erros que ocorreram ao analisar o documento especificado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna o buffer de erro como uma string ou **`false`** se o buffer estiver vazio.

### Examples

**Exemplo #1 Exemplo de **tidy\_get\_error\_buffer()****

```
<?php
$html = '<p>paragraph</p>';

$tidy = tidy_parse_string($html);

echo tidy_get_error_buffer($tidy);
/* ou em programação orientada a objeto: */
echo $tidy->errorBuffer;
?>
```

O exemplo acima produzirá:

```
line 1 column 1 - Warning: missing <!DOCTYPE> declaration
line 1 column 1 - Warning: inserting missing 'title' element
```

### Veja também

- [tidy\_access\_count()](function.tidy-access-count.md) - Retorna o número de avisos de acessibilidade do Tidy encontrados para o documento especificado
- [tidy\_error\_count()](function.tidy-error-count.md) - Retorna o número de erros de Tidy encontrados para o documento especificado
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
