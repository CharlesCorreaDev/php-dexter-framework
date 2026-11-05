# Confirma uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-commit.php

---

# db2\_commit

(PECL ibm\_db2 >= 1.0.0)

db2\_commit — 
Confirma uma transação

### Descrição

function **db2\_commit**([resource](language.types.resource.md) `$connection`): [bool](language.types.boolean.md)

Confirma uma transação em andamento no recurso de conexão especificado e
inicia uma nova transação. Os aplicativos PHP normalmente usam o modo AUTOCOMMIT
por padrão, então **db2\_commit()** não é necessário, a menos que AUTOCOMMIT
tenha sido desativado para o recurso de conexão.

### Parâmetros

`connection`
:   Uma variável de recurso de conexão de banco de dados válida, conforme retornada de
    [db2\_connect()](function.db2-connect.md) ou [db2\_pconnect()](function.db2-pconnect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [db2\_autocommit()](function.db2-autocommit.md) - Retorna ou define o estado AUTOCOMMIT para uma conexão de banco de dados
- [db2\_rollback()](function.db2-rollback.md) - Reverte uma transação

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
