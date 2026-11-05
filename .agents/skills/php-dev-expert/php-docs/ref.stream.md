# Funções de Fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.stream.php

---

# Funções de Fluxo

## Índice

- [stream\_bucket\_append](function.stream-bucket-append.md) — Anexa o bucket à brigada
- [stream\_bucket\_make\_writeable](function.stream-bucket-make-writeable.md) — Retorna um objeto bucket da brigada para se operar sobre ele
- [stream\_bucket\_new](function.stream-bucket-new.md) — Cria um novo bucket para uso no fluxo atual
- [stream\_bucket\_prepend](function.stream-bucket-prepend.md) — Adiciona um bucket ao início da brigada
- [stream\_context\_create](function.stream-context-create.md) — Cria um contexto de fluxo
- [stream\_context\_get\_default](function.stream-context-get-default.md) — Obtém o contexto padrão de fluxo
- [stream\_context\_get\_options](function.stream-context-get-options.md) — Obtém opções para um fluxo/empacotador/contexto
- [stream\_context\_get\_params](function.stream-context-get-params.md) — Obtém parâmetros de um contexto
- [stream\_context\_set\_default](function.stream-context-set-default.md) — Define o contexto padrão do fluxo
- [stream\_context\_set\_option](function.stream-context-set-option.md) — Define uma opção para um fluxo/empacotador/contexto
- [stream\_context\_set\_options](function.stream-context-set-options.md) — Define opções no contexto especificado
- [stream\_context\_set\_params](function.stream-context-set-params.md) — Define parâmetros para um fluxo/empacotador/contexto
- [stream\_copy\_to\_stream](function.stream-copy-to-stream.md) — Copia dados de um fluxo para outro
- [stream\_filter\_append](function.stream-filter-append.md) — Anexa um filtro a um fluxo
- [stream\_filter\_prepend](function.stream-filter-prepend.md) — Anexa um filtro a um fluxo
- [stream\_filter\_register](function.stream-filter-register.md) — Registra um filtro de fluxo definido pelo usuário
- [stream\_filter\_remove](function.stream-filter-remove.md) — Remove um filtro de um fluxo
- [stream\_get\_contents](function.stream-get-contents.md) — Lê o restante de um fluxo em uma string
- [stream\_get\_filters](function.stream-get-filters.md) — Obtém lista de filtros registrados
- [stream\_get\_line](function.stream-get-line.md) — Obtém uma linha do recurso do fluxo até um delimitador informado
- [stream\_get\_meta\_data](function.stream-get-meta-data.md) — Obtém cabeçalhos/metadados de ponteiros de arquivos/fluxos
- [stream\_get\_transports](function.stream-get-transports.md) — Obtém lista de transportes socket registrados
- [stream\_get\_wrappers](function.stream-get-wrappers.md) — Obtém lista de fluxos registrados
- [stream\_is\_local](function.stream-is-local.md) — Verifica se o fluxo é local
- [stream\_isatty](function.stream-isatty.md) — Verifica se um fluxo é um TTY
- [stream\_notification\_callback](function.stream-notification-callback.md) — Uma função de chamada de retorno para o parâmetro de contexto de notification
- [stream\_register\_wrapper](function.stream-register-wrapper.md) — Sinônimo de stream\_wrapper\_register
- [stream\_resolve\_include\_path](function.stream-resolve-include-path.md) — Resolve o nome do arquivo em relação ao caminho de include
- [stream\_select](function.stream-select.md) — Executa o equivalente à chamada de sistema select() nos arrays de fluxos
  informados com um limite de tempo especificado por segundos e microssegundos
- [stream\_set\_blocking](function.stream-set-blocking.md) — Definir modo de bloqueio/não-bloqueio em um fluxo
- [stream\_set\_chunk\_size](function.stream-set-chunk-size.md) — Define o tamanho do pacote do fluxo
- [stream\_set\_read\_buffer](function.stream-set-read-buffer.md) — Define o tamanho de buffer de leitura do fluxo
- [stream\_set\_timeout](function.stream-set-timeout.md) — Define o limite de tempo em um fluxo
- [stream\_set\_write\_buffer](function.stream-set-write-buffer.md) — Define o tamanho do buffer de escrita do fluxo
- [stream\_socket\_accept](function.stream-socket-accept.md) — Aceita uma conexão em um socket criado por stream\_socket\_server
- [stream\_socket\_client](function.stream-socket-client.md) — Abre conexão de socket de domínio Internet ou Unix
- [stream\_socket\_enable\_crypto](function.stream-socket-enable-crypto.md) — Liga ou desliga criptografia em socket já conectado
- [stream\_socket\_get\_name](function.stream-socket-get-name.md) — Obtém o nome do socket local ou remoto
- [stream\_socket\_pair](function.stream-socket-pair.md) — Cria um par de fluxos de socket conectados e indistinguíveis
- [stream\_socket\_recvfrom](function.stream-socket-recvfrom.md) — Recebe dados de um socket, conectado ou não
- [stream\_socket\_sendto](function.stream-socket-sendto.md) — Envia uma mensagem a um socket, conectado ou não
- [stream\_socket\_server](function.stream-socket-server.md) — Cria socket de servidor de domínio Internet ou Unix
- [stream\_socket\_shutdown](function.stream-socket-shutdown.md) — Fecha uma conexão full-duplex
- [stream\_supports\_lock](function.stream-supports-lock.md) — Informa se o fluxo suporta travamento
- [stream\_wrapper\_register](function.stream-wrapper-register.md) — Registra um empacotador URL implementado como uma classe PHP
- [stream\_wrapper\_restore](function.stream-wrapper-restore.md) — Restaura um empacotador interno anteriormente desregistrado
- [stream\_wrapper\_unregister](function.stream-wrapper-unregister.md) — Desregistra um empacotador URL

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
