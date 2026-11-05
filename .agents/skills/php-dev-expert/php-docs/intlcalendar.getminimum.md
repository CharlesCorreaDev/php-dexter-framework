# Obtém o mínimo global para um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getminimum.php

---

# IntlCalendar::getMinimum

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getMinimum — Obtém o mínimo global para um campo

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getMinimum**([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_minimum**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o mínimo global para um campo, neste calendário específico. Este valor
é menos ou igual ao retornado por
[IntlCalendar::getActualMinimum()](intlcalendar.getactualminimum.md), que por sua vez é
menor ou igual ao retornado por
[IntlCalendar::getGreatestMinimum()](intlcalendar.getgreatestminimum.md). Para o calendário
gregoriano, estas três funções sempre retornam o mesmo valor (para cada
campo).

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Um [int](language.types.integer.md) representando um valor para o campo
fornecido, na unidade do campo ou **`false`** em caso de falha.

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
