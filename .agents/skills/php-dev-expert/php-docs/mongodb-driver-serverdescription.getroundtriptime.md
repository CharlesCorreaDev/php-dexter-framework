# Retorna o tempo de ida e volta do servidor em milissegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-serverdescription.getroundtriptime.php

---

# MongoDB\Driver\ServerDescription::getRoundTripTime

(mongodb >=1.13.0)

MongoDB\Driver\ServerDescription::getRoundTripTime — Retorna o tempo de ida e volta do servidor em milissegundos

### Descrição

final public function **MongoDB\Driver\ServerDescription::getRoundTripTime**(): [?](language.types.null.md)[int](language.types.integer.md)

Retorna o tempo de ida e volta do servidor em milissegundos. Esta é a medida do
cliente sobre a duração
de um comando
[» hello](https://www.mongodb.com/docs/manual/reference/command/hello/).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tempo de ida e volta do servidor em milissegundos.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Server::getLatency()](mongodb-driver-server.getlatency.md) - Retorna a latência deste servidor em milissegundos

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
