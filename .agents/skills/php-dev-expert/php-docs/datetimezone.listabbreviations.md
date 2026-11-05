# Retorna um array associativo contendo indicativo de horário de verão, deslocamento e nome do fuso horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimezone.listabbreviations.php

---

# DateTimeZone::listAbbreviations

# timezone\_abbreviations\_list

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeZone::listAbbreviations -- timezone\_abbreviations\_list — Retorna um array associativo contendo indicativo de horário de verão, deslocamento e nome do fuso horário

### Descrição

Estilo orientado a objetos

public static function **DateTimeZone::listAbbreviations**(): [array](language.types.array.md)

Estilo procedural

function [timezone\_abbreviations\_list](function.timezone-abbreviations-list.md)(): [array](language.types.array.md)

A lista de abreviações retornada inclui todo o uso histórico de
abreviações, o que pode levar a entradas corretas, porém confusas.
Também existem conflitos, já que `PST` é usado tanto nos EUA
como nas Filipinas.

A lista que esta função retora não é portanto adequada para construir
um array com opções para apresentar ao usuário para escolha de fusos horários.

> **Nota**:
>
> Os dados desta função são pré compilados por razões de desempenho, e não são atualizadas
> quado é usado um novo [» timezonedb](https://pecl.php.net/package/timezonedb).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o array de abreviações de fuso horário.

### Examples

**Exemplo #1 Exemplo da função [timezone\_abbreviations\_list()](function.timezone-abbreviations-list.md)**

```
<?php
$timezone_abbreviations = DateTimeZone::listAbbreviations();
print_r($timezone_abbreviations["acst"]);
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [dst] =>
            [offset] => 34200
            [timezone_id] => Australia/Adelaide
        )

    [1] => Array
        (
            [dst] =>
            [offset] => 34200
            [timezone_id] => Australia/Broken_Hill
        )

    [2] => Array
        (
            [dst] =>
            [offset] => 34200
            [timezone_id] => Australia/Darwin
        )

    [3] => Array
        (
            [dst] =>
            [offset] => 34200
            [timezone_id] => Australia/North
        )

    [4] => Array
        (
            [dst] =>
            [offset] => 34200
            [timezone_id] => Australia/South
        )

    [5] => Array
        (
            [dst] =>
            [offset] => 34200
            [timezone_id] => Australia/Yancowinna
        )

)
```

### Veja também

- [timezone\_identifiers\_list()](function.timezone-identifiers-list.md) - Sinônimo de DateTimeZone::listIdentifiers

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
