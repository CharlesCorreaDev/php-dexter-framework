# Define a data ISO

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.setisodate.php

---

# DateTimeImmutable::setISODate

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::setISODate — Define a data ISO

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setISODate() does not modify the object itself")]  
public function **DateTimeImmutable::setISODate**([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$week`, [int](language.types.integer.md) `$dayOfWeek` = 1): [DateTimeImmutable](class.datetimeimmutable.md)

Retorna um novo objeto DateTimeImmutable com a data configurada de acordo com
o padrão ISO 8601 - usa semanas e deslocamentos de dias no lugar de datas específicas.

### Parâmetros

`year`
:   Ano da data.

`week`
:   Semana da data.

`dayOfWeek`
:   Posição em relação ao primeiro dia da semana.

### Valor Retornado

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) com os dados modificados.

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::setISODate()****

Estilo orientado a objetos

```
<?php

$date = new DateTimeImmutable();

$newDate = $date->setISODate(2008, 2);
echo $newDate->format('Y-m-d') . "\n";

$newDate = $date->setISODate(2008, 2, 7);
echo $newDate->format('Y-m-d') . "\n";
```

O exemplo acima produzirá:

```
2008-01-07
2008-01-13
```

Estilo procedural

```
<?php

$date = date_create();

date_isodate_set($date, 2008, 2);
echo date_format($date, 'Y-m-d') . "\n";

date_isodate_set($date, 2008, 2, 7);
echo date_format($date, 'Y-m-d') . "\n";
```

O exemplo acima produzirá:

```
2008-01-07
2008-01-13
```

**Exemplo #2 Valores que excedem os limites são transferidos para a escala imediatamente superior**

```
<?php

$date = new DateTimeImmutable();

$newDate = $date->setISODate(2008, 2, 7);
echo $newDate->format('Y-m-d') . "\n";

$newDate = $date->setISODate(2008, 2, 8);
echo $newDate->format('Y-m-d') . "\n";

$newDate = $date->setISODate(2008, 53, 7);
echo $newDate->format('Y-m-d') . "\n";
```

O exemplo acima produzirá:

```
2008-01-13
2008-01-14
2009-01-04
```

**Exemplo #3 Para encontrar o mês em que uma semana se localiza**

```
<?php

$date = new DateTimeImmutable();
$newDate = $date->setISODate(2008, 14);
echo $newDate->format('n');
```

O exemplo acima produzirá:

```
3
```

### Veja também

- [DateTimeImmutable::setDate()](datetimeimmutable.setdate.md) - Define a data
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
