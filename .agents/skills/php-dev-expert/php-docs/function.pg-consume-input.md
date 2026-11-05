# Lê a entrada na conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-consume-input.php

---

# pg\_consume\_input

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

pg\_consume\_input — Lê a entrada na conexão

### Descrição

function **pg\_consume\_input**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [bool](language.types.boolean.md)

**pg\_consume\_input()** consome qualquer entrada aguardando para ser lida
no servidor de banco de dados.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

**`true`** se nenhum erro ocorreu ou **`false`** se houve um erro. Observe que
**`true`** não indica necessariamente que a entrada estava aguardando para ser lida.

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
