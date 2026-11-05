# Verifica se o elemento atual é válido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/emptyiterator.valid.php

---

# EmptyIterator::valid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

EmptyIterator::valid — Verifica se o elemento atual é válido

### Descrição

public function **EmptyIterator::valid**(): [false](language.types.singleton.md)

Verifica se o elemento atual é válido.

> **Nota**:
>
> O [EmptyIterator](class.emptyiterator.md) está sempre vazio e nunca terá um valor válido.
> O valor de retorno é sempre **`false`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`false`**

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
