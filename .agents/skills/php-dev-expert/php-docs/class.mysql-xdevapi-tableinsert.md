# Classe TableInsert

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-tableinsert.php

---

# Classe TableInsert

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

Uma instrução para operações de inserção em uma tabela.

## Resumo da classe

class **mysql\_xdevapi\TableInsert**
implements
[mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md) {

/\* Métodos \*/

public function **execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **values**([array](language.types.array.md) `$row_values`): [mysql\_xdevapi\TableInsert](class.mysql-xdevapi-tableinsert.md)

}

## Índice

- [TableInsert::\_\_construct](mysql-xdevapi-tableinsert.construct.md) — Construtor de TableInsert
- [TableInsert::execute](mysql-xdevapi-tableinsert.execute.md) — Executa instrução de inserção
- [TableInsert::values](mysql-xdevapi-tableinsert.values.md) — Adiciona valores para inserção

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
