# Obtém o maior valor mínimo local para um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getgreatestminimum.php

---

# IntlCalendar::getGreatestMinimum

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getGreatestMinimum — Obtém o maior valor mínimo local para um campo

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getGreatestMinimum**([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_greatest\_minimum**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Returns o maior mínimo local para um campo. Este deverá ser um valor
maior ou igual ao retornado por
[IntlCalendar::getActualMinimum()](intlcalendar.getactualminimum.md), que por sua vez é
maior ou igual ao retornado por
[IntlCalendar::getMinimum()](intlcalendar.getminimum.md). Todas estas três funções
retornam o mesmo valor para o calendário gregoriano.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Um número [int](language.types.integer.md) representando um valor de campo, na unidade do
campo, ou **`false`** em caso de falha.

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
