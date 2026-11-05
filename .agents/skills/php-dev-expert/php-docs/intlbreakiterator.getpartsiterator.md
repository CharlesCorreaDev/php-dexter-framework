# Cria um iterador para navegar por fragmentos entre limites

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlbreakiterator.getpartsiterator.php

---

# IntlBreakIterator::getPartsIterator

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlBreakIterator::getPartsIterator — Cria um iterador para navegar por fragmentos entre limites

### Descrição

public function **IntlBreakIterator::getPartsIterator**([int](language.types.integer.md) `$type` = **`IntlPartsIterator::KEY_SEQUENTIAL`**): [IntlPartsIterator](class.intlpartsiterator.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`type`
:   Tipo de chave, opcional. Os valores possíveis são:

    - **`IntlPartsIterator::KEY_SEQUENTIAL`**
      - O padrão. Inteiros sequenciais usados como chave.
    - **`IntlPartsIterator::KEY_LEFT`**
      - Deslocamento em bytes à esquerda da parte atual usado como chave.
    - **`IntlPartsIterator::KEY_RIGHT`**
      - Deslocamento em bytes à direita da parte atual usado como chave.

### Valor Retornado

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
