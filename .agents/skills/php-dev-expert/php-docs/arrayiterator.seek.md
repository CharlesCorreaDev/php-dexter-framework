# Aponta para uma posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.seek.php

---

# ArrayIterator::seek

(PHP 5, PHP 7, PHP 8)

ArrayIterator::seek — Aponta para uma posição

### Descrição

public function **ArrayIterator::seek**([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

Aponta para um posição informada no iterador.

### Parâmetros

`offset`
:   A posição a ser apontada.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança uma [OutOfBoundsException](class.outofboundsexception.md)
se a posição `offset` não for apontável.

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
