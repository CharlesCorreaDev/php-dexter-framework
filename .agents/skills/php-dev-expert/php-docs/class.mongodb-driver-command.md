# A classe MongoDB\Driver\Command

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-command.php

---

# A classe MongoDB\Driver\Command

(mongodb >=1.0.0)

## Introdução

A classe **MongoDB\Driver\Command** é um objeto de valor
que representa um comando de banco de dados.

Para fornecer "Auxílios de Comando", o objeto **MongoDB\Driver\Command** deve ser composto.

## Resumo da classe

final

class **MongoDB\Driver\Command**
{

/\* Métodos \*/

final public function [\_\_construct](mongodb-driver-command.construct.md)([array](language.types.array.md)|[object](language.types.object.md) `$document`, [?](language.types.null.md)[array](language.types.array.md) `$commandOptions` = **`null`**)

}

## Examples

**Exemplo #1 Compondo o objeto **MongoDB\Driver\Command** para fornecer um auxílio na criação de coleções**

```
<?php
class CreateCollection {
    protected $cmd = array();

    function __construct($collectionName) {
        $this->cmd["create"] = (string) $collectionName;
    }
    function setCappedCollection($maxBytes, $maxDocuments = false) {
        $this->cmd["capped"] = true;
        $this->cmd["size"]   = (int) $maxBytes;

        if ($maxDocuments) {
            $this->cmd["max"] = (int) $maxDocuments;
        }
    }
    function usePowerOf2Sizes($bool) {
        if ($bool) {
            $this->cmd["flags"] = 1;
        } else {
            $this->cmd["flags"] = 0;
        }
    }
    function setFlags($flags) {
        $this->cmd["flags"] = (int) $flags;
    }
    function getCommand() {
        return new MongoDB\Driver\Command($this->cmd);
    }
    function getCollectionName() {
        return $this->cmd["create"];
    }
}

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$createCollection = new CreateCollection("cappedCollection");
$createCollection->setCappedCollection(64 * 1024);

try {
    $command = $createCollection->getCommand();
    $cursor = $manager->executeCommand("databaseName", $command);
    $response = $cursor->toArray()[0];
    var_dump($response);

    $collstats = ["collstats" => $createCollection->getCollectionName()];
    $cursor = $manager->executeCommand("databaseName", new MongoDB\Driver\Command($collstats));
    $response = $cursor->toArray()[0];
    var_dump($response);
} catch(MongoDB\Driver\Exception $e) {
    echo $e->getMessage(), "\n";
    exit;
}

?>
```

O exemplo acima produzirá:

```
object(MongoDB\Driver\Command)#3 (1) {
  ["command"]=>
  array(3) {
    ["create"]=>
    string(16) "cappedCollection"
    ["capped"]=>
    bool(true)
    ["size"]=>
    int(65536)
  }
}
array(1) {
  ["ok"]=>
  float(1)
}
array(16) {
  ["ns"]=>
  string(29) "databaseName.cappedCollection"
  ["count"]=>
  int(0)
  ["size"]=>
  int(0)
  ["numExtents"]=>
  int(1)
  ["storageSize"]=>
  int(65536)
  ["nindexes"]=>
  int(1)
  ["lastExtentSize"]=>
  float(65536)
  ["paddingFactor"]=>
  float(1)
  ["paddingFactorNote"]=>
  string(101) "paddingFactor is unused and unmaintained in 2.8. It remains hard coded to 1.0 for compatibility only."
  ["userFlags"]=>
  int(0)
  ["capped"]=>
  bool(true)
  ["max"]=>
  int(9223372036854775807)
  ["maxSize"]=>
  int(65536)
  ["totalIndexSize"]=>
  int(8176)
  ["indexSizes"]=>
  object(stdClass)#4 (1) {
    ["_id_"]=>
    int(8176)
  }
  ["ok"]=>
  float(1)
}
```

## Índice

- [MongoDB\Driver\Command::\_\_construct](mongodb-driver-command.construct.md) — Cria um novo comando

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
