# Retorna o nome do host deste servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-serverdescription.gethost.php

---

# MongoDB\Driver\ServerDescription::getHost

(mongodb >=1.13.0)

MongoDB\Driver\ServerDescription::getHost — Retorna o nome do host deste servidor

### Descrição

final public function **MongoDB\Driver\ServerDescription::getHost**(): [string](language.types.string.md)

Retorna o nome do host deste servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do host deste servidor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Server::getHost()](mongodb-driver-server.gethost.md) - Retorna o nome do host deste servidor

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
