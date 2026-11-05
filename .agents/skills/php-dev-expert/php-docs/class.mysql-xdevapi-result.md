# Classe Result

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-result.php

---

# Classe Result

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\Result**
implements
[mysql\_xdevapi\BaseResult](class.mysql-xdevapi-baseresult.md), [Traversable](class.traversable.md) {

/\* Métodos \*/

public function **getAffectedItemsCount**(): [int](language.types.integer.md)

public function **getAutoIncrementValue**(): [int](language.types.integer.md)

public function **getGeneratedIds**(): [array](language.types.array.md)

public function **getWarnings**(): [array](language.types.array.md)

public function **getWarningsCount**(): [int](language.types.integer.md)

}

## Índice

- [Result::\_\_construct](mysql-xdevapi-result.construct.md) — Construtor de Result
- [Result::getAffectedItemsCount](mysql-xdevapi-result.getaffecteditemscount.md) — Obtém contagem de linhas afetadas
- [Result::getAutoIncrementValue](mysql-xdevapi-result.getautoincrementvalue.md) — Obtém valor de incremento automático
- [Result::getGeneratedIds](mysql-xdevapi-result.getgeneratedids.md) — Obtém os IDs gerados
- [Result::getWarnings](mysql-xdevapi-result.getwarnings.md) — Obtém alertas da última operação
- [Result::getWarningsCount](mysql-xdevapi-result.getwarningscount.md) — Obtém contagem de alertas da última operação

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
