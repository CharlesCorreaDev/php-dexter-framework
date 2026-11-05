# Classe Statement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-statement.php

---

# Classe Statement

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\Statement**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[EXECUTE\_ASYNC](class.mysql-xdevapi-statement.md#mysql-xdevapi-statement.constants.execute-async) = 1;

const
[int](language.types.integer.md)
[BUFFERED](class.mysql-xdevapi-statement.md#mysql-xdevapi-statement.constants.buffered) = 2;

/\* Métodos \*/

public function **getNextResult**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **getResult**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **hasMoreResults**(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`mysql_xdevapi\Statement::EXECUTE_ASYNC`**

**`mysql_xdevapi\Statement::BUFFERED`**

## Índice

- [Statement::\_\_construct](mysql-xdevapi-statement.construct.md) — Construtor de Statement
- [Statement::getNextResult](mysql-xdevapi-statement.getnextresult.md) — Obtém o próximo resultado
- [Statement::getResult](mysql-xdevapi-statement.getresult.md) — Obtém resultado
- [Statement::hasMoreResults](mysql-xdevapi-statement.hasmoreresults.md) — Verifica se há mais resultados

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
