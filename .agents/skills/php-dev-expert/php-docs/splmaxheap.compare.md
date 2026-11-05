# Compara elementos para colocá-los corretamente na heap enquanto faz o ajuste ascendente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splmaxheap.compare.php

---

# SplMaxHeap::compare

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplMaxHeap::compare — Compara elementos para colocá-los corretamente na heap enquanto faz o ajuste ascendente

### Descrição

protected function **SplMaxHeap::compare**([mixed](language.types.mixed.md) `$value1`, [mixed](language.types.mixed.md) `$value2`): [int](language.types.integer.md)

Compara `value1` com `value2`.

### Parâmetros

`value1`
:   O valor do primeiro nó sendo comparado.

`value2`
:   O valor do segundo nó sendo comparado.

### Valor Retornado

Resultado da comparação, inteiro positivo se `value1` for maior que `value2`, 0 se forem iguais, inteiro negativo caso contrário.

> **Nota**:
>
> Ter múltiplos elementos com o mesmo valor em uma Heap não é recomendado. Eles acabarão em uma posição relativa arbitrária.

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
