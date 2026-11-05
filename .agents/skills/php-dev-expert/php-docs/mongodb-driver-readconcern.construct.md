# Cria uma nova preocupação de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readconcern.construct.php

---

# MongoDB\Driver\ReadConcern::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\ReadConcern::\_\_construct — Cria uma nova preocupação de leitura

### Descrição

final public function **MongoDB\Driver\ReadConcern::\_\_construct**([?](language.types.null.md)[string](language.types.string.md) `$level` = **`null`**)

Constrói um novo [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md), que é
um objeto de valor imutável.

### Parâmetros

`level`
:   O [» nível de preocupação de leitura](https://www.mongodb.com/docs/manual/reference/read-concern/#read-concern-levels).
    As [constantes de classe](class.mongodb-driver-readconcern.md#mongodb-driver-readconcern.constants) podem ser usadas,
    mas o valor não está limitado a elas.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\ReadConcern::\_\_construct()****

```
<?php

/* Nível de isolamento de leitura não especificado (usa o comportamento padrão do servidor) */
$rc = new MongoDB\Driver\ReadConcern();

/* Solicitar isolamento de leitura de um único nó do conjunto de réplicas */
$rc = new MongoDB\Driver\ReadConcern(MongoDB\Driver\ReadConcern::LOCAL);

/* Solicitar isolamento de leitura da maioria dos nós do conjunto de réplicas */
$rc = new MongoDB\Driver\ReadConcern(MongoDB\Driver\ReadConcern::MAJORITY);

?>
```

### Veja também

- [» Referência de Preocupação de Leitura](https://www.mongodb.com/docs/manual/reference/read-concern/)

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
