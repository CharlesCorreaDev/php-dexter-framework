# Driver Microsoft SQL Server para PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.sqlsrv.php

---

# Driver Microsoft SQL Server para PHP

# Introdução

A extensão SQLSRV permite acessar bancos de dados Microsoft SQL Server e
SQL Azure. A versão 3.0 do driver suporta o
SQL Server, começando com o SQL Server 2005, incluindo o SQL Server 2012 e o SQL
Server 2012 LocalDB. (Para mais informações sobre o LocalDB, consulte
[» Suporte do Driver PHP para SQL Server para LocalDB](https://msdn.microsoft.com/en-us/library/hh487161.aspx)
e [» Informações sobre o SQL Server 2012 Express LocalDB](https://msdn.microsoft.com/en-us/library/hh510202(SQL.110).aspx).)

A extensão SQLSRV é suportada pela Microsoft e está disponível para download aqui:
[» https://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx](https://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx). O SQL Server 2012 LocalDB pode ser
baixado aqui: [» https://go.microsoft.com/fwlink/?LinkID=237665](https://go.microsoft.com/fwlink/?LinkID=237665).

- [Instalação/Configuração](sqlsrv.setup.md)
  - [Dependências](sqlsrv.requirements.md)
  - [Instalação](sqlsrv.installation.md)
  - [Configurações de Execução](sqlsrv.configuration.md)
  - [Tipos de Recurso](sqlsrv.resources.md)
- [Constantes predefinidas](sqlsrv.constants.md)
- [Funções SQLSRV](ref.sqlsrv.md)
  - [sqlsrv\_begin\_transaction](function.sqlsrv-begin-transaction.md) — Inicia uma transação de banco de dados
  - [sqlsrv\_cancel](function.sqlsrv-cancel.md) — Cancela uma declaração
  - [sqlsrv\_client\_info](function.sqlsrv-client-info.md) — Retorna informações sobre o cliente e a conexão especificada
  - [sqlsrv\_close](function.sqlsrv-close.md) — Fecha uma conexão aberta e libera os recursos associados à conexão
  - [sqlsrv\_commit](function.sqlsrv-commit.md) — Confirma uma transação que foi iniciada com sqlsrv\_begin\_transaction
  - [sqlsrv\_configure](function.sqlsrv-configure.md) — Altera as configurações de tratamento de erros e registro do driver
  - [sqlsrv\_connect](function.sqlsrv-connect.md) — Abre uma conexão com um banco de dados Microsoft SQL Server
  - [sqlsrv\_errors](function.sqlsrv-errors.md) — Retorna informações de erro e aviso sobre a última operação SQLSRV executada
  - [sqlsrv\_execute](function.sqlsrv-execute.md) — Executa uma declaração preparada com sqlsrv\_prepare
  - [sqlsrv\_fetch](function.sqlsrv-fetch.md) — Torna a próxima linha em um conjunto de resultados disponível para leitura
  - [sqlsrv\_fetch\_array](function.sqlsrv-fetch-array.md) — Retorna uma linha como um array
  - [sqlsrv\_fetch\_object](function.sqlsrv-fetch-object.md) — Recupera a próxima linha de dados em um conjunto de resultados como um objeto
  - [sqlsrv\_field\_metadata](function.sqlsrv-field-metadata.md) — Recupera metadados para os campos de uma declaração preparada por
    sqlsrv\_prepare ou sqlsrv\_query
  - [sqlsrv\_free\_stmt](function.sqlsrv-free-stmt.md) — Libera todos os recursos para a declaração especificada
  - [sqlsrv\_get\_config](function.sqlsrv-get-config.md) — Retorna o valor da configuração especificada
  - [sqlsrv\_get\_field](function.sqlsrv-get-field.md) — Obtém dados do campo da linha atualmente selecionada
  - [sqlsrv\_has\_rows](function.sqlsrv-has-rows.md) — Indica se a declaração especificada possui linhas
  - [sqlsrv\_next\_result](function.sqlsrv-next-result.md) — Torna o próximo resultado da declaração especificada ativo
  - [sqlsrv\_num\_fields](function.sqlsrv-num-fields.md) — Recupera o número de campos (colunas) em uma declaração
  - [sqlsrv\_num\_rows](function.sqlsrv-num-rows.md) — Recupera o número de linhas em um conjunto de resultados
  - [sqlsrv\_prepare](function.sqlsrv-prepare.md) — Prepara uma consulta para execução
  - [sqlsrv\_query](function.sqlsrv-query.md) — Prepara e executa uma consulta
  - [sqlsrv\_rollback](function.sqlsrv-rollback.md) — Reverte uma transação que foi iniciada com
    sqlsrv\_begin\_transaction
  - [sqlsrv\_rows\_affected](function.sqlsrv-rows-affected.md) — Retorna o número de linhas modificadas pela última consulta INSERT, UPDATE ou
    DELETE executada
  - [sqlsrv\_send\_stream\_data](function.sqlsrv-send-stream-data.md) — Envia dados de fluxos de parâmetros para o servidor
  - [sqlsrv\_server\_info](function.sqlsrv-server-info.md) — Retorna informações sobre o servidor

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
