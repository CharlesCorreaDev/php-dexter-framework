# Retorna se a topologia possui um servidor para leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-topologydescription.hasreadableserver.php

---

# MongoDB\Driver\TopologyDescription::hasReadableServer

(mongodb >=1.13.0)

MongoDB\Driver\TopologyDescription::hasReadableServer — Retorna se a topologia possui um servidor para leitura

### Descrição

final public function **MongoDB\Driver\TopologyDescription::hasReadableServer**([?](language.types.null.md)[MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) `$readPreference` = **`null`**): [bool](language.types.boolean.md)

Retorna se a topologia possui um servidor para leitura ou, se
`readPreference` for especificado, um servidor
que corresponda à preferência de leitura especificada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna se a topologia possui um servidor para leitura ou, se
`readPreference` for especificado, um servidor
que corresponda à preferência de leitura especificada.

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
