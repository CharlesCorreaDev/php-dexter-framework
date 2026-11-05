# Retorna um conjunto de resultados listando as colunas de identificador de linha exclusivo para uma tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-special-columns.php

---

# db2\_special\_columns

(PECL ibm\_db2 >= 1.0.0)

db2\_special\_columns — 
Retorna um conjunto de resultados listando as colunas de identificador de linha exclusivo para uma tabela

### Descrição

function **db2\_special\_columns**(  
    [resource](language.types.resource.md) `$connection`,  
    [?](language.types.null.md)[string](language.types.string.md) `$qualifier`,  
    [string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table_name`,  
    [int](language.types.integer.md) `$scope`  
): [resource](language.types.resource.md)

Retorna um conjunto de resultados listando as colunas de identificador de linha exclusivo para uma tabela.

### Parâmetros

`connection`
:   Uma conexão válida com um banco de dados IBM DB2, Cloudscape ou Apache Derby.

`qualifier`
:   Um qualificador para bancos de dados DB2 em execução em servidores OS/390 ou z/OS. Para
    outros bancos de dados, passe **`null`** ou uma string vazia.

`schema`
:   O esquema que contém as tabelas.

`table_name`
:   O nome da tabela.

`scope`
:   Valor inteiro representando a duração mínima para a qual o
    identificador de linha exclusivo é válido. Este pode ser um dos seguintes
    valores:

    | Valor inteiro | Constante SQL | Descrição |
    | --- | --- | --- |
    | 0 | SQL\_SCOPE\_CURROW | O identificador de linha é válido somente enquanto o cursor estiver posicionado na linha. |
    | 1 | SQL\_SCOPE\_TRANSACTION | O identificador de linha é válido durante a transação. |
    | 2 | SQL\_SCOPE\_SESSION | O identificador de linha é válido durante a conexão. |

### Valor Retornado

Retorna um recurso de declaração com um conjunto de resultados contendo linhas com informações de identificador de linha
exclusivas para uma tabela. As linhas são compostas das
seguintes colunas:

| Nome da coluna | Descrição |
| --- | --- |
| SCOPE | | Valor inteiro | Constante SQL | Descrição | | --- | --- | --- | | 0 | SQL\_SCOPE\_CURROW | O identificador de linha é válido somente enquanto o cursor estiver posicionado na linha. | | 1 | SQL\_SCOPE\_TRANSACTION | O identificador de linha é válido durante a transação. | | 2 | SQL\_SCOPE\_SESSION | O identificador de linha é válido durante a conexão. | |
| COLUMN\_NAME | Nome da coluna exclusiva. |
| DATA\_TYPE | Tipo de dados SQL para a coluna. |
| TYPE\_NAME | Representação de string do tipo de dados SQL para a coluna. |
| COLUMN\_SIZE | Um valor inteiro que representa o tamanho da coluna. |
| BUFFER\_LENGTH | Número máximo de bytes necessários para armazenar dados desta coluna. |
| DECIMAL\_DIGITS | A escala da coluna, ou **`null`** onde a escala não é aplicável. |
| NUM\_PREC\_RADIX | Um valor inteiro de `10` (representando um tipo de dado numérico exato), `2` (representando um tipo de dado numérico aproximado) ou **`null`** (representando um tipo de dado para o qual radix não é aplicável). |
| PSEUDO\_COLUMN | Sempre retorna 1. |

### Veja também

- [db2\_column\_privileges()](function.db2-column-privileges.md) - Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_columns()](function.db2-columns.md) - Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
- [db2\_foreign\_keys()](function.db2-foreign-keys.md) - Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela
- [db2\_primary\_keys()](function.db2-primary-keys.md) - Retorna um conjunto de resultados listando as chaves primárias para uma tabela
- [db2\_procedure\_columns()](function.db2-procedure-columns.md) - Retorna um conjunto de resultados listando os parâmetros do procedimento armazenado
- [db2\_procedures()](function.db2-procedures.md) - Retorna um conjunto de resultados listando os procedimentos armazenados registrados em um banco de dados
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
