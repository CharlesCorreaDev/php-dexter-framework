# Obtem o fuso horário do formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.gettimezone.php

---

# IntlDateFormatter::getTimeZone

# datefmt\_get\_timezone

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0)

IntlDateFormatter::getTimeZone -- datefmt\_get\_timezone — Obtem o fuso horário do formatador

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getTimeZone**(): [IntlTimeZone](class.intltimezone.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_get\_timezone**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [IntlTimeZone](class.intltimezone.md)|[false](language.types.singleton.md)

Retorna um objeto [IntlTimeZone](class.intltimezone.md) representando o
fuso horário que será usado por este objeto para formatar datas e horários. Ao
formatar objetos [IntlCalendar](class.intlcalendar.md) e
[DateTime](class.datetime.md) com esta classe
[IntlDateFormatter](class.intldateformatter.md), o fuso horário usado será o
retornado por este método, e não o associado com os objetos sendo
formatados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O objeto [IntlTimeZone](class.intltimezone.md)
associado ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplos de **IntlDateFormatter::getTimeZone()****

```
<?php

$madrid = IntlDateFormatter::create(NULL, NULL, NULL, 'Europe/Madrid');
$lisbon = IntlDateFormatter::create(NULL, NULL, NULL, 'Europe/Lisbon');

var_dump($madrid->getTimezone());
echo $madrid->getTimezone()->getDisplayName(
        false, IntlTimeZone::DISPLAY_GENERIC_LOCATION, "en_US"), "\n";
echo $lisbon->getTimeZone()->getId(), "\n";
//O id também pode ser obtido com ->getTimezoneId()
echo $lisbon->getTimeZoneId(), "\n";
```

O exemplo acima produzirá:

```
object(IntlTimeZone)#4 (4) {
  ["valid"]=>
  bool(true)
  ["id"]=>
  string(13) "Europe/Madrid"
  ["rawOffset"]=>
  int(3600000)
  ["currentOffset"]=>
  int(7200000)
}
Spain Time
Europe/Lisbon
Europe/Lisbon
```

### Veja também

- [IntlDateFormatter::getTimeZoneId()](intldateformatter.gettimezoneid.md) - Obtém o identificador de fuso horário usado para o IntlDateFormatter
- [IntlDateFormatter::setTimeZone()](intldateformatter.settimezone.md) - Define o fuso horário do formatador
- [IntlTimeZone](class.intltimezone.md)

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
