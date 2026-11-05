# Define se a interpretação de data/horário deve ser leniente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.setlenient.php

---

# IntlCalendar::setLenient

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::setLenient — Define se a interpretação de data/horário deve ser leniente

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::setLenient**([bool](language.types.boolean.md) `$lenient`): [true](language.types.singleton.md)

Estilo procedural

function **intlcal\_set\_lenient**([IntlCalendar](class.intlcalendar.md) `$calendar`, [bool](language.types.boolean.md) `$lenient`): [true](language.types.singleton.md)

Define se o calendário deve estar no ‘modo leniente’. Neste modo, alguns
valores fora dos limites para alguns campos são aceitos, com comportamento
similar ao da função [IntlCalendar::add()](intlcalendar.add.md) (isto é, o valor
transborda, carregando os campos mais significativos a cada vez que isso acontece). Se o
modo leniente estiver desabilitado, tais valores irão gerar um erro.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`lenient`
:   Use **`true`** para habilitar o modo leniente; **`false`** para desabilitar.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

Veja o exemplo em [IntlCalendar::isLenient()](intlcalendar.islenient.md).

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
