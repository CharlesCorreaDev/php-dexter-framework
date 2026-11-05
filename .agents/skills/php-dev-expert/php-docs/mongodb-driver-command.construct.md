# Cria um novo comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-command.construct.php

---

# MongoDB\Driver\Command::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\Command::\_\_construct — Cria um novo comando

### Descrição

final public function **MongoDB\Driver\Command::\_\_construct**([array](language.types.array.md)|[object](language.types.object.md) `$document`, [?](language.types.null.md)[array](language.types.array.md) `$commandOptions` = **`null`**)

Constrói um novo [MongoDB\Driver\Command](class.mongodb-driver-command.md), que é um
objeto de valor imutável que representa um comando do banco de dados. O comando pode
então ser executado com
[MongoDB\Driver\Manager::executeCommand()](mongodb-driver-manager.executecommand.md).

O documento completo do comando, que inclui o nome do comando e suas
opções, deve ser expressado no parâmetro `document`.
O parâmetro `commandOptions` só é usado
para especificar opções relacionadas à execução do comando e ao
[MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) resultante.

### Parâmetros

`document`
:   O documento completo do comando, que será enviado ao servidor.

`commandOptions`
:   > **Nota**:
    >
    > Não use este parâmetro para especificar opções descritas na referência
    > do comando no manual do MongoDB. Este parâmetro só deve ser usado para
    > as opções explicitamente listadas abaixo.

    **Opções de comando**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | maxAwaitTimeMS | [int](language.types.integer.md) | Um inteiro positivo definindo o tempo limite em milissegundos para o servidor bloquear uma operação "getMore" se nenhum dado estiver disponível. Esta opção deve ser usada somente em conjunto com comandos que retornam um cursor adaptável (ex.: [» Fluxos de Alteração](https://www.mongodb.com/docs/manual/changeStreams/)). |

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.4.0 | Adicionado um segundo argumento `commandOptions`, que suporta a opção `"maxAwaitTimeMS"`. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Command::\_\_construct()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$command = new MongoDB\Driver\Command(array("buildinfo" => 1));

try {
    $cursor = $manager->executeCommand("admin", $command);
    $response = $cursor->toArray()[0];
} catch(MongoDB\Driver\Exception $e) {
    echo $e->getMessage(), "\n";
    exit;
}
var_dump($response);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(13) {
  ["version"]=>
  string(14) "2.8.0-rc2-pre-"
  ["gitVersion"]=>
  string(62) "b743d7158f7642f4da6b7eac8320374b3b88dc2e modules: subscription"
  ["OpenSSLVersion"]=>
  string(25) "OpenSSL 1.0.1f 6 Jan 2014"
  ["sysInfo"]=>
  string(104) "Linux infant 3.16.0-24-generic #32-Ubuntu SMP Tue Oct 28 13:07:32 UTC 2014 x86_64 BOOST_LIB_VERSION=1_49"
  ["loaderFlags"]=>
  string(91) "-fPIC -pthread -Wl,-z,now -rdynamic -Wl,-Bsymbolic-functions -Wl,-z,relro -Wl,-z,now -Wl,-E"
  ["compilerFlags"]=>
  string(301) "-Wnon-virtual-dtor -Woverloaded-virtual -std=c++11 -fPIC -fno-strict-aliasing -ggdb -pthread -Wall -Wsign-compare -Wno-unknown-pragmas -Winvalid-pch -pipe -Werror -O3 -Wno-unused-local-typedefs -Wno-unused-function -Wno-deprecated-declarations -Wno-unused-but-set-variable -fno-builtin-memcmp -std=c99"
  ["allocator"]=>
  string(8) "tcmalloc"
  ["versionArray"]=>
  array(4) {
    [0]=>
    int(2)
    [1]=>
    int(8)
    [2]=>
    int(0)
    [3]=>
    int(-8)
  }
  ["javascriptEngine"]=>
  string(2) "V8"
  ["bits"]=>
  int(64)
  ["debug"]=>
  bool(false)
  ["maxBsonObjectSize"]=>
  int(16777216)
  ["ok"]=>
  float(1)
}
```

**Exemplo #2 Exemplo de **MongoDB\Driver\Command::\_\_construct()****

Comandos também podem aceitar opções, como parte da estrutura normal que
é criada para enviar ao servidor. Por exemplo, a
opção `maxTimeMS` pode ser passada com a maioria dos comandos para
restringir a quantidade de tempo em que um comando pode ficar em execução no servidor.

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$command = new MongoDB\Driver\Command(
    array(
        "distinct" => "beer",
        "key" => "beer_name",
        "maxTimeMS" => 10,
    )
);

try {
    $cursor = $manager->executeCommand("beerdb", $command);
    $response = $cursor->toArray()[0];
} catch(MongoDB\Driver\Exception\Exception $e) {
    echo $e->getMessage(), "\n";
    exit;
}
var_dump($response);

?>
```

O exemplo acima produzirá
algo semelhante a:

operation exceeded time limit

### Veja também

- [MongoDB\Driver\Manager::executeCommand()](mongodb-driver-manager.executecommand.md) - Executa um comando de banco de dados
- [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

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
