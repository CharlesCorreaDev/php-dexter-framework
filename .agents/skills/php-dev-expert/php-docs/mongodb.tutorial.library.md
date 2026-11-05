# Usando a Biblioteca do PHP para o MongoDB (PHPLIB)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.tutorial.library.php

---

## Usando a Biblioteca do PHP para o MongoDB (PHPLIB)

Após a configuração inicial da extensão, continuaremos explicando como começar
a usar a biblioteca correspondente no nível do usuário para escrever nosso primeiro projeto.

## Instalando a Biblioteca do PHP com o Composer

A última coisa que ainda precisamos instalar para começar a usar o aplicativo
em si é a biblioteca PHP.

A biblioteca precisa ser instalada com o
[» Composer](https://getcomposer.org/), um gerenciador de pacotes
para PHP. Instruções para instalar o Composer em diversas plataformas podem ser
encontradas em seu site.

Instale a biblioteca executando:

```
$ composer require mongodb/mongodb
```

O resultado será algo como:

```
./composer.json has been created
Loading composer repositories with package information
Updating dependencies (including require-dev)
  - Installing mongodb/mongodb (1.0.0)
    Downloading: 100%

Writing lock file
Generating autoload files
```

O Composer criará vários arquivos: `composer.json`,
`composer.lock` e um diretório `vendor` que
conterá a biblioteca e quaisquer outras dependências do seu projeto pode exigir.

## Usando a Biblioteca do PHP

Além de gerenciar suas dependências, o Composer também fornecerá
um carregador automático (para as classes dessas dependências). Certifique-se de que
ele esteja incluído no início do seu script ou no código de inicialização da sua
aplicação:

```
<?php
// Este caminho deve apontar para o carregador automático do Composer
require 'vendor/autoload.php';
```

Com isto feito, agora você pode usar qualquer funcionalidade descrita na
[» documentação da biblioteca](https://www.mongodb.com/docs/php-library/current/).

Se você usou drivers MongoDB em outras linguagens, a API da biblioteca
deverá parecer familiar. Ele contém uma
classe [» Client](https://www.mongodb.com/docs/php-library/current/reference/class/MongoDBClient/)
para conexão com o MongoDB, uma
classe [» Database](https://www.mongodb.com/docs/php-library/current/reference/class/MongoDBDatabase/)
para operações em nível de banco de dados (por exemplo, comandos, gerenciamento de coleção)
e uma
classe [» Collection](https://www.mongodb.com/docs/php-library/current/reference/class/MongoDBCollection)
para operações em nível de coleção (por exemplo,
métodos [» CRUD](https://en.wikipedia.org/wiki/Create,_read,_update_and_delete), gerenciamento de índice).

Por exemplo, é assim que você insere um documento na
coleção *beers* do banco de dados
*demo*:

```
<?php
require 'vendor/autoload.php'; // inclui o auto-carregador do Composer

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->demo->beers;

$result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

echo "Inserido com ID do Objeto '{$result->getInsertedId()}'";
?>
```

Como o documento inserido não continha um campo `_id`, a
extensão irá gerar um [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para
o servidor usar como `_id`. Este valor também é disponibilizado
ao chamador por meio do objeto de resultado retornado pelo método
`insertOne`.

Após a inserção, você pode consultar os dados que acabou de inserir.
Para isso, você usa o método `find`, que retorna um cursor
iterável:

```
<?php
require 'vendor/autoload.php'; // inclui o auto-carregador do Composer

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->demo->beers;

$result = $collection->find( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

foreach ($result as $entry) {
    echo $entry['_id'], ': ', $entry['name'], "\n";
}
?>
```

Embora possa não ser aparente nos exemplos, os documentos e arrays do BSON são
desserializados como classes especiais na biblioteca por padrão. Essas classes
estendem [ArrayObject](class.arrayobject.md) para usabilidade e implementam as
interfaces [MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md) e
[MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md) da extensão para
garantir que os valores preservem seu tipo quando serializados de volta para BSON. Isso
evita uma ressalva na extensão `mongo` legada, onde arrays
podem se transformar em documentos e vice-versa. Consulte a
especificação [Dados Persistentes](mongodb.persistence.md) para obter mais informações sobre
como os valores são convertidos entre PHP e BSON.

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
