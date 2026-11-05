# Cria um novo objeto DatePeriod a partir de uma string ISO8601

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateperiod.createfromiso8601string.php

---

# DatePeriod::createFromISO8601String

(PHP 8 >= 8.3.0)

DatePeriod::createFromISO8601String — Cria um novo objeto DatePeriod a partir de uma string ISO8601

### Descrição

public static function **DatePeriod::createFromISO8601String**([string](language.types.string.md) `$specification`, [int](language.types.integer.md) `$options` = 0): static

Cria um novo objeto DatePeriod a partir de uma string ISO8601, como especificado no parâmetro
`specification`.

### Parâmetros

`specification`
:   Um subconjunto da [» especificação ISO 8601
    de intervalos repetitivos](https://en.wikipedia.org/wiki/Iso8601#Repeating_intervals).

    Um exemplo de uma especificação de intervalo ISO 8601 aceitável é
    `R5/2008-03-01T13:00:00Z/P1Y2M10DT2H30M`, que
    especifica:

    - 5 iterações (`R5/`)
    - Inicia em `2008-03-01T13:00:00Z`.
    - Cada iteração ocorrem em um intervalo de 1 ano, 2 meses, 10 dias, 2 horas e 30 minutos
      (`/P1Y2M10DT2H30M`).

    Exemplo de recursos de especificação de intervalos ISO 8601 que o PHP
    não suporta são:

    1. zero ocorrências (`R0/`)
    2. deslocamento de fuso horário que não seja UTC (`Z`), como em `+02:00`.

`options`
:   Um campo de bits que pode ser utilizado para controlar certos comportamentos com datas iniciais
    e finais.

    Com **`DatePeriod::EXCLUDE_START_DATE`**, pode-se
    excluir a data inicial do conjunto de datas recorrentes dentro do
    período.

    Com **`DatePeriod::INCLUDE_END_DATE`**, pode-se
    incluir a data final no conjunto de datas recorrentes dentro do
    período.

### Valor Retornado

Retorna um novo objeto DatePeriod.

Objetos [DatePeriod](class.dateperiod.md) criados com este método podem ser
usador como um iterador para gerar um número de
objetos [DateTimeImmutable](class.datetimeimmutable.md).

### Erros/Exceções

Lanã uma [DateMalformedPeriodStringException](class.datemalformedperiodstringexception.md) quando
o parâmetro `specification` não puder ser analisado como um período ISO 8601
válido.

### Examples

**Exemplo #1 Exemplo de DatePeriod::createFromISO8601String**

```
<?php
$iso = 'R4/2023-07-01T00:00:00Z/P7D';
$period = DatePeriod::createFromISO8601String($iso);

// Iterando pelo objeto DatePeriod, todas as
// datas recorrentes dentro do período são exibidas.
foreach ($period as $date) {
    echo $date->format('Y-m-d'), "\n";
}
```

O exemplo acima produzirá:

```
2023-07-01
2023-07-08
2023-07-15
2023-07-22
2023-07-29
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
