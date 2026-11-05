# Retorna uma string denotando o tipo deste servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-serverdescription.gettype.php

---

# MongoDB\Driver\ServerDescription::getType

(mongodb >=1.13.0)

MongoDB\Driver\ServerDescription::getType — Retorna uma string denotando o tipo deste servidor

### Descrição

final public function **MongoDB\Driver\ServerDescription::getType**(): [string](language.types.string.md)

Retorna uma [string](language.types.string.md) denotando o tipo deste servidor. O valor
será correlacionado com uma constante
[MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) denotando o tipo deste servidor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md) - Retorna um número inteiro denotando o tipo deste servidor

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
