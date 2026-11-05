# Retorna todas as transições para o fuso horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimezone.gettransitions.php

---

# DateTimeZone::getTransitions

# timezone\_transitions\_get

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeZone::getTransitions -- timezone\_transitions\_get — Retorna todas as transições para o fuso horário

### Descrição

Estilo orientado a objetos

public function **DateTimeZone::getTransitions**([int](language.types.integer.md) `$timestampBegin` = **`PHP_INT_MIN`**, [int](language.types.integer.md) `$timestampEnd` = 2147483647): [array](language.types.array.md)|[false](language.types.singleton.md)

Estilo procedural

function [timezone\_transitions\_get](function.timezone-transitions-get.md)([DateTimeZone](class.datetimezone.md) `$object`, [int](language.types.integer.md) `$timestampBegin` = **`PHP_INT_MIN`**, [int](language.types.integer.md) `$timestampEnd` = 2147483647): [array](language.types.array.md)|[false](language.types.singleton.md)

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTimeZone](class.datetimezone.md)
    retornado por [timezone\_open()](function.timezone-open.md)

`timestampBegin`
:   Timestamp inicial.

`timestampEnd`
:   Timestamp final.

### Valor Retornado

Retorna um array numericamente indexado de
arrays de transições em caso de sucesso, ou **`false`** em caso de falha. Objetos
DataTimeZone do tipo 1 (deslocamento UTC) e tipo 2 (abreviações) não
contêm transições, e se tiverem este método chamado irão retornar
**`false`**.

Se o parâmetro `timestampBegin` for informado, a primeira entrada no
array de retorno irá contrer um elemento de transição no horário de
`timestampBegin`.

**Estrutura do Array de Transição**

| Key | Type | Description |
| --- | --- | --- |
| `ts` | [int](language.types.integer.md) | Timestamp Unix |
| `time` | [string](language.types.string.md) | string de horário **`DateTimeInterface::ISO8601_EXPANDED`** (PHP 8.2 e seguintes), ou **`DateTimeInterface::ISO8601`** (PHP 8.1 e anteriores) |
| `offset` | [int](language.types.integer.md) | Deslocamento UTC em segundos |
| `isdst` | [bool](language.types.boolean.md) | Se o horário de verão está ativo |
| `abbr` | [string](language.types.string.md) | Abreviação do fuso horário |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O valor padrão de `timestampEnd` foi alterado para 2147483647. Anteriormente era **`PHP_INT_MAX`**. |

### Examples

**Exemplo #1 Exemplo do método [timezone\_transitions\_get()](function.timezone-transitions-get.md)**

```
<?php
$timezone = new DateTimeZone("Europe/London");
$transitions = $timezone->getTransitions();
print_r(array_slice($transitions, 0, 3));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [ts] => -2147483648
            [time] => 1901-12-13T20:45:52+00:00
            [offset] => -75
            [isdst] =>
            [abbr] => LMT
        )

    [1] => Array
        (
            [ts] => 442304971
            [time] => 1847-12-01T00:01:15+00:00
            [offset] => 0
            [isdst] =>
            [abbr] => GMT
        )

    [2] => Array
        (
            [ts] => -1691964000
            [time] => 1916-05-21T02:00:00+00:00
            [offset] => 3600
            [isdst] => 1
            [abbr] => BST
        )

)
```

**Exemplo #2 Um exemplo da função [timezone\_transitions\_get()](function.timezone-transitions-get.md) com
o parâmetro `timestampBegin`**

```
<?php
$timezone = new DateTimeZone("Europe/London");
$transitions = $timezone->getTransitions(time());
print_r(array_slice($transitions, 0, 3));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [ts] => 1759058251
            [time] => 2025-09-28T11:17:31+00:00
            [offset] => 3600
            [isdst] => 1
            [abbr] => BST
        )

    [1] => Array
        (
            [ts] => 1761440400
            [time] => 2025-10-26T01:00:00+00:00
            [offset] => 0
            [isdst] =>
            [abbr] => GMT
        )

    [2] => Array
        (
            [ts] => 1774746000
            [time] => 2026-03-29T01:00:00+00:00
            [offset] => 3600
            [isdst] => 1
            [abbr] => BST
        )

)
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
