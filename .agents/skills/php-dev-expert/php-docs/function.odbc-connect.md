# Conecta a uma fonte de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-connect.php

---

# odbc\_connect

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_connect — Conecta a uma fonte de dados

### Descrição

function **odbc\_connect**(  
    [string](language.types.string.md) `$dsn`,  
    [?](language.types.null.md)[string](language.types.string.md) `$user` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [int](language.types.integer.md) `$cursor_option` = **`SQL_CUR_USE_DRIVER`**  
): [Odbc\Connection](class.odbc-connection.md)|[false](language.types.singleton.md)

O ID de conexão retornado por essas funções é necessário para outras
funções ODBC. Podem existir várias conexões abertas ao mesmo tempo, desde que
usem bancos de dados diferentes ou credenciais diferentes.

Com alguns drivers ODBC, a execução de um procedimento armazenado complexo pode
falhar com um erro semelhante a: "Não é possível abrir um cursor em um procedimento
armazenado que contenha algo diferente de uma única instrução
SELECT". Usar SQL\_CUR\_USE\_ODBC pode evitar esse erro. Além disso, alguns
drivers não suportam o parâmetro row\_number opcional em
[odbc\_fetch\_row()](function.odbc-fetch-row.md). SQL\_CUR\_USE\_ODBC também pode ajudar
nesse caso.

### Parâmetros

`dsn`
:   O nome da fonte do banco de dados para a conexão. Como alternativa, uma
    string de conexão sem DSN pode ser usada.

`user`
:   O nome de usuário.
    Este parâmetro é ignorado se `dsn` contiver `uid`.
    Para conectar sem especificar o parâmetro `user`,
    use **`null`**.

`password`
:   A senha.
    Este parâmetro é ignorado se `dsn` contiver `pwd`.
    Para conectar sem especificar o parâmetro `password`,
    use **`null`**.

`cursor_option`
:   Este parâmetro define o tipo de cursor a ser usado
    para esta conexão. Este parâmetro normalmente não é necessário, mas
    pode ser útil para solucionar problemas com alguns drivers ODBC.

    As seguintes constantes são definidas para o tipo de cursor:

    - SQL\_CUR\_USE\_IF\_NEEDED
    - SQL\_CUR\_USE\_ODBC
    - SQL\_CUR\_USE\_DRIVER

### Valor Retornado

Retorna uma conexão ODBC, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.4.0 | `user` e `password` agora podem ser nulos e também são opcionais e têm o valor padrão **`null`**. |
| 8.4.0 | Anteriormente, usar uma string vazia para `password` não incluiria `pwd` na string de conexão gerada para `dsn`. Agora é gerada para uncluir um `pwd` que tem uma string vazia como seu valor. Para restaurar o comportamento anterior, `password` agora pode ser definido para **`null`**. |
| 8.4.0 | Anteriormente, se `dsn` contivesse `uid` ou `pwd`, os parâmetros `user` e `password` seriam ignorados. Agora, `user` somente é ignorado se `dsn` contiver `uid`, e `password` somente é ignorado se `dsn` contiver `pwd`. |

### Examples

**Exemplo #1 Conexões sem DSN**

```
<?php
// Microsoft SQL Server usando o Driver ODBC SQL Native Client 10.0 - permite conexão ao SQL 7, 2000, 2005 e 2008
$connection = odbc_connect("Driver={SQL Server Native Client 10.0};Server=$server;Database=$database;", $user, $password);

// Microsoft Access
$connection = odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=$mdbFilename", $user, $password);

// Microsoft Excel
$excelFile = realpath('C:/ExcelData.xls');
$excelDir = dirname($excelFile);
$connection = odbc_connect("Driver={Microsoft Excel Driver (*.xls)};DriverId=790;Dbq=$excelFile;DefaultDir=$excelDir" , '', '');
?>
```

### Veja também

- Para conexões persistentes: [odbc\_pconnect()](function.odbc-pconnect.md) - Abre uma conexão persistente com o banco de dados

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
