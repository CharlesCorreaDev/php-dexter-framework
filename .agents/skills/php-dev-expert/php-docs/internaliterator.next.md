# Move para o próximo elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/internaliterator.next.php

---

# InternalIterator::next

(PHP 8)

InternalIterator::next — Move para o próximo elemento

### Descrição

public function **InternalIterator::next**(): [void](language.types.void.md)

Move a posição atual para o próximo elemento.

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
