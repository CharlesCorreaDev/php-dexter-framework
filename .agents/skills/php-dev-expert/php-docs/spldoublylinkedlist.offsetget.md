# Retorna o valor no $index especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spldoublylinkedlist.offsetget.php

---

# SplDoublyLinkedList::offsetGet

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplDoublyLinkedList::offsetGet — Retorna o valor no $index especificado

### Descrição

public function **SplDoublyLinkedList::offsetGet**([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

### Parâmetros

`index`
:   O índice com o valor.

### Valor Retornado

O valor no `index` especificado.

### Erros/Exceções

Lança [OutOfRangeException](class.outofrangeexception.md) quando o `index` está fora dos limites
ou quando o `index` não pode ser interpretado como um número inteiro.

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
