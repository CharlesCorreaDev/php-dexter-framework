# Obtém o comportamento ao lidar com o horário de relógio repetido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getrepeatedwalltimeoption.php

---

# IntlCalendar::getRepeatedWallTimeOption

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getRepeatedWallTimeOption — Obtém o comportamento ao lidar com o horário de relógio repetido

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getRepeatedWallTimeOption**(): [int](language.types.integer.md)

Estilo procedural

function **intlcal\_get\_repeated\_wall\_time\_option**([IntlCalendar](class.intlcalendar.md) `$calendar`): [int](language.types.integer.md)

Obtém a estratégia atual para lidar com horários de relógio que se repetem
toda vez que o relógio é atrasado durante o retorno de um horário de verão.
O valor padrão é **`IntlCalendar::WALLTIME_LAST`**.

Esta função requer a ICU 4.9 ou posterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Uma das constantes **`IntlCalendar::WALLTIME_FIRST`** ou
**`IntlCalendar::WALLTIME_LAST`**.

### Examples

**Exemplo #1 **IntlCalendar::getRepeatedWallTimeOption()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_BR');
ini_set('intl.error_level', E_WARNING);

//Em Lisboa, 27 de outubro às 02:00, o relógio volta 1 hora no tempo, de GMT+01 para GMT+00
$cal = new IntlGregorianCalendar(2013, 9 /* outubro */, 27, 1, 30);

var_dump($cal->getRepeatedWalltimeOption()); // 0 WALLTIME_LAST

$formatter = IntlDateFormatter::create(
    NULL,
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'UTC'
);
var_dump($formatter->format($cal->getTime() / 1000.));

$cal->setRepeatedWalltimeOption(IntlCalendar::WALLTIME_FIRST);
var_dump($cal->getRepeatedWalltimeOption()); // 1 WALLTIME_FIRST
$cal->set(IntlCalendar::FIELD_HOUR_OF_DAY, 1);

var_dump($formatter->format($cal->getTime() / 1000.));
```

O exemplo acima produzirá:

```
int(0)
string(69) "domingo, 27 de outubro de 2013 01:30:00 Horário Universal Coordenado"
int(1)
string(69) "domingo, 27 de outubro de 2013 00:30:00 Horário Universal Coordenado"
```

### Veja também

- [IntlCalendar::getSkippedWallTimeOption()](intlcalendar.getskippedwalltimeoption.md) - Obtém o comportamento para o horário de relógio saltado
- [IntlCalendar::setSkippedWallTimeOption()](intlcalendar.setskippedwalltimeoption.md) - Define o comportamento ao lidar com horário de relógio saltado ao entrar no horário de verão
- [IntlCalendar::setRepeatedWallTimeOption()](intlcalendar.setrepeatedwalltimeoption.md) - Define o comportamento ao lidar com horário de relógio repetido ao sair do horário de verão

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
