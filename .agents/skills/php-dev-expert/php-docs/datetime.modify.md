# Altera o timestamp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.modify.php

---

# DateTime::modify

# date\_modify

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTime::modify -- date\_modify — Altera o timestamp

### Descrição

Estilo orientado a objetos

public function **DateTime::modify**([string](language.types.string.md) `$modifier`): [DateTime](class.datetime.md)

Estilo procedural

function [date\_modify](function.date-modify.md)([DateTime](class.datetime.md) `$object`, [string](language.types.string.md) `$modifier`): [DateTime](class.datetime.md)|[false](language.types.singleton.md)

Altera o timestamp de um objeto DateTime, incrementando-o ou decrementando-o, em um
formato aceito pela função [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md).

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`modifier`
:   Uma string de data/hora. Os formatos válidos são explicados em [Formatos de Data e Hora](datetime.formats.md).

### Valor Retornado

Retorna [DateTime](class.datetime.md) em caso de sucesso.
Estilo procedural retorna **`false`** em caso de falha.

### Erros/Exceções

Apenas para API orientada a objetos: Se uma string inválida de data/horário for passada,
uma exceção [DateMalformedStringException](class.datemalformedstringexception.md) é lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora tem o tipo de retorno provisório [DateTime](class.datetime.md). Anteriormente era [DateTime](class.datetime.md)|[false](language.types.singleton.md). |
| 8.3.0 | **DateTime::modify()** agora lança uma exceção [DateMalformedStringException](class.datemalformedstringexception.md) se uma string inválida for passada. Anteriormente, retornava **`false`** e um alerta era emitido. A função [date\_modify()](function.date-modify.md) não foi alterada. |

### Examples

**Exemplo #1 Exemplo do método **DateTime::modify()****

Estilo orientado a objetos

```
<?php
$date = new DateTime('2006-12-12');
$date->modify('+1 day');
echo $date->format('Y-m-d');
```

O exemplo acima produzirá:

```
2006-12-13
```

Estilo procedural

```
<?php
$date = date_create('2006-12-12');
date_modify($date, '+1 day');
echo date_format($date, 'Y-m-d');
```

O exemplo acima produzirá:

```
2006-12-13
```

**Exemplo #2 Cuidados na adição ou subtração de meses**

```
<?php
$date = new DateTime('2000-12-31');

$date->modify('+1 month');
echo $date->format('Y-m-d') . "\n";

$date->modify('+1 month');
echo $date->format('Y-m-d') . "\n";
```

O exemplo acima produzirá:

```
2001-01-31
2001-03-03
```

**Exemplo #3 Todos os formatos de data e horário são suportados**

```
<?php
$date = new DateTime('2020-12-31');

$date->modify('July 1st, 2023');
echo $date->format('Y-m-d H:i') . "\n";

$date->modify('Monday next week');
echo $date->format('Y-m-d H:i') . "\n";

$date->modify('17:30');
echo $date->format('Y-m-d H:i') . "\n";
```

O exemplo acima produzirá:

```
2023-07-01 00:00
2023-07-03 00:00
2023-07-03 17:30
```

### Veja também

- [strtotime()](function.strtotime.md) - Interpreta qualquer descrição textual de data/horário em inglês para timestamp Unix
- [DateTimeImmutable::modify()](datetimeimmutable.modify.md) - Cria um novo objeto com seu timestamp modificado
- [DateTime::add()](datetime.add.md) - Modifica um objeto DateTime, com adição de dias, meses, anos, horas, minutos e segundos.
- [DateTime::sub()](datetime.sub.md) - Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos de
  um objeto DateTime
- [DateTime::setDate()](datetime.setdate.md) - Define a data
- [DateTime::setISODate()](datetime.setisodate.md) - Define uma data ISO
- [DateTime::setTime()](datetime.settime.md) - Define o horário
- [DateTime::setTimestamp()](datetime.settimestamp.md) - Define a data e hora baseada em um timestamp Unix

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
