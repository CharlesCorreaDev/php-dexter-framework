# Retorna o Throwable anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/throwable.getprevious.php

---

# Throwable::getPrevious

(PHP 7, PHP 8)

Throwable::getPrevious — Retorna o Throwable anterior

### Descrição

public function **Throwable::getPrevious**(): [?](language.types.null.md)[Throwable](class.throwable.md)

Retorna qualquer Throwable anterior (por exemplo, aquele fornecido como o terceiro
parâmetro para [Exception::\_\_construct()](exception.construct.md)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [Throwable](class.throwable.md) anterior se disponível, ou
**`null`** caso contrário.

### Veja também

- [Exception::getPrevious()](exception.getprevious.md) - Retorna o Throwable anterior

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
