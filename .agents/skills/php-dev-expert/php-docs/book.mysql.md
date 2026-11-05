# API Original MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mysql.php

---

# API Original MySQL

# Introdução

Esta extensão foi descontinuada a partir do PHP 5.5.0 e
foi removida a partir do PHP 7.0.0. No lugar dela, tanto a extensão
[mysqli](book.mysqli.md) quanto a extensão
[PDO\_MySQL](ref.pdo-mysql.md) devem ser
usadas. Consulte também a [Visão Geral da
API MySQL](mysqlinfo.api.choosing.md) para ajuda adicional na escolha de uma API MySQL.

Estas funções permitem acessar servidores de banco de dados MySQL.
Mais informação sobre o MySQL podem ser encontradas em [» https://www.mysql.com/](https://www.mysql.com/).

Documentação para o MySQL pode ser encontrada em [» https://dev.mysql.com/doc/](https://dev.mysql.com/doc/).

- [Instalação/Configuração](mysql.setup.md)
  - [Dependências](mysql.requirements.md)
  - [Instalação](mysql.installation.md)
  - [Configurações de Execução](mysql.configuration.md)
  - [Tipos de Recurso](mysql.resources.md)
- [Registro de Alterações](changelog.mysql.md)
- [Constantes predefinidas](mysql.constants.md)
- [Examples](mysql.examples.md)
  - [Exemplo de uso da extensão MySQL](mysql.examples-basic.md)
- [Funções da MySQL](ref.mysql.md)
  - [mysql\_affected\_rows](function.mysql-affected-rows.md) — Obtém o número de linhas afetadas na operação anterior do MySQL
  - [mysql\_client\_encoding](function.mysql-client-encoding.md) — Retorna o nome do conjunto de caracteres
  - [mysql\_close](function.mysql-close.md) — Fecha a conexão MySQL
  - [mysql\_connect](function.mysql-connect.md) — Abre uma conexão a um servidor MySQL
  - [mysql\_create\_db](function.mysql-create-db.md) — Cria um banco de dados MySQL
  - [mysql\_data\_seek](function.mysql-data-seek.md) — Move o ponteiro interno do resultado
  - [mysql\_db\_name](function.mysql-db-name.md) — Obtém o nome do banco de dados a partir da chamada à mysql\_list\_dbs
  - [mysql\_db\_query](function.mysql-db-query.md) — Seleciona um banco de dados e executa uma consulta nele
  - [mysql\_drop\_db](function.mysql-drop-db.md) — Drop (exclui) um banco de dados MySQL
  - [mysql\_errno](function.mysql-errno.md) — Retorna o valor numérico da mensagem de erro da operação MySQL anterior
  - [mysql\_error](function.mysql-error.md) — Retorna o texto da mensagem de erro da operação MySQL anterior
  - [mysql\_escape\_string](function.mysql-escape-string.md) — Escapa uma string para usá-la em uma função mysql\_query
  - [mysql\_fetch\_array](function.mysql-fetch-array.md) — Obtém uma linha de resultado como um array associativo, numérico, ou ambos
  - [mysql\_fetch\_assoc](function.mysql-fetch-assoc.md) — Obtém uma linha do resultado como um array associativo
  - [mysql\_fetch\_field](function.mysql-fetch-field.md) — Obtém informações de coluna de um resultado e retorna como um objeto
  - [mysql\_fetch\_lengths](function.mysql-fetch-lengths.md) — Obtém o tamanho de cada saída de um resultado
  - [mysql\_fetch\_object](function.mysql-fetch-object.md) — Obtém o resultado de uma linha como um objeto
  - [mysql\_fetch\_row](function.mysql-fetch-row.md) — Obtém uma linha como um array numérico
  - [mysql\_field\_flags](function.mysql-field-flags.md) — Obtém as opções associadas ao campo especificado em um resultado
  - [mysql\_field\_len](function.mysql-field-len.md) — Retorna o tamanho do campo especificado
  - [mysql\_field\_name](function.mysql-field-name.md) — Obtém o nome do campo especificado em um resultado
  - [mysql\_field\_seek](function.mysql-field-seek.md) — Define o ponteiro do resultado para o índice de campo especificado
  - [mysql\_field\_table](function.mysql-field-table.md) — Obtém o nome da tabela na qual o campo especificado esta
  - [mysql\_field\_type](function.mysql-field-type.md) — Obtém o tipo do campo especificado em um resultado
  - [mysql\_free\_result](function.mysql-free-result.md) — Libera memória usada pelo resultado
  - [mysql\_get\_client\_info](function.mysql-get-client-info.md) — Obtém informações do cliente MySQL
  - [mysql\_get\_host\_info](function.mysql-get-host-info.md) — Obtém informações do servidor MySQL
  - [mysql\_get\_proto\_info](function.mysql-get-proto-info.md) — Obtém informações do protocolo MySQL
  - [mysql\_get\_server\_info](function.mysql-get-server-info.md) — Obtém informações do servidor MySQL
  - [mysql\_info](function.mysql-info.md) — Obtém informação sobre a consulta mais recente
  - [mysql\_insert\_id](function.mysql-insert-id.md) — Obtém o ID gerado pela operação INSERT anterior
  - [mysql\_list\_dbs](function.mysql-list-dbs.md) — Lista os bancos de dados disponíveis em um servidor MySQL
  - [mysql\_list\_fields](function.mysql-list-fields.md) — Lista os campos de uma tabela MySQL
  - [mysql\_list\_processes](function.mysql-list-processes.md) — Lista os processos MySQL
  - [mysql\_list\_tables](function.mysql-list-tables.md) — Lista as tabelas em um banco de dados MySQL
  - [mysql\_num\_fields](function.mysql-num-fields.md) — Obtém o numero de campos em um resultado
  - [mysql\_num\_rows](function.mysql-num-rows.md) — Obtém o número de linhas em um resultado
  - [mysql\_pconnect](function.mysql-pconnect.md) — Abre uma conexão persistente a um servidor MySQL
  - [mysql\_ping](function.mysql-ping.md) — Pinga uma conexão com o servidor ou reconecta se não houver conexão
  - [mysql\_query](function.mysql-query.md) — Envia uma consulta MySQL
  - [mysql\_real\_escape\_string](function.mysql-real-escape-string.md) — Escapa os caracteres especiais em uma string para uso em uma instrução SQL
  - [mysql\_result](function.mysql-result.md) — Retorna dados do resultado
  - [mysql\_select\_db](function.mysql-select-db.md) — Seleciona um banco de dados MySQL
  - [mysql\_set\_charset](function.mysql-set-charset.md) — Define o conjunto de caracteres do cliente
  - [mysql\_stat](function.mysql-stat.md) — Obtém o status atual do sistema
  - [mysql\_tablename](function.mysql-tablename.md) — Obtém o nome da tabela do campo
  - [mysql\_thread\_id](function.mysql-thread-id.md) — Retorna o ID da thread atual
  - [mysql\_unbuffered\_query](function.mysql-unbuffered-query.md) — Envia uma consulta SQL ao MySQL sem buscar e armazenar em buffer as linhas de resultados

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
