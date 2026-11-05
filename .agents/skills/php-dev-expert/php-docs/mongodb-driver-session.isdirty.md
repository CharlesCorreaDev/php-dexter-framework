# Retorna se a sessão foi marcada como suja

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.isdirty.php

---

# MongoDB\Driver\Session::isDirty

(mongodb >=1.13.0)

MongoDB\Driver\Session::isDirty — Retorna se a sessão foi marcada como suja

### Descrição

final public function **MongoDB\Driver\Session::isDirty**(): [bool](language.types.boolean.md)

Retorna se a sessão foi marcada como suja (ou seja, foi usada
com um comando que encontrou um erro de rede).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna se a sessão foi marcada como suja.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

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
