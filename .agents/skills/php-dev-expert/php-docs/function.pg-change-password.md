# Altera a senha de um usuário do PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-change-password.php

---

# pg\_change\_password

(PHP 8 >= 8.4.0)

pg\_change\_password — Altera a senha de um usuário do PostgreSQL

### Descrição

function **pg\_change\_password**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [string](language.types.string.md) `$user`, [string](language.types.string.md) `$password`): [bool](language.types.boolean.md)

**pg\_change\_password()** altera a senha de um
usuário do PostgreSQL. Esta função utiliza a função
`PQchangePassword` da libpq, que lida com a
criptografia de senhas automaticamente com base nas configurações do servidor.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`user`
:   O nome do usuário do PostgreSQL cuja senha deve ser alterada.

`password`
:   A nova senha.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [pg\_connect()](function.pg-connect.md) - Abre uma conexão PostgreSQL

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
