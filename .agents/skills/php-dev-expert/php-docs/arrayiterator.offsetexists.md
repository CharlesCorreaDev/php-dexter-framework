# Verificar se o deslocamento existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.offsetexists.php

---

# ArrayIterator::offsetExists

(PHP 5, PHP 7, PHP 8)

ArrayIterator::offsetExists — Verificar se o deslocamento existe

### Descrição

public function **ArrayIterator::offsetExists**([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

Verifica se o deslocamento existe.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`key`
:   O deslocamento sendo verificado.

### Valor Retornado

**`true`** se o deslocamento existir, caso contrário **`false`**

### Veja também

- [ArrayIterator::valid()](arrayiterator.valid.md) - Verifica se o iterador de array contém mais entradas

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
