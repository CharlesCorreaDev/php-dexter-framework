# Retorna um número inteiro denotando o tipo deste servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.gettype.php

---

# MongoDB\Driver\Server::getType

(mongodb >=1.0.0)

MongoDB\Driver\Server::getType — Retorna um número inteiro denotando o tipo deste servidor

### Descrição

final public function **MongoDB\Driver\Server::getType**(): [int](language.types.integer.md)

Retorna um [int](language.types.integer.md) denotando o tipo deste servidor. O valor
será correlacionado com uma constante [MongoDB\Driver\Server](class.mongodb-driver-server.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [int](language.types.integer.md) denotando o tipo deste servidor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Server::getInfo()](mongodb-driver-server.getinfo.md) - Retorna um array de informações que descrevem este servidor
- [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md) - Retorna uma string denotando o tipo deste servidor

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
