# Cria um novo objeto DatePeriod

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateperiod.construct.php

---

# DatePeriod::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DatePeriod::\_\_construct — Cria um novo objeto DatePeriod

### Descrição

public function **DatePeriod::\_\_construct**(  
    [DateTimeInterface](class.datetimeinterface.md) `$start`,  
    [DateInterval](class.dateinterval.md) `$interval`,  
    [int](language.types.integer.md) `$recurrences`,  
    [int](language.types.integer.md) `$options` = 0  
)

public function **DatePeriod::\_\_construct**(  
    [DateTimeInterface](class.datetimeinterface.md) `$start`,  
    [DateInterval](class.dateinterval.md) `$interval`,  
    [DateTimeInterface](class.datetimeinterface.md) `$end`,  
    [int](language.types.integer.md) `$options` = 0  
)

**Aviso**

A variante de construtor a seguir foi descontinuada:

public function **DatePeriod::\_\_construct**([string](language.types.string.md) `$isostr`, [int](language.types.integer.md) `$options` = 0)

Esta variante do construtor foi descontinuada a partir do PHP 8.4.0, use o método
[DatePeriod::createFromISO8601String()](dateperiod.createfromiso8601string.md) em seu lugar.

Cria um objeto DatePeriod.

Objetos [DatePeriod](class.dateperiod.md) podem ser usados como um iterador para
gerar um número de objetos [DateTimeImmutable](class.datetimeimmutable.md) ou
[DateTime](class.datetime.md) a partir de uma data inicial (`start`),
um intervalo (`interval`), e uma data final (`end`)
ou o número de recorrências (`recurrences`).

A classe do objeto retornado é equivalente à classe ancestral
[DateTimeImmutable](class.datetimeimmutable.md) ou [DateTime](class.datetime.md)
do objeto do parâmetro `start`.

### Parâmetros

`start`
:   A data inicial do período. Incluído por padrão no conjunto de resultados.

`interval`
:   A recorrência de intervalos entre os períodos.

`recurrences`
:   O número de recorrências. O número do resultado retornado é
    uma unidade a mais que isto, já que a data de início é incluída no conjunto de resultados
    por padrão. Deve ser maior que `0`.

`end`
:   A data final do período.

`isostr`
:   Um sobconjunto da [» especificação de intervalos
    recorrented ISO 8601](https://en.wikipedia.org/wiki/Iso8601#Repeating_intervals).

    Exemplos de algumas características de especificação de intervalos ISO 8601 que o PHP
    não suporta são:

    1. zero ocorrências (`R0/`)
    2. fusos horários diferentes de UTC (`Z`), como `+02:00`.

`options`
:   Um campo de bits que pode ser usado para controlar certos comportamentos com
    datas de início e fim.

    Com **`DatePeriod::EXCLUDE_START_DATE`**
    exclui-se a data inicial do conjunto de datas recorrentes dentro do
    período.

    Com **`DatePeriod::INCLUDE_END_DATE`**
    inclui-se a data final do conjunto de datas recorrentes dentro do
    período.

### Erros/Exceções

Lança uma exceção [DateMalformedPeriodStringException](class.datemalformedperiodstringexception.md) quando
o parâmetro `isostr` não puder ser interpretado como um período ISO 8601
válido. Antes do PHP 8.3, isto era uma
[Exception](class.exception.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A assinatura que usa `isostr` foi descontinuada, use [DatePeriod::createFromISO8601String()](dateperiod.createfromiso8601string.md) em seu lugar. |
| 8.3.0 | Agora dispara [DateMalformedPeriodStringException](class.datemalformedperiodstringexception.md) em vez de [Exception](class.exception.md). |
| 8.2.0 | A constante **`DatePeriod::INCLUDE_END_DATE`** foi incluída. |
| 7.2.19, 7.3.6, 7.4.0 | O parâmetro `recurrences` agora deve ser maior que `0`. |

### Examples

**Exemplo #1 Exemplos de DatePeriod**

```
<?php
$inicio = new DateTime('2012-07-01');
$intervalo = new DateInterval('P7D');
$fim = new DateTime('2012-07-31');
$recorrencias = 4;
$iso = 'R4/2012-07-01T00:00:00Z/P7D';

// Todos estes períodos são equivalentes.
$periodo = new DatePeriod($inicio, $intervalo, $recorrencias);
$periodo = new DatePeriod($inicio, $intervalo, $fim);
$periodo = new DatePeriod($iso);

// Ao iterar sobre o objeto DatePeriod, todas as
// datas recorrentes dentro do período são exibidas.
foreach ($periodo as $data) {
    echo $data->format('Y-m-d')."\n";
}
```

O exemplo acima produzirá:

```
Deprecated: Calling DatePeriod::__construct(string $isostr, int $options = 0) is deprecated, use DatePeriod::createFromISO8601String() instead in script on line 11
2012-07-01
2012-07-08
2012-07-15
2012-07-22
2012-07-29
```

**Exemplo #2 Exemplo de DatePeriod com **`DatePeriod::EXCLUDE_START_DATE`****

```
<?php
$inicio = new DateTime('2012-07-01');
$intervalo = new DateInterval('P7D');
$fim = new DateTime('2012-07-31');

$periodo = new DatePeriod($inicio, $intervalo, $fim,
                         DatePeriod::EXCLUDE_START_DATE);

// Ao iterar sobre o objeto DatePeriod, todas as
// datas recorrentes dentro do período são exibidas.
// Note que, neste caso, 2012-07-01 não é mostrada.
foreach ($periodo as $data) {
    echo $data->format('Y-m-d')."\n";
}
```

O exemplo acima produzirá:

```
2012-07-08
2012-07-15
2012-07-22
2012-07-29
```

**Exemplo #3 Exemplo de DatePeriod mostrando todas as últimas quintas-feiras do ano**

```
<?php
$inicio = new DateTime('2021-12-31');
$fim = new DateTime('2022-12-31 23:59:59');

$intervalo = DateInterval::createFromDateString('last thursday of next month');
$periodo = new DatePeriod($inicio, $intervalo, $fim, DatePeriod::EXCLUDE_START_DATE);

foreach ($periodo as $data) {
    echo $data->format('l Y-m-d'), "\n";
}
```

O exemplo acima produzirá:

```
Thursday 2022-01-27
Thursday 2022-02-24
Thursday 2022-03-31
Thursday 2022-04-28
Thursday 2022-05-26
Thursday 2022-06-30
Thursday 2022-07-28
Thursday 2022-08-25
Thursday 2022-09-29
Thursday 2022-10-27
Thursday 2022-11-24
Thursday 2022-12-29
```

### Notas

Npumeros de repetições não vinculados como especificado pela ISO 8601 seção 4.5
"Recurring time interval" não são suportados, ex.: nem passando passando
`"R/..."` como parâmetro `isostr` nem passando
**`null`** como parâmetro `end` funcionaria.

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
