# Retorna uma string denotando o tipo desta topologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-topologydescription.gettype.php

---

# MongoDB\Driver\TopologyDescription::getType

(mongodb >=1.13.0)

MongoDB\Driver\TopologyDescription::getType — Retorna uma string denotando o tipo desta topologia

### Descrição

final public function **MongoDB\Driver\TopologyDescription::getType**(): [string](language.types.string.md)

Retorna uma [string](language.types.string.md) denotando o tipo desta topologia. O valor
será correlacionado com uma constante
[MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) denotando o tipo desta topologia.

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
