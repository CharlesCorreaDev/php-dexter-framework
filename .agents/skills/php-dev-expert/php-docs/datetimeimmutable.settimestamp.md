# Define a data e o horário com base em um timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.settimestamp.php

---

# DateTimeImmutable::setTimestamp

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::setTimestamp — Define a data e o horário com base em um timestamp Unix

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setTimestamp() does not modify the object itself")]  
public function **DateTimeImmutable::setTimestamp**([int](language.types.integer.md) `$timestamp`): [DateTimeImmutable](class.datetimeimmutable.md)

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) construído a partir do
antigo, com a data e o horário configurados com base em um timestamp Unix.

### Parâmetros

`timestamp`
:   Timestamp Unix representando a data e horário.
    Configurar timestamps fora dos limites de [int](language.types.integer.md) é possível usando
    [DateTimeImmutable::modify()](datetimeimmutable.modify.md) com o formato `@`.

### Valor Retornado

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) com os dados modificados.

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::setTimestamp()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable();
echo $date->format('U = Y-m-d H:i:s') . "\n";

$newDate = $date->setTimestamp(1171502725);
echo $newDate->format('U = Y-m-d H:i:s') . "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
1272508903 = 2010-04-28 22:41:43
1171502725 = 2007-02-14 20:25:25
```

### Veja também

- [DateTimeImmutable::getTimestamp()](datetime.gettimestamp.md) - Obtém o timestamp Unix
- [DateTimeImmutable::setMicrosecond()](datetimeimmutable.setmicrosecond.md) - Define a parte de microssegundos do horário

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
