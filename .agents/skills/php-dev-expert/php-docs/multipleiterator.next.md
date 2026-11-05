# Movimenta todos os subiteradores anexados para frente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.next.php

---

# MultipleIterator::next

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::next — Movimenta todos os subiteradores anexados para frente

### Descrição

public function **MultipleIterator::next**(): [void](language.types.void.md)

Movimenta todos os subiteradores anexados para frente.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [MultipleIterator::rewind()](multipleiterator.rewind.md) - Rebobina todas as instâncias do iterador anexado

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
