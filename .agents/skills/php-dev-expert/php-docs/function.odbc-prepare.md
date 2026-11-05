# Prepara uma instrução para execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-prepare.php

---

# odbc\_prepare

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_prepare — Prepara uma instrução para execução

### Descrição

function **odbc\_prepare**([Odbc\Connection](class.odbc-connection.md) `$odbc`, [string](language.types.string.md) `$query`): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Prepara uma instrução para execução. O objeto de resultado ODBC pode ser
usado posteriormente para executar a instrução com [odbc\_execute()](function.odbc-execute.md).

Alguns bancos de dados (como IBM DB2, MS SQL Server, e Oracle) suportam
procedimentos armazenados que aceitam parâmetros do tipo IN, INOUT, e OUT como
definido pela especificação ODBC. Entretanto, o driver ODBC Unificado
atualmente suporta apenas parâmetros do tipo IN em procedimentos armazenados.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`query`
:   A instrução da string de consulta que está sendo preparada.

### Valor Retornado

Retorna um objeto de resultado ODBC se a instrução SQL foi preparada
com sucesso. Retorna **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Exemplos de [odbc\_execute()](function.odbc-execute.md) e **odbc\_prepare()****

No código a seguir, $success será **`true`**
se todos os três parâmetros em myproc forem parâmetros IN:

```
<?php
$a = 1;
$b = 2;
$c = 3;
$stmt    = odbc_prepare($conn, 'CALL myproc(?,?,?)');
$success = odbc_execute($stmt, array($a, $b, $c));
?>
```

Se for necessário usar uma instrução preparada usando parâmetros INOUT ou OUT,
a alternativa é usar a extensão nativa para o banco de dados
(por exemplo, [oci8](ref.oci8.md) para Oracle).

### Veja também

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
