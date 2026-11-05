# Retorna o fuso horário correspondente a um DateTime informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.gettimezone.php

---

# DateTimeInterface::getTimezone

# DateTimeImmutable::getTimezone

# DateTime::getTimezone

# date\_timezone\_get

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeInterface::getTimezone -- DateTimeImmutable::getTimezone -- DateTime::getTimezone -- date\_timezone\_get — Retorna o fuso horário correspondente a um DateTime informado

### Descrição

Estilo orientado a objetos

public function **DateTimeInterface::getTimezone**(): [DateTimeZone](class.datetimezone.md)|[false](language.types.singleton.md)

public function **DateTimeImmutable::getTimezone**(): [DateTimeZone](class.datetimezone.md)|[false](language.types.singleton.md)

public function **DateTime::getTimezone**(): [DateTimeZone](class.datetimezone.md)|[false](language.types.singleton.md)

Estilo procedural

function [date\_timezone\_get](function.date-timezone-get.md)([DateTimeInterface](class.datetimeinterface.md) `$object`): [DateTimeZone](class.datetimezone.md)|[false](language.types.singleton.md)

Retorna o fuso horário de um DateTime informado

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md)

### Valor Retornado

Retorna um objeto [DateTimeZone](class.datetimezone.md) em caso de sucesso
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo do método **DateTime::getTimezone()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable("now", new DateTimeZone('Europe/London'));
$tz = $date->getTimezone();
echo $tz->getName();
```

O exemplo acima produzirá:

```
Europe/London
```

Estilo procedural

```
<?php
$date = date_create("now", timezone_open('Europe/London'));
$tz = date_timezone_get($date);
echo timezone_name_get($tz);
```

O exemplo acima produzirá:

```
Europe/London
```

### Veja também

- [DateTime::setTimezone()](datetime.settimezone.md) - Define o fuso horário de um objeto DateTime

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
