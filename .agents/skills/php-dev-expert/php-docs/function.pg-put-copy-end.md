# Sinaliza a conclusão de uma operação COPY para o servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-put-copy-end.php

---

# pg\_put\_copy\_end

(PHP 8 >= 8.4.0)

pg\_put\_copy\_end — Sinaliza a conclusão de uma operação COPY para o servidor

### Descrição

function **pg\_put\_copy\_end**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [?](language.types.null.md)[string](language.types.string.md) `$error` = **`null`**): [int](language.types.integer.md)

Envia uma indicação de fim de dados para o servidor durante uma operação de
`COPY FROM STDIN`.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`error`
:   Se não for **`null`**, a operação `COPY` será forçada a
    falhar com a mensagem de erro fornecida.

### Valor Retornado

Retorna `1` em caso de sucesso, `0` se os
dados não puderem ser enfileirados (somente no modo não bloqueante) ou
`-1` em caso de erro.

### Veja também

- [pg\_put\_copy\_data()](function.pg-put-copy-data.md) - Envia dados para o servidor durante uma operação COPY
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
