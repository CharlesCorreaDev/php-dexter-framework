# Retrocede o cursor para o primeiro resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.rewind.php

---

# MongoDB\Driver\Cursor::rewind

(mongodb >=1.9.0)

MongoDB\Driver\Cursor::rewind — Retrocede o cursor para o primeiro resultado

### Descrição

public function **MongoDB\Driver\Cursor::rewind**(): [void](language.types.void.md)

Se o cursor tiver avançado além da sua primeira posição, não poderá mais ser
retrocedido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`null`**.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se este método for chamado depois que o cursor avançou além de sua primeira posição.

### Veja também

- [Iterator::rewind()](iterator.rewind.md) - Retrocede o Iterator para o primeiro elemento

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
