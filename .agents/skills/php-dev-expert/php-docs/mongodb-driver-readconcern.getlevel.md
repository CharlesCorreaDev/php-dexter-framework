# Retorna o nível da preocupação de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readconcern.getlevel.php

---

# MongoDB\Driver\ReadConcern::getLevel

(mongodb >=1.0.0)

MongoDB\Driver\ReadConcern::getLevel — Retorna o nível da preocupação de leitura

### Descrição

final public function **MongoDB\Driver\ReadConcern::getLevel**(): [?](language.types.null.md)[string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "level" do ReadConcern.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\ReadConcern::getLevel()****

```
<?php

$rc = new MongoDB\Driver\ReadConcern();
var_dump($rc->getLevel());

$rc = new MongoDB\Driver\ReadConcern(MongoDB\Driver\ReadConcern::LOCAL);
var_dump($rc->getLevel());

$rc = new MongoDB\Driver\ReadConcern(MongoDB\Driver\ReadConcern::MAJORITY);
var_dump($rc->getLevel());

?>
```

O exemplo acima produzirá:

```
NULL
string(5) "local"
string(8) "majority"
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
