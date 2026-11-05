# Retorna um conjunto de resultados listando as chaves primárias para uma tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-primary-keys.php

---

# db2\_primary\_keys

(PECL ibm\_db2 >= 1.0.0)

db2\_primary\_keys — 
Retorna um conjunto de resultados listando as chaves primárias para uma tabela

### Descrição

function **db2\_primary\_keys**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier`,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table_name`  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando as chaves primárias para uma tabela.

### Parâmetros

`connection`
:   Uma conexão válida com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

`qualifier`
:   Um qualificador para bancos de dados DB2 em execução em servidores OS/390 ou z/OS. Para
    outros bancos de dados, passe **`null`** ou uma string vazia.

`schema`
:   O esquema que contém as tabelas. Se `schema`
    for **`null`**, **db2\_primary\_keys()** corresponde ao esquema para
    a conexão atual.

`table_name`
:   O nome da tabela.

### Valor Retornado

Retorna um recurso de instrução com um conjunto de resultados contendo linhas descrevendo
as chaves primárias para a tabela especificada. O conjunto de resultados é composto das
seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| TABLE\_CAT | Nome do catálogo para a tabela que contém a chave primária. O valor é NULL se esta tabela não tiver catálogos. |
| TABLE\_SCHEM | Nome do esquema da tabela que contém a chave primária. |
| TABLE\_NAME | Nome da tabela que contém a chave primária. |
| COLUMN\_NAME | Nome da coluna que contém a chave primária. |
| KEY\_SEQ | Posição indexada em 1 da coluna na chave. |
| PK\_NAME | O nome da chave primária. |

### Veja também

- [db2\_column\_privileges()](function.db2-column-privileges.md) - Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_columns()](function.db2-columns.md) - Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
- [db2\_foreign\_keys()](function.db2-foreign-keys.md) - Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela
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
