# Adiciona valor ao campo sem transferir para campos mais significativos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.roll.php

---

# IntlCalendar::roll

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::roll — Adiciona valor ao campo sem transferir para campos mais significativos

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::roll**([int](language.types.integer.md) `$field`, [int](language.types.integer.md)|[bool](language.types.boolean.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_roll**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`, [int](language.types.integer.md)|[bool](language.types.boolean.md) `$value`): [bool](language.types.boolean.md)

Adiciona uma quantidade (com sinal) a um campo. A diferença em relação a
[IntlCalendar::add()](intlcalendar.add.md) é que quando o valor do campo
passar do limite, a função não transfere este transbordamento para campos mais significativos.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

`value`
:   A quantidade (com sinal) para adicionar ao campo, **`true`** para aumentar (adicionar
    `1`), ou **`false`** para reduzir (subtrair
    `1`).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::roll()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_PT');

$cal = new IntlGregorianCalendar(2013, 5 /* junho */, 30);

$cal->add(IntlCalendar::FIELD_DAY_OF_MONTH, 1);
var_dump(IntlDateFormatter::formatObject($cal)); // "01/07/2013, 00:00:00"

$cal->set(2013, 5 /* junho */, 30);
$cal->roll(IntlCalendar::FIELD_DAY_OF_MONTH, true); // soma +1
var_dump(IntlDateFormatter::formatObject($cal)); // "01/06/2013, 00:00:00"
```

O exemplo acima produzirá:

```
string(20) "01/07/2013, 00:00:00"
string(20) "01/06/2013, 00:00:00"
```

### Veja também

- [IntlCalendar::add()](intlcalendar.add.md) - Adiciona uma quantidade de tempo (com sinal) a um campo
- [IntlCalendar::set()](intlcalendar.set.md) - Define um campo de horário ou vários campos comuns de uma vez

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
