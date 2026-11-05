# Executa uma consulta ao banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.executequery.php

---

# MongoDB\Driver\Manager::executeQuery

(mongodb >=1.0.0)

MongoDB\Driver\Manager::executeQuery — Executa uma consulta ao banco de dados

### Descrição

final public function **MongoDB\Driver\Manager::executeQuery**([string](language.types.string.md) `$namespace`, [MongoDB\Driver\Query](class.mongodb-driver-query.md) `$query`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

Seleciona um servidor de acordo com a opção `"readPreference"`
e executa a consulta nesse servidor.

Os valores padrão para a opção `"readPreference"` e para a opção
`"readConcern"` da consulta serão inferidos de uma transação
ativa (indicada pela opção `"session"`), seguidos
pelo [URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).

### Parâmetros

`namespace` ([string](language.types.string.md))
:   Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`).

`query` ([MongoDB\Driver\Query](class.mongodb-driver-query.md))
:   A consulta a ser executada.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | readPreference | [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) | Uma preferência de leitura a ser usada para selecionar um servidor para a operação. |
    | session | [MongoDB\Driver\Session](class.mongodb-driver-session.md) | Uma sessão para associar à operação. |

### Valor Retornado

Retorna [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) em caso de sucesso.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros (ex.: operadores inválidos de consulta).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | O parâmetro `options` não aceita mais uma instância de [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md). |
| PECL mongodb 1.21.0 | Passar um objeto [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) como `options` foi descontinuado e será removido na versão 2.0. |
| PECL mongodb 1.4.0 | O terceiro parâmetro agora é um array `options`. Para compatibilidade com versões anteriores, este parâmetro ainda aceitará um objeto [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md). |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Manager::executeQuery()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);
$bulk->insert(['x' => 2]);
$bulk->insert(['x' => 3]);
$manager->executeBulkWrite('db.collection', $bulk);

$filter = ['x' => ['$gt' => 1]];
$options = [
    'projection' => ['_id' => 0],
    'sort' => ['x' => -1],
];

$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('db.collection', $query);

foreach ($cursor as $document) {
    var_dump($document);
}

?>
```

O exemplo acima produzirá:

```
object(stdClass)#6 (1) {
  ["x"]=>
  int(3)
}
object(stdClass)#7 (1) {
  ["x"]=>
  int(2)
}
```

**Exemplo #2 Limitando o tempo de execução de uma consulta**

A opção `"maxTimeMS"`
da classe[MongoDB\Driver\Query](class.mongodb-driver-query.md) pode ser usada para limitar o
tempo de execução de uma consulta. Observe que esse limite de tempo é aplicado no
lado do servidor e não leva em consideração a latência da rede. Consulte
[» Encerrar Operações em Execução](https://www.mongodb.com/docs/manual/tutorial/terminate-running-operations/#maxtimems)
no manual do MongoDB para obter mais informações.

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');

$filter = ['x' => ['$gt' => 1]];
$options = [
    'maxTimeMS' => 1000,
];

$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('db.collection', $query);

foreach ($cursor as $document) {
    var_dump($document);
}

?>
```

Se a consulta não for concluída após um segundo de tempo de execução no
servidor, uma
[MongoDB\Driver\Exception\ExecutionTimeoutException](class.mongodb-driver-exception-executiontimeoutexception.md)
será lançada.

### Veja também

- [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)
- [MongoDB\Driver\Query](class.mongodb-driver-query.md)
- [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md)
- [MongoDB\Driver\Server::executeQuery()](mongodb-driver-server.executequery.md) - Executa uma consulta de banco de dados neste servidor

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
