# Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-columns.php

---

# db2\_columns

(PECL ibm\_db2 >= 1.0.0)

db2\_columns — 
Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela

### Descrição

function **db2\_columns**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$table_name` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$column_name` = **`null`**  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando as colunas e metadados associados para uma
tabela.

### Parâmetros

`connection`
:   Uma conexão válida com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

`qualifier`
:   Um qualificador para bancos de dados DB2 em execução em servidores OS/390 ou z/OS. Para
    outros bancos de dados, passe **`null`** ou uma string vazia.

`schema`
:   O esquema que contém as tabelas. Para corresponder a todos os esquemas, passe
    `'%'`.

`table_name`
:   O nome da tabela ou view. Para corresponder a todas as tabelas no banco de dados,
    passe **`null`** ou uma string vazia.

`column_name`
:   O nome da coluna. Para corresponder a todas as colunas na tabela, passe **`null`**
    ou uma string vazia.

### Valor Retornado

Retorna um recurso de instrução com um conjunto de resultados contendo linhas descrevendo
as colunas que correspondem aos parâmetros especificados. As linhas são compostas
pelas seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| TABLE\_CAT | Nome do catálogo. O valor é NULL se esta tabela não tiver catálogos. |
| TABLE\_SCHEM | Nome do esquema. |
| TABLE\_NAME | Nome da tabela ou visualização. |
| COLUMN\_NAME | Nome da coluna. |
| DATA\_TYPE | O tipo de dados SQL para a coluna representada como um valor inteiro. |
| TYPE\_NAME | Uma string que representa o tipo de dados da coluna. |
| COLUMN\_SIZE | Um valor inteiro que representa o tamanho da coluna. |
| BUFFER\_LENGTH | Número máximo de bytes necessários para armazenar dados desta coluna. |
| DECIMAL\_DIGITS | A escala da coluna, ou **`null`** onde a escala não é aplicável. |
| NUM\_PREC\_RADIX | Um valor inteiro de `10` (representando um tipo de dado numérico exato), `2` (representando um tipo de dado numérico aproximado) ou **`null`** (representando um tipo de dado para o qual radix não é aplicável). |
| NULLABLE | Um valor inteiro que representa se a coluna é anulável ou não. |
| REMARKS | Descrição da coluna. |
| COLUMN\_DEF | Valor padrão para a coluna. |
| SQL\_DATA\_TYPE | Um valor inteiro que representa o tamanho da coluna. |
| SQL\_DATETIME\_SUB | Retorna um valor inteiro que representa um código de subtipo de data e hora, ou **`null`** para tipos de dados SQL aos quais isso não se aplica. |
| CHAR\_OCTET\_LENGTH | Comprimento máximo em octetos para uma coluna de tipo de dados de caractere, que corresponde a COLUMN\_SIZE para dados de conjunto de caracteres de byte único ou **`null`** para tipos de dados não caracteres. |
| ORDINAL\_POSITION | A posição, indexada a partir de 1, da coluna na tabela. |
| IS\_NULLABLE | Uma string onde 'YES' significa que a coluna é anulável e 'NO' significa que a coluna não é anulável. |

### Veja também

- [db2\_column\_privileges()](function.db2-column-privileges.md) - Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_foreign\_keys()](function.db2-foreign-keys.md) - Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela
- [db2\_primary\_keys()](function.db2-primary-keys.md) - Retorna um conjunto de resultados listando as chaves primárias para uma tabela
- [db2\_procedure\_columns()](function.db2-procedure-columns.md) - Retorna um conjunto de resultados listando os parâmetros do procedimento armazenado
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
