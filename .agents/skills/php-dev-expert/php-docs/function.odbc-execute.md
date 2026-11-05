# Executa uma instrução preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-execute.php

---

# odbc\_execute

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_execute — Executa uma instrução preparada

### Descrição

function **odbc\_execute**([Odbc\Result](class.odbc-result.md) `$statement`, [array](language.types.array.md) `$params` = []): [bool](language.types.boolean.md)

Executa uma instrução preparada com [odbc\_prepare()](function.odbc-prepare.md).

### Parâmetros

`statement`
:   O objeto de resultado ODBC obtido de [odbc\_prepare()](function.odbc-prepare.md).

`params`
:   Parâmetros em `params` serão
    substituídos por marcadores na ordem na instrução preparada.
    Elementos deste array serão convertidos para strings ao chamar esta
    função.

    Quaisquer parâmetros em `params` que
    começam e terminam com aspas simples serão considerados como o nome de um
    arquivo para ler e enviar ao servidor de banco de dados como os dados para o
    marcador apropriado.

    Se a intenção for armazenar uma string que realmente comece e termine com
    aspas simples, deve ser adicionado um espaço ou outro caractere que não seja aspas simples
    no início ou no final do parâmetro, que irá evitar
    que o parâmetro seja considerado um nome de arquivo. Se esta não for uma
    opção, deve ser utilizado outro mecanismo para armazenar a string, por
    exemplo, executando a consulta diretamente com [odbc\_exec()](function.odbc-exec.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.0.0 | O parâmetro não utilizado `flags` foi removido. |

### Examples

**Exemplo #1 Exemplos de **odbc\_execute()** e [odbc\_prepare()](function.odbc-prepare.md)**

No seguinte código, $success apenas será
**`true`** se todos os três parâmetros para myproc forem parâmetros IN:

```
<?php
$a = 1;
$b = 2;
$c = 3;
$stmt    = odbc_prepare($conn, 'CALL myproc(?,?,?)');
$success = odbc_execute($stmt, array($a, $b, $c));
?>
```

Se for necessário chamar uma instrução preparada usando parâmetros INOUT ou OUT,
a solução recomendada é usar uma extensão nativa para o banco de dados
(por exemplo, [oci8](ref.oci8.md) para Oracle).

### Veja também

- [odbc\_prepare()](function.odbc-prepare.md) - Prepara uma instrução para execução

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
