# Obtém a chave atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/limititerator.key.php

---

# LimitIterator::key

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

LimitIterator::key — Obtém a chave atual

### Descrição

public function **LimitIterator::key**(): [mixed](language.types.mixed.md)

Obtém a chave para o item atual no [Iterator](class.iterator.md) interno.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a chave para o item atual.

### Veja também

- [LimitIterator::getPosition()](limititerator.getposition.md) - Retorna a posição atual
- [LimitIterator::current()](limititerator.current.md) - Obtém o elemento atual
- [LimitIterator::next()](limititerator.next.md) - Avança o iterador
- [LimitIterator::rewind()](limititerator.rewind.md) - Retorna o iterador para o começo especificado no construtor
- [LimitIterator::seek()](limititerator.seek.md) - Aponta para a posição especificada
- [LimitIterator::valid()](limititerator.valid.md) - Verifica se o elemento atual é válido ou não

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
