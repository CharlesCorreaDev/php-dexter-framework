# Estruturas de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spl.datastructures.php

---

# Estruturas de dados

## Índice

- [SplDoublyLinkedList](class.spldoublylinkedlist.md)
- [SplStack](class.splstack.md)
- [SplQueue](class.splqueue.md)
- [SplHeap](class.splheap.md)
- [SplMaxHeap](class.splmaxheap.md)
- [SplMinHeap](class.splminheap.md)
- [SplPriorityQueue](class.splpriorityqueue.md)
- [SplFixedArray](class.splfixedarray.md)
- [ArrayObject](class.arrayobject.md)
- [SplObjectStorage](class.splobjectstorage.md)

SPL fornece um conjunto de estruturas de dados padrão. Elas são agrupadas aqui de acordo com sua
implementação subjacente, que geralmente define seu campo de
aplicação geral.

## Listas Duplamente Encadeadas

Uma Lista Duplamente Encadeada (DLL) é uma lista de nós vinculados em ambas as direções
entre si. As operações de iteração, acesso a ambas as extremidades, adição ou
remoção de nós têm um custo de O(1) quando a estrutura subjacente é uma DLL.
Portanto, ela fornece uma implementação decente para pilhas e filas.

- [SplDoublyLinkedList](class.spldoublylinkedlist.md)

  - [SplStack](class.splstack.md)
  - [SplQueue](class.splqueue.md)

## Heaps

Heaps são estruturas semelhantes a árvores que seguem a propriedade de heap: cada nó
é maior ou igual aos seus filhos, quando comparados usando o método
de comparação implementado, que é global para o heap.

- [SplHeap](class.splheap.md)

  - [SplMaxHeap](class.splmaxheap.md)
  - [SplMinHeap](class.splminheap.md)
- [SplPriorityQueue](class.splpriorityqueue.md)

## Arrays

Arrays são estruturas que armazenam os dados de forma contínua,
acessíveis via índices.

> **Nota**:
>
> Não os confunda com o tipo [array](language.types.array.md) nativo do PHP.
> Os arrays PHP são, na verdade, tabelas de hash ordenadas.
> Entretanto, a SPL fornece a classe [ArrayObject](class.arrayobject.md)
> para encapsular arrays do PHP em um objeto.

- [SplFixedArray](class.splfixedarray.md)

## Map

Um mapa é uma estrutura de dados que contém pares chave-valor. Os arrays PHP podem ser vistos como mapas de inteiros/strings para valores. SPL fornece um mapa de objetos para dados. Esse mapa também pode ser usado como um conjunto de objetos.

- [SplObjectStorage](class.splobjectstorage.md)

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
