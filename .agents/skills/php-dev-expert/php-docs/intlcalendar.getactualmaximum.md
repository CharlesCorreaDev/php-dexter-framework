# O valor máximo para um campo, considerando o horário atual do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getactualmaximum.php

---

# IntlCalendar::getActualMaximum

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getActualMaximum — O valor máximo para um campo, considerando o horário atual do objeto

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getActualMaximum**([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_actual\_maximum**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o valor máximo relativo de um campo em relação ao horário atual. A semântica
exata varia por campo, mas em geral é o valor que
seria obtido se fosse definido o valor do campo para o
[menor máximo relativo](intlcalendar.getleastmaximum.md) para
o campo e fosse incrementado até alcançar o
[máximo global](intlcalendar.getmaximum.md) ou até que o valor do campo
retorne ao inicial, no qual o valor retornado seria o máximo global
ou o valor antes de retornar ao incial, respectivamente.

Por exemplo, no calendário gregoriano, o valor máximo real para o
[dia do
mês](class.intlcalendar.md#intlcalendar.constants.field-day-of-month) pode variar entre `28` e
`31`, dependendo do mês e do ano do horário atual.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Um número [int](language.types.integer.md) representando o valor máximo na unidade associada
ao parâmetro `field` informado ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getActualMaximum()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');

$cal = IntlCalendar::fromDateTime('2013-02-15');
var_dump($cal->getActualMaximum(IntlCalendar::FIELD_DAY_OF_MONTH)); //28

$cal->add(IntlCalendar::FIELD_EXTENDED_YEAR, -1);
var_dump($cal->getActualMaximum(IntlCalendar::FIELD_DAY_OF_MONTH)); //29
```

O exemplo acima produzirá:

```
int(28)
int(29)
```

### Veja também

- [IntlCalendar::getMaximum()](intlcalendar.getmaximum.md) - Obtém o valor máximo global para um campo
- [IntlCalendar::getLeastMaximum()](intlcalendar.getleastmaximum.md) - Obtém o menor máximo local para um campo
- [IntlCalendar::getActualMinimum()](intlcalendar.getactualminimum.md) - O valor mínimo para um campo, considerando o horário atual do objeto

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
