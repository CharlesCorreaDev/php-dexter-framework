# Retorna os servidores na topologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-topologydescription.getservers.php

---

# MongoDB\Driver\TopologyDescription::getServers

(mongodb >=1.13.0)

MongoDB\Driver\TopologyDescription::getServers — Retorna os servidores na topologia

### Descrição

final public function **MongoDB\Driver\TopologyDescription::getServers**(): [array](language.types.array.md)

Retorna um array de objetos [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)
correspondentes aos servidores conhecidos na topologia.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de objetos [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)
correspondentes aos servidores conhecidos na topologia.

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
