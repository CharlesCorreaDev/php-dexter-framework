# Sem objetivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.getchildren.php

---

# SplFileObject::getChildren

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::getChildren — Sem objetivo

### Descrição

public function **SplFileObject::getChildren**(): [null](language.types.null.md)

Um [SplFileObject](class.splfileobject.md) não possui filhos, então este método retorna **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`null`**.

### Veja também

- [RecursiveIterator::getChildren()](recursiveiterator.getchildren.md) - Retorna um iterador para a entrada atual

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
