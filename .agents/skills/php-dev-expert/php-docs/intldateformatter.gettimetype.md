# Obtém o tipo de horário usado para o IntlDateFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.gettimetype.php

---

# IntlDateFormatter::getTimeType

# datefmt\_get\_timetype

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::getTimeType -- datefmt\_get\_timetype — Obtém o tipo de horário usado para o IntlDateFormatter

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getTimeType**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_get\_timetype**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tipo de horário usado pelo formatador.

### Parâmetros

`formatter`
:   O recurso do formatador.

### Valor Retornado

O valor do [tipo de horário](class.intldateformatter.md#intl.intldateformatter-constants) atual do formatador,
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **datefmt\_get\_timetype()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Tipo de horário do formatador é : ' . datefmt_get_timetype($fmt), "\n";
echo 'Primeira saída formatada com o tipo de horário é ' . datefmt_format($fmt, 0), "\n";

$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::SHORT,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Agora o tipo de horário do formatador é : ' . datefmt_get_timetype($fmt), "\n";
echo 'Segunda saída formatada com o tipo de horário é ' . datefmt_format($fmt, 0), "\n";

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
echo 'Tipo de horário do formatador é : ' . $fmt->getTimeType(), "\n";
echo 'Primeira saída formatada com o tipo de horário é ' . $fmt->format(0), "\n";

$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::SHORT,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Agora o tipo de horário do formatador é : ' . $fmt->getTimeType(), "\n";
echo 'Segunda saída formatada com o tipo de horário é ' . $fmt->format(0), "\n";

?>
```

O exemplo acima produzirá:

```
Tipo de horário do formatador é : 0
Primeira saída formatada com o tipo de horário é Wednesday, December 31, 1969 at 4:00:00 PM Pacific Standard Time
Agora o tipo de horário do formatador é : 3
Segunda saída formatada com o tipo de horário é Wednesday, December 31, 1969 at 4:00 PM
```

### Veja também

- [datefmt\_get\_datetype()](intldateformatter.getdatetype.md) - Obtém o tipo de data usado para o IntlDateFormatter
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
