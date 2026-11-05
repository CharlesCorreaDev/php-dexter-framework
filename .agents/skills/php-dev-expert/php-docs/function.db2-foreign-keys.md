# Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-foreign-keys.php

---

# db2\_foreign\_keys

(PECL ibm\_db2 >= 1.0.0)

db2\_foreign\_keys — 
Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela

### Descrição

function **db2\_foreign\_keys**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier`,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table_name`  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela.

### Parâmetros

`connection`
:   Uma conexão válida com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

`qualifier`
:   Um qualificador para bancos de dados DB2 em execução em servidores OS/390 ou z/OS. Para
    outros bancos de dados, passe **`null`** ou uma string vazia.

`schema`
:   O esquema que contém as tabelas. Se `schema`
    for **`null`**, **db2\_foreign\_keys()** corresponde ao esquema para
    a conexão atual.

`table_name`
:   O nome da tabela.

### Valor Retornado

Retorna um recurso de instrução com um conjunto de resultados contendo linhas descrevendo
as chaves estrangeiras para a tabela especificada. O conjunto de resultados é composto das
seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| PKTABLE\_CAT | Nome do catálogo para a tabela que contém a chave primária. O valor é NULL se esta tabela não tiver catálogos. |
| PKTABLE\_SCHEM | Nome do esquema da tabela que contém a chave primária. |
| PKTABLE\_NAME | Nome da tabela que contém a chave primária. |
| PKCOLUMN\_NAME | Nome da coluna que contém a chave primária. |
| FKTABLE\_CAT | Nome do catálogo para a tabela que contém a chave estrangeira. O valor é NULL se esta tabela não tiver catálogos. |
| FKTABLE\_SCHEM | Nome do esquema da tabela que contém a chave estrangeira. |
| FKTABLE\_NAME | Nome da tabela que contém a chave estrangeira. |
| FKCOLUMN\_NAME | Nome da coluna que contém a chave estrangeira. |
| KEY\_SEQ | Posição indexada em 1 da coluna na chave. |
| UPDATE\_RULE | Valor inteiro representando a ação aplicada à chave estrangeira quando a operação SQL é UPDATE. |
| DELETE\_RULE | Valor inteiro que representa a ação aplicada à chave estrangeira quando a operação SQL é DELETE. |
| FK\_NAME | O nome da chave estrangeira. |
| PK\_NAME | O nome da chave primária. |
| DEFERRABILITY | Um valor inteiro que representa se a diferibilidade da chave estrangeira é SQL\_INITIALLY\_DEFERRED, SQL\_INITIALLY\_IMMEDIATE ou SQL\_NOT\_DEFERRABLE. |

### Veja também

- [db2\_column\_privileges()](function.db2-column-privileges.md) - Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_columns()](function.db2-columns.md) - Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
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
