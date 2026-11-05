# Recomeça o iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filteriterator.rewind.php

---

# FilterIterator::rewind

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

FilterIterator::rewind — Recomeça o iterador

### Descrição

public function **FilterIterator::rewind**(): [void](language.types.void.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Recomeça o iterador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [FilterIterator::current()](filteriterator.current.md) - Retorna o valor do elemento atual
- [FilterIterator::key()](filteriterator.key.md) - Retorna a chave do elemento atual
- [FilterIterator::next()](filteriterator.next.md) - Avança o iterador

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
