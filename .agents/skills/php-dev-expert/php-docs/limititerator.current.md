# Obtém o elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/limititerator.current.php

---

# LimitIterator::current

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

LimitIterator::current — Obtém o elemento atual

### Descrição

public function **LimitIterator::current**(): [mixed](language.types.mixed.md)

Obtém o elemento atual do [Iterator](class.iterator.md) interno.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o elemento atual ou **`null`** se não houver nenhum.

### Veja também

- [LimitIterator::key()](limititerator.key.md) - Obtém a chave atual
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
