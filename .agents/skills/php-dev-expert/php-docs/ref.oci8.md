# Funções OCI8

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.oci8.php

---

# Funções OCI8

## Índice

- [oci\_bind\_array\_by\_name](function.oci-bind-array-by-name.md) — Vincula um array PHP a um parâmetro de array Oracle PL/SQL
- [oci\_bind\_by\_name](function.oci-bind-by-name.md) — Vincula uma variável PHP a um marcador Oracle
- [oci\_cancel](function.oci-cancel.md) — Cancela a leitura do cursor
- [oci\_client\_version](function.oci-client-version.md) — Retorna a versão da biblioteca do cliente Oracle
- [oci\_close](function.oci-close.md) — Fecha uma conexão Oracle
- [oci\_commit](function.oci-commit.md) — Confirma a transação de banco de dados pendente
- [oci\_connect](function.oci-connect.md) — Conecta-se a um banco de dados Oracle
- [oci\_define\_by\_name](function.oci-define-by-name.md) — Associa uma variável PHP a uma coluna para buscas de consulta
- [oci\_error](function.oci-error.md) — Retorna o último erro encontrado
- [oci\_execute](function.oci-execute.md) — Executa uma instrução
- [oci\_fetch](function.oci-fetch.md) — Busca a próxima linha de uma consulta em buffers internos
- [oci\_fetch\_all](function.oci-fetch-all.md) — Busca várias linhas de uma consulta em um array bidimensional
- [oci\_fetch\_array](function.oci-fetch-array.md) — Retorna a próxima linha de uma consulta como um array associativo ou numérico
- [oci\_fetch\_assoc](function.oci-fetch-assoc.md) — Retorna a próxima linha de uma consulta como um array associativo
- [oci\_fetch\_object](function.oci-fetch-object.md) — Retorna a próxima linha de uma consulta como um objeto
- [oci\_fetch\_row](function.oci-fetch-row.md) — Retorna a próxima linha de uma consulta como um array numérico
- [oci\_field\_is\_null](function.oci-field-is-null.md) — Verifica se um campo na linha atualmente buscada é null
- [oci\_field\_name](function.oci-field-name.md) — Retorna o nome de um campo da instrução
- [oci\_field\_precision](function.oci-field-precision.md) — Informa a precisão de um campo
- [oci\_field\_scale](function.oci-field-scale.md) — Informa a escala do campo
- [oci\_field\_size](function.oci-field-size.md) — Retorna o tamanho do campo
- [oci\_field\_type](function.oci-field-type.md) — Retorna o nome do tipo de dados de um campo
- [oci\_field\_type\_raw](function.oci-field-type-raw.md) — Informa o tipo bruto de dados do Oracle de um campo
- [oci\_free\_descriptor](function.oci-free-descriptor.md) — Libera um descritor
- [oci\_free\_statement](function.oci-free-statement.md) — Libera todos os recursos associados à instrução ou cursor
- [oci\_get\_implicit\_resultset](function.oci-get-implicit-resultset.md) — Retorna o próximo recurso de instrução filho de um recurso de instrução pai que possui conjuntos de resultados implícitos do Oracle Database
- [oci\_lob\_copy](function.oci-lob-copy.md) — Copia objeto grande
- [oci\_lob\_is\_equal](function.oci-lob-is-equal.md) — Compara dois localizadores LOB/FILE para igualdade
- [oci\_new\_collection](function.oci-new-collection.md) — Aloca novo objeto de coleção
- [oci\_new\_connect](function.oci-new-connect.md) — Conecta-se ao servidor Oracle usando uma conexão exclusiva
- [oci\_new\_cursor](function.oci-new-cursor.md) — Aloca e retorna um novo cursor (identificador de instrução)
- [oci\_new\_descriptor](function.oci-new-descriptor.md) — Inicializa um novo descritor LOB ou FILE vazio
- [oci\_num\_fields](function.oci-num-fields.md) — Retorna o número de colunas de resultados em uma instrução
- [oci\_num\_rows](function.oci-num-rows.md) — Retorna o número de linhas afetadas durante a execução da instrução
- [oci\_parse](function.oci-parse.md) — Prepara uma instrução Oracle para execução
- [oci\_password\_change](function.oci-password-change.md) — Altera a senha do usuário do Oracle
- [oci\_pconnect](function.oci-pconnect.md) — Conecta-se a um banco de dados Oracle usando uma conexão persistente
- [oci\_register\_taf\_callback](function.oci-register-taf-callback.md) — Registra uma função de retorno definida pelo usuário para o TAF do Oracle Database
- [oci\_result](function.oci-result.md) — Retorna o valor do campo da linha recuperada
- [oci\_rollback](function.oci-rollback.md) — Reverte a transação pendente do banco de dados
- [oci\_server\_version](function.oci-server-version.md) — Retorna a versão do banco de dados Oracle
- [oci\_set\_action](function.oci-set-action.md) — Define o nome da ação
- [oci\_set\_call\_timeout](function.oci-set-call-timout.md) — Sets a millisecond timeout for database calls
- [oci\_set\_client\_identifier](function.oci-set-client-identifier.md) — Define o identificador do cliente
- [oci\_set\_client\_info](function.oci-set-client-info.md) — Define as informações do cliente
- [oci\_set\_db\_operation](function.oci-set-db-operation.md) — Define a operação do banco de dados
- [oci\_set\_edition](function.oci-set-edition.md) — Define a edição do banco de dados
- [oci\_set\_module\_name](function.oci-set-module-name.md) — Define o nome do módulo
- [oci\_set\_prefetch](function.oci-set-prefetch.md) — Define o número de linhas a serem pré-buscadas pelas consultas
- [oci\_set\_prefetch\_lob](function.oci-set-prefetch-lob.md) — Define a quantidade de dados pré-buscados para cada CLOB ou BLOB
- [oci\_statement\_type](function.oci-statement-type.md) — Retorna o tipo de uma instrução
- [oci\_unregister\_taf\_callback](function.oci-unregister-taf-callback.md) — Cancelar o registro de uma função de retorno definida pelo usuário para o TAF do Oracle Database

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
