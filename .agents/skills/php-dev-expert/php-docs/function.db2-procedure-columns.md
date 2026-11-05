# Retorna um conjunto de resultados listando os parâmetros do procedimento armazenado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-procedure-columns.php

---

# db2\_procedure\_columns

(PECL ibm\_db2 >= 1.0.0)

db2\_procedure\_columns — 
Retorna um conjunto de resultados listando os parâmetros do procedimento armazenado

### Descrição

function **db2\_procedure\_columns**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier`,  
    [string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$procedure`,  
    [?](language.types.null.md)[string](language.types.string.md) `$parameter`  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando os parâmetros para um ou mais procedimentos
armazenados.

### Parâmetros

`connection`
:   Uma conexão válida com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

`qualifier`
:   Um qualificador para bancos de dados DB2 em execução em servidores OS/390 ou z/OS. Para
    outros bancos de dados, passe **`null`** ou uma string vazia.

`schema`
:   O esquema que contém os procedimentos. Este parâmetro aceita um
    padrão de pesquisa contendo `_` e `%`
    como curingas.

`procedure`
:   O nome do procedimento. Este parâmetro aceita um
    padrão de pesquisa contendo `_` e `%`
    como curingas.

`parameter`
:   O nome do parâmetro. Este parâmetro aceita um padrão de pesquisa
    contendo `_` e `%` como curingas.
    Se este parâmetro for **`null`**, todos os parâmetros para os procedimentos armazenados
    especificados serão retornados.

### Valor Retornado

Retorna um recurso de instrução com um conjunto de resultados contendo linhas descrevendo
os parâmetros para os procedimentos armazenados que correspondem aos parâmetros especificados.
As linhas são compostas das seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| PROCEDURE\_CAT | O catálogo que contém o procedimento. O valor é **`null`** se esta tabela não tiver catálogos. |
| PROCEDURE\_SCHEM | Nome do esquema que contém o procedimento armazenado. |
| PROCEDURE\_NAME | Nome do procedimento. |
| COLUMN\_NAME | Nome do parâmetro. |
| COLUMN\_TYPE | Um valor inteiro que representa o tipo do parâmetro:  | Valor de retorno | Tipo de parâmetro | | --- | --- | | 1 (SQL\_PARAM\_INPUT) | Parâmetro de entrada (IN). | | 2 (SQL\_PARAM\_INPUT\_OUTPUT) | Parâmetro de entrada/saída (INOUT). | | 3 (SQL\_PARAM\_OUTPUT) | Parâmetro de saída (OUT). | |
| DATA\_TYPE | O tipo de dados SQL para o parâmetro representado como um valor inteiro. |
| TYPE\_NAME | Uma string que representa o tipo de dados do parâmetro. |
| COLUMN\_SIZE | Um valor inteiro que representa o tamanho do parâmetro. |
| BUFFER\_LENGTH | Número máximo de bytes necessários para armazenar dados para este parâmetro. |
| DECIMAL\_DIGITS | A escala do parâmetro, ou **`null`** onde a escala não é aplicável. |
| NUM\_PREC\_RADIX | Um valor inteiro de `10` (representando um tipo de dado numérico exato), `2` (representando um tipo de dado numérico aproximado) ou **`null`** (representando um tipo de dado para o qual radix não é aplicável). |
| NULLABLE | Um valor inteiro que representa se o parâmetro é anulável ou não. |
| REMARKS | Descrição do parâmetro. |
| COLUMN\_DEF | Valor padrão para o parâmetro. |
| SQL\_DATA\_TYPE | Um valor inteiro que representa o tamanho do parâmetro. |
| SQL\_DATETIME\_SUB | Retorna um valor inteiro que representa um código de subtipo de data e hora, ou **`null`** para tipos de dados SQL aos quais isso não se aplica. |
| CHAR\_OCTET\_LENGTH | Comprimento máximo em octetos para um parâmetro de tipo de dados de caractere, que corresponde a COLUMN\_SIZE para dados de conjunto de caracteres de byte único ou **`null`** para tipos de dados que não são caracteres. |
| ORDINAL\_POSITION | A posição indexada em 1 do parâmetro na instrução CALL. |
| IS\_NULLABLE | Um valor de string onde 'YES' significa que o parâmetro aceita ou retorna **`null`** valores e 'NO' significa que o parâmetro não aceita ou retorna **`null`** valores. |

### Veja também

- [db2\_column\_privileges()](function.db2-column-privileges.md) - Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_columns()](function.db2-columns.md) - Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
- [db2\_foreign\_keys()](function.db2-foreign-keys.md) - Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela
- [db2\_primary\_keys()](function.db2-primary-keys.md) - Retorna um conjunto de resultados listando as chaves primárias para uma tabela
- [db2\_procedures()](function.db2-procedures.md) - Retorna um conjunto de resultados listando os procedimentos armazenados registrados em um banco de dados
- [db2\_special\_columns()](function.db2-special-columns.md) - Retorna um conjunto de resultados listando as colunas de identificador de linha exclusivo para uma tabela
- [db2\_statistics()](function.db2-statistics.md) - Retorna um conjunto de resultados listando o índice e as estatísticas de uma tabela
- [db2\_table\_privileges()](function.db2-table-privileges.md) - Retorna um conjunto de resultados listando as tabelas e privilégios associados em um banco de dados
- [db2\_tables()](function.db2-tables.md) - Retorna um conjunto de resultados listando as tabelas e metadados associados em um banco de dados

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
