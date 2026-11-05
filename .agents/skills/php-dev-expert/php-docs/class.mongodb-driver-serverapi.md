# A classe MongoDB\Driver\ServerApi

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-serverapi.php

---

# A classe MongoDB\Driver\ServerApi

(mongodb >=1.10.0)

## Introdução

## Resumo da classe

final

class **MongoDB\Driver\ServerApi**
implements
[MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md), [Serializable](class.serializable.md) {

/\* Constantes \*/

const
[string](language.types.string.md)
[MongoDB\Driver\ServerAPI::V1](class.mongodb-driver-serverapi.md#mongodb-driver-serverapi.constants.v1) = "1";

/\* Métodos \*/

final public function [bsonSerialize](mongodb-driver-serverapi.bsonserialize.md)(): [stdClass](class.stdclass.md)

final public function [\_\_construct](mongodb-driver-serverapi.construct.md)([string](language.types.string.md) `$version`, [?](language.types.null.md)[bool](language.types.boolean.md) `$strict` = **`null`**, [?](language.types.null.md)[bool](language.types.boolean.md) `$deprecationErrors` = **`null`**)

}

## Constantes predefinidas

**`MongoDB\Driver\ServerApi::V1`**
:   API do Servidor versão 1.

## Examples

**Exemplo #1 Declara uma versão da API em um gerenciador**

```
<?php

use MongoDB\Driver\Manager;
use MongoDB\Driver\ServerApi;

$v1 = new ServerApi(ServerApi::v1);
$manager = new Manager('mongodb://localhost:27017', [], ['serverApi' => $v1]);

$command = new MongoDB\Driver\Command(['buildInfo' => 1]);

try {
    $cursor = $manager->executeCommand('admin', $command);
} catch(MongoDB\Driver\Exception $e) {
    echo $e->getMessage(), "\n";
    exit;
}

/* O comando buildInfo retorna um único documento de resultado, portanto é necessário acessar
 * o primeiro resultado no cursor. */
$buildInfo = $cursor->toArray()[0];

echo $buildInfo->version, "\n";

?>
```

O exemplo acima produzirá:

```
4.9.0-alpha7-49-gb968ca0
```

**Exemplo #2 Declara uma versão estrita da API em um gerenciador**

O exemplo a seguir define o sinalizador `strict`, que
informa ao servidor para rejeitar qualquer comando que não faça parte da versão declarada
da API. Isso resulta em um erro ao executar o comando buildInfo.

```
<?php

use MongoDB\Driver\Manager;
use MongoDB\Driver\ServerApi;

$v1 = new ServerApi(ServerApi::v1, true);
$manager = new Manager('mongodb://localhost:27017', [], ['serverApi' => $v1]);

$command = new MongoDB\Driver\Command(['buildInfo' => 1]);

try {
    $cursor = $manager->executeCommand('admin', $command);
} catch(MongoDB\Driver\Exception $e) {
    echo $e->getMessage(), "\n";
    exit;
}

/* O comando buildInfo retorna um único documento de resultado, portanto é necessário acessar
 * o primeiro resultado no cursor. */
$buildInfo = $cursor->toArray()[0];

echo $buildInfo->version, "\n";

?>
```

O exemplo acima produzirá:

```
Provided apiStrict:true, but the command buildInfo is not in API Version 1
```

## Índice

- [MongoDB\Driver\ServerApi::bsonSerialize](mongodb-driver-serverapi.bsonserialize.md) — Retorna um objeto para serialização BSON
- [MongoDB\Driver\ServerApi::\_\_construct](mongodb-driver-serverapi.construct.md) — Cria uma nova instância de ServerApi

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
