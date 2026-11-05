# Retorna a porta na qual este servidor está escutando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-serverdescription.getport.php

---

# MongoDB\Driver\ServerDescription::getPort

(mongodb >=1.13.0)

MongoDB\Driver\ServerDescription::getPort — Retorna a porta na qual este servidor está escutando

### Descrição

final public function **MongoDB\Driver\ServerDescription::getPort**(): [int](language.types.integer.md)

Retorna a porta na qual este servidor está escutando.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a porta na qual este servidor está escutando.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Server::getPort()](mongodb-driver-server.getport.md) - Retorna a porta na qual este servidor está escutando

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
