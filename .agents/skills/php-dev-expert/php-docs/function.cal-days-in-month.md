# Retorna o número de dias em um mês de um ano e calendário informados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cal-days-in-month.php

---

# cal\_days\_in\_month

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

cal\_days\_in\_month — Retorna o número de dias em um mês de um ano e calendário informados

### Descrição

function **cal\_days\_in\_month**([int](language.types.integer.md) `$calendar`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$year`): [int](language.types.integer.md)

Esta função irá retornar o número de dias no mês informado em
`month`, no ano informado em `year` para
o calendário informado em `calendar`.

### Parâmetros

`calendar`
:   Calendário a ser usado no cálculo.

`month`
:   Mês no calendário selecionado.

`year`
:   Ano no calendário selecionado.

### Valor Retornado

A quantidade de dias do mês selecionado no calendário informado.

### Examples

**Exemplo #1 Exemplo de **cal\_days\_in\_month()****

```
<?php
$numero = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31
echo "Houve {$numero} dias em agosto de 2003";
?>
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
