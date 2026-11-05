# Biblioteca Padrão PHP (SPL)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.spl.php

---

# Biblioteca Padrão PHP (SPL)

# Introdução

A extensão SPL - Standard PHP Library (Biblioteca Padrão PHP) define interfaces e classes
destinadas a resolver problemas comuns.

A extensão fornece várias estruturas de dados, exceções genéricas,
iteradores classe para trabalhar com sistemas de arquivos usando uma
API orientada a objeto, e funções utilitárias.

- [Interfaces](spl.interfaces.md)
  - [OuterIterator](class.outeriterator.md) — A interface OuterIterator
  - [RecursiveIterator](class.recursiveiterator.md) — A interface RecursiveIterator
  - [SeekableIterator](class.seekableiterator.md) — A interface SeekableIterator
  - [SplObserver](class.splobserver.md) — A interface SplObserver
  - [SplSubject](class.splsubject.md) — A interface SplSubject
- [Estruturas de dados](spl.datastructures.md)
  - [SplDoublyLinkedList](class.spldoublylinkedlist.md) — A classe SplDoublyLinkedList
  - [SplStack](class.splstack.md) — A classe SplStack
  - [SplQueue](class.splqueue.md) — A classe SplQueue
  - [SplHeap](class.splheap.md) — A classe SplHeap
  - [SplMaxHeap](class.splmaxheap.md) — A classe SplMaxHeap
  - [SplMinHeap](class.splminheap.md) — A classe SplMinHeap
  - [SplPriorityQueue](class.splpriorityqueue.md) — A classe SplPriorityQueue
  - [SplFixedArray](class.splfixedarray.md) — A classe SplFixedArray
  - [ArrayObject](class.arrayobject.md) — A classe ArrayObject
  - [SplObjectStorage](class.splobjectstorage.md) — A classe SplObjectStorage
- [Exceções](spl.exceptions.md)
  - [BadFunctionCallException](class.badfunctioncallexception.md) — A classe BadFunctionCallException
  - [BadMethodCallException](class.badmethodcallexception.md) — A classe BadMethodCallException
  - [DomainException](class.domainexception.md) — A classe DomainException
  - [InvalidArgumentException](class.invalidargumentexception.md) — A classe InvalidArgumentException
  - [LengthException](class.lengthexception.md) — A classe LengthException
  - [LogicException](class.logicexception.md) — A classe LogicException
  - [OutOfBoundsException](class.outofboundsexception.md) — A classe OutOfBoundsException
  - [OutOfRangeException](class.outofrangeexception.md) — A classe OutOfRangeException
  - [OverflowException](class.overflowexception.md) — A classe OverflowException
  - [RangeException](class.rangeexception.md) — A classe RangeException
  - [RuntimeException](class.runtimeexception.md) — A classe RuntimeException
  - [UnderflowException](class.underflowexception.md) — A classe UnderflowException
  - [UnexpectedValueException](class.unexpectedvalueexception.md) — A classe UnexpectedValueException
- [Iteradores](spl.iterators.md)
  - [AppendIterator](class.appenditerator.md) — A classe AppendIterator
  - [ArrayIterator](class.arrayiterator.md) — A classe ArrayIterator
  - [CachingIterator](class.cachingiterator.md) — A classe CachingIterator
  - [CallbackFilterIterator](class.callbackfilteriterator.md) — A classe CallbackFilterIterator
  - [DirectoryIterator](class.directoryiterator.md) — A classe DirectoryIterator
  - [EmptyIterator](class.emptyiterator.md) — A classe EmptyIterator
  - [FilesystemIterator](class.filesystemiterator.md) — A classe FilesystemIterator
  - [FilterIterator](class.filteriterator.md) — A classe FilterIterator
  - [GlobIterator](class.globiterator.md) — A classe GlobIterator
  - [InfiniteIterator](class.infiniteiterator.md) — A classe InfiniteIterator
  - [IteratorIterator](class.iteratoriterator.md) — A classe IteratorIterator
  - [LimitIterator](class.limititerator.md) — A classe LimitIterator
  - [MultipleIterator](class.multipleiterator.md) — A classe MultipleIterator
  - [NoRewindIterator](class.norewinditerator.md) — A classe NoRewindIterator
  - [ParentIterator](class.parentiterator.md) — A classe ParentIterator
  - [RecursiveArrayIterator](class.recursivearrayiterator.md) — A classe RecursiveArrayIterator
  - [RecursiveCachingIterator](class.recursivecachingiterator.md) — A classe RecursiveCachingIterator
  - [RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md) — A classe RecursiveCallbackFilterIterator
  - [RecursiveDirectoryIterator](class.recursivedirectoryiterator.md) — A classe RecursiveDirectoryIterator
  - [RecursiveFilterIterator](class.recursivefilteriterator.md) — A classe RecursiveFilterIterator
  - [RecursiveIteratorIterator](class.recursiveiteratoriterator.md) — Classe RecursiveIteratorIterator
  - [RecursiveRegexIterator](class.recursiveregexiterator.md) — A classe RecursiveRegexIterator
  - [RecursiveTreeIterator](class.recursivetreeiterator.md) — A classe RecursiveTreeIterator
  - [RegexIterator](class.regexiterator.md) — A classe RegexIterator
- [Manipulação de Arquivos](spl.files.md)
  - [SplFileInfo](class.splfileinfo.md) — A classe SplFileInfo
  - [SplFileObject](class.splfileobject.md) — A classe SplFileObject
  - [SplTempFileObject](class.spltempfileobject.md) — A classe SplTempFileObject
- [Funções da SPL](ref.spl.md)
  - [class\_implements](function.class-implements.md) — Retorna as interfaces que são implementadas pela classe ou interface fornecida
  - [class\_parents](function.class-parents.md) — Retorna as classes pai da classe fornecida
  - [class\_uses](function.class-uses.md) — Retorna os traits usados pela classe fornecida
  - [iterator\_apply](function.iterator-apply.md) — Chama uma função para cada elemento em um iterador
  - [iterator\_count](function.iterator-count.md) — Conta os elementos em um iterador
  - [iterator\_to\_array](function.iterator-to-array.md) — Copia o iterador em um array
  - [spl\_autoload](function.spl-autoload.md) — Implementação padrão para \_\_autoload()
  - [spl\_autoload\_call](function.spl-autoload-call.md) — Tenta todas as funções \_\_autoload() registradas para carregar a classe solicitada
  - [spl\_autoload\_extensions](function.spl-autoload-extensions.md) — Registra e retorna as extensões de arquivo padrão para spl\_autoload
  - [spl\_autoload\_functions](function.spl-autoload-functions.md) — Retorna todas as funções \_\_autoload() registradas
  - [spl\_autoload\_register](function.spl-autoload-register.md) — Registra a função dada como implementação \_\_autoload()
  - [spl\_autoload\_unregister](function.spl-autoload-unregister.md) — Desregistra uma função dada como implementação de \_\_autoload()
  - [spl\_classes](function.spl-classes.md) — Retorna as classes SPL disponíveis
  - [spl\_object\_hash](function.spl-object-hash.md) — Retorna o ID de hash para o objeto fornecido
  - [spl\_object\_id](function.spl-object-id.md) — Retorna o identificador inteiro do objeto fornecido

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
