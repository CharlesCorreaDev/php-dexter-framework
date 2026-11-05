# Obtém o horário local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.localtime.php

---

# localtime

(PHP 4, PHP 5, PHP 7, PHP 8)

localtime — Obtém o horário local

### Descrição

function **localtime**([?](language.types.null.md)[int](language.types.integer.md) `$timestamp` = **`null`**, [bool](language.types.boolean.md) `$associative` = **`false`**): [array](language.types.array.md)

A função **localtime()** retorna um array idêntico
à estrutura retornada pela chamada da função
em C.

### Parâmetros

`timestamp`
:   O parâmetro opcional `timestamp` é um
    [int](language.types.integer.md) de timestamp Unix cujo padrão é a hora local
    atual se `timestamp` não for informado ou for **`null`**. Em outras
    palavras, o padrão é o valor de [time()](function.time.md).

`associative`

### Valor Retornado

Se `associative` for definido para **`false`** ou não fornecido,
o retorno é um array normal, indexado numericamente.
Se `associative` for definido para **`true`**, então
**localtime()** retorna um array associativo contendo
os elementos da estrutura retornados pela chamada da
função C para o horário local.
Os nomes das chaves do array associativo são as seguintes:

- "tm\_sec" - segundos, `0` a `59`
- "tm\_min" - minutos, `0` a `59`
- "tm\_hour" - horas, `0` a `23`
- "tm\_mday" - dia do mês, `1` a `31`
- "tm\_mon" - mês do ano, `0` (Jan) a `11` (Dez)
- "tm\_year" - anos desde 1900
- "tm\_wday" - dia da semana, `0` (Dom) a `6` (Sáb)
- "tm\_yday" - dia do ano, `0` a `365`
- "tm\_isdst" - Se está em horário de verão

  Positivo se sim, `0` se não, negativo se é desconhecido.

### Erros/Exceções

Toda chamada a uma função de data/hora gerará um **`E_WARNING`**
se o fuso horário não for válido. Veja também [date\_default\_timezone\_set()](function.date-default-timezone-set.md)

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timestamp` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo da função **localtime()****

```
<?php
$localtime = localtime();
$localtime_assoc = localtime(time(), true);
print_r($localtime);
print_r($localtime_assoc);
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 24
    [1] => 3
    [2] => 19
    [3] => 3
    [4] => 3
    [5] => 105
    [6] => 0
    [7] => 92
    [8] => 1
)

Array
(
    [tm_sec] => 24
    [tm_min] => 3
    [tm_hour] => 19
    [tm_mday] => 3
    [tm_mon] => 3
    [tm_year] => 105
    [tm_wday] => 0
    [tm_yday] => 92
    [tm_isdst] => 1
)
```

### Veja também

- [getdate()](function.getdate.md) - Recupera informações de data/horário

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
