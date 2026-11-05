# Formata uma parte de uma data/horário local como um inteiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.idate.php

---

# idate

(PHP 5, PHP 7, PHP 8)

idate — Formata uma parte de uma data/horário local como um inteiro

### Descrição

function **idate**([string](language.types.string.md) `$format`, [?](language.types.null.md)[int](language.types.integer.md) `$timestamp` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna um número formatado de acordo com um formato informado utilizando o
inteiro `timestamp`, ou o horário local atual
se nenhum timestamp foi informado. Em outras palavras, `timestamp`
é opcional e tem como padrão o valor da função [time()](function.time.md).

Ao contrário da função [date()](function.date.md), a **idate()**,
aceita apenas um caractere no parâmetro `format`.

### Parâmetros

`format`
:   **Os caracteres a seguir são reconhecidos como válidos
    no parâmetro `format`**

    | Caractere `format` | Descrição |
    | --- | --- |
    | `B` | Swatch Beat/Horário da Internet |
    | `d` | Dia do mês |
    | `h` | Hora (no formato de 12 horas) |
    | `H` | Hora (no formato de 24 horas) |
    | `i` | Minutos |
    | `I` (i maiúsculo) | retorna `1` se o horário de verão está ativo, `0`, caso contrário |
    | `L` (l maiúsculo) | retorna `1` para anos bissextos, `0`, caso contrário |
    | `m` | Número do mês |
    | `N` | Dia da semana, baseado na ISO-8601 (`1` para segunda-feira até`7` para domingo) |
    | `o` | ISO-8601 year (4 digits) |
    | `s` | Segundos |
    | `t` | Dias do mês atual |
    | `U` | Segundos desde a época Unix - January 1 1970 00:00:00 UTC - isso é o mesmo que a função [time()](function.time.md) |
    | `w` | Dia da semana (`0` para domingo) |
    | `W` | Semana do ano, baseado na ISO-8601, com a semana começando na segunda-feira |
    | `y` | Ano (1 ou 2 dígitos - veja a nota abaixo) |
    | `Y` | Ano (4 dígitos) |
    | `z` | Dia do ano |
    | `Z` | Deslocamento do fuso horário em segundos |

`timestamp`
:   O parâmetro opcional `timestamp` é um
    [int](language.types.integer.md) de timestamp Unix cujo padrão é a hora local
    atual se `timestamp` não for informado ou for **`null`**. Em outras
    palavras, o padrão é o valor de [time()](function.time.md).

### Valor Retornado

Retorna um [int](language.types.integer.md) em caso de sucesso, ou **`false`** em caso de falha.

Como a função **idate()** sempre retorna um [int](language.types.integer.md) e
como ela não começa com um "0", **idate()** pode retornar
menos dígitos do que se espera. Veja o exemplo abaixo.

### Erros/Exceções

Toda chamada a uma função de data/hora gerará um **`E_WARNING`**
se o fuso horário não for válido. Veja também [date\_default\_timezone\_set()](function.date-default-timezone-set.md)

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Inclui os caracteres de formato `N` (dia da semana ISO-8601) e `o` (ano ISO-8601). |
| 8.0.0 | `timestamp` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo da função **idate()****

```
<?php
$timestamp = strtotime('1st January 2004'); // 1072915200

// este código imprime o ano em um formato de dois dígitos
// entretanto, como começaria com um "0", ele
// só imprime "4"
echo idate('y', $timestamp) . "\n";

$timestamp = strtotime('1st January 2024'); // 1704067200
echo idate('y', $timestamp);
```

O exemplo acima produzirá:

```
4
24
```

### Veja também

- [DateTimeInterface::format()](datetime.format.md) - Retorna a data formatada de acordo com um formato informado
- [date()](function.date.md) - Formata um timestamp Unix
- [getdate()](function.getdate.md) - Recupera informações de data/horário
- [time()](function.time.md) - Retorna o timestamp Unix atual

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
