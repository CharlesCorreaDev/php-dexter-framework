# Define o ponteiro do resultado para o índice de campo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-field-seek.php

---

# mysql\_field\_seek

(PHP 4, PHP 5)

mysql\_field\_seek — Define o ponteiro do resultado para o índice de campo especificado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_field\_seek()](mysqli-result.field-seek.md)
- [PDOStatement::fetch()](pdostatement.fetch.md) usando os parâmetros
  `cursor_orientation` e
  `offset`

### Descrição

function **mysql\_field\_seek**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [bool](language.types.boolean.md)

Move para o índice do campo especificado. Se a próxima chamada a
[mysql\_fetch\_field()](function.mysql-fetch-field.md) não incluir um
índice, o índice de campo especificado em
**mysql\_field\_seek()** será retornado.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

`field_offset`
:   O deslocamento numérico do campo.
    `field_offset` começa em `0`. Se
    `field_offset` não existir, um erro de nível
    **`E_WARNING`** também será emitido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [mysql\_fetch\_field()](function.mysql-fetch-field.md) - Obtém informações de coluna de um resultado e retorna como um objeto

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
