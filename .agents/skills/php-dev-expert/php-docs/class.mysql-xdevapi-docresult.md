# Classe DocResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-docresult.php

---

# Classe DocResult

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\DocResult**
implements
[mysql\_xdevapi\BaseResult](class.mysql-xdevapi-baseresult.md), [Traversable](class.traversable.md) {

/\* Métodos \*/

public function **fetchAll**(): [array](language.types.array.md)

public function **fetchOne**(): [array](language.types.array.md)

public function **getWarnings**(): [Array](language.types.array.md)

public function **getWarningsCount**(): [int](language.types.integer.md)

}

## Índice

- [DocResult::\_\_construct](mysql-xdevapi-docresult.construct.md) — Construtor de DocResult
- [DocResult::fetchAll](mysql-xdevapi-docresult.fetchall.md) — Obtém todas as linhas
- [DocResult::fetchOne](mysql-xdevapi-docresult.fetchone.md) — Obtém uma linha
- [DocResult::getWarnings](mysql-xdevapi-docresult.getwarnings.md) — Obtém alertas da última operação
- [DocResult::getWarningsCount](mysql-xdevapi-docresult.getwarningscount.md) — Obtém a contagem de alertas da última operação

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
