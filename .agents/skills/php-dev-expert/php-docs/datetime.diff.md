# Retorna a diferença entre dois objetos DateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.diff.php

---

# DateTimeInterface::diff

# DateTimeImmutable::diff

# DateTime::diff

# date\_diff

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateTimeInterface::diff -- DateTimeImmutable::diff -- DateTime::diff -- date\_diff — Retorna a diferença entre dois objetos DateTime

### Descrição

Estilo orientado a objetos

public function **DateTimeInterface::diff**([DateTimeInterface](class.datetimeinterface.md) `$targetObject`, [bool](language.types.boolean.md) `$absolute` = **`false`**): [DateInterval](class.dateinterval.md)

public function **DateTimeImmutable::diff**([DateTimeInterface](class.datetimeinterface.md) `$targetObject`, [bool](language.types.boolean.md) `$absolute` = **`false`**): [DateInterval](class.dateinterval.md)

public function **DateTime::diff**([DateTimeInterface](class.datetimeinterface.md) `$targetObject`, [bool](language.types.boolean.md) `$absolute` = **`false`**): [DateInterval](class.dateinterval.md)

Estilo procedural

function [date\_diff](function.date-diff.md)([DateTimeInterface](class.datetimeinterface.md) `$baseObject`, [DateTimeInterface](class.datetimeinterface.md) `$targetObject`, [bool](language.types.boolean.md) `$absolute` = **`false`**): [DateInterval](class.dateinterval.md)

Retorna a diferença entre dois objetos que implementam a classe
[DateTimeInterface](class.datetimeinterface.md).

### Parâmetros

`datetime`
:   A data a ser comparada.

`absolute`
:   Informa se o intervalo deve ser forçado como positivo.

### Valor Retornado

O objeto [DateInterval](class.dateinterval.md) representa a
diferença entre as duas datas.

O parâmetro `absolute` afeta somente a
propriedade `invert` de um
objeto [DateInterval](class.dateinterval.md).

O valor de retorno representa mais especificamente o intervalo de tempo a
ser aplicado ao objeto original (`$this` ou
`$originObject`) para se chegar ao
`$targetObject`. Este processo nem sempre é
reversível.

O método leva em conta mudanças de horário de verão, e por isso pode
retornar um intervalo de `24 horas e 30 minutos`, por exemplo.
Se a intenção for fazer cálculos com horários absolutos, será necessário converter
tanto `$this`/`$baseObject` quanto
`$targetObject` para UTC primeiro.

### Examples

**Exemplo #1 Exemplo do método **DateTimeImmutable::diff()****

Estilo orientado a objetos

```
<?php
$origin = new DateTime('2009-10-11');
$target = new DateTime('2009-10-13');
$interval = $origin->diff($target);
echo $interval->format('%R%a dias');
```

O exemplo acima produzirá:

```
+2 dias
```

Estilo procedural

```
<?php
$origin = date_create('2009-10-11');
$target = date_create('2009-10-13');
$interval = date_diff($origin, $target);
echo $interval->format('%R%a dias');
```

O exemplo acima produzirá:

```
+2 dias
```

**Exemplo #2 **DateTimeInterface::diff()** durante mudança
de horário de verão**

```
<?php
$originalTime = new DateTimeImmutable("2021-10-30 09:00:00 Europe/London");
$targetTime = new DateTimeImmutable("2021-10-31 08:30:00 Europe/London");
$interval = $originalTime->diff($targetTime);
echo $interval->format("%H:%I:%S (Dias inteiros: %a)"), "\n";
```

O exemplo acima produzirá:

```
24:30:00 (Dias inteiros: 0)
```

**Exemplo #3 Intervalo do método **DateTimeInterface::diff()****

O valor que o método retorna é a quantidade exata de tempo para sair de
`$this` e chegar em `$targetObject`.
Comparando 1º de janeiro com 31 de dezembro retorna portanto 364, e não 365
dias (para anos não bissextos).

```
<?php
$originalTime = new DateTimeImmutable("2023-01-01 UTC");
$targetTime = new DateTimeImmutable("2023-12-31 UTC");
$interval = $originalTime->diff($targetTime);
echo "Dias inteiros: ", $interval->format("%a"), "\n";
```

O exemplo acima produzirá:

```
Dias inteiros: 364
```

**Exemplo #4 Comparação entre objetos [DateTime](class.datetime.md)**

> **Nota**:
>
> Objetos das classes [DateTimeImmutable](class.datetimeimmutable.md) e [DateTime](class.datetime.md)
> podem ser comparados utilizando os
> [operadores de comparação](language.operators.comparison.md).

```
<?php
$date1 = new DateTime("now");
$date2 = new DateTime("tomorrow");

var_dump($date1 == $date2);
var_dump($date1 < $date2);
var_dump($date1 > $date2);
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(false)
```

### Veja também

- [DateInterval::format()](dateinterval.format.md) - Formata um intervalo
- [DateTime::add()](datetime.add.md) - Modifica um objeto DateTime, com adição de dias, meses, anos, horas, minutos e segundos.
- [DateTime::sub()](datetime.sub.md) - Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos de
  um objeto DateTime

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
