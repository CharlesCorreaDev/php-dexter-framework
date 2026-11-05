# Classe Schema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-schema.php

---

# Classe Schema

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\Schema**
implements
[mysql\_xdevapi\DatabaseObject](class.mysql-xdevapi-databaseobject.md) {

/\* Propriedades \*/

public
[$name](class.mysql-xdevapi-schema.md#mysql-xdevapi-schema.props.name);

/\* Métodos \*/

public function **createCollection**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$validate` = ?): [mysql\_xdevapi\Collection](class.mysql-xdevapi-collection.md)

public function **dropCollection**([string](language.types.string.md) `$collection_name`): [bool](language.types.boolean.md)

public function **existsInDatabase**(): [bool](language.types.boolean.md)

public function **getCollection**([string](language.types.string.md) `$name`): [mysql\_xdevapi\Collection](class.mysql-xdevapi-collection.md)

public function **getCollectionAsTable**([string](language.types.string.md) `$name`): [mysql\_xdevapi\Table](class.mysql-xdevapi-table.md)

public function **getCollections**(): [array](language.types.array.md)

public function **getName**(): [string](language.types.string.md)

public function **getSession**(): [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md)

public function **getTable**([string](language.types.string.md) `$name`): [mysql\_xdevapi\Table](class.mysql-xdevapi-table.md)

public function **getTables**(): [array](language.types.array.md)

}

## Propriedades

name

## Índice

- [Schema::\_\_construct](mysql-xdevapi-schema.construct.md) — Construtor de Schema
- [Schema::createCollection](mysql-xdevapi-schema.createcollection.md) — Adiciona coleção ao esquema
- [Schema::dropCollection](mysql-xdevapi-schema.dropcollection.md) — Remove coleção do esquema
- [Schema::existsInDatabase](mysql-xdevapi-schema.existsindatabase.md) — Verifica se existe no banco de dados
- [Schema::getCollection](mysql-xdevapi-schema.getcollection.md) — Obtém coleção do esquema
- [Schema::getCollectionAsTable](mysql-xdevapi-schema.getcollectionastable.md) — Obtém uma coleção como um objeto Table
- [Schema::getCollections](mysql-xdevapi-schema.getcollections.md) — Obtém todas as coleções do esquema
- [Schema::getName](mysql-xdevapi-schema.getname.md) — Obtém o nome do esquema
- [Schema::getSession](mysql-xdevapi-schema.getsession.md) — Obtém a sessão do esquema
- [Schema::getTable](mysql-xdevapi-schema.gettable.md) — Obtém tabela do esquema
- [Schema::getTables](mysql-xdevapi-schema.gettables.md) — Obtém tabelas do esquema

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
