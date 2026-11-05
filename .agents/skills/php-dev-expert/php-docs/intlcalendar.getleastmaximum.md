# Obtém o menor máximo local para um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getleastmaximum.php

---

# IntlCalendar::getLeastMaximum

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getLeastMaximum — Obtém o menor máximo local para um campo

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getLeastMaximum**([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_least\_maximum**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o menor máximo local para um campo. Deve ser um valor
menor ou igual ao retornado por
[IntlCalendar::getActualMaximum()](intlcalendar.getactualmaximum.md), que por usa vez é
menor ou igual ao retornado por
[IntlCalendar::getMaximum()](intlcalendar.getmaximum.md).

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Um número [int](language.types.integer.md) representando um valor de campo na unidade do
campo ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplos de máximos**

```
<?php
ini_set('date.timezone', 'UTC');
ini_set('intl.default_locale', 'it_IT');

$cal = new IntlGregorianCalendar(2013, 3 /* abril */, 6);
var_dump(
    $cal->getLeastMaximum(IntlCalendar::FIELD_DAY_OF_MONTH),  // 28
    $cal->getActualMaximum(IntlCalendar::FIELD_DAY_OF_MONTH), // 30
    $cal->getMaximum(IntlCalendar::FIELD_DAY_OF_MONTH)        // 31
);
```

O exemplo acima produzirá:

```
int(28)
int(30)
int(31)
```

### Veja também

- [IntlCalendar::getActualMaximum()](intlcalendar.getactualmaximum.md) - O valor máximo para um campo, considerando o horário atual do objeto
- [IntlCalendar::getMaximum()](intlcalendar.getmaximum.md) - Obtém o valor máximo global para um campo
- [IntlCalendar::getGreatestMinimum()](intlcalendar.getgreatestminimum.md) - Obtém o maior valor mínimo local para um campo

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
