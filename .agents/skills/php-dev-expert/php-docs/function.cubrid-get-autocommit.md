# Obtém o modo de auto-confirmação da conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-get-autocommit.php

---

# cubrid\_get\_autocommit

(PECL CUBRID >= 8.4.0)

cubrid\_get\_autocommit — Obtém o modo de auto-confirmação da conexão

### Descrição

function **cubrid\_get\_autocommit**([resource](language.types.resource.md) `$conn_identifier`): [bool](language.types.boolean.md)

A função **cubrid\_get\_autocommit()** é usada para obter o status do modo de
auto-confirmação da conexão ao banco de dados CUBRID.

Para o CUBRID 8.4.0, o modo de auto-confirmação é desabilitado por padrão para o gerenciamento
de transações.

Para o CUBRID 8.4.1, o modo de auto-confirmação é habilitado por padrão para o gerenciamento
de transações.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

### Valor Retornado

**`true`**, quando a auto-confirmação estiver ativada.

**`false`**, quando a auto-confirmação estiver desativada.

**`null`** em caso de erro.

### Veja também

- [cubrid\_set\_autocommit()](function.cubrid-set-autocommit.md) - Define o modo de auto-confirmação da conexão
- [cubrid\_commit()](function.cubrid-commit.md) - Confirma uma transação

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
