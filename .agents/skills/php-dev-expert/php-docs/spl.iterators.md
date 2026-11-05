# Iteradores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spl.iterators.php

---

# Iteradores

## Índice

- [AppendIterator](class.appenditerator.md)
- [ArrayIterator](class.arrayiterator.md)
- [CachingIterator](class.cachingiterator.md)
- [CallbackFilterIterator](class.callbackfilteriterator.md)
- [DirectoryIterator](class.directoryiterator.md)
- [EmptyIterator](class.emptyiterator.md)
- [FilesystemIterator](class.filesystemiterator.md)
- [FilterIterator](class.filteriterator.md)
- [GlobIterator](class.globiterator.md)
- [InfiniteIterator](class.infiniteiterator.md)
- [IteratorIterator](class.iteratoriterator.md)
- [LimitIterator](class.limititerator.md)
- [MultipleIterator](class.multipleiterator.md)
- [NoRewindIterator](class.norewinditerator.md)
- [ParentIterator](class.parentiterator.md)
- [RecursiveArrayIterator](class.recursivearrayiterator.md)
- [RecursiveCachingIterator](class.recursivecachingiterator.md)
- [RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md)
- [RecursiveDirectoryIterator](class.recursivedirectoryiterator.md)
- [RecursiveFilterIterator](class.recursivefilteriterator.md)
- [RecursiveIteratorIterator](class.recursiveiteratoriterator.md)
- [RecursiveRegexIterator](class.recursiveregexiterator.md)
- [RecursiveTreeIterator](class.recursivetreeiterator.md)
- [RegexIterator](class.regexiterator.md)

SPL fornece um conjunto de iteradores para percorrer por objetos.

## Árvore de Classes de Iteradores SPL

- [ArrayIterator](class.arrayiterator.md)

  - [RecursiveArrayIterator](class.recursivearrayiterator.md)
- [EmptyIterator](class.emptyiterator.md)
- [IteratorIterator](class.iteratoriterator.md)

  - [AppendIterator](class.appenditerator.md)
  - [CachingIterator](class.cachingiterator.md)

    - [RecursiveCachingIterator](class.recursivecachingiterator.md)
  - [FilterIterator](class.filteriterator.md)

    - [CallbackFilterIterator](class.callbackfilteriterator.md)

      - [RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md)
    - [RecursiveFilterIterator](class.recursivefilteriterator.md)

      - [ParentIterator](class.parentiterator.md)
    - [RegexIterator](class.regexiterator.md)

      - [RecursiveRegexIterator](class.recursiveregexiterator.md)
  - [InfiniteIterator](class.infiniteiterator.md)
  - [LimitIterator](class.limititerator.md)
  - [NoRewindIterator](class.norewinditerator.md)
- [MultipleIterator](class.multipleiterator.md)
- [RecursiveIteratorIterator](class.recursiveiteratoriterator.md)

  - [RecursiveTreeIterator](class.recursivetreeiterator.md)
- [DirectoryIterator](class.directoryiterator.md) (estende [SplFileInfo](class.splfileinfo.md))

  - [FilesystemIterator](class.filesystemiterator.md)

    - [GlobIterator](class.globiterator.md)
    - [RecursiveDirectoryIterator](class.recursivedirectoryiterator.md)

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
