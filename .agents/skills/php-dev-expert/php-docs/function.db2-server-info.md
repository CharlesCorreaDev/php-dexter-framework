# Retorna um objeto com propriedades que descrevem o servidor de banco de dados DB2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-server-info.php

---

# db2\_server\_info

(PECL ibm\_db2 >= 1.1.1)

db2\_server\_info — Retorna um objeto com propriedades que descrevem o servidor de banco de dados DB2

### Descrição

function **db2\_server\_info**([resource](language.types.resource.md) `$connection`): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Esta função retorna um objeto com propriedades somente leitura que retornam
informações sobre o servidor de banco de dados IBM DB2, Cloudscape ou Apache Derby.
A tabela a seguir lista as propriedades do servidor de banco de dados:

**Database server properties**

| Nome da propriedade | Tipo de retorno | Descrição |
| --- | --- | --- |
| DBMS\_NAME | string | O nome do servidor de banco de dados conectado. Para servidores DB2, esta é uma combinação de `DB2` seguido pelo sistema operacional no qual o servidor de banco de dados está sendo executado. |
| DBMS\_VER | string | A versão do servidor de banco de dados, na forma de uma string "MM.mm.uuuu" onde MM é a versão principal, mm é a versão secundária, e uuuu é a atualização. Por exemplo, "08.02.0001" representa a versão principal 8, versão secundária 2, atualização 1. |
| DB\_CODEPAGE | int | A página de código do banco de dados conectado. |
| DB\_NAME | string | O nome do banco de dados conectado. |
| DFT\_ISOLATION | string | O nível de isolamento de transação padrão suportado pelo servidor: UR  Leitura não confirmada: as alterações são imediatamente visíveis por todas as transações simultâneas.  CS  Estabilidade do cursor: uma linha lida por uma transação pode ser alterada e confirmada por uma segunda transação simultânea.  RS  Estabilidade de leitura: uma transação pode adicionar ou remover linhas que correspondem a uma condição de pesquisa ou uma transação pendente.  RR  Leitura repetível: dados afetados por transações pendentes não estão disponíveis para outras transações.  NC  Sem confirmação: quaisquer alterações são visíveis no final de uma operação bem-sucedida. Confirmações e reversões explícitas não são permitidos. |
| IDENTIFIER\_QUOTE\_CHAR | string | O caractere usado para delimitar um identificador. |
| INST\_NAME | string | A instância no servidor de banco de dados que contém o banco de dados. |
| ISOLATION\_OPTION | array | Um array das opções de isolamento suportadas pelo servidor de banco de dados. As opções de isolamento são descritas na propriedade DFT\_ISOLATION. |
| KEYWORDS | array | Um array de palavras-chave reservadas pelo servidor de banco de dados. |
| LIKE\_ESCAPE\_CLAUSE | bool | **`true`** se o servidor de banco de dados suportar o uso dos caracteres curinga `%` e `_`. **`false`** se o servidor de banco de dados não suportar esses caracteres curinga. |
| MAX\_COL\_NAME\_LEN | int | Comprimento máximo de um nome de coluna suportado pelo servidor de banco de dados, expresso em bytes. |
| MAX\_IDENTIFIER\_LEN | int | Comprimento máximo de um identificador SQL suportado pelo servidor de banco de dados, expresso em caracteres. |
| MAX\_INDEX\_SIZE | int | Tamanho máximo de colunas combinadas em um índice suportado pelo servidor de banco de dados, expresso em bytes. |
| MAX\_PROC\_NAME\_LEN | int | Comprimento máximo de um nome de procedimento suportado pelo servidor de banco de dados, expresso em bytes. |
| MAX\_ROW\_SIZE | int | Comprimento máximo de uma linha em uma tabela base suportada pelo servidor de banco de dados, expresso em bytes. |
| MAX\_SCHEMA\_NAME\_LEN | int | Comprimento máximo de um nome de esquema suportado pelo servidor de banco de dados, expresso em bytes. |
| MAX\_STATEMENT\_LEN | int | Comprimento máximo de uma instrução SQL suportada pelo servidor de banco de dados, expresso em bytes. |
| MAX\_TABLE\_NAME\_LEN | int | Comprimento máximo de um nome de tabela suportado pelo servidor de banco de dados, expresso em bytes. |
| NON\_NULLABLE\_COLUMNS | bool | **`true`** se o servidor de banco de dados suportar colunas que podem ser definidas como NOT NULL, **`false`** se o servidor de banco de dados não suportar colunas definidas como NOT NULL. |
| PROCEDURES | bool | **`true`** se o servidor de banco de dados suportar o uso da instrução CALL para chamar procedimentos armazenados, **`false`** se o servidor de banco de dados não suportar a instrução CALL. |
| SPECIAL\_CHARS | string | Uma string contendo todos os caracteres, exceto a-Z, 0-9 e sublinhado, que podem ser usados ​​em um nome de identificador. |
| SQL\_CONFORMANCE | string | O nível de conformidade com a especificação ANSI/ISO SQL-92 oferecido pelo servidor de banco de dados: ENTRY  Conformidade com SQL-92 de nível básico.  FIPS127  Conformidade transitória com FIPS-127-2.  FULL  Conformidade total com SQL-92.  INTERMEDIATE  Conformidade com SQL-92 de nível intermediário. |

