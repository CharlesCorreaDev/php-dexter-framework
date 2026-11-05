# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlsrv.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SQLSRV_FETCH_ASSOC`** ([int](language.types.integer.md))
:   Força [sqlsrv\_fetch\_array()](function.sqlsrv-fetch-array.md) a retornar um array associativo
    quando passado como parâmetro.

**`SQLSRV_FETCH_NUMERIC`** ([int](language.types.integer.md))
:   Força [sqlsrv\_fetch\_array()](function.sqlsrv-fetch-array.md) a retornar um array
    numérico quando passado como parâmetro.

**`SQLSRV_FETCH_BOTH`** ([int](language.types.integer.md))
:   Força [sqlsrv\_fetch\_array()](function.sqlsrv-fetch-array.md) a retornar um array com
    chaves associativas e numéricas quando passado como parâmetro (comportamento padrão).

**`SQLSRV_ERR_ALL`** ([int](language.types.integer.md))
:   Força [sqlsrv\_errors()](function.sqlsrv-errors.md) a retornar tanto erros quanto avisos
    quando passado como parâmetro (comportamento padrão).

**`SQLSRV_ERR_ERRORS`** ([int](language.types.integer.md))
:   Força [sqlsrv\_errors()](function.sqlsrv-errors.md) a retornar apenas erros (sem avisos)
    quando passado como parâmetro.

**`SQLSRV_ERR_WARNINGS`** ([int](language.types.integer.md))
:   Força [sqlsrv\_errors()](function.sqlsrv-errors.md) a retornar apenas avisos (sem erros)
    quando passado como parâmetro.

