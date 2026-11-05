# Obtém o código da exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/throwable.getcode.php

---

# Throwable::getCode

(PHP 7, PHP 8)

Throwable::getCode — Obtém o código da exceção

### Descrição

public function **Throwable::getCode**(): [int](language.types.integer.md)

Retorna o código de erro associado com o objeto de exceção disparado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código de exceção como [int](language.types.integer.md) na classe
[Exception](class.exception.md) mas possivelmente como outro tipo em
descendentes de [Exception](class.exception.md) (por exemplo como
[string](language.types.string.md) em [PDOException](class.pdoexception.md)).

### Veja também

- [Exception::getCode()](exception.getcode.md) - Obtém o código da exceção

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
