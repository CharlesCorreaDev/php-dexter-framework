# Obtém o comportamento para o horário de relógio saltado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getskippedwalltimeoption.php

---

# IntlCalendar::getSkippedWallTimeOption

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getSkippedWallTimeOption — Obtém o comportamento para o horário de relógio saltado

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getSkippedWallTimeOption**(): [int](language.types.integer.md)

Estilo procedural

function **intlcal\_get\_skipped\_wall\_time\_option**([IntlCalendar](class.intlcalendar.md) `$calendar`): [int](language.types.integer.md)

Obtém a estratégia atual para lidar com horários de relógio saltados
quando o relógio é adiantado durante a transição para o horário de verão.
O valor padrão é **`IntlCalendar::WALLTIME_LAST`**.

O calendário precisa ser [leniente](intlcalendar.setlenient.md) para que esta opção
tenha algum efeito, caso contrário a tentativa de definir um horário não existente causará um
erro.

Esta função requer a ICU 4.9 ou posterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Uma das constantes **`IntlCalendar::WALLTIME_FIRST`**,
**`IntlCalendar::WALLTIME_LAST`** ou
**`IntlCalendar::WALLTIME_NEXT_VALID`**.

### Examples

**Exemplo #1 **IntlCalendar::getSkippedWallTimeOption()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_BR');
ini_set('intl.error_level', E_WARNING);

//Em Lisboa, no dia 31 de março de 2013 à 01:00, o relógio é adiantado 1 hora, de GMT+00 para GMT+01
$cal = new IntlGregorianCalendar(2013, 2 /* março */, 31, 1, 30);

var_dump(
    $cal->isLenient(),               // true
    $cal->getSkippedWalltimeOption() // 0 WALLTIME_LAST
);

$formatter = IntlDateFormatter::create(
    NULL,
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'UTC'
);
var_dump($formatter->format($cal->getTime() / 1000));

$cal->setSkippedWallTimeOption(IntlCalendar::WALLTIME_FIRST);
var_dump($cal->getSkippedWalltimeOption()); // 1 WALLTIME_FIRST
$cal->set(IntlCalendar::FIELD_HOUR_OF_DAY, 1);

var_dump($formatter->format($cal->getTime() / 1000));

$cal->setSkippedWallTimeOption(IntlCalendar::WALLTIME_NEXT_VALID);
var_dump($cal->getSkippedWalltimeOption()); // 2 WALLTIME_NEXT_VALID
$cal->set(IntlCalendar::FIELD_HOUR_OF_DAY, 1);

var_dump($formatter->format($cal->getTime() / 1000));
```

O exemplo acima produzirá:

```
bool(true)
int(0)
string(68) "domingo, 31 de março de 2013 01:30:00 Horário Universal Coordenado"
int(1)
string(68) "domingo, 31 de março de 2013 00:30:00 Horário Universal Coordenado"
int(2)
string(68) "domingo, 31 de março de 2013 01:00:00 Horário Universal Coordenado"
```

### Veja também

- [IntlCalendar::getRepeatedWallTimeOption()](intlcalendar.getrepeatedwalltimeoption.md) - Obtém o comportamento ao lidar com o horário de relógio repetido
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
