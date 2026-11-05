# Obtém o valor máximo global para um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getmaximum.php

---

# IntlCalendar::getMaximum

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getMaximum — Obtém o valor máximo global para um campo

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getMaximum**([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_maximum**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o máximo global para um campo, neste calendário específico. Este valor
é maior ou igual ao retornado por
[IntlCalendar::getActualMaximum()](intlcalendar.getactualmaximum.md), que por usa vez
é maior ou igual ao retornado por
[IntlCalendar::getLeastMaximum()](intlcalendar.getleastmaximum.md).

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Um [int](language.types.integer.md) representando um valor de campo na unidade do
campo ou **`false`** em caso de falha.

### Veja também

- [IntlCalendar::getActualMaximum()](intlcalendar.getactualmaximum.md) - O valor máximo para um campo, considerando o horário atual do objeto
- [IntlCalendar::getLeastMaximum()](intlcalendar.getleastmaximum.md) - Obtém o menor máximo local para um campo
- [IntlCalendar::getMinimum()](intlcalendar.getminimum.md) - Obtém o mínimo global para um campo

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
