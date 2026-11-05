# Move para o próximo nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splheap.next.php

---

# SplHeap::next

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplHeap::next — Move para o próximo nó

### Descrição

public function **SplHeap::next**(): [void](language.types.void.md)

Move para o próximo nó. Isso irá excluir o nó superior do heap.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
