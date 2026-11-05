# Compara elementos para colocá-los corretamente no heap enquanto faz o ajuste ascendente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splheap.compare.php

---

# SplHeap::compare

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplHeap::compare — Compara elementos para colocá-los corretamente no heap enquanto faz o ajuste ascendente

### Descrição

protected function **SplHeap::compare**([mixed](language.types.mixed.md) `$value1`, [mixed](language.types.mixed.md) `$value2`): [int](language.types.integer.md)

Compara `value1` com `value2`.

**Aviso**

Lançar exceções em **SplHeap::compare()** pode
corromper o Heap e colocá-lo em um estado bloqueado. Você pode desbloqueá-lo
chamando [SplHeap::recoverFromCorruption()](splheap.recoverfromcorruption.md).
No entanto, alguns elementos podem não ser colocados corretamente e, portanto, podem
quebrar a propriedade do heap.

### Parâmetros

`value1`
:   O valor do primeiro nó sendo comparado.

`value2`
:   O valor do segundo nó sendo comparado.

### Valor Retornado

Resultado da comparação, inteiro positivo se `value1` for maior que `value2`, 0 se forem iguais, inteiro negativo caso contrário.

> **Nota**:
>
> Ter múltiplos elementos com o mesmo valor em um Heap não é recomendado. Eles acabarão em uma posição relativa arbitrária.

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
