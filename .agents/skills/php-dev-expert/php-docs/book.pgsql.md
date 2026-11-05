# PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.pgsql.php

---

# PostgreSQL

# Introdução

O banco de dados PostgreSQL é um produto de código aberto e disponível
gratuitamente. O Postgres, desenvolvido originalmente no Departamento de Ciência
da Computação da Universidade da Califórnia em Berkeley, foi pioneiro em muitos dos conceitos
objeto-relacionais que agora estão disponíveis em alguns bancos de dados comerciais. Fornece
suporte à linguagem SQL92/SQL99, transações, integridade referencial,
procedimentos armazenados e extensibilidade de tipos. O PostgreSQL é um descendente de código aberto
do original desenvolvido em Berkeley.

- [Instalação/Configuração](pgsql.setup.md)
  - [Dependências](pgsql.requirements.md)
  - [Instalação](pgsql.installation.md)
  - [Configurações de Execução](pgsql.configuration.md)
  - [Tipos de Recurso](pgsql.resources.md)
- [Constantes predefinidas](pgsql.constants.md)
- [Examples](pgsql.examples.md)
  - [Uso básico](pgsql.examples-basic.md)
  - [Basic usage](pgsql.examples-queries.md)
- [Funções PostgreSQL](ref.pgsql.md)
  - [pg\_affected\_rows](function.pg-affected-rows.md) — Retorna o número de registros afetados (tuplas)
  - [pg\_cancel\_query](function.pg-cancel-query.md) — Cancela uma consulta assíncrona
  - [pg\_change\_password](function.pg-change-password.md) — Altera a senha de um usuário do PostgreSQL
  - [pg\_client\_encoding](function.pg-client-encoding.md) — Obtém a codificação do cliente
  - [pg\_close](function.pg-close.md) — Fecha uma conexão PostgreSQL
  - [pg\_close\_stmt](function.pg-close-stmt.md) — Closes a prepared statement
  - [pg\_connect](function.pg-connect.md) — Abre uma conexão PostgreSQL
  - [pg\_connect\_poll](function.pg-connect-poll.md) — Pesquisa o status de uma tentativa de conexão PostgreSQL assíncrona em
    andamento
  - [pg\_connection\_busy](function.pg-connection-busy.md) — Obtém se conexão está ocupada ou não
  - [pg\_connection\_reset](function.pg-connection-reset.md) — Redefine conexão (reconecta)
  - [pg\_connection\_status](function.pg-connection-status.md) — Obtém o status da conexão
  - [pg\_consume\_input](function.pg-consume-input.md) — Lê a entrada na conexão
  - [pg\_convert](function.pg-convert.md) — Converte valores de array associativo em formas adequadas para instruções SQL
  - [pg\_copy\_from](function.pg-copy-from.md) — Insere registros em uma tabela a partir de um array
  - [pg\_copy\_to](function.pg-copy-to.md) — Copia uma tabela para um array
  - [pg\_dbname](function.pg-dbname.md) — Obtém o nome do banco de dados
  - [pg\_delete](function.pg-delete.md) — Exclui registros
  - [pg\_end\_copy](function.pg-end-copy.md) — Sincroniza com back-end do PostgreSQL
  - [pg\_escape\_bytea](function.pg-escape-bytea.md) — Escapa uma string para inserção em um campo bytea
  - [pg\_escape\_identifier](function.pg-escape-identifier.md) — Escapa um identificador para inserção em um campo de texto
  - [pg\_escape\_literal](function.pg-escape-literal.md) — Escapa um literal para inserção em um campo de texto
  - [pg\_escape\_string](function.pg-escape-string.md) — Escapa uma string para consulta
  - [pg\_execute](function.pg-execute.md) — Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado
  - [pg\_fetch\_all](function.pg-fetch-all.md) — Busca todas as linhas de um resultado como um array
  - [pg\_fetch\_all\_columns](function.pg-fetch-all-columns.md) — Busca todas as linhas em uma determinada coluna de resultado como um array
  - [pg\_fetch\_array](function.pg-fetch-array.md) — Busca uma linha como um array
  - [pg\_fetch\_assoc](function.pg-fetch-assoc.md) — Busca uma linha como um array associativo
  - [pg\_fetch\_object](function.pg-fetch-object.md) — Busca uma linha como um objeto
  - [pg\_fetch\_result](function.pg-fetch-result.md) — Retorna valores de uma instância de resultado
  - [pg\_fetch\_row](function.pg-fetch-row.md) — Obtém uma linha como um array enumerado
  - [pg\_field\_is\_null](function.pg-field-is-null.md) — Testa se um campo é SQL NULL
  - [pg\_field\_name](function.pg-field-name.md) — Retorna o nome de um campo
  - [pg\_field\_num](function.pg-field-num.md) — Retorna o número do campo para o campo nomeado
  - [pg\_field\_prtlen](function.pg-field-prtlen.md) — Retorna o comprimento impresso
  - [pg\_field\_size](function.pg-field-size.md) — Retorna o tamanho de armazenamento interno do campo nomeado
  - [pg\_field\_table](function.pg-field-table.md) — Retorna o nome ou oid do campo da tabela
  - [pg\_field\_type](function.pg-field-type.md) — Retorna o nome do tipo para o número do campo correspondente
  - [pg\_field\_type\_oid](function.pg-field-type-oid.md) — Retorna o ID do tipo (OID) para o número do campo correspondente
  - [pg\_flush](function.pg-flush.md) — Libera dados de consulta de saída na conexão
  - [pg\_free\_result](function.pg-free-result.md) — Libera memória de resultados
  - [pg\_get\_notify](function.pg-get-notify.md) — Obtém mensagem SQL NOTIFY
  - [pg\_get\_pid](function.pg-get-pid.md) — Obtém o ID do processo do backend
  - [pg\_get\_result](function.pg-get-result.md) — Obtém o resultado da consulta assíncrona
  - [pg\_host](function.pg-host.md) — Retorna o nome do host associado à conexão
  - [pg\_insert](function.pg-insert.md) — Insere array na tabela
  - [pg\_jit](function.pg-jit.md) — Retorna as informações JIT do servidor
  - [pg\_last\_error](function.pg-last-error.md) — Obtém a última string da mensagem de erro de uma conexão
  - [pg\_last\_notice](function.pg-last-notice.md) — Retorna a última mensagem de aviso do servidor PostgreSQL
  - [pg\_last\_oid](function.pg-last-oid.md) — Retorna o OID da última linha
  - [pg\_lo\_close](function.pg-lo-close.md) — Fecha um objeto grande
  - [pg\_lo\_create](function.pg-lo-create.md) — Cria um objeto grande
  - [pg\_lo\_export](function.pg-lo-export.md) — Exporta um objeto grande para arquivo
  - [pg\_lo\_import](function.pg-lo-import.md) — Importa um objeto grande do arquivo
  - [pg\_lo\_open](function.pg-lo-open.md) — Abra um objeto grande
  - [pg\_lo\_read](function.pg-lo-read.md) — Lê um objeto grande
  - [pg\_lo\_read\_all](function.pg-lo-read-all.md) — Lê um objeto grande inteiro e envia direto para o navegador
  - [pg\_lo\_seek](function.pg-lo-seek.md) — Aponta para posição dentro de um objeto grande
  - [pg\_lo\_tell](function.pg-lo-tell.md) — Retorna a posição de busca atual a de um objeto grande
  - [pg\_lo\_truncate](function.pg-lo-truncate.md) — Trunca um objeto grande
  - [pg\_lo\_unlink](function.pg-lo-unlink.md) — Exclui um objeto grande
  - [pg\_lo\_write](function.pg-lo-write.md) — Escreve em um objeto grande
  - [pg\_meta\_data](function.pg-meta-data.md) — Obtém metadados para tabela
  - [pg\_num\_fields](function.pg-num-fields.md) — Retorna o número de campos em um resultado
  - [pg\_num\_rows](function.pg-num-rows.md) — Retorna o número de linhas em um resultado
  - [pg\_options](function.pg-options.md) — Obtém as opções associadas à conexão
  - [pg\_parameter\_status](function.pg-parameter-status.md) — Procura uma configuração de parâmetro atual do servidor
  - [pg\_pconnect](function.pg-pconnect.md) — Abre uma conexão PostgreSQL persistente
  - [pg\_ping](function.pg-ping.md) — Ping em conexão com banco de dados
  - [pg\_port](function.pg-port.md) — Retorne o número da porta associada à conexão
  - [pg\_prepare](function.pg-prepare.md) — Envia uma solicitação ao servidor para criar uma instrução preparada com os
    parâmetros fornecidos e aguarda a conclusão
  - [pg\_put\_copy\_data](function.pg-put-copy-data.md) — Envia dados para o servidor durante uma operação COPY
  - [pg\_put\_copy\_end](function.pg-put-copy-end.md) — Sinaliza a conclusão de uma operação COPY para o servidor
  - [pg\_put\_line](function.pg-put-line.md) — Envia uma string terminada em NULL para o backend do PostgreSQL
  - [pg\_query](function.pg-query.md) — Executa uma consulta
  - [pg\_query\_params](function.pg-query-params.md) — Envia um comando ao servidor e aguarda o resultado, com a capacidade de passar parâmetros separadamente do texto do comando SQL
  - [pg\_result\_error](function.pg-result-error.md) — Obtém mensagem de erro associada ao resultado
  - [pg\_result\_error\_field](function.pg-result-error-field.md) — Retorna um campo individual de um relatório de erros
  - [pg\_result\_memory\_size](function.pg-result-memory-size.md) — Retorna a quantidade de memória alocada para um resultado de consulta
  - [pg\_result\_seek](function.pg-result-seek.md) — Define deslocamento interno de linha na instância de resultado
  - [pg\_result\_status](function.pg-result-status.md) — Obtém o status do resultado da consulta
  - [pg\_select](function.pg-select.md) — Seleciona registros
  - [pg\_send\_execute](function.pg-send-execute.md) — Envia uma solicitação para executar uma instrução preparada com determinados parâmetros, sem esperar pelo(s) resultado(s)
  - [pg\_send\_prepare](function.pg-send-prepare.md) — Envia uma solicitação para criar uma instrução preparada com os parâmetros fornecidos, sem esperar pela conclusão
  - [pg\_send\_query](function.pg-send-query.md) — Envia consulta assíncrona
  - [pg\_send\_query\_params](function.pg-send-query-params.md) — Envia um comando e parâmetros separados para o servidor sem esperar pelo(s) resultado(s)
  - [pg\_set\_chunked\_rows\_size](function.pg-set-chunked-rows-size.md) — Define que os resultados da consulta sejam retornados em partes
  - [pg\_set\_client\_encoding](function.pg-set-client-encoding.md) — Define a codificação do cliente
  - [pg\_set\_error\_context\_visibility](function.pg-set-error-context-visibility.md) — Determina a visibilidade das mensagens de erro do contexto retornadas por pg\_last\_error
    e pg\_result\_error
  - [pg\_set\_error\_verbosity](function.pg-set-error-verbosity.md) — Determina o detalhamento das mensagens retornadas por pg\_last\_error
    e pg\_result\_error
  - [pg\_socket](function.pg-socket.md) — Obtém um identificador somente leitura para o socket subjacente a uma conexão PostgreSQL
  - [pg\_socket\_poll](function.pg-socket-poll.md) — Verifica se um socket de conexão PostgreSQL está pronto para leitura/gravação
  - [pg\_trace](function.pg-trace.md) — Ativa o rastreamento de uma conexão PostgreSQL
  - [pg\_transaction\_status](function.pg-transaction-status.md) — Retorna o status atual da transação do servidor
  - [pg\_tty](function.pg-tty.md) — Retorna o nome TTY associado à conexão
  - [pg\_unescape\_bytea](function.pg-unescape-bytea.md) — Desfaz escape binário para tipo bytea
  - [pg\_untrace](function.pg-untrace.md) — Desabilita o rastreamento de uma conexão PostgreSQL
  - [pg\_update](function.pg-update.md) — Atualiza tabela
  - [pg\_version](function.pg-version.md) — Retorna um array com versão do cliente, protocolo e servidor (quando disponível)
- [PgSql\Connection](class.pgsql-connection.md) — A classe PgSql\Connection
- [PgSql\Result](class.pgsql-result.md) — A classe PgSql\Result
- [PgSql\Lob](class.pgsql-lob.md) — A classe PgSql\Lob

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
