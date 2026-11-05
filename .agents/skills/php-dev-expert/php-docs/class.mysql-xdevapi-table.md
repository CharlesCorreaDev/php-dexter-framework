# Classe Table

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-table.php

---

# Classe Table

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

Fornece acesso à tabela através das instruções INSERT/SELECT/UPDATE/DELETE.

## Resumo da classe

class **mysql\_xdevapi\Table**
implements
[mysql\_xdevapi\SchemaObject](class.mysql-xdevapi-schemaobject.md) {

/\* Propriedades \*/

public
[$name](class.mysql-xdevapi-table.md#mysql-xdevapi-table.props.name);

/\* Métodos \*/

public function **count**(): [int](language.types.integer.md)

public function **delete**(): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

public function **existsInDatabase**(): [bool](language.types.boolean.md)

public function **getName**(): [string](language.types.string.md)

public function **getSchema**(): [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

public function **getSession**(): [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md)

public function **insert**([mixed](language.types.mixed.md) `$columns`, [mixed](language.types.mixed.md) `...$more_columns`): [mysql\_xdevapi\TableInsert](class.mysql-xdevapi-tableinsert.md)

public function **isView**(): [bool](language.types.boolean.md)

public function **select**([mixed](language.types.mixed.md) `$columns`, [mixed](language.types.mixed.md) `...$more_columns`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **update**(): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

}

## Propriedades

name

## Índice

- [Table::\_\_construct](mysql-xdevapi-table.construct.md) — Construtor de Table
- [Table::count](mysql-xdevapi-table.count.md) — Obtém contagem de linhas
- [Table::delete](mysql-xdevapi-table.delete.md) — Deleta linhas da tabela
- [Table::existsInDatabase](mysql-xdevapi-table.existsindatabase.md) — Verifica se uma tabela existe no banco de dados
- [Table::getName](mysql-xdevapi-table.getname.md) — Obtém nome da tabela
- [Table::getSchema](mysql-xdevapi-table.getschema.md) — Obtém esquema da tabela
- [Table::getSession](mysql-xdevapi-table.getsession.md) — Obtém a sessão da tabela
- [Table::insert](mysql-xdevapi-table.insert.md) — Insere linhas na tabela
- [Table::isView](mysql-xdevapi-table.isview.md) — Verifica se a tabela é uma visualização
- [Table::select](mysql-xdevapi-table.select.md) — Seleciona linhas da tabela
- [Table::update](mysql-xdevapi-table.update.md) — Atualiza linhas na tabela

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
