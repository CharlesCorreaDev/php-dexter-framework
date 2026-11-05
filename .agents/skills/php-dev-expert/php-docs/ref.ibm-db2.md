# Funções de IBM DB2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.ibm-db2.php

---

# Funções de IBM DB2

## Índice

- [db2\_autocommit](function.db2-autocommit.md) — Retorna ou define o estado AUTOCOMMIT para uma conexão de banco de dados
- [db2\_bind\_param](function.db2-bind-param.md) — Vincula uma variável PHP a um parâmetro de instrução SQL
- [db2\_client\_info](function.db2-client-info.md) — Retorna um objeto com propriedades que descrevem o cliente do banco de dados DB2
- [db2\_close](function.db2-close.md) — Fecha uma conexão de banco de dados
- [db2\_column\_privileges](function.db2-column-privileges.md) — Retorna um conjunto de resultados listando as colunas e privilégios associados para uma tabela
- [db2\_columns](function.db2-columns.md) — Retorna um conjunto de resultados listando as colunas e metadados associados para uma tabela
- [db2\_commit](function.db2-commit.md) — Confirma uma transação
- [db2\_conn\_error](function.db2-conn-error.md) — Retorna uma string contendo o SQLSTATE retornado pela última tentativa de conexão
- [db2\_conn\_errormsg](function.db2-conn-errormsg.md) — Retorna a última mensagem de erro de conexão e o valor SQLCODE
- [db2\_connect](function.db2-connect.md) — Retorna uma conexão com um banco de dados
- [db2\_cursor\_type](function.db2-cursor-type.md) — Retorna o tipo de cursor usado por um recurso de instrução
- [db2\_escape\_string](function.db2-escape-string.md) — Usado para escapar certos caracteres
- [db2\_exec](function.db2-exec.md) — Executa uma instrução SQL diretamente
- [db2\_execute](function.db2-execute.md) — Executa uma instrução SQL preparada
- [db2\_fetch\_array](function.db2-fetch-array.md) — Retorna um array, indexado pela posição da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_assoc](function.db2-fetch-assoc.md) — Retorna um array, indexado pelo nome da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_both](function.db2-fetch-both.md) — Retorna um array, indexado pelo nome da coluna e pela posição, representando uma linha em um conjunto de resultados
- [db2\_fetch\_object](function.db2-fetch-object.md) — Retorna um objeto com propriedades que representam colunas na linha buscada
- [db2\_fetch\_row](function.db2-fetch-row.md) — Define o ponteiro do conjunto de resultados para a próxima linha ou linha solicitada
- [db2\_field\_display\_size](function.db2-field-display-size.md) — Retorna o número máximo de bytes necessários para exibir uma coluna
- [db2\_field\_name](function.db2-field-name.md) — Retorna o nome da coluna no conjunto de resultados
- [db2\_field\_num](function.db2-field-num.md) — Retorna a posição da coluna nomeada em um conjunto de resultados
- [db2\_field\_precision](function.db2-field-precision.md) — Retorna a precisão da coluna indicada em um conjunto de resultados
- [db2\_field\_scale](function.db2-field-scale.md) — Retorna a escala da coluna indicada em um conjunto de resultados
- [db2\_field\_type](function.db2-field-type.md) — Retorna o tipo de dados da coluna indicada em um conjunto de resultados
- [db2\_field\_width](function.db2-field-width.md) — Retorna a largura do valor atual da coluna indicada em um conjunto de resultados
- [db2\_foreign\_keys](function.db2-foreign-keys.md) — Retorna um conjunto de resultados listando as chaves estrangeiras para uma tabela
- [db2\_free\_result](function.db2-free-result.md) — Libera recursos associados a um conjunto de resultados
- [db2\_free\_stmt](function.db2-free-stmt.md) — Libera recursos associados ao recurso de instrução indicado
- [db2\_get\_option](function.db2-get-option.md) — Recupera um valor de opção para um recurso de instrução ou um recurso de conexão
- [db2\_last\_insert\_id](function.db2-last-insert-id.md) — Retorna o ID gerado automaticamente da última consulta de inserção que foi executada com sucesso
  nesta conexão
- [db2\_lob\_read](function.db2-lob-read.md) — Obtém um tamanho definido pelo usuário de arquivos LOB com cada invocação
- [db2\_next\_result](function.db2-next-result.md) — Solicita o próximo conjunto de resultados de um procedimento armazenado
- [db2\_num\_fields](function.db2-num-fields.md) — Retorna o número de campos contidos em um conjunto de resultados
- [db2\_num\_rows](function.db2-num-rows.md) — Retorna o número de linhas afetadas por uma instrução SQL
- [db2\_pclose](function.db2-pclose.md) — Fecha uma conexão persistente a um banco de dados
- [db2\_pconnect](function.db2-pconnect.md) — Retorna uma conexão persistente a um banco de dados
- [db2\_prepare](function.db2-prepare.md) — Prepara uma instrução SQL para ser executada
- [db2\_primary\_keys](function.db2-primary-keys.md) — Retorna um conjunto de resultados listando as chaves primárias para uma tabela
- [db2\_procedure\_columns](function.db2-procedure-columns.md) — Retorna um conjunto de resultados listando os parâmetros do procedimento armazenado
- [db2\_procedures](function.db2-procedures.md) — Retorna um conjunto de resultados listando os procedimentos armazenados registrados em um banco de dados
- [db2\_result](function.db2-result.md) — Retorna uma única coluna de uma linha no conjunto de resultados
- [db2\_rollback](function.db2-rollback.md) — Reverte uma transação
- [db2\_server\_info](function.db2-server-info.md) — Retorna um objeto com propriedades que descrevem o servidor de banco de dados DB2
- [db2\_set\_option](function.db2-set-option.md) — Define opções para recursos de conexão ou instrução
- [db2\_special\_columns](function.db2-special-columns.md) — Retorna um conjunto de resultados listando as colunas de identificador de linha exclusivo para uma tabela
- [db2\_statistics](function.db2-statistics.md) — Retorna um conjunto de resultados listando o índice e as estatísticas de uma tabela
- [db2\_stmt\_error](function.db2-stmt-error.md) — Retorna uma string contendo o SQLSTATE retornado por uma instrução SQL
- [db2\_stmt\_errormsg](function.db2-stmt-errormsg.md) — Retorna uma string contendo a última mensagem de erro da instrução SQL
- [db2\_table\_privileges](function.db2-table-privileges.md) — Retorna um conjunto de resultados listando as tabelas e privilégios associados em um banco de dados
- [db2\_tables](function.db2-tables.md) — Retorna um conjunto de resultados listando as tabelas e metadados associados em um banco de dados

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
