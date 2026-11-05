# Fluxos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.stream.php

---

# Fluxos

# Introdução

Fluxos são
o modo de se generalizar operações de arquivos, rede, compressão de dados e
outras que compartilham um conjunto comum de funções e usos. Em
sua definição mais simples, um `fluxo` é um
objeto tipo [resource](language.types.resource.md) que exibe comportamento
de arquivo. Isto é, ele pode ser lido ou escrito de forma
linear, e pode ser pesquisado com [fseek()](function.fseek.md) até
uma localização arbitrária dentro do fluxo.

Um `empacotador` é um código adicional que mostra ao fluxo como lidar
com protocolos/codificações específicas. Por exemplo, o empacotador `http`
sabe como traduzir uma URL em uma requisição `HTTP/1.0`
de um arquivo em um servidor remoto. Existem vários empacotadores
no PHP por padrão (consulte [Protocolos e empacotadores suportados](wrappers.md)),
e empactotadores adicionais, customizados, que podem ser incluídos tanto em um
script PHP usando [stream\_wrapper\_register()](function.stream-wrapper-register.md),
ou diretamente de uma extensão.
Como qualquer variedade de empacotadores pode ser adicionada ao PHP,
não há limite definido do que pode ser feito com eles. Para acessar a lista
de empacotadores registrados atualmente, use a função [stream\_get\_wrappers()](function.stream-get-wrappers.md).

Um fluxo é referenciado como: `esquema`://`destino`

- `esquema` (string) -
  O nome do empacotador a ser usado. Exemplos incluem: file,
  http, https, ftp, ftps, compress.zlib, compress.bz2 e php. Consulte
  [Protocolos e empacotadores suportados](wrappers.md) para uma lista de empacotadores embutidos no PHP. Se
  nenhum empacotador for especificado, o padrão da função é usado (tipicamente
  `file`://).
- `destino` -
  Depende do empacotador em uso. Para fluxos relacionados a sistemas de arquivos é
  tipicamente um caminho e nome para o arquivo desejado. Para fluxos relacionados
  a rede é tipicamente um nome de host, frequentemente seguido por um caminho. Novamente, consulte
  [Protocolos e empacotadores suportados](wrappers.md) para uma descrição de alvos para os fluxos pré-existentes.

- [Instalação/Configuração](stream.setup.md)
  - [Classes de Fluxo](stream.resources.md)
- [Constantes predefinidas](stream.constants.md)
- [Filtros de Fluxo](stream.filters.md)
- [Contextos de Fluxo](stream.contexts.md)
- [Erros de Fluxo](stream.errors.md)
- [Examples](stream.examples.md)
  - [Exemplo de classe registrada como empacotador de fluxo](stream.streamwrapper.example-1.md)
- [php\_user\_filter](class.php-user-filter.md) — A clase php\_user\_filter
  - [php\_user\_filter::filter](php-user-filter.filter.md) — Chamada na aplicação do filtro
  - [php\_user\_filter::onClose](php-user-filter.onclose.md) — Chamado no fechamento do filtro
  - [php\_user\_filter::onCreate](php-user-filter.oncreate.md) — Chamado na criação do filtro
- [streamWrapper](class.streamwrapper.md) — A classe streamWrapper
  - [streamWrapper::\_\_construct](streamwrapper.construct.md) — Constrói um novo empacotador de fluxo
  - [streamWrapper::\_\_destruct](streamwrapper.destruct.md) — Destrói um empacotador de fluxo existente
  - [streamWrapper::dir\_closedir](streamwrapper.dir-closedir.md) — Fecha o manipulador de diretório
  - [streamWrapper::dir\_opendir](streamwrapper.dir-opendir.md) — Abre um manipulador de diretório
  - [streamWrapper::dir\_readdir](streamwrapper.dir-readdir.md) — Lê entrada do manipulador de diretório
  - [streamWrapper::dir\_rewinddir](streamwrapper.dir-rewinddir.md) — Retrocede um manipulador de diretório
  - [streamWrapper::mkdir](streamwrapper.mkdir.md) — Cria um diretório
  - [streamWrapper::rename](streamwrapper.rename.md) — Renomeia um arquivo ou diretório
  - [streamWrapper::rmdir](streamwrapper.rmdir.md) — Remove um diretório
  - [streamWrapper::stream\_cast](streamwrapper.stream-cast.md) — Obtém o recurso subjacente
  - [streamWrapper::stream\_close](streamwrapper.stream-close.md) — Fecha um recurso
  - [streamWrapper::stream\_eof](streamwrapper.stream-eof.md) — Teste para fim de arquivo em ponteiros
  - [streamWrapper::stream\_flush](streamwrapper.stream-flush.md) — Descarrega a saída
  - [streamWrapper::stream\_lock](streamwrapper.stream-lock.md) — Travamento de aviso para arquivos
  - [streamWrapper::stream\_metadata](streamwrapper.stream-metadata.md) — Alterar metadados de fluxo
  - [streamWrapper::stream\_open](streamwrapper.stream-open.md) — Abre arquivo ou URL
  - [streamWrapper::stream\_read](streamwrapper.stream-read.md) — Lê dados do fluxo
  - [streamWrapper::stream\_seek](streamwrapper.stream-seek.md) — Pesquisa uma localização específica em um fluxo
  - [streamWrapper::stream\_set\_option](streamwrapper.stream-set-option.md) — Altera as opções do fluxo
  - [streamWrapper::stream\_stat](streamwrapper.stream-stat.md) — Obtém informação sobre um recurso de arquivo
  - [streamWrapper::stream\_tell](streamwrapper.stream-tell.md) — Obtém a posição atual de um fluxo
  - [streamWrapper::stream\_truncate](streamwrapper.stream-truncate.md) — Trunca o fluxo
  - [streamWrapper::stream\_write](streamwrapper.stream-write.md) — Escreve no fluxo
  - [streamWrapper::unlink](streamwrapper.unlink.md) — Remove um arquivo
  - [streamWrapper::url\_stat](streamwrapper.url-stat.md) — Obtém informação sobre um arquivo
- [StreamBucket](class.streambucket.md) — A classe StreamBucket
- [Funções de Fluxo](ref.stream.md)
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
