# Obtem as opções de manipulação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystemiterator.getflags.php

---

# FilesystemIterator::getFlags

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

FilesystemIterator::getFlags — Obtem as opções de manipulação

### Descrição

public function **FilesystemIterator::getFlags**(): [int](language.types.integer.md)

Obtém as opções de manipulação, conforme definidas em [FilesystemIterator::\_\_construct()](filesystemiterator.construct.md) ou [FilesystemIterator::setFlags()](filesystemiterator.setflags.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor inteiro das opções definidas.

### Veja também

- [FilesystemIterator::\_\_construct()](filesystemiterator.construct.md) - Constrói um novo iterador de sistema de arquivos
- [FilesystemIterator::setFlags()](filesystemiterator.setflags.md) - Define opções de manipulação

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
