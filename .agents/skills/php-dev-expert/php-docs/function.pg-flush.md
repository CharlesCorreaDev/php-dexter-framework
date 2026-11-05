# Libera dados de consulta de saída na conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-flush.php

---

# pg\_flush

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

pg\_flush — Libera dados de consulta de saída na conexão

### Descrição

function **pg\_flush**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [int](language.types.integer.md)|[bool](language.types.boolean.md)

**pg\_flush()** libera quaisquer dados de consulta de saída aguardando para
serem enviados na conexão.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

Retorna **`true`** se a liberação foi bem-sucedida ou nenhum dado estava esperando para ser
liberado, `0` se parte dos dados pendentes foi liberada, mas
restam mais ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
