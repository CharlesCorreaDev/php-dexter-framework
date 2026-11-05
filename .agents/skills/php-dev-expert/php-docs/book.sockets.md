# Soquetes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.sockets.php

---

# Soquetes

# Introdução

A extensão Socket implementa uma interface de baixo nível para as funções
de comunicação de soquete baseada nos populares soquetes BSD, fornecendo a
possibilidade de atuar como servidor de soquete e também como cliente.

Para uma interface mais genérica do lado do cliente, consulte
[stream\_socket\_client()](function.stream-socket-client.md),
[stream\_socket\_server()](function.stream-socket-server.md),
[fsockopen()](function.fsockopen.md) e
[pfsockopen()](function.pfsockopen.md).

Ao usar essas funções, é importante lembrar que, embora
muitas delas tenham nomes idênticos aos de suas contrapartes em C, elas
geralmente têm declarações diferentes. Por favor, certifique-se de ler as
descrições para evitar confusão.

Aqueles não familiarizados com a programação de soquetes podem encontrar muito
material útil nas páginas de manual apropriadas do Unix, e há uma grande
quantidade de informações e tutoriais sobre programação de soquetes em C na web, muitos
dos quais podem ser aplicados, com pequenas modificações, à programação com soquetes
no PHP. As [» Perguntas frequentes sobre soquete
Unix](https://www.unixguide.net/network/socketfaq/) podem ser um bom começo.

- [Instalação/Configuração](sockets.setup.md)
  - [Instalação](sockets.installation.md)
  - [Tipos de Recurso](sockets.resources.md)
- [Constantes predefinidas](sockets.constants.md)
- [Examples](sockets.examples.md)
- [Erros de Socket](sockets.errors.md)
- [Funções de Socket](ref.sockets.md)
  - [socket\_accept](function.socket-accept.md) — Aceita uma conexão em um soquete
  - [socket\_addrinfo\_bind](function.socket-addrinfo-bind.md) — Cria e vincula a um soquete a partir de uma informação de endereço
  - [socket\_addrinfo\_connect](function.socket-addrinfo-connect.md) — Cria e conecta a um soquete a partir de uma informação de endereço
  - [socket\_addrinfo\_explain](function.socket-addrinfo-explain.md) — Obtem explicação sobre informação de endereço
  - [socket\_addrinfo\_lookup](function.socket-addrinfo-lookup.md) — Obtém array com conteúdo de getaddrinfo() sobre o servidor informado
  - [socket\_atmark](function.socket-atmark.md) — Determina se o soquete está na marca fora-de-banda
  - [socket\_bind](function.socket-bind.md) — Vincula um nome a um soquete
  - [socket\_clear\_error](function.socket-clear-error.md) — Limpa o erro no soquete ou o último código de erro
  - [socket\_close](function.socket-close.md) — Fecha uma instância de Socket
  - [socket\_cmsg\_space](function.socket-cmsg-space.md) — Calcula o tamanho do buffer de mensagem
  - [socket\_connect](function.socket-connect.md) — Inicia uma conexão em um soquete
  - [socket\_create](function.socket-create.md) — Cria um soquete (ponto de extremidade para comunição)
  - [socket\_create\_listen](function.socket-create-listen.md) — Abre um soquete em uma porta para aceitar conexões
  - [socket\_create\_pair](function.socket-create-pair.md) — Cria um par de soquetes indistinguíveis e os armazena em um array
  - [socket\_export\_stream](function.socket-export-stream.md) — Exporta um soquete para um fluxo que encapsula um soquete
  - [socket\_get\_option](function.socket-get-option.md) — Obtém opções para o soquete
  - [socket\_getopt](function.socket-getopt.md) — Sinônimo de socket\_get\_option
  - [socket\_getpeername](function.socket-getpeername.md) — Consulta o lado remoto do soquete fornecido
  - [socket\_getsockname](function.socket-getsockname.md) — Consulta o lado local do soquete fornecido, o que pode resultar em servidor/porta ou em um caminho do sistema de arquivos Unix, dependendo do seu tipo
  - [socket\_import\_stream](function.socket-import-stream.md) — Importa um fluxo
  - [socket\_last\_error](function.socket-last-error.md) — Retorna o último erro no soquete
  - [socket\_listen](function.socket-listen.md) — Escuta uma conexão em um soquete
  - [socket\_read](function.socket-read.md) — Lê um máximo de bytes de um soquete
  - [socket\_recv](function.socket-recv.md) — Recebe dados de um soquete conectado
  - [socket\_recvfrom](function.socket-recvfrom.md) — Recebe dados de um soquete, seja ele orientado a conexão ou não
  - [socket\_recvmsg](function.socket-recvmsg.md) — Lê uma mensagem
  - [socket\_select](function.socket-select.md) — Executa a chamada de sistema select() nos arrays de soquetes fornecidos com um tempo limite especificado
  - [socket\_send](function.socket-send.md) — Envia dados para um soquete conectado
  - [socket\_sendmsg](function.socket-sendmsg.md) — Envia uma mensagem
  - [socket\_sendto](function.socket-sendto.md) — Envia uma mensagem para um soquete, esteja ele conectado ou não
  - [socket\_set\_block](function.socket-set-block.md) — Define o modo de bloqueio em um soquete
  - [socket\_set\_nonblock](function.socket-set-nonblock.md) — Define o modo sem bloqueio para o descritor de arquivo fd
  - [socket\_set\_option](function.socket-set-option.md) — Define opções para o soquete
  - [socket\_setopt](function.socket-setopt.md) — Sinônimo de socket\_set\_option
  - [socket\_shutdown](function.socket-shutdown.md) — Desliga um soquete para recebimento, envio ou ambos
  - [socket\_strerror](function.socket-strerror.md) — Retorna uma string descrevendo um erro no soquete
  - [socket\_write](function.socket-write.md) — Escreve em um soquete
  - [socket\_wsaprotocol\_info\_export](function.socket-wsaprotocol-info-export.md) — Exporta a estrutura WSAPROTOCOL\_INFO
  - [socket\_wsaprotocol\_info\_import](function.socket-wsaprotocol-info-import.md) — Importa um soquete de outro processo
  - [socket\_wsaprotocol\_info\_release](function.socket-wsaprotocol-info-release.md) — Libera uma estrutura WSAPROTOCOL\_INFO exportada
- [Socket](class.socket.md) — A classe Socket
- [AddressInfo](class.addressinfo.md) — A classe AddressInfo

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
