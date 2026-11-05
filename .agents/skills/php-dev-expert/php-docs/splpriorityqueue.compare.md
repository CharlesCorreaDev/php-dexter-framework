# Comparar prioridades para colocar elementos corretamente no heap ao subir

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splpriorityqueue.compare.php

---

# SplPriorityQueue::compare

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplPriorityQueue::compare — Comparar prioridades para colocar elementos corretamente no heap ao subir

### Descrição

public function **SplPriorityQueue::compare**([mixed](language.types.mixed.md) `$priority1`, [mixed](language.types.mixed.md) `$priority2`): [int](language.types.integer.md)

Compara `priority1` com `priority2`.

### Parâmetros

`priority1`
:   A prioridade do primeiro nó sendo comparado.

`priority2`
:   A prioridade do segundo nó sendo comparado.

### Valor Retornado

Resultado da comparação, inteiro positivo se `priority1` for maior que `priority2`, 0 se forem iguais, inteiro negativo caso contrário.

> **Nota**:
>
> Múltiplos elementos com a mesma prioridade serão desenfileirados em nenhuma ordem específica.

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
