# O valor mínimo para um campo, considerando o horário atual do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getactualminimum.php

---

# IntlCalendar::getActualMinimum

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getActualMinimum — O valor mínimo para um campo, considerando o horário atual do objeto

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getActualMinimum**([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_actual\_minimum**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o valor mínimo relativo de um campo em relação ao horário atual. A semântica
exata varia por campo, mas em geral é o valor que
seria obtido se fosse definido o valor do campo para o
[maior mínimo relativo](intlcalendar.getgreatestminimum.md)
para o campo e fosse decrementado até alcançar o
[mínimo global](intlcalendar.getminimum.md) ou até que o valor do campo
retorne ao final da escala, no qual o valor retornado seria o mínimo global
ou o valor antes de retornar ao final da escala, respectivamente.

Para o calendário gregoriano, será sempre o mesmo que
[IntlCalendar::getMinimum()](intlcalendar.getminimum.md).

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Um número [int](language.types.integer.md) representando o valor mínimo na unidade do
campo ou **`false`** em caso de falha.

### Veja também

- [IntlCalendar::getMinimum()](intlcalendar.getminimum.md) - Obtém o mínimo global para um campo
- [IntlCalendar::getGreatestMinimum()](intlcalendar.getgreatestminimum.md) - Obtém o maior valor mínimo local para um campo
- [IntlCalendar::getActualMaximum()](intlcalendar.getactualmaximum.md) - O valor máximo para um campo, considerando o horário atual do objeto

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
