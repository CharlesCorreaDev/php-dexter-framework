# Verifica se este servidor é um membro passivo de um conjunto de réplicas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.ispassive.php

---

# MongoDB\Driver\Server::isPassive

(mongodb >=1.0.0)

MongoDB\Driver\Server::isPassive — Verifica se este servidor é um membro passivo de um conjunto de réplicas

### Descrição

final public function **MongoDB\Driver\Server::isPassive**(): [bool](language.types.boolean.md)

Retorna se este servidor é um
[» membro passivo](https://www.mongodb.com/docs/manual/reference/glossary/#term-passive-member)
de um conjunto de réplicas (ou seja, sua prioridade é `0` ).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se este servidor for um membro passivo de um conjunto de réplicas
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
