# Retorna as informações JIT do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-jit.php

---

# pg\_jit

(PHP 8 >= 8.4.0)

pg\_jit — Retorna as informações JIT do servidor

### Descrição

function **pg\_jit**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [array](language.types.array.md)

**pg\_jit()** retorna um array com as informações de
compilação JIT (Just-In-Time) do servidor PostgreSQL.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Retorna um [array](language.types.array.md) contendo as informações JIT do servidor.

### Veja também

- [pg\_version()](function.pg-version.md) - Retorna um array com versão do cliente, protocolo e servidor (quando disponível)

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
