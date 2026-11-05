# Funções de CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.cubrid.php

---

# Funções de CUBRID

## Índice

- [cubrid\_bind](function.cubrid-bind.md) — Vincula variáveis a instruções preparadas como parâmetros
- [cubrid\_close\_prepare](function.cubrid-close-prepare.md) — Fecha o identificador de requisição
- [cubrid\_close\_request](function.cubrid-close-request.md) — Fecha o identificador de requisição
- [cubrid\_col\_get](function.cubrid-col-get.md) — Obtém conteúdo de coluna tipo coleção usando OID
- [cubrid\_col\_size](function.cubrid-col-size.md) — Obtém o número de elementos de coluna tipo coleção usando OID
- [cubrid\_column\_names](function.cubrid-column-names.md) — Obtém nomes de colunas no resultado
- [cubrid\_column\_types](function.cubrid-column-types.md) — Obtém tipos de colunas no resultado
- [cubrid\_commit](function.cubrid-commit.md) — Confirma uma transação
- [cubrid\_connect](function.cubrid-connect.md) — Abre uma conexão a um servidor CUBRID
- [cubrid\_connect\_with\_url](function.cubrid-connect-with-url.md) — Prepara o ambiente para conexão ao servidor CUBRID
- [cubrid\_current\_oid](function.cubrid-current-oid.md) — Obtém o OID da posição atual do cursor
- [cubrid\_disconnect](function.cubrid-disconnect.md) — Fecha uma conexão ao banco de dados
- [cubrid\_drop](function.cubrid-drop.md) — Remove uma instância usando OID
- [cubrid\_error\_code](function.cubrid-error-code.md) — Obtém código de erro para a chamada de função mais recente
- [cubrid\_error\_code\_facility](function.cubrid-error-code-facility.md) — Obtém o código do módulo do erro
- [cubrid\_error\_msg](function.cubrid-error-msg.md) — Obtém mensagem de erro da chamada de função mais recente
- [cubrid\_execute](function.cubrid-execute.md) — Executa uma instrução preparada SQL
- [cubrid\_fetch](function.cubrid-fetch.md) — Busca a próxima linha do conjunto de resultados
- [cubrid\_free\_result](function.cubrid-free-result.md) — Libera a memória ocupada pelos dados do resultado
- [cubrid\_get](function.cubrid-get.md) — Obtém um atributo usando OID
- [cubrid\_get\_autocommit](function.cubrid-get-autocommit.md) — Obtém o modo de auto-confirmação da conexão
- [cubrid\_get\_charset](function.cubrid-get-charset.md) — Retorna o conjunto de caracteres da conexão CUBRID atual
- [cubrid\_get\_class\_name](function.cubrid-get-class-name.md) — Obtém o nome da classe usando OID
- [cubrid\_get\_client\_info](function.cubrid-get-client-info.md) — Retorna a versão da biblioteca cliente
- [cubrid\_get\_db\_parameter](function.cubrid-get-db-parameter.md) — Retorna os parâmetros do banco de dados CUBRID
- [cubrid\_get\_query\_timeout](function.cubrid-get-query-timeout.md) — Obtém o tempo limite de consulta para a requisição
- [cubrid\_get\_server\_info](function.cubrid-get-server-info.md) — Retorna a versão do servidor CUBRID
- [cubrid\_insert\_id](function.cubrid-insert-id.md) — Retorna o ID gerado pela última coluna AUTO\_INCREMENT atualizada
- [cubrid\_is\_instance](function.cubrid-is-instance.md) — Verifica se a instância apontada pelo OID existe
- [cubrid\_lob\_close](function.cubrid-lob-close.md) — Fecha os dados BLOB/CLOB
- [cubrid\_lob\_export](function.cubrid-lob-export.md) — Exporta dados BLOB/CLOB para um arquivo
- [cubrid\_lob\_get](function.cubrid-lob-get.md) — Obtém dados BLOB/CLOB
- [cubrid\_lob\_send](function.cubrid-lob-send.md) — Lê dados BLOB/CLOB e envia direto ao navegador
- [cubrid\_lob\_size](function.cubrid-lob-size.md) — Obtém o tamanho dos dados BLOB/CLOB
- [cubrid\_lob2\_bind](function.cubrid-lob2-bind.md) — Vincula um objeto LOB ou uma string como objeto LOB a uma instrução preparada como parâmetros
- [cubrid\_lob2\_close](function.cubrid-lob2-close.md) — Fecha objeto LOB
- [cubrid\_lob2\_export](function.cubrid-lob2-export.md) — Exporta o objeto LOB para um arquivo
- [cubrid\_lob2\_import](function.cubrid-lob2-import.md) — Importa dados BLOB/CLOB de um arquivo
- [cubrid\_lob2\_new](function.cubrid-lob2-new.md) — Cria um objeto LOB
- [cubrid\_lob2\_read](function.cubrid-lob2-read.md) — Lê bytes de dados BLOB/CLOB
- [cubrid\_lob2\_seek](function.cubrid-lob2-seek.md) — Move o cursor de um objeto LOB
- [cubrid\_lob2\_seek64](function.cubrid-lob2-seek64.md) — Move o cursor de um objeto LOB
- [cubrid\_lob2\_size](function.cubrid-lob2-size.md) — Obtém o tamanho do objeto LOB
- [cubrid\_lob2\_size64](function.cubrid-lob2-size64.md) — Obtém o tamanho do objeto LOB
- [cubrid\_lob2\_tell](function.cubrid-lob2-tell.md) — Informa a posição do cursor do objeto LOB
- [cubrid\_lob2\_tell64](function.cubrid-lob2-tell64.md) — Informa a posição do cursor do objeto LOB
- [cubrid\_lob2\_write](function.cubrid-lob2-write.md) — Escreve em um objeto LOB
- [cubrid\_lock\_read](function.cubrid-lock-read.md) — Define uma trava de leitura em um OID informado
- [cubrid\_lock\_write](function.cubrid-lock-write.md) — Define uma trava de escrita em um OID informado
- [cubrid\_move\_cursor](function.cubrid-move-cursor.md) — Move o cursor no resultado
- [cubrid\_next\_result](function.cubrid-next-result.md) — Obtém o resultado da próxima consulta quando múltiplas instruções SQL estão sendo executadas
- [cubrid\_num\_cols](function.cubrid-num-cols.md) — Retorna o número de colunas no resultado
- [cubrid\_num\_rows](function.cubrid-num-rows.md) — Obtém o número de linhas no resultado
- [cubrid\_pconnect](function.cubrid-pconnect.md) — Abre uma conexão persistente a um servidor CUBRID
- [cubrid\_pconnect\_with\_url](function.cubrid-pconnect-with-url.md) — Abre uma conexão persistente com o servidor CUBRID
- [cubrid\_prepare](function.cubrid-prepare.md) — Prepara uma instrução SQL para execução
- [cubrid\_put](function.cubrid-put.md) — Atualiza uma coluna usando OID
- [cubrid\_rollback](function.cubrid-rollback.md) — Reverte uma transação
- [cubrid\_schema](function.cubrid-schema.md) — Obtém informação do esquema solicitado
- [cubrid\_seq\_drop](function.cubrid-seq-drop.md) — Remove um elemento de coluna tipo sequência usando OID
- [cubrid\_seq\_insert](function.cubrid-seq-insert.md) — Insere um elemento em uma coluna tipo sequência usando OID
- [cubrid\_seq\_put](function.cubrid-seq-put.md) — Atualiza o valor do elemento de coluna tipo sequência usando OID
- [cubrid\_set\_add](function.cubrid-set-add.md) — Insere um único elemento a uma coluna tipo conjunto usando OID
- [cubrid\_set\_autocommit](function.cubrid-set-autocommit.md) — Define o modo de auto-confirmação da conexão
- [cubrid\_set\_db\_parameter](function.cubrid-set-db-parameter.md) — Define os parâmetros do banco de dados CUBRID
- [cubrid\_set\_drop](function.cubrid-set-drop.md) — Remove um elemento da coluna tipo conjunto usando OID
- [cubrid\_set\_query\_timeout](function.cubrid-set-query-timeout.md) — Define o tempo limite de execução de consulta
- [cubrid\_version](function.cubrid-version.md) — Obtém a versão do módulo do CUBRID PHP

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
