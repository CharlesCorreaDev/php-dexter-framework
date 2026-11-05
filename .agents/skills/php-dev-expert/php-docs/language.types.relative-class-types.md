# Tipos de classes relativas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.relative-class-types.php

---

## Tipos de classes relativas

Estas declarações de tipo só podem ser usadas dentro de classes.

### self

O valor deve ser uma [`instanceof`](language.operators.type.md) da mesma classe daquela em que
a declaração de tipo é usada.

### parent

O valor deve ser uma [`instanceof`](language.operators.type.md) de um pai da classe
na qual a declaração de tipo é usada.

### static

static é um tipo somente de retorno que requer que o
valor retornado seja uma [`instanceof`](language.operators.type.md) da mesma classe em que o
método é chamado.
Disponível a partir do PHP 8.0.0.

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
