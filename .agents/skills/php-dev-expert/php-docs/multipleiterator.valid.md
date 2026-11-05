# Verifica a validade dos subiteradores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.valid.php

---

# MultipleIterator::valid

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::valid — Verifica a validade dos subiteradores

### Descrição

public function **MultipleIterator::valid**(): [bool](language.types.boolean.md)

Verifica a validade dos subiteradores.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se um ou todos os subiteradores forem válidos, dependendo das opções (flags),
caso contrário, retorna **`false`**

### Veja também

- [MultipleIterator::\_\_construct()](multipleiterator.construct.md) - Constrói um novo MultipleIterator

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
