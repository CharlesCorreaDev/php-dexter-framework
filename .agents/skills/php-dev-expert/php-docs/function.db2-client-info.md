# Retorna um objeto com propriedades que descrevem o cliente do banco de dados DB2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-client-info.php

---

# db2\_client\_info

(PECL ibm\_db2 >= 1.1.1)

db2\_client\_info — Retorna um objeto com propriedades que descrevem o cliente do banco de dados DB2

### Descrição

function **db2\_client\_info**([resource](language.types.resource.md) `$connection`): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Esta função retorna um objeto com propriedades somente leitura que retornam
informações sobre o cliente do banco de dados DB2. A tabela a seguir lista
as propriedades do cliente DB2:

**DB2 client properties**

| Nome da propriedade | Tipo de retorno | Descrição |
| --- | --- | --- |
| APPL\_CODEPAGE | int | A página de código da aplicação. |
| CONN\_CODEPAGE | int | A página de código para a conexão atual. |
| DATA\_SOURCE\_NAME | string | O nome da fonte de dados (DSN) usado para criar a conexão atual com o banco de dados. |
| DRIVER\_NAME | string | O nome da biblioteca que implementa a especificação DB2 Call Level Interface (CLI). |
| DRIVER\_ODBC\_VER | string | A versão do ODBC que o cliente DB2 suporta. Isso retorna uma string "MM.mm" onde MM é a versão principal e mm é a versão secundária. O cliente DB2 sempre retorna "03.51". |
| DRIVER\_VER | string | A versão do cliente, na forma de uma string "MM.mm.uuuu" onde MM é a versão principal, mm é a versão secundária, e uuuu é a atualização. Por exemplo, "08.02.0001" representa versão principal 8, versão secundária 2, atualização 1. |
| ODBC\_SQL\_CONFORMANCE | string | O nível de gramática ODBC SQL suportado pelo cliente: MINIMUM  Suporta a gramática mínima do ODBC SQL.  CORE  Suporta a gramática básica do ODBC SQL.  EXTENDED  Suporta gramática ODBC SQL estendida. |
| ODBC\_VER | string | A versão do ODBC que o gerenciador de driver ODBC suporta. Isso retorna uma string "MM.mm.rrrr" onde MM é a versão principal, mm é a versão secundária e rrrr é o lançamento. O cliente DB2 sempre retorna "03.01.0000". |

### Parâmetros

`connection`
:   Especifica uma conexão de cliente DB2 ativa.

### Valor Retornado

Retorna um objeto em uma chamada bem-sucedida, ou **`false`** em caso de falha

### Examples

**Exemplo #1 Um exemplo de **db2\_client\_info()****

Para recuperar informações sobre o cliente, deve ser passado um recurso
de conexão de banco de dados válido para **db2\_client\_info()**.

```
<?php
$conn = db2_connect( 'SAMPLE', 'db2inst1', 'ibmdb2' );
$client = db2_client_info( $conn );

if ($client) {
    echo "DRIVER_NAME: ";           var_dump( $client->DRIVER_NAME );
    echo "DRIVER_VER: ";            var_dump( $client->DRIVER_VER );
    echo "DATA_SOURCE_NAME: ";      var_dump( $client->DATA_SOURCE_NAME );
    echo "DRIVER_ODBC_VER: ";       var_dump( $client->DRIVER_ODBC_VER );
    echo "ODBC_VER: ";              var_dump( $client->ODBC_VER );
    echo "ODBC_SQL_CONFORMANCE: ";  var_dump( $client->ODBC_SQL_CONFORMANCE );
    echo "APPL_CODEPAGE: ";         var_dump( $client->APPL_CODEPAGE );
    echo "CONN_CODEPAGE: ";         var_dump( $client->CONN_CODEPAGE );
}
else {
    echo "Erro ao recuperar informações do cliente.
     Talvez sua conexão com o banco de dados seja inválida.";
}
db2_close($conn);

?>
```

O exemplo acima produzirá:

```
DRIVER_NAME: string(8) "libdb2.a"
DRIVER_VER: string(10) "08.02.0001"
DATA_SOURCE_NAME: string(6) "SAMPLE"
DRIVER_ODBC_VER: string(5) "03.51"
ODBC_VER: string(10) "03.01.0000"
ODBC_SQL_CONFORMANCE: string(8) "EXTENDED"
APPL_CODEPAGE: int(819)
CONN_CODEPAGE: int(819)
```

### Veja também

- [db2\_server\_info()](function.db2-server-info.md) - Retorna um objeto com propriedades que descrevem o servidor de banco de dados DB2

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
