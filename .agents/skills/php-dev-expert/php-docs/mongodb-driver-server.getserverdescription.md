# Retorna uma descrição para este servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.getserverdescription.php

---

# MongoDB\Driver\Server::getServerDescription

(mongodb >=1.13.0)

MongoDB\Driver\Server::getServerDescription — Retorna uma descrição para este servidor

### Descrição

final public function **MongoDB\Driver\Server::getServerDescription**(): [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)

Retorna um [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md) para este
servidor. Este é um objeto de valor imutável que descreverá o servidor
no momento em que este método for chamado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md) para este
servidor.

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
