# Retorna o ID da sessão lógica desta sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.getlogicalsessionid.php

---

# MongoDB\Driver\Session::getLogicalSessionId

(mongodb >=1.4.0)

MongoDB\Driver\Session::getLogicalSessionId — Retorna o ID da sessão lógica desta sessão

### Descrição

final public function **MongoDB\Driver\Session::getLogicalSessionId**(): [object](language.types.object.md)

Retorna o ID da sessão lógica desta sessão, que pode ser usado para
identificar as operações desta sessão no servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID da sessão lógica desta sessão.

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
