# Retorna um conjunto de resultados listando os procedimentos armazenados registrados em um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-procedures.php

---

# db2\_procedures

(PECL ibm\_db2 >= 1.0.0)

db2\_procedures — 
Retorna um conjunto de resultados listando os procedimentos armazenados registrados em um banco de dados

### Descrição

function **db2\_procedures**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier`,  
    [string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$procedure`  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando os procedimentos armazenados registrados em um
banco de dados.

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

### Valor Retornado

Retorna um recurso de declaração com um conjunto de resultados contendo linhas descrevendo
os procedimentos armazenados que correspondem aos parâmetros especificados. As linhas são
compostas pelas seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| PROCEDURE\_CAT | O catálogo que contém o procedimento. O valor é **`null`** se esta tabela não tiver catálogos. |
| PROCEDURE\_SCHEM | Nome do esquema que contém o procedimento armazenado. |
| PROCEDURE\_NAME | Nome do procedimento. |
| NUM\_INPUT\_PARAMS | Número de parâmetros de entrada (IN) para o procedimento armazenado. |
| NUM\_OUTPUT\_PARAMS | Número de parâmetros de saída (OUT) para o procedimento armazenado. |
| NUM\_RESULT\_SETS | Número de conjuntos de resultados retornados pelo procedimento armazenado. |
| REMARKS | Algum comentário sobre o procedimento armazenado. |
| PROCEDURE\_TYPE | Sempre retorna `1`, indicando que o procedimento armazenado não retorna um valor. |

### Veja também

- [db2\_column\_privileges()](function.db2-column-privileges.md) - Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_columns()](function.db2-columns.md) - Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
- [db2\_foreign\_keys()](function.db2-foreign-keys.md) - Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela
- [db2\_primary\_keys()](function.db2-primary-keys.md) - Retorna um conjunto de resultados listando as chaves primárias para uma tabela
- [db2\_procedure\_columns()](function.db2-procedure-columns.md) - Retorna um conjunto de resultados listando os parâmetros do procedimento armazenado
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
