# Funções de compatibilidade CUBRID MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/cubridmysql.cubrid.php

---

# Funções de compatibilidade CUBRID MySQL

## Índice

- [cubrid\_affected\_rows](function.cubrid-affected-rows.md) — Retorna o número de linhas afetadas pela última instrução SQL
- [cubrid\_client\_encoding](function.cubrid-client-encoding.md) — Retorna o conjunto de caracteres de conexão CUBRID atual
- [cubrid\_close](function.cubrid-close.md) — Fecha conexão CUBRID
- [cubrid\_data\_seek](function.cubrid-data-seek.md) — Move o ponteiro de linha interno do resultado CUBRID
- [cubrid\_db\_name](function.cubrid-db-name.md) — Obtém o nome do banco de dados dos resultados de cubrid\_list\_dbs
- [cubrid\_errno](function.cubrid-errno.md) — Retorna o valor numérico da mensagem de erro da operação CUBRID anterior
- [cubrid\_error](function.cubrid-error.md) — Obtém a mensagem de erro
- [cubrid\_fetch\_array](function.cubrid-fetch-array.md) — Busca uma linha de resultado como um array associativo, numérico ou ambos
- [cubrid\_fetch\_assoc](function.cubrid-fetch-assoc.md) — Retorna o array associativo que corresponde à linha buscada
- [cubrid\_fetch\_field](function.cubrid-fetch-field.md) — Obtém informações da coluna de um resultado e retorna como um objeto
- [cubrid\_fetch\_lengths](function.cubrid-fetch-lengths.md) — Retorna um array com os comprimentos dos valores de cada campo da linha atual
- [cubrid\_fetch\_object](function.cubrid-fetch-object.md) — Busca a próxima linha e retorna-a como um objeto
- [cubrid\_fetch\_row](function.cubrid-fetch-row.md) — Retorna um array numérico com os valores da linha atual
- [cubrid\_field\_flags](function.cubrid-field-flags.md) — Retorna uma string com as opções do campo informado pela posição
- [cubrid\_field\_len](function.cubrid-field-len.md) — Obtém o comprimento máximo do campo especificado
- [cubrid\_field\_name](function.cubrid-field-name.md) — Retorna o nome do índice do campo especificado
- [cubrid\_field\_seek](function.cubrid-field-seek.md) — Move o cursor do conjunto de resultados para a posição de campo especificada
- [cubrid\_field\_table](function.cubrid-field-table.md) — Retorna o nome da tabela do campo especificado
- [cubrid\_field\_type](function.cubrid-field-type.md) — Retorna o tipo da coluna correspondente ao campo da posição informada
- [cubrid\_list\_dbs](function.cubrid-list-dbs.md) — Retorna um array com a lista de todos os bancos de dados CUBRID existentes
- [cubrid\_num\_fields](function.cubrid-num-fields.md) — Retorna o número de colunas no conjunto de resultados
- [cubrid\_ping](function.cubrid-ping.md) — Verifica atividade em uma conexão ao servidor ou reconecta se não houver conexão
- [cubrid\_query](function.cubrid-query.md) — Envia uma consulta CUBRID
- [cubrid\_real\_escape\_string](function.cubrid-real-escape-string.md) — Escapa caracteres especiais em uma string para uso em uma instrução SQL
- [cubrid\_result](function.cubrid-result.md) — Retorna o valor de um campo específico em uma linha específica
- [cubrid\_unbuffered\_query](function.cubrid-unbuffered-query.md) — Execute uma consulta sem buscar os resultados para a memória

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
