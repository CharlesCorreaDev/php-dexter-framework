# Verifica se outro calendário é igual exceto pelo horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.isequivalentto.php

---

# IntlCalendar::isEquivalentTo

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::isEquivalentTo — Verifica se outro calendário é igual exceto pelo horário

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::isEquivalentTo**([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_is\_equivalent\_to**([IntlCalendar](class.intlcalendar.md) `$calendar`, [IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

Retorna se este objeto e o objeto informado são equivalentes para todos os propósitos
exceto pelo horário definido neles. As localidades não precisam corresponder, desde que
nenhuma mudança no comportamento resulte em diferenças. Isto inclui o [fuso horário](intlcalendar.gettimezone.md), se
o [modo leniente](intlcalendar.islenient.md) está definido,
as configurações de horários de relógio [repetidos](intlcalendar.getrepeatedwalltimeoption.md)
e [saltados](intlcalendar.getskippedwalltimeoption.md),
os [dias da semana onde o final de semana
inicia e termina](intlcalendar.getdayofweektype.md) e os [horários onde tais transições
ocorrem](intlcalendar.getweekendtransition.md). A comparação também pode incluir outras configurações específicas de calendário, tal como
o instante de transição do calendário juliano para o gregoriano.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`other`
:   O outro calendário com o qual a comparação será realizada.

### Valor Retornado

Assumindo que não haja erros de argumentos, retorna **`true`** se os calendários forem
equivalentes exceto possivelmente pelo horário definido neles.

### Examples

**Exemplo #1 **IntlCalendar::isEquivalentTo()****

```
<?php
$cal1 = IntlCalendar::createInstance('Europe/Lisbon', 'pt_BR');
$cal2 = IntlCalendar::createInstance('Europe/Lisbon', 'en_US');
$cal2->clear();

var_dump($cal1->isEquivalentTo($cal2)); // true

$cal3 = IntlCalendar::createInstance('Europe/Lisbon', 'es_ES');
var_dump($cal1->isEquivalentTo($cal3)); // false
var_dump($cal1->getFirstDayOfWeek(),    // 1 (domingo)
$cal3->getFirstDayOfWeek());            // 2 (segunda-feira)
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
int(1)
int(2)
```

### Veja também

- [IntlCalendar::equals()](intlcalendar.equals.md) - Compara horários de dois objetos IntlCalendar para igualidade

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
