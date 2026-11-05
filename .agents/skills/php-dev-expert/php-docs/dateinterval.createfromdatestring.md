# Cria um DateInterval de porções relativas da string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateinterval.createfromdatestring.php

---

# DateInterval::createFromDateString

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateInterval::createFromDateString — Cria um DateInterval de porções relativas da string

### Descrição

Estilo orientado a objetos

public static function **DateInterval::createFromDateString**([string](language.types.string.md) `$datetime`): [DateInterval](class.dateinterval.md)

Estilo procedural

function [date\_interval\_create\_from\_date\_string](function.date-interval-create-from-date-string.md)([string](language.types.string.md) `$datetime`): [DateInterval](class.dateinterval.md)|[false](language.types.singleton.md)

Utiliza o interpretador de data/horário como no construtor
da classe [DateTimeImmutable](class.datetimeimmutable.md) para criar um
[DateInterval](class.dateinterval.md) a partir das partes relacionadas
de uma string analisada.

### Parâmetros

`datetime`
:   Uma data com porções relativas. Especificamente, os
    [formatos relativos](datetime.formats.md#datetime.formats.relative)
    suportados pelo analisador utilizados em [DateTimeImmutable](class.datetimeimmutable.md),
    [DateTime](class.datetime.md) e [strtotime()](function.strtotime.md)
    serão utilizados para construir o DateInterval.

    Para usar um string no formato ISO-8601 como `P7D`, deve-se
    usar o construtor [DateInterval::\_\_construct()](dateinterval.construct.md).

### Valor Retornado

Retorna [DateInterval](class.dateinterval.md) em caso de sucesso.
Estilo procedural retorna **`false`** em caso de falha.

### Erros/Exceções

Apenas para API orientada a objetos: Se uma string de data/horário inválida for passada,
uma exceção [DateMalformedIntervalStringException](class.datemalformedintervalstringexception.md) é lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora possui um tipo de retorno provisório de [DateInterval](class.dateinterval.md). Anteriormente era [DateInterval](class.dateinterval.md)|[false](language.types.singleton.md). |
| 8.3.0 | **DateInterval::createFromDateString()** agora lança uma exceção [DateMalformedIntervalStringException](class.datemalformedintervalstringexception.md) se uma string inválida for passada. Anteriormente, retornava **`false`** e um alerta era emitido. A função [date\_interval\_create\_from\_date\_string()](function.date-interval-create-from-date-string.md) não foi alterada. |
| 8.2.0 | Apenas as propriedades `from_string` e `date_string` estarão visíveis quando um [DateInterval](class.dateinterval.md) for criado com este método. |

### Examples

**Exemplo #1 Analisando intervalos de datas válidos**

```
<?php
// Cada conjunto de intervalos é igual.
$i = new DateInterval('P1D');
$i = DateInterval::createFromDateString('1 day');

$i = new DateInterval('P2W');
$i = DateInterval::createFromDateString('2 weeks');

$i = new DateInterval('P3M');
$i = DateInterval::createFromDateString('3 months');

$i = new DateInterval('P4Y');
$i = DateInterval::createFromDateString('4 years');

$i = new DateInterval('P1Y1D');
$i = DateInterval::createFromDateString('1 year + 1 day');

$i = new DateInterval('P1DT12H');
$i = DateInterval::createFromDateString('1 day + 12 hours');

$i = new DateInterval('PT3600S');
$i = DateInterval::createFromDateString('3600 seconds');
```

**Exemplo #2 Analisando combinações e intervalos negativos**

```
<?php
$i = DateInterval::createFromDateString('62 weeks + 1 day + 2 weeks + 2 hours + 70 minutes');
echo $i->format('%d %h %i'), "\n";

$i = DateInterval::createFromDateString('1 year - 10 days');
echo $i->format('%y %d'), "\n";
```

O exemplo acima produzirá:

```
449 2 70
1 -10
```

**Exemplo #3 Analisando intervalos especiais de data**

```
<?php
$i = DateInterval::createFromDateString('last day of next month');
var_dump($i);

$i = DateInterval::createFromDateString('last weekday');
var_dump($i);
```

Saída do exemplo acima no PHP 8.2:

```
object(DateInterval)#1 (2) {
  ["from_string"]=>
  bool(true)
  ["date_string"]=>
  string(22) "last day of next month"
}
object(DateInterval)#2 (2) {
  ["from_string"]=>
  bool(true)
  ["date_string"]=>
  string(12) "last weekday"
}
```

A saída do exemplo acima no PHP 8 é semelhante a:

```
object(DateInterval)#1 (16) {
  ["y"]=>
  int(0)
  ["m"]=>
  int(1)
  ["d"]=>
  int(0)
  ["h"]=>
  int(0)
  ["i"]=>
  int(0)
  ["s"]=>
  int(0)
  ["f"]=>
  float(0)
  ["weekday"]=>
  int(0)
  ["weekday_behavior"]=>
  int(0)
  ["first_last_day_of"]=>
  int(2)
  ["invert"]=>
  int(0)
  ["days"]=>
  bool(false)
  ["special_type"]=>
  int(0)
  ["special_amount"]=>
  int(0)
  ["have_weekday_relative"]=>
  int(0)
  ["have_special_relative"]=>
  int(0)
}
object(DateInterval)#2 (16) {
  ["y"]=>
  int(0)
  ["m"]=>
  int(0)
  ["d"]=>
  int(0)
  ["h"]=>
  int(0)
  ["i"]=>
  int(0)
  ["s"]=>
  int(0)
  ["f"]=>
  float(0)
  ["weekday"]=>
  int(0)
  ["weekday_behavior"]=>
  int(0)
  ["first_last_day_of"]=>
  int(0)
  ["invert"]=>
  int(0)
  ["days"]=>
  bool(false)
  ["special_type"]=>
  int(1)
  ["special_amount"]=>
  int(-1)
  ["have_weekday_relative"]=>
  int(0)
  ["have_special_relative"]=>
  int(1)
}
```

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
