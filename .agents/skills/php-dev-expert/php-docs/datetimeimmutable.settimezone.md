# Define o fuso horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.settimezone.php

---

# DateTimeImmutable::setTimezone

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::setTimezone — Define o fuso horário

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setTimezone() does not modify the object itself")]  
public function **DateTimeImmutable::setTimezone**([DateTimeZone](class.datetimezone.md) `$timezone`): [DateTimeImmutable](class.datetimeimmutable.md)

Retorna um novo objeto DateTimeImmutable com um novo fuso horário configurado.

### Parâmetros

`timezone`
:   Um objeto [DateTimeZone](class.datetimezone.md) representando o
    fuso horário desejado.

### Valor Retornado

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) modificado para
ligação de método. O ponto no tempo subjacente não é modificado quando
este médoto é chamado.

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::setTimeZone()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable('2000-01-01', new DateTimeZone('Pacific/Nauru'));
echo $date->format('Y-m-d H:i:sP') . "\n";

$newDate = $date->setTimezone(new DateTimeZone('Pacific/Chatham'));
echo $newDate->format('Y-m-d H:i:sP') . "\n";
?>
```

O exemplo acima produzirá:

```
2000-01-01 00:00:00+12:00
2000-01-01 01:45:00+13:45
```

### Veja também

- [DateTimeImmutable::getTimezone()](datetime.gettimezone.md) - Retorna o fuso horário correspondente a um DateTime informado
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
