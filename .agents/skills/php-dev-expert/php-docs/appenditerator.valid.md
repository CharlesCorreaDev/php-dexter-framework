# Verifica a validade do elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.valid.php

---

# AppendIterator::valid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

AppendIterator::valid — Verifica a validade do elemento atual

### Descrição

public function **AppendIterator::valid**(): [bool](language.types.boolean.md)

Verifica a validade do elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a iteração atual for válida, **`false`** caso contrário.

### Veja também

- [AppendIterator::current()](appenditerator.current.md) - Obtém o valor atual
- [AppendIterator::key()](appenditerator.key.md) - Obtém a chave atual
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
