# Formata um intervalo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateinterval.format.php

---

# DateInterval::format

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateInterval::format — Formata um intervalo

### Descrição

public function **DateInterval::format**([string](language.types.string.md) `$format`): [string](language.types.string.md)

Formata um intervalo.

### Parâmetros

`format`
:   **Os caracteres a seguir são reconhecidos como string no
    parâmetro `format`.
    Cada um dos caracteres de formato deve ser precedidos com o sinal de porcentagem
    (`%`).**

    | Caractere de `format` | Descrição | Exemplo de valores |
    | --- | --- | --- |
    | `%` | `%` literal | `%` |
    | `Y` | Anos, em representação numérica, com dois dígitos e zero à esquerda | `01`, `03` |
    | `y` | Anos, em representação numérica | `1`, `3` |
    | `M` | Meses, em representação numérica, com dois dígitos e zero à esquerda | `01`, `03`, `12` |
    | `m` | Meses, em representação numérica | `1`, `3`, `12` |
    | `D` | Dias, em representação numérica, com dois dígitos e zero à esquerda | `01`, `03`, `31` |
    | `d` | Dias, em representação numérica | `1`, `3`, `31` |
    | `a` | Número total de dias resultante de [DateTime::diff()](datetime.diff.md) ou `(unknown)`, caso contrário | `4`, `18`, `8123` |
    | `H` | Horas, em representação numérica, com dois dígitos e zero à esquerda | `01`, `03`, `23` |
    | `h` | Horas, em representação numérica | `1`, `3`, `23` |
    | `I` | Minutos, em representação numérica, com dois dígitos e zero à esquerda | `01`, `03`, `59` |
    | `i` | Minutos, em representação numérica | `1`, `3`, `59` |
    | `S` | Segundos, em representação numérica, com dois dígitos e zero à esquerda | `01`, `03`, `57` |
    | `s` | Segundos, em representação numérica | `1`, `3`, `57` |
    | `F` | Microssegundos, numérico, pelo menos 6 dígitos precedidos com 0 | `007701`, `052738`, `428291` |
    | `f` | Microssegundos, numérico | `7701`, `52738`, `428291` |
    | `R` | Sinal "`-`" quando negativo, "`+`" quando positivo | `-`, `+` |
    | `r` | Sinal "`-`" quando negativo, sem sinal quando positivo | `-`, |

### Valor Retornado

Retorna o intervalo formatado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.12 | Os formatos `F` e `f` agora são sempre positivos. |
| 7.1.0 | Os formatos `F` e `f` foram adicionados. |

### Examples

**Exemplo #1 Exemplo da classe [DateInterval](class.dateinterval.md)**

```
<?php
$interval = new DateInterval('P2Y4DT6H8M');
echo $interval->format('%d days');
```

O exemplo acima produzirá:

```
4 days
```

**Exemplo #2 A classe [DateInterval](class.dateinterval.md) e os pontos de transferência**

```
<?php
$interval = new DateInterval('P32D');
echo $interval->format('%d days');
```

O exemplo acima produzirá:

```
32 days
```

**Exemplo #3
[DateInterval](class.dateinterval.md) e
[DateTime::diff()](datetime.diff.md) com os modificadores %a e %d**

```
<?php
$janeiro = new DateTime('2010-01-01');
$fevereiro = new DateTime('2010-02-01');
$intervalo = $fevereiro->diff($janeiro);

// %a irá resultar no número total de dias.
echo $intervalo->format('%a dias totais')."\n";

// Enquanto %d irá apenas resultar no número de dias ainda não cobertos pelo
// mês.
echo $intervalo->format('%m mês, %d dias');
```

O exemplo acima produzirá:

```
31 total days
1 month, 0 days
```

### Notas

> **Nota**:
>
> O método **DateInterval::format()** não
> recalcula pontos de transferência em strings de data/horário. Isto
> é esperado porque não é possível extrapolar valores como `"32 days"`,
> o que poderia ser interpretado como qualquer coisa entre `"1 month and 4 days"`
> e `"1 month and 1 day"`.

### Veja também

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