**`SQLSRV_LOG_SYSTEM_ALL`** ([int](language.types.integer.md))
:   Ativa o registro de todos os subsistemas quando passado para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SYSTEM_CONN`** ([int](language.types.integer.md))
:   Ativa o registro da atividade de conexão quando passado para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SYSTEM_INIT`** ([int](language.types.integer.md))
:   Ativa o registro da atividade de inicialização quando passado para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SYSTEM_OFF`** ([int](language.types.integer.md))
:   Desativa o registro de todos os subsistemas quando passado para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SYSTEM_STMT`** ([int](language.types.integer.md))
:   Ativa o registro da atividade de declarações quando passado para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SYSTEM_UTIL`** ([int](language.types.integer.md))
:   Ativa o registro da atividade da função de erro quando passado para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SEVERITY_ALL`** ([int](language.types.integer.md))
:   Especifica que erros, avisos e notas serão registrados
    quando passado para [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SEVERITY_ERROR`** ([int](language.types.integer.md))
:   Especifica que apenas erros serão registrados quando passado para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SEVERITY_NOTICE`** ([int](language.types.integer.md))
:   Especifica que as notificações serão registradas ao serem passadas para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_LOG_SEVERITY_WARNING`** ([int](language.types.integer.md))
:   Especifica que os avisos serão registrados ao serem passados para
    [sqlsrv\_configure()](function.sqlsrv-configure.md) como parâmetro.

**`SQLSRV_NULLABLE_YES`** ([int](language.types.integer.md))
:   Indica que uma coluna é nula.

**`SQLSRV_NULLABLE_NO`** ([int](language.types.integer.md))
:   Indica que uma coluna não é nula.

**`SQLSRV_NULLABLE_UNKNOWN`** ([int](language.types.integer.md))
:   Indica que não se sabe se uma coluna é nula.

**`SQLSRV_PARAM_IN`** ([int](language.types.integer.md))
:   Indica um parâmetro de entrada ao ser passado para [sqlsrv\_query()](function.sqlsrv-query.md)
    ou [sqlsrv\_prepare()](function.sqlsrv-prepare.md).

**`SQLSRV_PARAM_INOUT`** ([int](language.types.integer.md))
:   Indica um parâmetro bidirecional ao ser passado para [sqlsrv\_query()](function.sqlsrv-query.md)
    ou [sqlsrv\_prepare()](function.sqlsrv-prepare.md).

**`SQLSRV_PARAM_OUT`** ([int](language.types.integer.md))
:   Indica um parâmetro de saída ao ser passado para [sqlsrv\_query()](function.sqlsrv-query.md) ou
    [sqlsrv\_prepare()](function.sqlsrv-prepare.md).

**`SQLSRV_PHPTYPE_INT`** ([int](language.types.integer.md))
:   Especifica um tipo de dados inteiro PHP. Para informações de uso, consulte
    [» Como: Especificar Tipos PHP](https://msdn.microsoft.com/en-us/library/cc296208.aspx).

**`SQLSRV_PHPTYPE_DATETIME`** ([int](language.types.integer.md))
:   Especifica um tipo de dados de data e hora PHP. Para informações de uso, consulte
    [» Como: Especificar Tipos PHP](https://msdn.microsoft.com/en-us/library/cc296208.aspx).

**`SQLSRV_PHPTYPE_FLOAT`** ([int](language.types.integer.md))
:   Especifica um tipo de dados de ponto flutuante PHP. Para informações de uso, consulte
    [» Como: Especificar Tipos PHP](https://msdn.microsoft.com/en-us/library/cc296208.aspx).

**`SQLSRV_PHPTYPE_STREAM`** ([int](language.types.integer.md))
:   Especifica um fluxo PHP. Esta constante funciona como uma função e aceita uma
    constante de codificação. Consulte as constantes SQLSRV\_ENC\_\*. Para informações de uso, consulte
    [» Como: Especificar Tipos PHP](https://msdn.microsoft.com/en-us/library/cc296208.aspx).

**`SQLSRV_PHPTYPE_STRING`** ([int](language.types.integer.md))
:   Especifica um tipo de dados de string PHP. Esta constante funciona como uma função e
    aceita uma constante de codificação. Consulte as constantes SQLSRV\_ENC\_\*. Para informações de uso, consulte
    [» Como: Especificar Tipos PHP](https://msdn.microsoft.com/en-us/library/cc296208.aspx).

**`SQLSRV_ENC_BINARY`** ([int](language.types.integer.md))
:   Especifica que os dados são retornados como um fluxo de bytes bruto do servidor sem
    realizar codificação ou tradução. Para informações de uso, consulte
    [» Como: Especificar Tipos PHP](https://msdn.microsoft.com/en-us/library/cc296208.aspx).

**`SQLSRV_ENC_CHAR`** ([int](language.types.integer.md))
:   Os dados são retornados em caracteres de 8 bits conforme especificado na página de código da
    localidade do Windows que está configurada no sistema. Qualquer caractere multibyte ou caracteres
    que não sejam mapeados nesta página de código são substituídos por um caractere de ponto de
    interrogação (?) de um byte. Esta é a codificação padrão. Para informações de uso,
    consulte [» Como: Especificar Tipos PHP](https://msdn.microsoft.com/en-us/library/cc296208.aspx).

**`SQLSRV_SQLTYPE_BIGINT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados bigint do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_BINARY`** ([int](language.types.integer.md))
:   Descreve o tipo de dados binary do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_BIT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados bit do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_CHAR`** ([int](language.types.integer.md))
:   Descreve o tipo de dados char do SQL Server. Esta constante funciona como uma função
    e aceita um parâmetro indicando o número de caracteres. Para informações de uso,
    consulte [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_DATE`** ([int](language.types.integer.md))
:   Descreve o tipo de dados date do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_DATETIME`** ([int](language.types.integer.md))
:   Descreve o tipo de dados datetime do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_DATETIME2`** ([int](language.types.integer.md))
:   Descreve o tipo de dados datetime2 do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_DATETIMEOFFSET`** ([int](language.types.integer.md))
:   Descreve o tipo de dados datetimeoffset do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_DECIMAL`** ([int](language.types.integer.md))
:   Descreve o tipo de dados decimal do SQL Server. Esta constante funciona como uma função
    e aceita dois parâmetros indicando (na ordem) precisão e escala. Para informações de uso,
    consulte [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_FLOAT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados float do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_IMAGE`** ([int](language.types.integer.md))
:   Descreve o tipo de dados image do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_INT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados int do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_MONEY`** ([int](language.types.integer.md))
:   Descreve o tipo de dados money do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_NCHAR`** ([int](language.types.integer.md))
:   Descreve o tipo de dados nchar do SQL Server. Esta constante funciona como uma função
    e aceita um único parâmetro indicando a contagem de caracteres. Para informações de uso,
    consulte [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_NUMERIC`** ([int](language.types.integer.md))
:   Descreve o tipo de dados numeric do SQL Server. Esta constante funciona como uma função
    e aceita dois parâmetros indicando (na ordem) precisão e escala. Para informações de uso,
    consulte [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_NVARCHAR`** ([int](language.types.integer.md))
:   Descreve o tipo de dados nvarchar do SQL Server. Esta constante funciona como uma função
    e aceita um único parâmetro indicando a contagem de caracteres. Para informações de uso,
    consulte [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_NVARCHAR`**('max') ([int](language.types.integer.md))
:   Descreve o tipo de dados nvarchar(MAX) do SQL Server. Para informações de uso,
    consulte [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_NTEXT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados ntext do SQL Server. Para informações de uso, consulte
    [» Como Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_REAL`** ([int](language.types.integer.md))
:   Descreve o tipo de dados real do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_SMALLDATETIME`** ([int](language.types.integer.md))
:   Descreve o tipo de dados smalldatetime do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_SMALLINT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados smallint do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_SMALLMONEY`** ([int](language.types.integer.md))
:   Descreve o tipo de dados smallmoney do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_TEXT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados text do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_TIME`** ([int](language.types.integer.md))
:   Descreve o tipo de dados time do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_TIMESTAMP`** ([int](language.types.integer.md))
:   Descreve o tipo de dados timestamp do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_TINYINT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados tinyint do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_UNIQUEIDENTIFIER`** ([int](language.types.integer.md))
:   Descreve o tipo de dados uniqueidentifier do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_UDT`** ([int](language.types.integer.md))
:   Descreve o tipo de dados UDT do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_VARBINARY`** ([int](language.types.integer.md))
:   Descreve o tipo de dados varbinary do SQL Server. Esta constante funciona como uma função
    e aceita um único parâmetro indicando a contagem de bytes. Para informações de uso,
    consulte [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_VARBINARY`**('max') ([int](language.types.integer.md))
:   Descreve o tipo de dados varbinary(MAX) do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_VARCHAR`** ([int](language.types.integer.md))
:   Descreve o tipo de dados varchar do SQL Server. Esta constante funciona como uma função
    e aceita um único parâmetro indicando a contagem de caracteres. Para informações de uso,
    consulte [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_VARCHAR`**('max') ([int](language.types.integer.md))
:   Descreve o tipo de dados varchar(MAX) do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_SQLTYPE_XML`** ([int](language.types.integer.md))
:   Descreve o tipo de dados XML do SQL Server. Para informações de uso, consulte
    [» Como: Especificar Tipos SQL](https://msdn.microsoft.com/en-us/library/cc626305.aspx).

**`SQLSRV_TXN_READ_UNCOMMITTED`** ([int](language.types.integer.md))
:   Indica um nível de isolamento de transação de LEITURA NÃO COMPROMETIDA. Este valor é
    usado para definir o nível de TransactionIsolation no array $connectionOptions
    passado para [sqlsrv\_connect()](function.sqlsrv-connect.md).

**`SQLSRV_TXN_READ_COMMITTED`** ([int](language.types.integer.md))
:   Indica um nível de isolamento de transação de LEITURA COMPROMETIDA. Este valor é
    usado para definir o nível de TransactionIsolation no array $connectionOptions
    passado para [sqlsrv\_connect()](function.sqlsrv-connect.md).

**`SQLSRV_TXN_REPEATABLE_READ`** ([int](language.types.integer.md))
:   Indica um nível de isolamento de transação de LEITURA REPETÍVEL. Este valor é
    usado para definir o nível de TransactionIsolation no array $connectionOptions
    passado para [sqlsrv\_connect()](function.sqlsrv-connect.md).

**`SQLSRV_TXN_SNAPSHOT`** ([int](language.types.integer.md))
:   Indica um nível de isolamento de transação de SNAPSHOT. Este valor é usado para
    definir o nível de TransactionIsolation no array $connectionOptions passado
    para [sqlsrv\_connect()](function.sqlsrv-connect.md).

**`SQLSRV_TXN_READ_SERIALIZABLE`** ([int](language.types.integer.md))
:   Indica um nível de isolamento de transação de SERIALIZÁVEL. Este valor é usado para
    definir o nível de TransactionIsolation no array $connectionOptions passado
    para [sqlsrv\_connect()](function.sqlsrv-connect.md).

**`SQLSRV_CURSOR_FORWARD`** ([int](language.types.integer.md))
:   Indica um cursor somente para frente. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_CURSOR_STATIC`** ([int](language.types.integer.md))
:   Indica um cursor estático. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_CURSOR_DYNAMIC`** ([int](language.types.integer.md))
:   Indica um cursor dinâmico. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_CURSOR_KEYSET`** ([int](language.types.integer.md))
:   Indica um cursor de conjunto de chaves. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_CURSOR_BUFFERED`** ([int](language.types.integer.md))
:   Cria uma consulta de cursor do lado do cliente. Permite que você acesse linhas em qualquer ordem. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_SCROLL_NEXT`** ([int](language.types.integer.md))
:   Especifica qual linha selecionar em um conjunto de resultados. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_SCROLL_PRIOR`** ([int](language.types.integer.md))
:   Especifica qual linha selecionar em um conjunto de resultados. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_SCROLL_FIRST`** ([int](language.types.integer.md))
:   Especifica qual linha selecionar em um conjunto de resultados. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_SCROLL_LAST`** ([int](language.types.integer.md))
:   Especifica qual linha selecionar em um conjunto de resultados. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_SCROLL_ABSOLUTE`** ([int](language.types.integer.md))
:   Especifica qual linha selecionar em um conjunto de resultados. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

**`SQLSRV_SCROLL_RELATIVE`** ([int](language.types.integer.md))
:   Especifica qual linha selecionar em um conjunto de resultados. Para informações de uso, consulte
    [» Especificando um Tipo de Cursor e Selecionando Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx).

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
