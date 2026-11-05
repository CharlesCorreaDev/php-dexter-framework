# A classe MongoDB\Driver\Cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-cursor.php

---

# A classe MongoDB\Driver\Cursor

(mongodb >=1.0.0)

## Introdução

A classe **MongoDB\Driver\Cursor** encapsula
os resultados de um comando ou consulta MongoDB e podem ser retornados por
[MongoDB\Driver\Manager::executeCommand()](mongodb-driver-manager.executecommand.md) ou
[MongoDB\Driver\Manager::executeQuery()](mongodb-driver-manager.executequery.md), respectivamente.

## Resumo da classe

final

class **MongoDB\Driver\Cursor**
implements
[MongoDB\Driver\CursorInterface](class.mongodb-driver-cursorinterface.md) {

/\* Métodos \*/

final private function [\_\_construct](mongodb-driver-cursor.construct.md)()

public function [current](mongodb-driver-cursor.current.md)(): [array](language.types.array.md)|[object](language.types.object.md)|[null](language.types.null.md)

final public function [getId](mongodb-driver-cursor.getid.md)(): [MongoDB\BSON\Int64](class.mongodb-bson-int64.md)

final public function [getServer](mongodb-driver-cursor.getserver.md)(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

final public function [isDead](mongodb-driver-cursor.isdead.md)(): [bool](language.types.boolean.md)

public function [key](mongodb-driver-cursor.key.md)(): [int](language.types.integer.md)

public function [next](mongodb-driver-cursor.next.md)(): [void](language.types.void.md)

public function [rewind](mongodb-driver-cursor.rewind.md)(): [void](language.types.void.md)

final public function [setTypeMap](mongodb-driver-cursor.settypemap.md)([array](language.types.array.md) `$typemap`): [void](language.types.void.md)

final public function [toArray](mongodb-driver-cursor.toarray.md)(): [array](language.types.array.md)

public function [valid](mongodb-driver-cursor.valid.md)(): [bool](language.types.boolean.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.9.0 | Implementa [Iterator](class.iterator.md). |
| PECL mongodb 1.6.0 | Implementa [MongoDB\Driver\CursorInterface](class.mongodb-driver-cursorinterface.md), que estende [Traversable](class.traversable.md). |

## Examples

**Exemplo #1 Lendo um conjunto de resultados**

[MongoDB\Driver\Manager::executeCommand()](mongodb-driver-manager.executecommand.md) e
[MongoDB\Driver\Manager::executeQuery()](mongodb-driver-manager.executequery.md) ambos retornam
seus resultados como um objeto **MongoDB\Driver\Cursor**.
Este objeto pode ser usado para iterar sobre conjunto de resultados do comando
ou consulta.

Como **MongoDB\Driver\Cursor** implementa a
interface [Traversable](class.traversable.md), pode-se simplesmente
iterar pelo conjunto de resultados com
[`foreach`](control-structures.foreach.md).

```
<?php

$manager = new MongoDB\Driver\Manager();

/* Insere alguns documentos para que a consulta retorne informação */
$bulkWrite = new MongoDB\Driver\BulkWrite;
$bulkWrite->insert(['name' => 'Ceres', 'size' => 946, 'distance' => 2.766]);
$bulkWrite->insert(['name' => 'Vesta', 'size' => 525, 'distance' => 2.362]);
$manager->executeBulkWrite("test.asteroids", $bulkWrite);

/* Consulta todos os itens na coleção */
$query = new MongoDB\Driver\Query( [] );

/* Consulta a coleção "asteroids" do banco de dados "test" */
$cursor = $manager->executeQuery("test.asteroids", $query);

/* $cursor agora contém um objeto que envolve o conjunto de resultados. Pode-se
 * usar foreach() para iterar por todo o resultado */
foreach($cursor as $document) {
    print_r($document);
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
stdClass Object
(
    [_id] => MongoDB\BSON\ObjectId Object
        (
            [oid] => 5a4cff2f122d3321565d8cc2
        )

    [name] => Ceres
    [size] => 946
    [distance] => 2.766
)
stdClass Object
(
    [_id] => MongoDB\BSON\ObjectId Object
        (
            [oid] => 5a4cff2f122d3321565d8cc3
        )

    [name] => Vesta
    [size] => 525
    [distance] => 2.362
)
```

**Exemplo #2 Lendo um conjunto de resultados com um cursor adaptável**

[» Cursores adaptáveis](https://www.mongodb.com/docs/manual/core/tailable-cursors)
são um tipo especial de cursor no MongoDB que permite ao cliente ler alguns
resultados e então esperar até que mais documentos fiquem disponíveis. Esses cursores
são usado principalmente com
[» Coleções Limitadas](https://www.mongodb.com/docs/manual/core/capped-collections)
e [» Fluxos de Alterações](https://www.mongodb.com/docs/manual/changeStreams).

Enquanto os cursores normais podem ser iterados com `foreach`,
esse método não irá funcionar com cursores adaptáveis. Quando
`foreach` é usado com um cursor adaptável, a repetição irá
terminar quando alcançar o final do conjunto de resultados inicial. A tentativa de
continuar a iteração no cursor com um segundo
`foreach` lançaria uma exceção, já que o PHP tentaria
retroceder o cursor. De forma similar aos objetos de resultados em outros drivers de bancos de dados,
os cursores no MongoDB suportam apenas iteração para a frente, ou seja, eles não podem
ser retrocedidos.

Para ler continuamente a partir de um cursor adaptável, o objeto Cursor
deve ser encapsulado com um [IteratorIterator](class.iteratoriterator.md). Isso
permite que a aplicação controle diretamente a iteração do cursor, evite
retroceder inadvertidamente o cursor e decida quando esperar por novos resultados
ou interromper totalmente a iteração.

Para demonstrar um cursor adaptável em ação, serão utilizados dois
scripts: um "produtor" e um "consumidor". O script produtor criará uma nova
coleção limitada usando o
comando [» create](https://www.mongodb.com/docs/manual/reference/command/create)
e procederá à inserção de um novo documento nessa coleção a cada segundo.

```
<?php

$manager = new MongoDB\Driver\Manager;

$manager->executeCommand('test', new MongoDB\Driver\Command([
    'create' => 'asteroids',
    'capped' => true,
    'size' => 1048576,
]));

while (true) {
    $bulkWrite = new MongoDB\Driver\BulkWrite;
    $bulkWrite->insert(['createdAt' => new MongoDB\BSON\UTCDateTime]);
    $manager->executeBulkWrite('test.asteroids', $bulkWrite);

    sleep(1);
}

?>
```

Com o script produtor ainda em execução, um segundo script consumidor pode ser
executado para ler os documentos inseridos usando um cursor adaptável, indicado
pelas opções `tailable` e `awaitData`
para o método [MongoDB\Driver\Query::\_\_construct()](mongodb-driver-query.construct.md).

```
<?php

$manager = new MongoDB\Driver\Manager;

$query = new MongoDB\Driver\Query([], [
    'tailable' => true,
    'awaitData' => true,
]);

$cursor = $manager->executeQuery('test.asteroids', $query);

$iterator = new IteratorIterator($cursor);

$iterator->rewind();

while (true) {
    if ($iterator->valid()) {
        $document = $iterator->current();
        printf("Documento consumido criado em: %s\n", $document->createdAt);
    }

    $iterator->next();
}

?>
```

O script consumidor começará mostrando rapidamente todos os documentos disponíveis
na coleção limitada (como se `foreach` tivesse sido usado);
entretanto, ele não terminará ao atingir o final do conjunto de resultados inicial.
Como o cursor pode ser seguido, chamar
[IteratorIterator::next()](iteratoriterator.next.md) bloqueará e aguardará
resultados adicionais. [IteratorIterator::valid()](iteratoriterator.valid.md) também é
usado para verificar se realmente há dados disponíveis para leitura em cada etapa.

> **Nota**:
>
> Este exemplo usa a opção de consulta `awaitData` para
> instruir o servidor a bloquear por um curto período (por exemplo, um segundo) no
> final do conjunto de resultados antes de retornar uma resposta ao driver. Isso é
> usado para evitar que o driver faça uma sondagem agressiva no servidor quando não
> houver resultados disponíveis. A opção `maxAwaitTimeMS` pode ser
> usada em conjunto com `tailable` e
> `awaitData` para especificar a quantidade de tempo que o servidor
> deve bloquear quando atingir o final do o conjunto de resultados.

## Erros/Exceções

Ao iterar sobre o objeto cursor, os dados BSON são convertidos em variáveis ​
​PHP. Esta iteração pode causar as seguintes exceções:

- Lança uma
  [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se
  uma classe no mapa de tipos não puder ser instanciada ou não implementar
  [MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md).
- Lança uma exceção [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se a entrada não contiver exatamente um documento BSON. Os possíveis motivos incluem, mas não estão limitados a, BSON inválido, dados extras (depois de ler um documento BSON) ou um erro inesperado da [» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson).

## Índice

- [MongoDB\Driver\Cursor::\_\_construct](mongodb-driver-cursor.construct.md) — Cria um novo cursor (não utilizado)
- [MongoDB\Driver\Cursor::current](mongodb-driver-cursor.current.md) — Retorna o elemento atual
- [MongoDB\Driver\Cursor::getId](mongodb-driver-cursor.getid.md) — Retorna o ID para este cursor
- [MongoDB\Driver\Cursor::getServer](mongodb-driver-cursor.getserver.md) — Retorna o servidor associado a este cursor
- [MongoDB\Driver\Cursor::isDead](mongodb-driver-cursor.isdead.md) — Verifica se o cursor está esgotado ou pode ter resultados adicionais
- [MongoDB\Driver\Cursor::key](mongodb-driver-cursor.key.md) — Retorna o índice do resultado atual dentro do cursor
- [MongoDB\Driver\Cursor::next](mongodb-driver-cursor.next.md) — Avança o cursor para o próximo resultado
- [MongoDB\Driver\Cursor::rewind](mongodb-driver-cursor.rewind.md) — Retrocede o cursor para o primeiro resultado
- [MongoDB\Driver\Cursor::setTypeMap](mongodb-driver-cursor.settypemap.md) — Define um mapa de tipos a ser usado para desserialização BSON
- [MongoDB\Driver\Cursor::toArray](mongodb-driver-cursor.toarray.md) — Retorna um array contendo todos os resultados deste cursor
- [MongoDB\Driver\Cursor::valid](mongodb-driver-cursor.valid.md) — Verifica se a posição atual no cursor é válida

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
