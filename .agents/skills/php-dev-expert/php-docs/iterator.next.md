# Move para o próximo elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iterator.next.php

---

# Iterator::next

(PHP 5, PHP 7, PHP 8)

Iterator::next — Move para o próximo elemento

### Descrição

public function **Iterator::next**(): [void](language.types.void.md)

Move a posição atual para o próximo elemento.

> **Nota**:
>
> Este método é chamado *após* cada
> loop [`foreach`](control-structures.foreach.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Qualquer valor retornado é ignorado.

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
