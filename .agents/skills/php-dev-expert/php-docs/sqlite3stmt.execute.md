# Executa uma declaração preparada e retorna um objeto de conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.execute.php

---

# SQLite3Stmt::execute

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Stmt::execute — Executa uma declaração preparada e retorna um objeto de conjunto de resultados

### Descrição

public function **SQLite3Stmt::execute**(): [SQLite3Result](class.sqlite3result.md)|[false](language.types.singleton.md)

Executa uma declaração preparada e retorna um objeto de conjunto de resultados.

**Cuidado**

Os objetos de conjunto de resultados recuperados chamando este método no mesmo
objeto de declaração não são independentes, mas compartilham a mesma estrutura subjacente.
Portanto, é recomendável chamar
[SQLite3Result::finalize()](sqlite3result.finalize.md) antes de chamar
**SQLite3Stmt::execute()** novamente no mesmo objeto de
declaração.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [SQLite3Result](class.sqlite3result.md) na execução bem-sucedida da declaração
preparada, **`false`** em caso de falha.

### Veja também

- [SQLite3::prepare()](sqlite3.prepare.md) - Prepara uma declaração SQL para execução
- [SQLite3Stmt::bindValue()](sqlite3stmt.bindvalue.md) - Vincula o valor de um parâmetro a uma variável de instrução
- [SQLite3Stmt::bindParam()](sqlite3stmt.bindparam.md) - Vincula um parâmetro a uma variável de instrução

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
