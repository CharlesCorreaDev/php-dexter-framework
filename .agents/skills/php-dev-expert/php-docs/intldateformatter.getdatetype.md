# Obtém o tipo de data usado para o IntlDateFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.getdatetype.php

---

# IntlDateFormatter::getDateType

# datefmt\_get\_datetype

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::getDateType -- datefmt\_get\_datetype — Obtém o tipo de data usado para o IntlDateFormatter

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getDateType**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_get\_datetype**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tipo de data usado pelo formatador.

### Parâmetros

`formatter`
:   O recurso do formatador.

### Valor Retornado

O valor de [tipo de data](class.intldateformatter.md#intl.intldateformatter-constants) atual do formatador,
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **datefmt\_get\_datetype()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Tipo de data do formatador é: ' . datefmt_get_datetype($fmt);
echo 'A primeira saída formatada é ' . datefmt_format($fmt, 0);

$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::SHORT,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Agora o tipo de data do formatador é: ' . datefmt_get_datetype($fmt);
echo 'A segunda saída formatada com o tipo de data é ' . datefmt_format($fmt, 0);

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
echo 'Tipo de data do formatador é: ' . $fmt->getDateType();
echo 'A primeira saída formatada é ' . $fmt->format(0);
$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::SHORT,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'Agora o tipo de data do formatador é: ' . $fmt->getDateType();
echo 'A segunda saída formatada com o tipo de data é ' . $fmt->format(0);

?>
```

O exemplo acima produzirá:

```
Tipo de data do formatador é: 0
A primeira saída formatada é Wednesday, December 31, 1969 4:00:00 PM PT
Agora o tipo de data do formatador é: 2
A segunda saída formatada com o tipo de data é 12/31/69 4:00:00 PM PT
```

### Veja também

- [datefmt\_get\_timetype()](intldateformatter.gettimetype.md) - Obtém o tipo de horário usado para o IntlDateFormatter
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
