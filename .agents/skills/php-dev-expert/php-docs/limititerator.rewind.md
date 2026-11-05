# Retorna o iterador para o começo especificado no construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/limititerator.rewind.php

---

# LimitIterator::rewind

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

LimitIterator::rewind — Retorna o iterador para o começo especificado no construtor

### Descrição

public function **LimitIterator::rewind**(): [void](language.types.void.md)

Retrocede o iterador para o offset inicial especificado em [LimitIterator::\_\_construct()](limititerator.construct.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [LimitIterator::current()](limititerator.current.md) - Obtém o elemento atual
- [LimitIterator::key()](limititerator.key.md) - Obtém a chave atual
- [LimitIterator::next()](limititerator.next.md) - Avança o iterador
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
