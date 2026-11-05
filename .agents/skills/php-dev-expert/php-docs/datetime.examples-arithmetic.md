# Aritmética de Data e Horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.examples-arithmetic.php

---

## Aritmética de Data e Horário

Os exemplos a seguir mostram algumas armadilhas da aritmética de data/horário em
relação a transições de horário de verão e meses que contêm números diferentes de dias.

**Exemplo #1 DateTimeImmutable::add/sub adicionando intervalos que tempo decorrido**

Adicionar PT24H sobre uma transição de horário de verão irá aparentar uma adição de
23/25 horas (para a maioria dos fusos horários).

```
<?php
$dt = new DateTimeImmutable("2015-11-01 00:00:00", new DateTimeZone("America/New_York"));
echo "Início: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
$dt = $dt->add(new DateInterval("PT3H"));
echo "Fim:    ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
```

O exemplo acima produzirá:

```
Início: 2015-11-01 00:00:00 -04:00
Fim:    2015-11-01 02:00:00 -05:00
```

**Exemplo #2 DateTimeImmutable::modify e strtotime incrementando ou decrementando valores de componentes individuais**

Inserir "+24 hours" sobre uma transição de horário de verão irá adicionar exatamente 24 horas como visto na
string de data/horário (a menos que o horário de início ou fim esteja em um ponto
de transição).

```
<?php
$dt = new DateTimeImmutable("2015-11-01 00:00:00", new DateTimeZone("America/New_York"));
echo "Início: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
$dt = $dt->modify("+24 hours");
echo "Fim:    ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
```

O exemplo acima produzirá:

```
Início: 2015-11-01 00:00:00 -04:00
Fim:    2015-11-02 00:00:00 -05:00
```

**Exemplo #3 Adicionar ou substrair períodos pode causar transferência de datas**

Como em 31 de janeiro + 1 mês, irá resultar em 2 de março (em ano bissexto) ou
3 de março (em ano normal).

```
<?php
echo "Ano normal:\n"; // fevereiro tem 28 dias
$dt = new DateTimeImmutable("2015-01-31 00:00:00", new DateTimeZone("America/New_York"));
echo "Início: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
$dt = $dt->modify("+1 month");
echo "Fim:    ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;

echo "Ano bissexto:\n"; // fevereiro tem 29 dias
$dt = new DateTimeImmutable("2016-01-31 00:00:00", new DateTimeZone("America/New_York"));
echo "Início: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
$dt = $dt->modify("+1 month");
echo "Fim:    ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
```

O exemplo acima produzirá:

```
Ano normal:
Início: 2015-01-31 00:00:00 -05:00
Fim:    2015-03-03 00:00:00 -05:00
Ano bissexto:
Início: 2016-01-31 00:00:00 -05:00
Fim:    2016-03-02 00:00:00 -05:00
```

Para obter o último dia do mês seguinte (para evitar a transferência),
o formato `last day of` está disponível.

```
<?php
echo "Ano normal:\n"; // fevereiro tem 28 dias
$dt = new DateTimeImmutable("2015-01-31 00:00:00", new DateTimeZone("America/New_York"));
echo "Início: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
$dt = $dt->modify("last day of next month");
echo "Fim:    ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;

echo "Ano bissexto:\n"; // fevereiro tem 29 dias
$dt = new DateTimeImmutable("2016-01-31 00:00:00", new DateTimeZone("America/New_York"));
echo "Início: ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
$dt = $dt->modify("last day of next month");
echo "Fim:    ", $dt->format("Y-m-d H:i:s P"), PHP_EOL;
```

O exemplo acima produzirá:

```
Ano normal:
Início: 2015-01-31 00:00:00 -05:00
Fim:    2015-02-28 00:00:00 -05:00
Ano bissexto:
Início: 2016-01-31 00:00:00 -05:00
Fim:    2016-02-29 00:00:00 -05:00
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
