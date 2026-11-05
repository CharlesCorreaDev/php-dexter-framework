# Verifica se um campo está definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.isset.php

---

# IntlCalendar::isSet

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::isSet — Verifica se um campo está definido

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::isSet**([int](language.types.integer.md) `$field`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_is\_set**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`): [bool](language.types.boolean.md)

Retorna se um campo está definido (o oposto de [clear](intlcalendar.clear.md)). Campos definidos têm prioridade
sobre campos indefinidos e sobre seus valores padrão quando a data e horário estão sendo
calculados. Campos definidos mais tarde têm prioridade sobre campos definidos mais cedo.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Assumindo que não haja erros de argumentos, retorna **`true`** se o campo estiver definido.

### Examples

Veja o exemplo em [IntlCalendar::clear()](intlcalendar.clear.md).

### Veja também

- [IntlCalendar::clear()](intlcalendar.clear.md) - Limpa um campo ou todos os campos
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
