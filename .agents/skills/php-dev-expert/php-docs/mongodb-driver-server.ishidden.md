# Verifica se este servidor é um membro oculto de um conjunto de réplicas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.ishidden.php

---

# MongoDB\Driver\Server::isHidden

(mongodb >=1.0.0)

MongoDB\Driver\Server::isHidden — Verifica se este servidor é um membro oculto de um conjunto de réplicas

### Descrição

final public function **MongoDB\Driver\Server::isHidden**(): [bool](language.types.boolean.md)

Retorna se este servidor é um
[» membro oculto](https://www.mongodb.com/docs/manual/reference/glossary/#term-hidden-member)
de um conjunto de réplicas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se este servidor for um membro oculto de um conjunto de réplicas
ou **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Server::getInfo()](mongodb-driver-server.getinfo.md) - Retorna um array de informações que descrevem este servidor

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
