# Verifica se o elemento atual é válido ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/limititerator.valid.php

---

# LimitIterator::valid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

LimitIterator::valid — Verifica se o elemento atual é válido ou não

### Descrição

public function **LimitIterator::valid**(): [bool](language.types.boolean.md)

Verifica se o elemento atual é válido ou não.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [LimitIterator::current()](limititerator.current.md) - Obtém o elemento atual
- [LimitIterator::key()](limititerator.key.md) - Obtém a chave atual
- [LimitIterator::rewind()](limititerator.rewind.md) - Retorna o iterador para o começo especificado no construtor
- [LimitIterator::next()](limititerator.next.md) - Avança o iterador
- [LimitIterator::seek()](limititerator.seek.md) - Aponta para a posição especificada

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
