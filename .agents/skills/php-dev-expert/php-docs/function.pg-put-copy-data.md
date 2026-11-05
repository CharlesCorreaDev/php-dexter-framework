# Envia dados para o servidor durante uma operação COPY

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-put-copy-data.php

---

# pg\_put\_copy\_data

(PHP 8 >= 8.4.0)

pg\_put\_copy\_data — Envia dados para o servidor durante uma operação COPY

### Descrição

function **pg\_put\_copy\_data**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [string](language.types.string.md) `$cmd`): [int](language.types.integer.md)

Envia dados para o servidor durante uma operação de `COPY FROM STDIN`
Um comando `COPY` deve ter sido emitido
via [pg\_query()](function.pg-query.md) antes de chamar esta função.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`cmd`
:   Os dados a serem enviados para o servidor. Uma nova linha final é adicionada automaticamente
    se não estiver presente. Os dados devem ser formatados de acordo com
    o formato do comando `COPY`.

### Valor Retornado

Retorna `1` em caso de sucesso, `0` se os
dados não puderem ser enfileirados (somente no modo não bloqueante) ou
`-1` em caso de erro.

### Veja também

- [pg\_put\_copy\_end()](function.pg-put-copy-end.md) - Sinaliza a conclusão de uma operação COPY para o servidor
- [pg\_query()](function.pg-query.md) - Executa uma consulta

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
