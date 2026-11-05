# Retorna um conjunto de resultados listando as tabelas e metadados associados em um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-tables.php

---

# db2\_tables

(PECL ibm\_db2 >= 1.0.0)

db2\_tables — 
Retorna um conjunto de resultados listando as tabelas e metadados associados em um banco de dados

### Descrição

function **db2\_tables**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$table_name` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$table_type` = **`null`**  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando as tabelas e metadados associados em um
banco de dados.

### Parâmetros

`connection`
:   Uma conexão válida com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

`qualifier`
:   Um qualificador para bancos de dados DB2 em execução em servidores OS/390 ou z/OS. Para
    outros bancos de dados, passe **`null`** ou uma string vazia.

`schema`
:   O esquema que contém as tabelas. Este parâmetro aceita um
    padrão de pesquisa contendo `_` e `%`
    como curingas.

`table_name`
:   O nome da tabela. Este parâmetro aceita um padrão de pesquisa
    contendo `_` e `%` como curingas.

`table_type`
:   Uma lista de identificadores de tipo de tabela delimitados por vírgulas. Para corresponder a todos os tipos de tabela,
    passe **`null`** ou uma string vazia. Identificadores de tipo de tabela válidos
    incluem: ALIAS, HIERARCHY TABLE, INOPERATIVE VIEW, NICKNAME,
    MATERIALIZED QUERY TABLE, SYSTEM TABLE, TABLE, TYPED TABLE, TYPED VIEW,
    e VIEW.

### Valor Retornado

Retorna um recurso de instrução com um conjunto de resultados contendo linhas descrevendo
as tabelas que correspondem aos parâmetros especificados. As linhas são compostas
pelas seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| TABLE\_CAT | O catálogo que contém a tabela. O valor é **`null`** se esta tabela não tiver catálogos. |
| TABLE\_SCHEM | Nome do esquema que contém a tabela. |
| TABLE\_NAME | Nome da tabela. |
| TABLE\_TYPE | Identificador do tipo para a tabela. |
| REMARKS | Descrição da tabela. |

### Veja também

- [db2\_column\_privileges()](function.db2-column-privileges.md) - Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_columns()](function.db2-columns.md) - Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
- [db2\_foreign\_keys()](function.db2-foreign-keys.md) - Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela
- [db2\_primary\_keys()](function.db2-primary-keys.md) - Retorna um conjunto de resultados listando as chaves primárias para uma tabela
- [db2\_procedure\_columns()](function.db2-procedure-columns.md) - Retorna um conjunto de resultados listando os parâmetros do procedimento armazenado
- [db2\_procedures()](function.db2-procedures.md) - Retorna um conjunto de resultados listando os procedimentos armazenados registrados em um banco de dados
- [db2\_special\_columns()](function.db2-special-columns.md) - Retorna um conjunto de resultados listando as colunas de identificador de linha exclusivo para uma tabela
- [db2\_statistics()](function.db2-statistics.md) - Retorna um conjunto de resultados listando o índice e as estatísticas de uma tabela
- [db2\_table\_privileges()](function.db2-table-privileges.md) - Retorna um conjunto de resultados listando as tabelas e privilégios associados em um banco de dados

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
