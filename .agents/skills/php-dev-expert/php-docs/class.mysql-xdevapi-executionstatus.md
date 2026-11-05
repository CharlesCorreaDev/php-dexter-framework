# Classe ExecutionStatus

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-executionstatus.php

---

# Classe ExecutionStatus

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\ExecutionStatus**
{

/\* Propriedades \*/

public
[$affectedItems](class.mysql-xdevapi-executionstatus.md#mysql-xdevapi-executionstatus.props.affecteditems);

public
[$matchedItems](class.mysql-xdevapi-executionstatus.md#mysql-xdevapi-executionstatus.props.matcheditems);

public
[$foundItems](class.mysql-xdevapi-executionstatus.md#mysql-xdevapi-executionstatus.props.founditems);

public
[$lastInsertId](class.mysql-xdevapi-executionstatus.md#mysql-xdevapi-executionstatus.props.lastinsertid);

public
[$lastDocumentId](class.mysql-xdevapi-executionstatus.md#mysql-xdevapi-executionstatus.props.lastdocumentid);

/\* Constructor \*/

private function **\_\_construct**()

}

## Propriedades

affectedItems

matchedItems

foundItems

lastInsertId

lastDocumentId

## Índice

- [ExecutionStatus::\_\_construct](mysql-xdevapi-executionstatus.construct.md) — Construtor de ExecutionStatus

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
