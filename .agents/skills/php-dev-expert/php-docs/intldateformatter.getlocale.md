# Obtém a localidade usada pelo formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.getlocale.php

---

# IntlDateFormatter::getLocale

# datefmt\_get\_locale

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::getLocale -- datefmt\_get\_locale — Obtém a localidade usada pelo formatador

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getLocale**([int](language.types.integer.md) `$type` = **`ULOC_ACTUAL_LOCALE`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_get\_locale**([IntlDateFormatter](class.intldateformatter.md) `$formatter`, [int](language.types.integer.md) `$type` = **`ULOC_ACTUAL_LOCALE`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém a localidade usada pelo formatador.

### Parâmetros

`formatter`
:   O recurso do formatador

`type`
:   Pode-se escolher entre localidade válida e real (
    **`Locale::VALID_LOCALE`**,
    **`Locale::ACTUAL_LOCALE`**,
    respectivamente). O padrão é a localidade real.

### Valor Retornado

A localidade do formatador, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **datefmt\_get\_locale()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Localidade do formatador é: ' . datefmt_get_locale($fmt), "\n";
echo 'Primeira saída formatada é ' . datefmt_format($fmt, 0), "\n";

$fmt = datefmt_create(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Localidade do formatador é: ' . datefmt_get_locale($fmt), "\n";
echo 'Segunda saída formatada é ' . datefmt_format($fmt, 0), "\n";

?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Localidade do formatador é: ' . $fmt->getLocale(), "\n";
echo 'Primeira saída formatada é ' . $fmt->format(0), "\n";

$fmt = new IntlDateFormatter(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Localidade do formatador é: ' . $fmt->getLocale(), "\n";
echo 'Segunda saída formatada é ' . $fmt->format(0), "\n";

?>
```

O exemplo acima produzirá:

```
Localidade do formatador é: en
Primeira saída formatada é Wednesday, December 31, 1969 at 4:00:00 PM Pacific Standard Time
Localidade do formatador é: pt
Segunda saída formatada é quarta-feira, 31 de dezembro de 1969 16:00:00 Horário Padrão do Pacífico
```

### Veja também

- [datefmt\_create()](intldateformatter.create.md) - Cria um formatador de data

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
