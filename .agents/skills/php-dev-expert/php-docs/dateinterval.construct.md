# Cria um novo objeto DateInterval

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateinterval.construct.php

---

# DateInterval::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateInterval::\_\_construct — Cria um novo objeto DateInterval

### Descrição

public function **DateInterval::\_\_construct**([string](language.types.string.md) `$duration`)

Cria um novo objeto DateInterval.

### Parâmetros

`duration`
:   Uma especificação de intervalo.

    O formato inicia-se com a letra `P`,
    de "período".
    Cada período de duração é representado por um valor inteiro
    seguido do designador de período.
    Se a duração contiver elementos de tempo, essa porção
    da especificação é precedida pela letra
    `T`.

    **`duration` Designadores de Período**

    | Designador de Período | Descrição |
    | --- | --- |
    | `Y` | anos |
    | `M` | meses |
    | `D` | dias |
    | `W` | semanas. Convertidas em dias. Antes do PHP 8.0.0, não pode ser combinada com `D`. |
    | `H` | horas |
    | `M` | minutos |
    | `S` | segundos |

    Alguns exemplos simples.
    O período de dois dias é representado por `P2D`.
    O período de dois segundos é representado por `PT2S`.
    O período de seis anos e cinco minutos é representado por `P6YT5M`.

    > **Nota**:
    >
    > Os tipos de unidade devem ser informados a partir da maior
    > unidade de escala na esquerda até a menor escala
    > na direita.
    > Ou seja, anos antes de meses, meses antes de dias,
    > dias antes de minutos etc.
    > Assim, um ano e quatro dias deve ser representado por
    > `P1Y4D`, e não `P4D1Y`.

    A especificação também pode ser representada como data e horário.
    Um exemplo de um ano e quatro dias seria
    `P0001-00-04T00:00:00`.
    Porém, valores neste formato não podem exceder o tamanho
    máximo do período (por exemplo `25` horas é inválido).

    Estes formatos são baseados na [» especificação
    de duração ISO 8601](https://en.wikipedia.org/wiki/Iso8601#Durations).

### Erros/Exceções

Lança uma exceção [DateMalformedIntervalStringException](class.datemalformedintervalstringexception.md) quando
o parâmetro `duration` não puder ser interpretado como um intervalo. Antes do
PHP 8.3, era uma [Exception](class.exception.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora lança [DateMalformedIntervalStringException](class.datemalformedintervalstringexception.md) em vez de [Exception](class.exception.md). |
| 8.2.0 | Apenas as propriedades `y` a `f`, `invert` e `days` estarão visíveis, incluindo uma nova propriedade booleana `from_string`. |
| 8.0.0 | `W` pode ser combinado com `D`. |

### Examples

**Exemplo #1 Construindo e usando objetos da classe [DateInterval](class.dateinterval.md)**

```
<?php
// Cria uma data específica
$someDate = \DateTime::createFromFormat("Y-m-d H:i", "2022-08-25 14:18");

// Cria um intervalo
$interval = new \DateInterval("P7D");

// Adiciona o intervalo
$someDate->add($interval);

// Converte o intervalo para string
echo $interval->format("%d");
```

O exemplo acima produzirá:

```
7
```

**Exemplo #2 Exemplo da classe [DateInterval](class.dateinterval.md)**

```
<?php
$interval = new DateInterval('P1W2D');
var_dump($interval);
```

Saída do exemplo acima no PHP 8.2:

```
object(DateInterval)#1 (10) {
  ["y"]=>
  int(0)
  ["m"]=>
  int(0)
  ["d"]=>
  int(9)
  ["h"]=>
  int(0)
  ["i"]=>
  int(0)
  ["s"]=>
  int(0)
  ["f"]=>
  float(0)
  ["invert"]=>
  int(0)
  ["days"]=>
  bool(false)
  ["from_string"]=>
  bool(false)
}
```

Saída do exemplo acima no PHP 8:

```
object(DateInterval)#1 (16) {
  ["y"]=>
  int(0)
  ["m"]=>
  int(0)
  ["d"]=>
  int(9)
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
  int(0)
  ["special_amount"]=>
  int(0)
  ["have_weekday_relative"]=>
  int(0)
  ["have_special_relative"]=>
  int(0)
}
```

Saída do exemplo acima no PHP 7:

```
object(DateInterval)#1 (16) {
  ["y"]=>
  int(0)
  ["m"]=>
  int(0)
  ["d"]=>
  int(2)
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
  int(0)
  ["special_amount"]=>
  int(0)
  ["have_weekday_relative"]=>
  int(0)
  ["have_special_relative"]=>
  int(0)
}
```

### Veja também

- [DateInterval::format()](dateinterval.format.md) - Formata um intervalo
- [DateTime::add()](datetime.add.md) - Modifica um objeto DateTime, com adição de dias, meses, anos, horas, minutos e segundos.
- [DateTime::sub()](datetime.sub.md) - Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos de
  um objeto DateTime
- [DateTime::diff()](datetime.diff.md) - Retorna a diferença entre dois objetos DateTime

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
