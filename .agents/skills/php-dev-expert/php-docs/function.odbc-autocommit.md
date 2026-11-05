# Alterna o comportamento da autoconfirmação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-autocommit.php

---

# odbc\_autocommit

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_autocommit — Alterna o comportamento da autoconfirmação

### Descrição

function **odbc\_autocommit**([Odbc\Connection](class.odbc-connection.md) `$odbc`, [?](language.types.null.md)[bool](language.types.boolean.md) `$enable` = **`null`**): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Alterna o comportamento da autoconfirmação.

Por padrão, a autoconfirmação fica habilitada para uma conexão. Desabilitar a
autoconfirmação é equivalente a iniciar uma transação.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`enable`
:   Se `enable` for igual a **`true`**, a autoconfirmação é habilitada, se
    for igual a **`false`**, a autoconfirmação é desabilitada.
    Se for igual a **`null`**, esta função retorna o status da auto confirmação para a conexão informada em
    `odbc`.

### Valor Retornado

Com o parâmetro `enable` igual a **`null`**, esta função retorna
o status da autoconfirmação para `odbc`. Um valor diferente de zero é
retornado se a autoconfirmação estiver habilitada, 0 se estiver desabilitada ou **`false`** se um erro
ocorrer.

Se `enable` não for nulo, esta função retorna **`true`** em
caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.3.0 | `enable` agora pode ser nulo. |

### Veja também

- [odbc\_commit()](function.odbc-commit.md) - Confirma uma transação ODBC
- [odbc\_rollback()](function.odbc-rollback.md) - Reverte uma transação

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
