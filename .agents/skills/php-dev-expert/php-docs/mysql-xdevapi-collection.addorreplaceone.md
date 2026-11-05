# Adiciona ou substitui um documento na coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.addorreplaceone.php

---

# Collection::addOrReplaceOne

(No version information available, might only be in Git)

Collection::addOrReplaceOne — Adiciona ou substitui um documento na coleção

### Descrição

public function **mysql\_xdevapi\Collection::addOrReplaceOne**([string](language.types.string.md) `$id`, [string](language.types.string.md) `$doc`): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

Adiciona um novo documento, ou substitui um documento se ele já existir.

Aqui estão vários cenários para este método:

- Se nem o id nem qualquer valor único de chave conflitar com algum documento na coleção,
  o documento é adicionado.
- Se o id não corresponder a nenhum documento mas uma ou mais valores únicos de chave conflitarem com um
  documento na coleção, um erro é emitido.
- Se o id corresponder a um documento existente e não houver chaves únicas definidas para a coleção,
  o documento é substituído.
- Se o id corresponder a um documento existente e, todas as chaves únicas no documento substituto
  corresponderem ao mesmo documento ou não conflitarem com nenhum outro documento na coleção,
  o documento é substituído.
- Se o id corresponder a um documento existente e uma ou mais chaves únicas corresponderem a um documento diferente
  na coleção, um erro é emitido.

### Parâmetros

`id`
:   Este é o id de filtro. Se este id ou qualquer outro campo que tiver um índice único já
    existir na coleção, o documento correspondente será atualizado.

    Por padrão, este id é gerado automaticamente pelo servidor MySQL quando o
    registro é adicionado e é referenciado como um campo com o nome '\_id'.

`doc`
:   Este é o documento a ser inserido ou substituído, que é uma string JSON.

### Valor Retornado

Um objeto Result.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::addOrReplaceOne()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

$collection = $schema->getCollection("people");

// Usando add()
$result = $collection->add('{"name": "Wilma", "age": 23, "job": "Teacher"}')->execute();

// Usando addOrReplaceOne()
// Nota: aqui está sendo passado um valor conhecido de _id
$result = $collection->addOrReplaceOne('00005b6b53610000000000000056', '{"name": "Fred",  "age": 21, "job": "Construction"}');

?>
```

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
