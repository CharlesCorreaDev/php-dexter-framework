# Verifica se um iterador está anexado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.containsiterator.php

---

# MultipleIterator::containsIterator

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::containsIterator — Verifica se um iterador está anexado

### Descrição

public function **MultipleIterator::containsIterator**([Iterator](class.iterator.md) `$iterator`): [bool](language.types.boolean.md)

Verifica se um iterador está anexado ou não.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`iterator`
:   O iterador a ser verificado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [MultipleIterator::valid()](multipleiterator.valid.md) - Verifica a validade dos subiteradores

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
