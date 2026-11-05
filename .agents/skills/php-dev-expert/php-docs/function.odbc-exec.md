# Executa diretamente uma instrução SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-exec.php

---

# odbc\_exec

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_exec — Executa diretamente uma instrução SQL

### Descrição

function **odbc\_exec**([Odbc\Connection](class.odbc-connection.md) `$odbc`, [string](language.types.string.md) `$query`): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Envia uma instrução SQL para o servidor de banco de dados.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`query`
:   A instrução SQL.

### Valor Retornado

Retorna um objeto de resultado ODBC se o comando SQL foi executado
com sucesso ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.0.0 | O parâmetro `flags` foi removido. |

### Veja também

- [odbc\_prepare()](function.odbc-prepare.md) - Prepara uma instrução para execução
- [odbc\_execute()](function.odbc-execute.md) - Executa uma instrução preparada

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
