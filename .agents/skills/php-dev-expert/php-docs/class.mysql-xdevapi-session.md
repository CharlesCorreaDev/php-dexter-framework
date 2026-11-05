# Classe Session

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-session.php

---

# Classe Session

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\Session**
{

/\* Métodos \*/

public function **close**(): [bool](language.types.boolean.md)

public function **commit**(): [Object](language.types.object.md)

public function **createSchema**([string](language.types.string.md) `$schema_name`): [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

public function **dropSchema**([string](language.types.string.md) `$schema_name`): [bool](language.types.boolean.md)

public function **generateUUID**(): [string](language.types.string.md)

public function **getDefaultSchema**(): [?](language.types.null.md)[mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

public function **getSchema**([string](language.types.string.md) `$schema_name`): [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

public function **getSchemas**(): [array](language.types.array.md)

public function **getServerVersion**(): [int](language.types.integer.md)

public function **listClients**(): [array](language.types.array.md)

public function **quoteName**([string](language.types.string.md) `$name`): [string](language.types.string.md)

public function **releaseSavepoint**([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function **rollback**(): [void](language.types.void.md)

public function **rollbackTo**([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function **setSavepoint**([string](language.types.string.md) `$name` = ?): [string](language.types.string.md)

public function **sql**([string](language.types.string.md) `$query`): [mysql\_xdevapi\SqlStatement](class.mysql-xdevapi-sqlstatement.md)

public function **startTransaction**(): [void](language.types.void.md)

}

## Índice

- [Session::close](mysql-xdevapi-session.close.md) — Fecha sessão
- [Session::commit](mysql-xdevapi-session.commit.md) — Confirma a transação
- [Session::\_\_construct](mysql-xdevapi-session.construct.md) — Construtor de Description
- [Session::createSchema](mysql-xdevapi-session.createschema.md) — Cria novo esquema
- [Session::dropSchema](mysql-xdevapi-session.dropschema.md) — Remove um esquema
- [Session::generateUUID](mysql-xdevapi-session.generateuuid.md) — Obtém novo UUID
- [Session::getDefaultSchema](mysql-xdevapi-session.getdefaultschema.md) — Obtém o nome de esquema padrão
- [Session::getSchema](mysql-xdevapi-session.getschema.md) — Obtém um novo objeto de esquema
- [Session::getSchemas](mysql-xdevapi-session.getschemas.md) — Obtém os esquemas
- [Session::getServerVersion](mysql-xdevapi-session.getserverversion.md) — Obtém a versão do servidor
- [Session::listClients](mysql-xdevapi-session.listclients.md) — Obtém a lista de clientes
- [Session::quoteName](mysql-xdevapi-session.quotename.md) — Adiciona escape
- [Session::releaseSavepoint](mysql-xdevapi-session.releasesavepoint.md) — Libera o ponto de gravação definido
- [Session::rollback](mysql-xdevapi-session.rollback.md) — Reverte a transação
- [Session::rollbackTo](mysql-xdevapi-session.rollbackto.md) — Reverte a transação para um ponto de gravação
- [Session::setSavepoint](mysql-xdevapi-session.setsavepoint.md) — Cria ponto de gravação
- [Session::sql](mysql-xdevapi-session.sql.md) — Cria consulta SQL
- [Session::startTransaction](mysql-xdevapi-session.starttransaction.md) — Inicia transação

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
