# Rebobina o Iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.rewind.php

---

# AppendIterator::rewind

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

AppendIterator::rewind — Rebobina o Iterador

### Descrição

public function **AppendIterator::rewind**(): [void](language.types.void.md)

Rebobina para o primeiro elemento do primeiro Iterador interno.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Iterator::rewind()](iterator.rewind.md) - Retrocede o Iterator para o primeiro elemento
- [AppendIterator::current()](appenditerator.current.md) - Obtém o valor atual
- [AppendIterator::key()](appenditerator.key.md) - Obtém a chave atual
- [AppendIterator::next()](appenditerator.next.md) - Move para o próximo elemento
- [AppendIterator::valid()](appenditerator.valid.md) - Verifica a validade do elemento atual

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
