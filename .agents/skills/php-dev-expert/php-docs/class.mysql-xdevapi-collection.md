# Classe Collection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-collection.php

---

# Classe Collection

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\Collection**
implements
[mysql\_xdevapi\SchemaObject](class.mysql-xdevapi-schemaobject.md) {

/\* Propriedades \*/

public
[$name](class.mysql-xdevapi-collection.md#mysql-xdevapi-collection.props.name);

/\* Métodos \*/

public function **add**([mixed](language.types.mixed.md) `$document`): [mysql\_xdevapi\CollectionAdd](class.mysql-xdevapi-collectionadd.md)

public function **addOrReplaceOne**([string](language.types.string.md) `$id`, [string](language.types.string.md) `$doc`): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **count**(): [int](language.types.integer.md)

public function **createIndex**([string](language.types.string.md) `$index_name`, [string](language.types.string.md) `$index_desc_json`): [void](language.types.void.md)

public function **dropIndex**([string](language.types.string.md) `$index_name`): [bool](language.types.boolean.md)

public function **existsInDatabase**(): [bool](language.types.boolean.md)

public function **find**([string](language.types.string.md) `$search_condition` = ?): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **getName**(): [string](language.types.string.md)

public function **getOne**([string](language.types.string.md) `$id`): Document

public function **getSchema**(): Schema Object

public function **getSession**(): Session

public function **modify**([string](language.types.string.md) `$search_condition`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **remove**([string](language.types.string.md) `$search_condition`): [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md)

public function **removeOne**([string](language.types.string.md) `$id`): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **replaceOne**([string](language.types.string.md) `$id`, [string](language.types.string.md) `$doc`): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

}

## Propriedades

name

## Índice

- [Collection::add](mysql-xdevapi-collection.add.md) — Adiciona um documento na coleção
- [Collection::addOrReplaceOne](mysql-xdevapi-collection.addorreplaceone.md) — Adiciona ou substitui um documento na coleção
- [Collection::\_\_construct](mysql-xdevapi-collection.construct.md) — Construtor de Collection
- [Collection::count](mysql-xdevapi-collection.count.md) — Obtém a contagem de documentos
- [Collection::createIndex](mysql-xdevapi-collection.createindex.md) — Cria índice na coleção
- [Collection::dropIndex](mysql-xdevapi-collection.dropindex.md) — Remove um índice da coleção
- [Collection::existsInDatabase](mysql-xdevapi-collection.existsindatabase.md) — Verifica se uma coleção existe no banco de dados
- [Collection::find](mysql-xdevapi-collection.find.md) — Pesquisa por um documento
- [Collection::getName](mysql-xdevapi-collection.getname.md) — Obtém o nome da coleção
- [Collection::getOne](mysql-xdevapi-collection.getone.md) — Obtém um documento
- [Collection::getSchema](mysql-xdevapi-collection.getschema.md) — Obtém o objeto de esquema
- [Collection::getSession](mysql-xdevapi-collection.getsession.md) — Obtém o objeto de sessão
- [Collection::modify](mysql-xdevapi-collection.modify.md) — Modifica documentos da coleção
- [Collection::remove](mysql-xdevapi-collection.remove.md) — Remove documentos da coleção
- [Collection::removeOne](mysql-xdevapi-collection.removeone.md) — Remove um documento da coleção
- [Collection::replaceOne](mysql-xdevapi-collection.replaceone.md) — Substitui um documento na coleção

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
