# Verifica se o elemento atual é válido ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filteriterator.valid.php

---

# FilterIterator::valid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

FilterIterator::valid — Verifica se o elemento atual é válido ou não

### Descrição

public function **FilterIterator::valid**(): [bool](language.types.boolean.md)

Verifica se o elemento atual é válido.

> **Nota**:
>
> A implementação padrão desta função irá inicialmente retornar **`false`**
> até que o iterador interno seja avançado ao primeiro elemento aceito.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o elemento atual é válido, **`false`** caso contrário

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
