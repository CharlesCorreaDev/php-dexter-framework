# Obtém o valor atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.current.php

---

# AppendIterator::current

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

AppendIterator::current — Obtém o valor atual

### Descrição

public function **AppendIterator::current**(): [mixed](language.types.mixed.md)

Obtém o valor atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor atual se for válido ou **`null`** caso contrário.

### Veja também

- [Iterator::current()](iterator.current.md) - Retorna o elemento atual
- [AppendIterator::key()](appenditerator.key.md) - Obtém a chave atual
- [AppendIterator::valid()](appenditerator.valid.md) - Verifica a validade do elemento atual
- [AppendIterator::next()](appenditerator.next.md) - Move para o próximo elemento
- [AppendIterator::rewind()](appenditerator.rewind.md) - Rebobina o Iterador

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
