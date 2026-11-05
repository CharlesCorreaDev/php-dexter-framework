# Obtém o ArrayIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.getarrayiterator.php

---

# AppendIterator::getArrayIterator

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

AppendIterator::getArrayIterator — Obtém o ArrayIterator

### Descrição

public function **AppendIterator::getArrayIterator**(): [ArrayIterator](class.arrayiterator.md)

Este método obtém o [ArrayIterator](class.arrayiterator.md) que é usado para
armazenar os iteradores adicionados com [AppendIterator::append()](appenditerator.append.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [ArrayIterator](class.arrayiterator.md) contendo
os iteradores anexados.

### Veja também

- **AppendIterator::getInnerIterator()**

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
