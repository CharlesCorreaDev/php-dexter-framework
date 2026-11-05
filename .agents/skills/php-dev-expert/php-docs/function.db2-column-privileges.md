# Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-column-privileges.php

---

# db2\_column\_privileges

(PECL ibm\_db2 >= 1.0.0)

db2\_column\_privileges — 
Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela

### Descrição

function **db2\_column\_privileges**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$table_name` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$column_name` = **`null`**  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando as colunas e privilégios associados para uma
tabela.

### Parâmetros

`connection`
:   Uma conexão válida com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

`qualifier`
:   Um qualificador para bancos de dados DB2 em execução em servidores OS/390 ou z/OS. Para
    outros bancos de dados, passe **`null`** ou uma string vazia.

`schema`
:   O esquema que contém as tabelas. Para corresponder a todos os esquemas, passe **`null`**
    ou uma string vazia.

`table_name`
:   O nome da tabela ou view. Para corresponder a todas as tabelas no banco de dados,
    passe **`null`** ou uma string vazia.

`column_name`
:   O nome da coluna. Para corresponder a todas as colunas na tabela, passe **`null`**
    ou uma string vazia.

### Valor Retornado

Retorna um recurso de instrução com um conjunto de resultados contendo linhas descrevendo
os privilégios de coluna para colunas que correspondem aos parâmetros especificados. As
linhas são compostas das seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| TABLE\_CAT | Nome do catálogo. O valor é NULL se esta tabela não tiver catálogos. |
| TABLE\_SCHEM | Nome do esquema. |
| TABLE\_NAME | Nome da tabela ou visualização. |
| COLUMN\_NAME | Nome da coluna. |
| GRANTOR | ID de autorização do usuário que concedeu o privilégio. |
| GRANTEE | ID de autorização do usuário a quem o privilégio foi concedido. |
| PRIVILEGE | O privilégio da coluna. |
| IS\_GRANTABLE | Se o beneficiário tem permissão para conceder esse privilégio a outros usuários. |

### Veja também

- [db2\_columns()](function.db2-columns.md) - Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
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
