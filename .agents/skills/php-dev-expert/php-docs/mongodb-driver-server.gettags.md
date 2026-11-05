# Retorna um array de tags que descrevem este servidor em um conjunto de réplicas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.gettags.php

---

# MongoDB\Driver\Server::getTags

(mongodb >=1.0.0)

MongoDB\Driver\Server::getTags — Retorna um array de tags que descrevem este servidor em um conjunto de réplicas

### Descrição

final public function **MongoDB\Driver\Server::getTags**(): [array](language.types.array.md)

Retorna um [array](language.types.array.md) de
[» tags](https://www.mongodb.com/docs/manual/reference/glossary/#term-tag) usadas para
descrever este servidor em um conjunto de réplicas. O array conterá zero ou mais
pares de chave e valor [string](language.types.string.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) de tags usadas para descrever este servidor em um
conjunto de réplicas.

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
