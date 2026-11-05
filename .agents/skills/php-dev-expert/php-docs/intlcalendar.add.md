# Adiciona uma quantidade de tempo (com sinal) a um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.add.php

---

# IntlCalendar::add

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::add — Adiciona uma quantidade de tempo (com sinal) a um campo

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::add**([int](language.types.integer.md) `$field`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_add**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Adiciona uma quantidade de tempo com sinal a um campo. Adicionar uma quantidade positiva permite avançar no
tempo, mesmo se o valor numérico do campo diminua (por exemplo, ao trabalhar
com anos em datas AC).

Outros campos podem precisar de ajuste – por exemplo, adicionar um mês a 31
de janeiro irá resultar em 28 (ou 29) de fevereiro. Contrário ao que ocorre em
[IntlCalendar::roll()](intlcalendar.roll.md), quando um valor passa do limite, mais
campos significativos podem ser alterados. Por exemplo, adicionar um dia a 31 de
janeiro irá resultar em 1º de fevereiro, e não em 1º de janeiro.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

`value`
:   A quantidade com sinal a ser adicionada ao campo atual. Se a quantidade for positiva,
    o instantes de tempo será movido para a frente; se for negativa, o instante será
    movido para o passado. A unidade é implícita ao tipo do campo. Por exemplo,
    horas para **`IntlCalendar::FIELD_HOUR_OF_DAY`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::add()****

```
<?php
ini_set('intl.default_locale', 'fr_FR');
ini_set('date.timezone', 'UTC');

$cal = new IntlGregorianCalendar(2012, 0 /* janeiro */, 31);
echo IntlDateFormatter::formatObject($cal), "\n";

$cal->add(IntlCalendar::FIELD_MONTH, 1);
echo IntlDateFormatter::formatObject($cal), "\n";

$cal->add(IntlCalendar::FIELD_DAY_OF_MONTH, 1);
echo IntlDateFormatter::formatObject($cal), "\n";
```

O exemplo acima produzirá:

```
31 janv. 2012 00:00:00
29 févr. 2012 00:00:00
1 mars 2012 00:00:00
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
