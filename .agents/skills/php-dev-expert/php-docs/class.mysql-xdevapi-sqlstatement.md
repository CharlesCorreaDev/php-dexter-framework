# Classe SqlStatement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-sqlstatement.php

---

# Classe SqlStatement

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\SqlStatement**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[EXECUTE\_ASYNC](class.mysql-xdevapi-sqlstatement.md#mysql-xdevapi-sqlstatement.constants.execute-async) = 1;

const
[int](language.types.integer.md)
[BUFFERED](class.mysql-xdevapi-sqlstatement.md#mysql-xdevapi-sqlstatement.constants.buffered) = 2;

/\* Propriedades \*/

public
[$statement](class.mysql-xdevapi-sqlstatement.md#mysql-xdevapi-sqlstatement.props.statement);

/\* Métodos \*/

public function **bind**([string](language.types.string.md) `$param`): [mysql\_xdevapi\SqlStatement](class.mysql-xdevapi-sqlstatement.md)

public function **execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **getNextResult**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **getResult**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **hasMoreResults**(): [bool](language.types.boolean.md)

}

## Propriedades

statement

## Constantes predefinidas

**`mysql_xdevapi\SqlStatement::EXECUTE_ASYNC`**

**`mysql_xdevapi\SqlStatement::BUFFERED`**

## Índice

- [SqlStatement::bind](mysql-xdevapi-sqlstatement.bind.md) — Vincula parâmetros da instrução
- [SqlStatement::\_\_construct](mysql-xdevapi-sqlstatement.construct.md) — Construtor de Description
- [SqlStatement::execute](mysql-xdevapi-sqlstatement.execute.md) — Executa a operação
- [SqlStatement::getNextResult](mysql-xdevapi-sqlstatement.getnextresult.md) — Obtém o próximo resultado
- [SqlStatement::getResult](mysql-xdevapi-sqlstatement.getresult.md) — Obtém resultado
- [SqlStatement::hasMoreResults](mysql-xdevapi-sqlstatement.hasmoreresults.md) — Verifica por mais resultados

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
