# Avança o iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/limititerator.next.php

---

# LimitIterator::next

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

LimitIterator::next — Avança o iterador

### Descrição

public function **LimitIterator::next**(): [void](language.types.void.md)

Avança o iterador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [LimitIterator::current()](limititerator.current.md) - Obtém o elemento atual
- [LimitIterator::key()](limititerator.key.md) - Obtém a chave atual
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
