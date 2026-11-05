# Define o modo de iteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spldoublylinkedlist.setiteratormode.php

---

# SplDoublyLinkedList::setIteratorMode

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplDoublyLinkedList::setIteratorMode — Define o modo de iteração

### Descrição

public function **SplDoublyLinkedList::setIteratorMode**([int](language.types.integer.md) `$mode`): [int](language.types.integer.md)

### Parâmetros

`mode`
:   Existem dois conjuntos ortogonais de modos que podem ser definidos:

    - A direção da iteração (uma ou outra):

      - **`SplDoublyLinkedList::IT_MODE_LIFO`** (Estilo pilha)
      - **`SplDoublyLinkedList::IT_MODE_FIFO`** (Estilo fila)
    - O comportamento do iterador (um ou outro):

      - **`SplDoublyLinkedList::IT_MODE_DELETE`** (Os elementos são excluídos pelo iterador)
      - **`SplDoublyLinkedList::IT_MODE_KEEP`** (Os elementos são percorridos pelo iterador)

    O modo padrão é: **`SplDoublyLinkedList::IT_MODE_FIFO`** | **`SplDoublyLinkedList::IT_MODE_KEEP`**

    **Aviso**

    A direção da iteração não pode ser alterada para as classes [SplStack](class.splstack.md) e
    [SplQueue](class.splqueue.md), ela é sempre **`SplDoublyLinkedList::IT_MODE_FIFO`**.
    Tentar modificá-la resultará em uma exceção [RuntimeException](class.runtimeexception.md) sendo lançada.

### Valor Retornado

Retorna os diferentes modos e flags que afetam a iteração.

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
