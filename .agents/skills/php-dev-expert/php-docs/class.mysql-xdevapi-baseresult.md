# Interface BaseResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-baseresult.php

---

# Interface BaseResult

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\BaseResult**
{

/\* Métodos \*/

abstract public function **getWarnings**(): [array](language.types.array.md)

abstract public function **getWarningsCount**(): [int](language.types.integer.md)

}

## Índice

- [BaseResult::getWarnings](mysql-xdevapi-baseresult.getwarnings.md) — Buscar alertas da última operação
- [BaseResult::getWarningsCount](mysql-xdevapi-baseresult.getwarningscount.md) — Busca contagem de alertas da última operação

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
