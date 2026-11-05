# Avança o cursor para o próximo resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.next.php

---

# MongoDB\Driver\Cursor::next

(mongodb >=1.9.0)

MongoDB\Driver\Cursor::next — Avança o cursor para o próximo resultado

### Descrição

public function **MongoDB\Driver\Cursor::next**(): [void](language.types.void.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Move a posição atual para o próximo elemento no cursor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.

### Veja também

- [Iterator::next()](iterator.next.md) - Move para o próximo elemento

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
