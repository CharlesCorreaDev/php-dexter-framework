# Verifica se um socket de conexão PostgreSQL está pronto para leitura/gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-socket-poll.php

---

# pg\_socket\_poll

(PHP 8 >= 8.4.0)

pg\_socket\_poll — Verifica se um socket de conexão PostgreSQL está pronto para leitura/gravação

### Descrição

function **pg\_socket\_poll**(  
    [resource](language.types.resource.md) `$socket`,  
    [int](language.types.integer.md) `$read`,  
    [int](language.types.integer.md) `$write`,  
    [int](language.types.integer.md) `$timeout` = -1  
): [int](language.types.integer.md)

Verifica se um socket de conexão PostgreSQL está pronto para leitura e/ou gravação.
O socket pode ser obtido usando [pg\_socket()](function.pg-socket.md).
Esta função é útil para implementar fluxos de trabalho de consulta
assíncronos e não bloqueantes.

### Parâmetros

`socket`
:   Um recurso de soquete obtido de [pg\_socket()](function.pg-socket.md).

`read`
:   Indica se deve verificar se está pronto para leitura. Passe `1`
    para verificar, `0` para ignorar.

`write`
:   Indica se deve verificar se está pronto para escrita. Passe `1`
    para verificar, `0` para ignorar.

`timeout`
:   O número máximo de milissegundos para esperar. Passe
    `-1` para esperar indefinidamente ou
    `0` para não esperar.

### Valor Retornado

Retorna um valor positivo se o socket estiver pronto, `0`
se o tempo limite foi atingido ou `-1` em caso de erro.

### Veja também

- [pg\_socket()](function.pg-socket.md) - Obtém um identificador somente leitura para o socket subjacente a uma conexão PostgreSQL
- [pg\_consume\_input()](function.pg-consume-input.md) - Lê a entrada na conexão
- [pg\_send\_query()](function.pg-send-query.md) - Envia consulta assíncrona

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
