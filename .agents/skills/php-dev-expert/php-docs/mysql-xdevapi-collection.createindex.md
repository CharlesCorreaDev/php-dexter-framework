# Cria índice na coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.createindex.php

---

# Collection::createIndex

(No version information available, might only be in Git)

Collection::createIndex — Cria índice na coleção

### Descrição

public function **mysql\_xdevapi\Collection::createIndex**([string](language.types.string.md) `$index_name`, [string](language.types.string.md) `$index_desc_json`): [void](language.types.void.md)

Cria um índice na coleção.

Uma exceção é lançada se um índice com o mesmo nome já existir,
ou se a definição do índice não estiver formada corretamente.

### Parâmetros

`index_name`
:   O nome do índice a ser criado. O nome precisa ser válido da mesma forma que os nomes
    aceitos pela consulta SQL `CREATE INDEX`.

`index_desc_json`
:   Definição do índice a ser criado. Contém um array de objetos IndexField,
    e cada objeto descreve um único documento membro para incluir no índice
    e uma string opcional para o tipo de índice, que pode ser INDEX (padrão) ou SPATIAL.

    Uma descrição de um único IndexField consiste nos campos a seguir:

    - `field`: string, o caminho completo para o documento membro ou campo a ser indexado.
    - `type`: string, um dos tipos de coluna suportados pelo SQL para mapear o campo.
      Para tipos numéricos, a palavra-chave opcional UNSIGNED pode ser incluída na sequência.
      Para o tipo TEXT, o comprimento a considerar para a indexação pode ser incluído.
    - `required`: booleano, (opcional) TRUE se for necessário que o campo exista no documento.
      O padrão é **`false`**, exceto para `GEOJSON` onde o padrão é **`true`**.
    - `options`: inteiro, (opcional) opções especiais para uso
      durante a decodificação de dados `GEOJSON`.
    - `srid`: inteiro, (opcional) valor srid para uso durante
      a decodificação de dados `GEOJSON`.

    É um erro incluir outros campos não descritos acima em documentos
    IndexDefinition ou IndexField.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::createIndex()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

// Criando um índice de texto
$collection->createIndex(
  'myindex1',
  '{"fields": [{
    "field": "$.name",
    "type": "TEXT(25)",
    "required": true}],
    "unique": false}'
);

// Um índice espacial
$collection->createIndex(
  'myindex2',
  '{"fields": [{
    "field": "$.home",
    "type": "GEOJSON",
    "required": true}],
    "type": "SPATIAL"}'
);

// Índice com múltiplos campos
$collection->createIndex(
  'myindex3',
  '{"fields": [
    {
      "field": "$.name",
      "type": "TEXT(20)",
      "required": true
    },
    {
      "field": "$.age",
      "type": "INTEGER"
    },
    {
      "field": "$.job",
      "type": "TEXT(30)",
      "required": false
    }
  ],
  "unique": true
  }'
);
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
