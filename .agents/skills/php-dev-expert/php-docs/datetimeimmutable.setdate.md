# Define a data

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.setdate.php

---

# DateTimeImmutable::setDate

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::setDate — Define a data

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setDate() does not modify the object itself")]  
public function **DateTimeImmutable::setDate**([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`): [DateTimeImmutable](class.datetimeimmutable.md)

Retorna um novo objeto DateTimeImmutable com a data atual do
objeto DateTimeImmutable configurado com a data fornecida.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`year`
:   Ano da data.

`month`
:   Mês da data.

`day`
:   Dia da data.

### Valor Retornado

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) com os dados modificados.

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::setDate()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable();
$newDate = $date->setDate(2001, 2, 3);
echo $newDate->format('Y-m-d');
```

O exemplo acima produzirá:

```
2001-02-03
```

**Exemplo #2 Valores que excedem os limites são transferidos para a escala imediatamente superior**

```
<?php
$date = new DateTimeImmutable();

$newDate = $date->setDate(2001, 2, 28);
echo $newDate->format('Y-m-d') . "\n";

$newDate = $date->setDate(2001, 2, 29);
echo $newDate->format('Y-m-d') . "\n";

$newDate = $date->setDate(2001, 14, 3);
echo $newDate->format('Y-m-d') . "\n";
```

O exemplo acima produzirá:

```
2001-02-28
2001-03-01
2002-02-03
```

### Veja também

- [DateTimeImmutable::setISODate()](datetimeimmutable.setisodate.md) - Define a data ISO
- [DateTimeImmutable::setTime()](datetimeimmutable.settime.md) - Define um horário

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
