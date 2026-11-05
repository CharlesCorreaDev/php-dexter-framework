# SplFileObject não tem filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.haschildren.php

---

# SplFileObject::hasChildren

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileObject::hasChildren — SplFileObject não tem filhos

### Descrição

public function **SplFileObject::hasChildren**(): [false](language.types.singleton.md)

Um [SplFileObject](class.splfileobject.md) não tem filhos, então este método sempre retorna **`false`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`false`**

### Veja também

- [RecursiveIterator::hasChildren()](recursiveiterator.haschildren.md) - Retorna se um iterador pode ser criado para a entrada atual

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
