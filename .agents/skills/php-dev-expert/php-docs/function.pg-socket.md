# Obtém um identificador somente leitura para o socket subjacente a uma conexão PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-socket.php

---

# pg\_socket

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

pg\_socket — 
Obtém um identificador somente leitura para o socket subjacente a uma conexão PostgreSQL

### Descrição

function **pg\_socket**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

**pg\_socket()** retorna um [resource](language.types.resource.md) somente leitura
correspondente ao socket subjacente à conexão PostgreSQL fornecida.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

Um recurso socket em caso de sucesso ou **`false`** em caso de falha.

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