### Parâmetros

`connection`
:   Especifica uma conexão de cliente DB2 ativa.

### Valor Retornado

Retorna um objeto em uma chamada bem-sucedida, ou **`false`** em caso de falha

### Examples

**Exemplo #1 Um exemplo de **db2\_server\_info()****

Para recuperar informações sobre o servidor, deve-se passar um
recurso de conexão de banco de dados válido para **db2\_server\_info()**.

```
<?php

$conn = db2_connect('sample', 'db2inst1', 'ibmdb2');

$server = db2_server_info( $conn );

if ($server) {
    echo "DBMS_NAME: ";                 var_dump( $server->DBMS_NAME );
    echo "DBMS_VER: ";                  var_dump( $server->DBMS_VER );
    echo "DB_CODEPAGE: ";               var_dump( $server->DB_CODEPAGE );
    echo "DB_NAME: ";                   var_dump( $server->DB_NAME );
    echo "INST_NAME: ";                 var_dump( $server->INST_NAME );
    echo "SPECIAL_CHARS: ";             var_dump( $server->SPECIAL_CHARS );
    echo "KEYWORDS: ";                  var_dump( sizeof($server->KEYWORDS) );
    echo "DFT_ISOLATION: ";             var_dump( $server->DFT_ISOLATION );
    echo "ISOLATION_OPTION: ";
    $il = '';
    foreach( $server->ISOLATION_OPTION as $opt )
    {
       $il .= $opt." ";
    }
    var_dump( $il );
    echo "SQL_CONFORMANCE: ";           var_dump( $server->SQL_CONFORMANCE );
    echo "PROCEDURES: ";                var_dump( $server->PROCEDURES );
    echo "IDENTIFIER_QUOTE_CHAR: ";     var_dump( $server->IDENTIFIER_QUOTE_CHAR );
    echo "LIKE_ESCAPE_CLAUSE: ";        var_dump( $server->LIKE_ESCAPE_CLAUSE );
    echo "MAX_COL_NAME_LEN: ";          var_dump( $server->MAX_COL_NAME_LEN );
    echo "MAX_ROW_SIZE: ";              var_dump( $server->MAX_ROW_SIZE );
    echo "MAX_IDENTIFIER_LEN: ";        var_dump( $server->MAX_IDENTIFIER_LEN );
    echo "MAX_INDEX_SIZE: ";            var_dump( $server->MAX_INDEX_SIZE );
    echo "MAX_PROC_NAME_LEN: ";         var_dump( $server->MAX_PROC_NAME_LEN );
    echo "MAX_SCHEMA_NAME_LEN: ";       var_dump( $server->MAX_SCHEMA_NAME_LEN );
    echo "MAX_STATEMENT_LEN: ";         var_dump( $server->MAX_STATEMENT_LEN );
    echo "MAX_TABLE_NAME_LEN: ";        var_dump( $server->MAX_TABLE_NAME_LEN );
    echo "NON_NULLABLE_COLUMNS: ";      var_dump( $server->NON_NULLABLE_COLUMNS );

    db2_close($conn);
}
?>
```

O exemplo acima produzirá:

```
DBMS_NAME: string(9) "DB2/LINUX"
DBMS_VER: string(10) "08.02.0000"
DB_CODEPAGE: int(1208)
DB_NAME: string(6) "SAMPLE"
INST_NAME: string(8) "db2inst1"
SPECIAL_CHARS: string(2) "@#"
KEYWORDS: int(179)
DFT_ISOLATION: string(2) "CS"
ISOLATION_OPTION: string(12) "UR CS RS RR "
SQL_CONFORMANCE: string(7) "FIPS127"
PROCEDURES: bool(true)
IDENTIFIER_QUOTE_CHAR: string(1) """
LIKE_ESCAPE_CLAUSE: bool(true)
MAX_COL_NAME_LEN: int(30)
MAX_ROW_SIZE: int(32677)
MAX_IDENTIFIER_LEN: int(18)
MAX_INDEX_SIZE: int(1024)
MAX_PROC_NAME_LEN: int(128)
MAX_SCHEMA_NAME_LEN: int(30)
MAX_STATEMENT_LEN: int(2097152)
MAX_TABLE_NAME_LEN: int(128)
NON_NULLABLE_COLUMNS: bool(true)
```

### Veja também

- [db2\_client\_info()](function.db2-client-info.md) - Retorna um objeto com propriedades que descrevem o cliente do banco de dados DB2

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
