# Interface DatabaseObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-databaseobject.php

---

# Interface DatabaseObject

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\DatabaseObject**
{

/\* Métodos \*/

abstract public function **existsInDatabase**(): [bool](language.types.boolean.md)

abstract public function **getName**(): [string](language.types.string.md)

abstract public function **getSession**(): [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md)

}

## Índice

- [DatabaseObject::existsInDatabase](mysql-xdevapi-databaseobject.existsindatabase.md) — Verifica se um objeto existe em um banco de dados
- [DatabaseObject::getName](mysql-xdevapi-databaseobject.getname.md) — Obtém o nome do objeto
- [DatabaseObject::getSession](mysql-xdevapi-databaseobject.getsession.md) — Obtém o nome da sessão

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
