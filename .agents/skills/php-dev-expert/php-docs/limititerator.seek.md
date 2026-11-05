# Aponta para a posição especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/limititerator.seek.php

---

# LimitIterator::seek

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

LimitIterator::seek — Aponta para a posição especificada

### Descrição

public function **LimitIterator::seek**([int](language.types.integer.md) `$offset`): [int](language.types.integer.md)

Move o iterador para o deslocamento especificado por `offset`.

### Parâmetros

`offset`
:   A posição a ser procurada.

### Valor Retornado

Retorna a posição após o apontamento.

### Erros/Exceções

Lança um [OutOfBoundsException](class.outofboundsexception.md) se a posição estiver
fora dos limites especificados em [LimitIterator::\_\_construct()](limititerator.construct.md).

### Veja também

- [LimitIterator::current()](limititerator.current.md) - Obtém o elemento atual
- [LimitIterator::key()](limititerator.key.md) - Obtém a chave atual
- [LimitIterator::rewind()](limititerator.rewind.md) - Retorna o iterador para o começo especificado no construtor
- [LimitIterator::next()](limititerator.next.md) - Avança o iterador
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
