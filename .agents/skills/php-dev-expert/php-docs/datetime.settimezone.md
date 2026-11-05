# Define o fuso horário de um objeto DateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.settimezone.php

---

# DateTime::setTimezone

# date\_timezone\_set

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTime::setTimezone -- date\_timezone\_set — Define o fuso horário de um objeto DateTime

### Descrição

Estilo orientado a objetos

public function **DateTime::setTimezone**([DateTimeZone](class.datetimezone.md) `$timezone`): [DateTime](class.datetime.md)

Estilo procedural

function [date\_timezone\_set](function.date-timezone-set.md)([DateTime](class.datetime.md) `$object`, [DateTimeZone](class.datetimezone.md) `$timezone`): [DateTime](class.datetime.md)

Define um novo fuso horário a um objeto ([object](language.types.object.md)) [DateTime](class.datetime.md).

Equivalente a [DateTimeImmutable::setTimezone()](datetimeimmutable.settimezone.md) mas funciona com
[DateTime](class.datetime.md).

A versão procedural usa o objeto [DateTime](class.datetime.md) como
seu primeiro argumento.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`timezone`
:   Um objeto [DateTimeZone](class.datetimezone.md) que representa o
    fuso horário desejado.

### Valor Retornado

Retorna o objeto da classe [DateTime](class.datetime.md) para ligação de métodos. O
ponto no tempo subjacente não é modificado quando este método é chamado.

### Examples

**Exemplo #1 Exemplo do método **DateTime::setTimeZone()****

Estilo orientado a objetos

```
<?php
$date = new DateTime('2000-01-01', new DateTimeZone('Pacific/Nauru'));
echo $date->format('Y-m-d H:i:sP') . "\n";

$date->setTimezone(new DateTimeZone('Pacific/Chatham'));
echo $date->format('Y-m-d H:i:sP') . "\n";
```

O exemplo acima produzirá:

```
2000-01-01 00:00:00+12:00
2000-01-01 01:45:00+13:45
```

Estilo procedural

```
<?php
$date = date_create('2000-01-01', timezone_open('Pacific/Nauru'));
echo date_format($date, 'Y-m-d H:i:sP') . "\n";

date_timezone_set($date, timezone_open('Pacific/Chatham'));
echo date_format($date, 'Y-m-d H:i:sP') . "\n";
```

O exemplo acima produzirá:

```
2000-01-01 00:00:00+12:00
2000-01-01 01:45:00+13:45
```

### Veja também

- [DateTimeImmutable::setTimezone()](datetimeimmutable.settimezone.md) - Define o fuso horário
- [DateTime::getTimezone()](datetime.gettimezone.md) - Retorna o fuso horário correspondente a um DateTime informado
- [DateTimeZone::\_\_construct()](datetimezone.construct.md) - Cria um novo objeto DateTimeZone

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
