# Define o comportamento ao lidar com horário de relógio repetido ao sair do horário de verão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.setrepeatedwalltimeoption.php

---

# IntlCalendar::setRepeatedWallTimeOption

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::setRepeatedWallTimeOption — Define o comportamento ao lidar com horário de relógio repetido ao sair do horário de verão

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::setRepeatedWallTimeOption**([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

Estilo procedural

function **intlcal\_set\_repeated\_wall\_time\_option**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

Define a estratégia atual para lidar com horários de relógio que se repetem
ao voltar o relógio no final do horário de verão.
O valor padrão é **`IntlCalendar::WALLTIME_LAST`** (considera
o instante após a transição). O outro valor possível é
**`IntlCalendar::WALLTIME_FIRST`** (considera o instante que
ocorre antes da transição).

Esta função requer a ICU 4.9 ou posterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`option`
:   Uma das constantes **`IntlCalendar::WALLTIME_FIRST`** ou
    **`IntlCalendar::WALLTIME_LAST`**.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

Veja o exemplo em
[IntlCalendar::getRepeatedWallTimeOption()](intlcalendar.getrepeatedwalltimeoption.md).

### Veja também

- [intlCalendar::getRepeatedWallTimeOption()](intlcalendar.getrepeatedwalltimeoption.md) - Obtém o comportamento ao lidar com o horário de relógio repetido
- [intlCalendar::setSkippedWallTimeOption()](intlcalendar.setskippedwalltimeoption.md) - Define o comportamento ao lidar com horário de relógio saltado ao entrar no horário de verão
- [intlCalendar::getSkippedWallTimeOption()](intlcalendar.getskippedwalltimeoption.md) - Obtém o comportamento para o horário de relógio saltado

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
