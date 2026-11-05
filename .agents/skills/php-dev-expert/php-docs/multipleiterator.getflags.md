# Obtém informações sobre as opções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.getflags.php

---

# MultipleIterator::getFlags

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::getFlags — Obtém informações sobre as opções

### Descrição

public function **MultipleIterator::getFlags**(): [int](language.types.integer.md)

Obtém informações sobre as opções.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Informações sobre as opções, como um [int](language.types.integer.md).

### Veja também

- [Constantes de Opção](class.multipleiterator.md#multipleiterator.constants)
- [MultipleIterator::\_\_construct()](multipleiterator.construct.md) - Constrói um novo MultipleIterator
- [MultipleIterator::setFlags()](multipleiterator.setflags.md) - Define opções

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
