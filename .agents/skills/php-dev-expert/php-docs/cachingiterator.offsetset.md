# O propósito do offsetSet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/cachingiterator.offsetset.php

---

# CachingIterator::offsetSet

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

CachingIterator::offsetSet — O propósito do offsetSet

### Descrição

public function **CachingIterator::offsetSet**([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`key`
:   O índice do elemento a ser definido.

`value`
:   O novo valor para o `key`.

### Valor Retornado

Nenhum valor é retornado.

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
