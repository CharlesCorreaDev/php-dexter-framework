# Retorna um nome de fuso horário através da abreviação e do deslocamento UTC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.timezone-name-from-abbr.php

---

# timezone\_name\_from\_abbr

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

timezone\_name\_from\_abbr — Retorna um nome de fuso horário através da abreviação e do deslocamento UTC

### Descrição

function **timezone\_name\_from\_abbr**([string](language.types.string.md) `$abbr`, [int](language.types.integer.md) `$utcOffset` = -1, [int](language.types.integer.md) `$isDST` = -1): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`abbr`
:   A abreviação do fuso horário.

`utcOffset`
:   Deslocamento em relação ao GMT em segundos. Sendo -1 o padrão, que
    significa que o primeiro fuso horário correspondente encontrado com `abbr`
    é retornado. Caso contrário o deslocamento é buscao, e caso não encontrado, o
    o primeiro fuso horário, com qualquer deslocamento, é retornado.

`isDST`
:   Indicador do horário de verão. O padrão é -1, e informa que
    tendo o fuso horário horário de verão, ou não, este não será
    levado em consideração na busca. Se configurado para 1, então
    `utcOffset` é utilizado como diferença
    no horário de verão; se 0, então `utcOffset`
    é utilizado sem a diferença do horário de verão. Se
    `abbr` não existir, o fuso horário será
    buscado exclusivamente pelo `utcOffset` e
    `isDST`.

### Valor Retornado

Retorna o fuso horário em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo da função **timezone\_name\_from\_abbr()****

```
<?php
echo timezone_name_from_abbr("CET") . "\n";
echo timezone_name_from_abbr("", 3600, 0) . "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
Europe/Berlin
Europe/Paris
```

### Veja também

- [timezone\_abbreviations\_list()](function.timezone-abbreviations-list.md) - Sinônimo de DateTimeZone::listAbbreviations

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
