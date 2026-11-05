# Retorna um conjunto de resultados listando o índice e as estatísticas de uma tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-statistics.php

---

# db2\_statistics

(PECL ibm\_db2 >= 1.0.0)

db2\_statistics — 
Retorna um conjunto de resultados listando o índice e as estatísticas de uma tabela

### Descrição

function **db2\_statistics**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier`,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table_name`,  
    [bool](language.types.boolean.md) `$unique`  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando o índice e as estatísticas de uma tabela.

### Parâmetros

`connection`
:   Uma conexão válida com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

`qualifier`
:   Um qualificador para bancos de dados DB2 em execução em servidores OS/390 ou z/OS. Para
    outros bancos de dados, passe **`null`** ou uma string vazia.

`schema`
:   O esquema que contém a tabela de destino. Se este parâmetro for
    **`null`**, as estatísticas e índices são retornados para o esquema do
    usuário atual.

`table_name`
:   O nome da tabela.

`unique`
:   Quando `unique` é **`true`**, as informações para todos
    os índices na tabela são retornadas.
    Caso contrário, apenas as informações para índices exclusivos na tabela são
    retornadas.

### Valor Retornado

Retorna um recurso de instrução com um conjunto de resultados contendo linhas descrevendo
as estatísticas e índices para as tabelas base que correspondem aos
parâmetros especificados. As linhas são compostas das seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| TABLE\_CAT | O catálogo que contém a tabela. O valor é **`null`** se esta tabela não tiver catálogos. |
| TABLE\_SCHEM | Nome do esquema que contém a tabela. |
| TABLE\_NAME | Nome da tabela. |
| NON\_UNIQUE | Um valor inteiro que representa se o índice proíbe valores únicos ou se a linha representa estatísticas na própria tabela:  | Valor de retorno | Tipo de parâmetro | | --- | --- | | 0 (SQL\_FALSE) | O índice permite valores duplicados. | | 1 (SQL\_TRUE) | Os valores do índice devem ser exclusivos. | | **`null`** | Esta linha contém informações estatísticas da própria tabela. | |
| INDEX\_QUALIFIER | Um valor de string representando o qualificador que teria que ser anexado a INDEX\_NAME para qualificar completamente o índice. |
| INDEX\_NAME | Uma string que representa o nome do índice. |
| TYPE | Um valor inteiro que representa o tipo de informação contida nesta linha do conjunto de resultados:  | Valor de retorno | Tipo de parâmetro | | --- | --- | | 0 (SQL\_TABLE\_STAT) | A linha contém estatísticas sobre a própria tabela. | | 1 (SQL\_INDEX\_CLUSTERED) | A linha contém informações sobre um índice clusterizado. | | 2 (SQL\_INDEX\_HASH) | A linha contém informações sobre um índice com hash. | | 3 (SQL\_INDEX\_OTHER) | A linha contém informações sobre um tipo de índice que não é agrupado nem hash. | |
| ORDINAL\_POSITION | A posição indexada em 1 da coluna no índice. **`null`** se a linha contiver informações estatísticas sobre a própria tabela. |
| COLUMN\_NAME | O nome da coluna no índice. **`null`** se a linha contiver informações estatísticas sobre a própria tabela. |
| ASC\_OR\_DESC | `A` se a coluna estiver classificada em ordem crescente, `D` se a coluna estiver classificada em ordem decrescente, **`null`** se a linha contiver informações estatísticas sobre a tabela em si. |
| CARDINALITY | Se a linha contiver informações sobre um índice, esta coluna conterá um valor inteiro representando o número de valores exclusivos no índice.  Se a linha contiver informações sobre a tabela em si, esta coluna conterá um valor inteiro representando o número de linhas na tabela. |
| PAGES | Se a linha contiver informações sobre um índice, esta coluna conterá um valor inteiro representando o número de páginas usadas para armazenar o índice.  Se a linha contiver informações sobre a tabela em si, esta coluna conterá um valor inteiro representando o número de páginas usadas para armazenar a tabela. |
| FILTER\_CONDITION | Sempre retorna **`null`**. |

### Veja também

- [db2\_column\_privileges()](function.db2-column-privileges.md) - Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_columns()](function.db2-columns.md) - Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
- [db2\_foreign\_keys()](function.db2-foreign-keys.md) - Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela
- [db2\_primary\_keys()](function.db2-primary-keys.md) - Retorna um conjunto de resultados listando as chaves primárias para uma tabela
- [db2\_procedure\_columns()](function.db2-procedure-columns.md) - Retorna um conjunto de resultados listando os parâmetros do procedimento armazenado
- [db2\_procedures()](function.db2-procedures.md) - Retorna um conjunto de resultados listando os procedimentos armazenados registrados em um banco de dados
- [db2\_special\_columns()](function.db2-special-columns.md) - Retorna um conjunto de resultados listando as colunas de identificador de linha exclusivo para uma tabela
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
