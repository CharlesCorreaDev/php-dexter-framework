# Retorna um novo objeto, com adição de dias, meses, anos, horas, minutos e segundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.add.php

---

# DateTimeImmutable::add

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::add — 
Retorna um novo objeto, com adição de dias, meses, anos, horas, minutos e segundos

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::add() does not modify the object itself")]  
public function **DateTimeImmutable::add**([DateInterval](class.dateinterval.md) `$interval`): [DateTimeImmutable](class.datetimeimmutable.md)

Cria um novo objeto [DateTimeImmutable](class.datetimeimmutable.md), e adiciona o
objeto [DateInterval](class.dateinterval.md) a ele, para representar
o novo valor.

### Parâmetros

`interval`
:   Um objeto [DateInterval](class.dateinterval.md)

### Valor Retornado

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) com os dados modificados.

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::add()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable('2000-01-01');
$newDate = $date->add(new DateInterval('P10D'));
echo $newDate->format('Y-m-d') . "\n";
?>
```

**Exemplo #2 Mais exemplos da função **DateTimeImmutable::add()****

```
<?php
$date = new DateTimeImmutable('2000-01-01');
$newDate = $date->add(new DateInterval('PT10H30S'));
echo $newDate->format('Y-m-d H:i:s') . "\n";

$date = new DateTimeImmutable('2000-01-01');
$newDate = $date->add(new DateInterval('P7Y5M4DT4H3M2S'));
echo $newDate->format('Y-m-d H:i:s') . "\n";
?>
```

O exemplo acima produzirá:

```
2000-01-01 10:00:30
2007-06-05 04:03:02
```

**Exemplo #3 Cuidado ao adicionar meses**

```
<?php
$date = new DateTimeImmutable('2000-12-31');
$interval = new DateInterval('P1M');

$newDate1 = $date->add($interval);
echo $newDate1->format('Y-m-d') . "\n";

$newDate2 = $newDate1->add($interval);
echo $newDate2->format('Y-m-d') . "\n";
?>
```

O exemplo acima produzirá:

```
2001-01-31
2001-03-03
```

### Veja também

- [DateTimeImmutable::sub()](datetimeimmutable.sub.md) - Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos
- [DateTimeImmutable::diff()](datetime.diff.md) - Retorna a diferença entre dois objetos DateTime
- [DateTimeImmutable::modify()](datetimeimmutable.modify.md) - Cria um novo objeto com seu timestamp modificado

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
