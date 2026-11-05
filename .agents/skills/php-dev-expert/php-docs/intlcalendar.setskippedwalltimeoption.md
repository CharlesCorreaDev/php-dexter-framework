# Define o comportamento ao lidar com horário de relógio saltado ao entrar no horário de verão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.setskippedwalltimeoption.php

---

# IntlCalendar::setSkippedWallTimeOption

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::setSkippedWallTimeOption — Define o comportamento ao lidar com horário de relógio saltado ao entrar no horário de verão

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::setSkippedWallTimeOption**([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

Estilo procedural

function **intlcal\_set\_skipped\_wall\_time\_option**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

Define a estratégia atual para lidar com horários de relógio que são saltados
ao adiantar o relógio no início do horário de verão.
O valor padrão é **`IntlCalendar::WALLTIME_LAST`** (considera
como o mesmo instante do tempo em que o horário do relógio é uma hora
a mais). Valores alternativos são
**`IntlCalendar::WALLTIME_FIRST`** (mesmo instante daquele
com horário de relógio com uma hora a menos) e
**`IntlCalendar::WALLTIME_NEXT_VALID`** (mesmo instante em
que o horário de verão inicia).

Isto afeta apenas o instante representado pelo calendário (como reportado por
[IntlCalendar::getTime()](intlcalendar.gettime.md)), os valores de campo não serão
re-escritos de acordo.

O calendário precisa estar em modo [leniente](intlcalendar.setlenient.md) para que esta opção tenha
algum efeito, caso contrário a tentativa de se definir um horário não existente irá causar um
erro.

Esta função requer a ICU 4.9 ou posterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`option`
:   Uma das constantes **`IntlCalendar::WALLTIME_FIRST`**,
    **`IntlCalendar::WALLTIME_LAST`** ou
    **`IntlCalendar::WALLTIME_NEXT_VALID`**.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

Veja o exemplo em
[IntlCalendar::getSkippedWallTimeOption()](intlcalendar.getskippedwalltimeoption.md).

### Veja também

- [intlCalendar::getSkippedWallTimeOption()](intlcalendar.getskippedwalltimeoption.md) - Obtém o comportamento para o horário de relógio saltado
- [intlCalendar::setRepeatedWallTimeOption()](intlcalendar.setrepeatedwalltimeoption.md) - Define o comportamento ao lidar com horário de relógio repetido ao sair do horário de verão
- [intlCalendar::getRepeatedWallTimeOption()](intlcalendar.getrepeatedwalltimeoption.md) - Obtém o comportamento ao lidar com o horário de relógio repetido

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
