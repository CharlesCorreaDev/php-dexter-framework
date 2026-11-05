# Executa um comando de banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.executecommand.php

---

# MongoDB\Driver\Manager::executeCommand

(mongodb >=1.0.0)

MongoDB\Driver\Manager::executeCommand — Executa um comando de banco de dados

### Descrição

final public function **MongoDB\Driver\Manager::executeCommand**([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

Seleciona um servidor de acordo com a opção `"readPreference"`
e executa o comando nesse servidor.

Este método não aplica nenhuma lógica especial ao comando. Os
valores padrão para as opções `"readPreference"`,
`"readConcern"` e `"writeConcern"`
serão inferidos de uma transação ativa (indicada pelo opção
`"session"`). Se não houver nenhuma transação ativa, uma
preferência de leitura primária será usada para seleção do servidor.

Os valores padrão *não* serão inferidos do
[URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).
Os usuários são, portanto, incentivados a usar métodos de comando específicos de leitura
e/ou gravação, se possível.

### Parâmetros

`db` ([string](language.types.string.md))
:   O nome do banco de dados no qual executar o comando.

`command` ([MongoDB\Driver\Command](class.mongodb-driver-command.md))
:   O comando a ser executado.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | readConcern | [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md) | Um read concern a ser aplicado à operação.  Esta opção está disponível no MongoDB 3.2+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | readPreference | [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) | Uma preferência de leitura a ser usada para selecionar um servidor para a operação. |
    | session | [MongoDB\Driver\Session](class.mongodb-driver-session.md) | Uma sessão para associar à operação. |
    | writeConcern | [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) | Um write concern a ser aplicado à operação. |

    **Aviso**

    Se uma `"session"` que tem uma transação em andamento
    estiver sendo usada, uma opção `"readConcern"` ou
    `"writeConcern"` não pode ser especificada. Isso resultará em uma
    exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md)
    sendo lançada. Em vez disso, essas duas opções devem ser definidas ao criar
    a transação com
    [MongoDB\Driver\Session::startTransaction()](mongodb-driver-session.starttransaction.md).

### Valor Retornado

Retorna [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) em caso de sucesso.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a opção `"session"` for usada com uma transação associada em combinação com uma opção `"readConcern"` ou `"writeConcern"`.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a opção `"session"` for usada em combinação com uma preocupação de escrita não confirmada.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros (por exemplo, comando inválido, emissão de um comando de gravação para um secundário).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | O parâmetro `options` não aceita mais uma instância de [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md). |
| PECL mongodb 1.21.0 | Passar um objeto [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) como `options` foi descontinuado e será removido na versão 2.0. |
| PECL mongodb 1.4.4 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) será lançado se a opção `"session"` for usada em combinação com uma preocupação de gravação não reconhecida. |
| PECL mongodb 1.4.0 | O terceiro parâmetro agora é um array `options`. Para compatibilidade com versões anteriores, este parâmetro ainda aceitará um objeto [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md). |

### Examples

**Exemplo #1 **MongoDB\Driver\Manager::executeCommand()** com um comando retornando um único documento de resultado**

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$command = new MongoDB\Driver\Command(['ping' => 1]);

try {
    $cursor = $manager->executeCommand('admin', $command);
} catch(MongoDB\Driver\Exception $e) {
    echo $e->getMessage(), "\n";
    exit;
}

/* O comando ping retorna um único documento de resultado, portanto precisamos acessar
 * o primeiro resultado no cursor. */
$response = $cursor->toArray()[0];

var_dump($response);

?>
```

O exemplo acima produzirá:

```
array(1) {
  ["ok"]=>
  float(1)
}
```

**Exemplo #2 **MongoDB\Driver\Manager::executeCommand()** com um comando retornando um cursor**

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1, 'y' => 'foo']);
$bulk->insert(['x' => 2, 'y' => 'bar']);
$bulk->insert(['x' => 3, 'y' => 'bar']);
$manager->executeBulkWrite('db.collection', $bulk);

$command = new MongoDB\Driver\Command([
    'aggregate' => 'collection',
    'pipeline' => [
        ['$group' => ['_id' => '$y', 'sum' => ['$sum' => '$x']]],
    ],
    'cursor' => new stdClass,
]);
$cursor = $manager->executeCommand('db', $command);

/* O comando agregado pode opcionalmente retornar seus resultados em um cursor em vez de
 * em um único documento de resultados. Nesse caso, podemos iterar diretamente no cursor
 * para acessar esses resultados. */
foreach ($cursor as $document) {
    var_dump($document);
}

?>
```

O exemplo acima produzirá:

```
object(stdClass)#6 (2) {
  ["_id"]=>
  string(3) "bar"
  ["sum"]=>
  int(10)
}
object(stdClass)#7 (2) {
  ["_id"]=>
  string(3) "foo"
  ["sum"]=>
  int(2)
}
```

**Exemplo #3 Limitando o tempo de execução de um comando**

O tempo de execução de um comando pode ser limitado especificando um valor para
`"maxTimeMS"` no
documento [MongoDB\Driver\Command](class.mongodb-driver-command.md). Observe que esse limite
de tempo é aplicado no lado do servidor e não leva em consideração a latência da
rede. Consulte
[» Encerrar Operações em Execução](https://www.mongodb.com/docs/manual/tutorial/terminate-running-operations/#maxtimems)
no manual do MongoDB para obter mais informações.

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');

$command = new MongoDB\Driver\Command([
    'count' => 'collection',
    'query' => ['x' => ['$gt' => 1]],
    'maxTimeMS' => 1000,
]);

$cursor = $manager->executeCommand('db', $command);

var_dump($cursor->toArray()[0]);

?>
```

Se o comando não for concluído após um segundo de tempo de execução no
servidor, um
[MongoDB\Driver\Exception\ExecutionTimeoutException](class.mongodb-driver-exception-executiontimeoutexception.md)
será lançado.

### Notas

> **Nota**:
>
> Se um `readPreference` secundário for usado, é
> responsabilidade do chamador garantir que o
> `command` possa ser executado em um secundário. Nenhuma validação
> é feita pelo driver.

> **Nota**:
>
> Este método não usa como padrão a preferência de leitura do
> [URI de conexão do
> MongoDB](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri). As aplicações que precisam desse comportamento devem considerar o uso de
> [MongoDB\Driver\Manager::executeReadCommand()](mongodb-driver-manager.executereadcommand.md).

### Veja também

- [MongoDB\Driver\Command](class.mongodb-driver-command.md)
- [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)
- [MongoDB\Driver\Manager::executeReadCommand()](mongodb-driver-manager.executereadcommand.md) - Executa um comando de banco de dados que faz leitura
- [MongoDB\Driver\Manager::executeReadWriteCommand()](mongodb-driver-manager.executereadwritecommand.md) - Executa um comando de banco de dados que lê e grava
- [MongoDB\Driver\Manager::executeWriteCommand()](mongodb-driver-manager.executewritecommand.md) - Executa um comando de banco de dados que escreve
- [MongoDB\Driver\Server::executeCommand()](mongodb-driver-server.executecommand.md) - Executa um comando de banco de dados neste servidor

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
