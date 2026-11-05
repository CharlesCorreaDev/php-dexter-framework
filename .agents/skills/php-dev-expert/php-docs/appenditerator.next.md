# Move para o próximo elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.next.php

---

# AppendIterator::next

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

AppendIterator::next — Move para o próximo elemento

### Descrição

public function **AppendIterator::next**(): [void](language.types.void.md)

Move para o próximo elemento. Se isso significa ir para outro Iterador,
então ele rebobina aquele Iterador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Iterator::next()](iterator.next.md) - Move para o próximo elemento
- [AppendIterator::current()](appenditerator.current.md) - Obtém o valor atual
- [AppendIterator::key()](appenditerator.key.md) - Obtém a chave atual
- [AppendIterator::valid()](appenditerator.valid.md) - Verifica a validade do elemento atual
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
