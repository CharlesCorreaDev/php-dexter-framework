# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SWOOLE_VERSION`** ([string](language.types.string.md))
:   Versão do Swoole.

**`SWOOLE_VERSION_ID`** ([int](language.types.integer.md))
:   Versão do Swoole.

**`SWOOLE_MAJOR_VERSION`** ([int](language.types.integer.md))
:   Versão principal do Swoole.

**`SWOOLE_MINOR_VERSION`** ([int](language.types.integer.md))
:   Versão secundária do Swoole.

**`SWOOLE_RELEASE_VERSION`** ([int](language.types.integer.md))
:   Versão terciária do Swoole.

**`SWOOLE_EXTRA_VERSION`** ([string](language.types.string.md))
:   Versão extra do Swoole.

**`SWOOLE_DEBUG`** ([int](language.types.integer.md))
:   Modo de depuração.

**`SWOOLE_HAVE_COMPRESSION`** ([int](language.types.integer.md))
:   Habilita o modo de compactação de resposta HTTP.

**`SWOOLE_HAVE_ZLIB`** ([int](language.types.integer.md))
:   Possui ferramenta de compactação zlib.

**`SWOOLE_HAVE_BROTLI`** ([int](language.types.integer.md))
:   Possui ferramenta de compressão brotli.

**`SWOOLE_USE_HTTP2`** ([int](language.types.integer.md))
:   Suporta servidor http2.

**`SWOOLE_USE_SHORTNAME`** ([int](language.types.integer.md))
:   Habilita/desabilita nomes abreviados.

**`SWOOLE_SOCK_TCP`** ([int](language.types.integer.md))
:   Soquete TCP ipv4.

**`SWOOLE_SOCK_TCP6`** ([int](language.types.integer.md))
:   Soquete TCP ipv6.

**`SWOOLE_SOCK_UDP`** ([int](language.types.integer.md))
:   Soquete UDP ipv4.

**`SWOOLE_SOCK_UDP6`** ([int](language.types.integer.md))
:   Soquete UDP ipv6.

**`SWOOLE_SOCK_UNIX_DGRAM`** ([int](language.types.integer.md))
:   Datagrama de soquete UNIX.

**`SWOOLE_SOCK_UNIX_STREAM`** ([int](language.types.integer.md))
:   Fluxo de soquete UNIX.

**`SWOOLE_SOCK_SYNC`** ([int](language.types.integer.md))
:   Modo de cliente síncrono.

**`SWOOLE_SOCK_ASYNC`** ([int](language.types.integer.md))
:   Modo de cliente assíncrono.

**`SWOOLE_KEEP`** ([int](language.types.integer.md))
:   Swoole\Client suporta a criação de uma conexão TCP longa com o servidor em PHP-FPM/Apache.

**`SWOOLE_SSL`** ([int](language.types.integer.md))
:   Habilita a criptografia de túnel SSL.

**`SWOOLE_SSLv3_METHOD`** ([int](language.types.integer.md))
:   Método SSLv3.

**`SWOOLE_SSLv3_SERVER_METHOD`** ([int](language.types.integer.md))
:   Método SSLv3 de servidor.

**`SWOOLE_SSLv3_CLIENT_METHOD`** ([int](language.types.integer.md))
:   Método SSLv3 de cliente.

**`SWOOLE_TLSv1_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1.

**`SWOOLE_TLSv1_SERVER_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1 de servidor.

**`SWOOLE_TLSv1_CLIENT_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1 de cliente.

**`SWOOLE_TLSv1_1_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1\_1.

**`SWOOLE_TLSv1_1_SERVER_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1\_1 de servidor.

**`SWOOLE_TLSv1_1_CLIENT_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1\_1 de cliente.

**`SWOOLE_TLSv1_2_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1\_2.

**`SWOOLE_TLSv1_2_SERVER_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1\_2 de servidor.

**`SWOOLE_TLSv1_2_CLIENT_METHOD`** ([int](language.types.integer.md))
:   Método TLSv1\_2 de cliente.

**`SWOOLE_DTLS_SERVER_METHOD`** ([int](language.types.integer.md))
:   Método DTLS de servidor.

**`SWOOLE_DTLS_CLIENT_METHOD`** ([int](language.types.integer.md))
:   Método DTLS de cliente.

**`SWOOLE_SSLv23_METHOD`** ([int](language.types.integer.md))
:   Método SSLv23.

**`SWOOLE_SSLv23_SERVER_METHOD`** ([int](language.types.integer.md))
:   Método SSLv23 de servidor.

**`SWOOLE_SSLv23_CLIENT_METHOD`** ([int](language.types.integer.md))
:   Método SSLv23 de cliente.

**`SWOOLE_TLS_METHOD`** ([int](language.types.integer.md))
:   Método TLS.

**`SWOOLE_TLS_SERVER_METHOD`** ([int](language.types.integer.md))
:   Método TLS de servidor.

**`SWOOLE_TLS_CLIENT_METHOD`** ([int](language.types.integer.md))
:   Método TLS de cliente.

**`SWOOLE_SSL_SSLv3`** ([int](language.types.integer.md))
:   Protocolo SSLv3.

**`SWOOLE_SSL_TLSv1`** ([int](language.types.integer.md))
:   Protocolo TLSv1.

**`SWOOLE_SSL_TLSv1_1`** ([int](language.types.integer.md))
:   Protocolo TLSv1\_1.

**`SWOOLE_SSL_TLSv1_2`** ([int](language.types.integer.md))
:   Protocolo TLSv1\_2.

**`SWOOLE_SSL_TLSv1_3`** ([int](language.types.integer.md))
:   Protocolo TLSv1\_3.

**`SWOOLE_SSL_DTLS`** ([int](language.types.integer.md))
:   Protocolo DTLS.

**`SWOOLE_SSL_SSLv2`** ([int](language.types.integer.md))
:   Protocolo SSLv2.

**`SWOOLE_EVENT_READ`** ([int](language.types.integer.md))
:   Se deve ou não ouvir eventos de leitura.

**`SWOOLE_EVENT_WRITE`** ([int](language.types.integer.md))
:   Se deve ou não ouvir eventos de escrita.

**`SWOOLE_STRERROR_SYSTEM`** ([int](language.types.integer.md))
:   Converte o número de erro do sistema em mensagens de erro.

**`SWOOLE_STRERROR_GAI`** ([int](language.types.integer.md))
:   Converte o número de erro de informação de endereço em mensagens de erro.

**`SWOOLE_STRERROR_DNS`** ([int](language.types.integer.md))
:   Converte o número de erro de DNS em mensagens de erro.

**`SWOOLE_STRERROR_SWOOLE`** ([int](language.types.integer.md))
:   Converte o número de erro swoole em mensagens de erro.

**`SWOOLE_ERROR_MALLOC_FAIL`** ([int](language.types.integer.md))
:   Falha de alocação de memória.

**`SWOOLE_ERROR_SYSTEM_CALL_FAIL`** ([int](language.types.integer.md))
:   Falha de chamada de sistema.

**`SWOOLE_ERROR_PHP_FATAL_ERROR`** ([int](language.types.integer.md))
:   Erro fatal PHP.

**`SWOOLE_ERROR_NAME_TOO_LONG`** ([int](language.types.integer.md))
:   Nome muito longo.

**`SWOOLE_ERROR_INVALID_PARAMS`** ([int](language.types.integer.md))
:   Parâmetros inválidos.

**`SWOOLE_ERROR_QUEUE_FULL`** ([int](language.types.integer.md))
:   Fila cheia.

**`SWOOLE_ERROR_OPERATION_NOT_SUPPORT`** ([int](language.types.integer.md))
:   Operação não suportada.

**`SWOOLE_ERROR_PROTOCOL_ERROR`** ([int](language.types.integer.md))
:   Erro de protocolo.

**`SWOOLE_ERROR_WRONG_OPERATION`** ([int](language.types.integer.md))
:   Operação incorreta.

**`SWOOLE_ERROR_PHP_RUNTIME_NOTICE`** ([int](language.types.integer.md))
:   Aviso PHP em tempo de execução.

**`SWOOLE_ERROR_FOR_TEST`** ([int](language.types.integer.md))
:   Erro para teste.

**`SWOOLE_ERROR_NO_PAYLOAD`** ([int](language.types.integer.md))
:   Sem carga útil.

**`SWOOLE_ERROR_UNDEFINED_BEHAVIOR`** ([int](language.types.integer.md))
:   Comportamento desconhecido.

**`SWOOLE_ERROR_NOT_THREAD_SAFETY`** ([int](language.types.integer.md))
:   Não seguro para threads.

**`SWOOLE_ERROR_FILE_NOT_EXIST`** ([int](language.types.integer.md))
:   Arquivo não existe.

**`SWOOLE_ERROR_FILE_TOO_LARGE`** ([int](language.types.integer.md))
:   Arquivo muito grande.

**`SWOOLE_ERROR_FILE_EMPTY`** ([int](language.types.integer.md))
:   Arquivo vazio.

**`SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST`** ([int](language.types.integer.md))
:   Solicitação duplicada de pesquisa de DNS.

**`SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED`** ([int](language.types.integer.md))
:   Falha na resolução da pesquisa de DNS.

**`SWOOLE_ERROR_DNSLOOKUP_RESOLVE_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite de resolução da pesquisa de DNS.

**`SWOOLE_ERROR_DNSLOOKUP_UNSUPPORTED`** ([int](language.types.integer.md))
:   Pesquisa de DNS não suportada.

**`SWOOLE_ERROR_DNSLOOKUP_NO_SERVER`** ([int](language.types.integer.md))
:   Pesquisa de DNS sem servidor.

**`SWOOLE_ERROR_BAD_IPV6_ADDRESS`** ([int](language.types.integer.md))
:   Endereço IPv6 inválido.

**`SWOOLE_ERROR_UNREGISTERED_SIGNAL`** ([int](language.types.integer.md))
:   Sinal não registrado.

**`SWOOLE_ERROR_BAD_HOST_ADDR`** ([int](language.types.integer.md))
:   Endereço de host inválido.

**`SWOOLE_ERROR_EVENT_SOCKET_REMOVED`** ([int](language.types.integer.md))
:   Soquete de evento removido.

**`SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER`** ([int](language.types.integer.md))
:   Sessão fechada pelo servidor.

**`SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT`** ([int](language.types.integer.md))
:   Sessão encerrada pelo cliente.

**`SWOOLE_ERROR_SESSION_CLOSING`** ([int](language.types.integer.md))
:   Encerramento da sessão.

**`SWOOLE_ERROR_SESSION_CLOSED`** ([int](language.types.integer.md))
:   Sessão encerrada.

**`SWOOLE_ERROR_SESSION_NOT_EXIST`** ([int](language.types.integer.md))
:   Sessão não existe.

**`SWOOLE_ERROR_SESSION_INVALID_ID`** ([int](language.types.integer.md))
:   ID de sessão inválido.

**`SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA`** ([int](language.types.integer.md))
:   Dados de tempo limite de descarte de sessão.

**`SWOOLE_ERROR_SESSION_DISCARD_DATA`** ([int](language.types.integer.md))
:   Dados de descarte da sessão.

**`SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW`** ([int](language.types.integer.md))
:   Estouro do buffer de saída.

**`SWOOLE_ERROR_OUTPUT_SEND_YIELD`** ([int](language.types.integer.md))
:   Rendimento de envio de saída.

**`SWOOLE_ERROR_SSL_NOT_READY`** ([int](language.types.integer.md))
:   SSL não está pronto.

**`SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE`** ([int](language.types.integer.md))
:   SSL não pode usar sendfile.

**`SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE`** ([int](language.types.integer.md))
:   Certificado de par SSL vazio.

**`SWOOLE_ERROR_SSL_VERIFY_FAILED`** ([int](language.types.integer.md))
:   A verificação SSL falhou.

**`SWOOLE_ERROR_SSL_BAD_CLIENT`** ([int](language.types.integer.md))
:   Cliente SSL inválido.

**`SWOOLE_ERROR_SSL_BAD_PROTOCOL`** ([int](language.types.integer.md))
:   Protocolo SSL incorreto.

**`SWOOLE_ERROR_SSL_RESET`** ([int](language.types.integer.md))
:   Redefinição SSL.

**`SWOOLE_ERROR_SSL_HANDSHAKE_FAILED`** ([int](language.types.integer.md))
:   Falha no handshake SSL.

**`SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE`** ([int](language.types.integer.md))
:   Comprimento do pacote muito grande.

**`SWOOLE_ERROR_PACKAGE_LENGTH_NOT_FOUND`** ([int](language.types.integer.md))
:   Comprimento do pacote não encontrado.

**`SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE`** ([int](language.types.integer.md))
:   Comprimento de dados muito grande.

**`SWOOLE_ERROR_PACKAGE_MALFORMED_DATA`** ([int](language.types.integer.md))
:   Pacote de dados de erro malformados.

**`SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG`** ([int](language.types.integer.md))
:   Pacote de tarefas muito grande.

**`SWOOLE_ERROR_TASK_DISPATCH_FAIL`** ([int](language.types.integer.md))
:   Falha no envio de tarefas.

**`SWOOLE_ERROR_TASK_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite da tarefa.

**`SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG`** ([int](language.types.integer.md))
:   ID do fluxo HTTP2 muito grande.

**`SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER`** ([int](language.types.integer.md))
:   Fluxo HTTP2 sem cabeçalho.

**`SWOOLE_ERROR_HTTP2_STREAM_NOT_FOUND`** ([int](language.types.integer.md))
:   Fluxo HTTP2 não encontrado.

**`SWOOLE_ERROR_HTTP2_STREAM_IGNORE`** ([int](language.types.integer.md))
:   Ignorar fluxo HTTP2.

**`SWOOLE_ERROR_HTTP2_SEND_CONTROL_FRAME_FAILED`** ([int](language.types.integer.md))
:   Falha no envio do quadro de controle HTTP2.

**`SWOOLE_ERROR_AIO_BAD_REQUEST`** ([int](language.types.integer.md))
:   Requisição AIO inválida.

**`SWOOLE_ERROR_AIO_CANCELED`** ([int](language.types.integer.md))
:   AIO cancelada.

**`SWOOLE_ERROR_AIO_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite de AIO.

**`SWOOLE_ERROR_CLIENT_NO_CONNECTION`** ([int](language.types.integer.md))
:   Cliente sem conexão.

**`SWOOLE_ERROR_SOCKET_CLOSED`** ([int](language.types.integer.md))
:   Soquete fechado.

**`SWOOLE_ERROR_SOCKET_POLL_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite de pesquisa de soquete.

**`SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION`** ([int](language.types.integer.md))
:   Versão sem suporte do Socks5.

**`SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD`** ([int](language.types.integer.md))
:   Método sem suporte do Socks5.

**`SWOOLE_ERROR_SOCKS5_AUTH_FAILED`** ([int](language.types.integer.md))
:   Falha na autenticação do Socks5.

**`SWOOLE_ERROR_SOCKS5_SERVER_ERROR`** ([int](language.types.integer.md))
:   Erro no servidor Socks5.

**`SWOOLE_ERROR_SOCKS5_HANDSHAKE_FAILED`** ([int](language.types.integer.md))
:   O handshake do Socks5 falhou.

**`SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR`** ([int](language.types.integer.md))
:   Erro de handshake do proxy HTTP.

**`SWOOLE_ERROR_HTTP_INVALID_PROTOCOL`** ([int](language.types.integer.md))
:   Protocolo http inválido.

**`SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_FAILED`** ([int](language.types.integer.md))
:   Falha no handshake do proxy HTTP.

**`SWOOLE_ERROR_HTTP_PROXY_BAD_RESPONSE`** ([int](language.types.integer.md))
:   Resposta incorreta do proxy HTTP.

**`SWOOLE_ERROR_HTTP_CONFLICT_HEADER`** ([int](language.types.integer.md))
:   Conflito de cabeçalho HTTP.

**`SWOOLE_ERROR_HTTP_CONTEXT_UNAVAILABLE`** ([int](language.types.integer.md))
:   Contexto HTTP indisponível.

**`SWOOLE_ERROR_HTTP_COOKIE_UNAVAILABLE`** ([int](language.types.integer.md))
:   Cookie HTTP indisponível.

**`SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT`** ([int](language.types.integer.md))
:   Cliente websocket inválido.

**`SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE`** ([int](language.types.integer.md))
:   Websocket com código de operação inválido.

**`SWOOLE_ERROR_WEBSOCKET_UNCONNECTED`** ([int](language.types.integer.md))
:   Websocket desconectado.

**`SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED`** ([int](language.types.integer.md))
:   Falha no handshake do websocket.

**`SWOOLE_ERROR_WEBSOCKET_PACK_FAILED`** ([int](language.types.integer.md))
:   Falha na compactação do Websocket.

**`SWOOLE_ERROR_WEBSOCKET_UNPACK_FAILED`** ([int](language.types.integer.md))
:   Falha na descompactação do Websocket.

**`SWOOLE_ERROR_WEBSOCKET_INCOMPLETE_PACKET`** ([int](language.types.integer.md))
:   Pacote incompleto do Websocket.

**`SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT`** ([int](language.types.integer.md))
:   O servidor deve ser criado antes do cliente.

**`SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET`** ([int](language.types.integer.md))
:   Servidor com muitos soquetes.

**`SWOOLE_ERROR_SERVER_WORKER_TERMINATED`** ([int](language.types.integer.md))
:   Trabalhador do servidor foi terminado.

**`SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT`** ([int](language.types.integer.md))
:   Porta de escuta inválida do servidor.

**`SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT`** ([int](language.types.integer.md))
:   Servidor com muitas portas de escuta.

**`SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL`** ([int](language.types.integer.md))
:   Buffer de pipe do servidor cheio.

**`SWOOLE_ERROR_SERVER_NO_IDLE_WORKER`** ([int](language.types.integer.md))
:   Servidor sem trabalhador ocioso.

**`SWOOLE_ERROR_SERVER_ONLY_START_ONE`** ([int](language.types.integer.md))
:   O servidor inicia apenas um.

**`SWOOLE_ERROR_SERVER_SEND_IN_MASTER`** ([int](language.types.integer.md))
:   Servidor envia no mestre.

**`SWOOLE_ERROR_SERVER_INVALID_REQUEST`** ([int](language.types.integer.md))
:   Solicitação inválida do servidor.

**`SWOOLE_ERROR_SERVER_CONNECT_FAIL`** ([int](language.types.integer.md))
:   Falha na conexão do servidor.

**`SWOOLE_ERROR_SERVER_INVALID_COMMAND`** ([int](language.types.integer.md))
:   Comando inválido do servidor.

**`SWOOLE_ERROR_SERVER_IS_NOT_REGULAR_FILE`** ([int](language.types.integer.md))
:   O servidor não é um arquivo comum.

**`SWOOLE_ERROR_SERVER_SEND_TO_WOKER_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite de envio do servidor para o trabalhador.

**`SWOOLE_ERROR_SERVER_INVALID_CALLBACK`** ([int](language.types.integer.md))
:   Chamada de retorno do servidor inválida.

**`SWOOLE_ERROR_SERVER_UNRELATED_THREAD`** ([int](language.types.integer.md))
:   Thread não relacionado ao servidor.

**`SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite de saída do trabalhador do servidor.

**`SWOOLE_ERROR_SERVER_WORKER_ABNORMAL_PIPE_DATA`** ([int](language.types.integer.md))
:   Dados anormais do pipe do trabalhador do servidor.

**`SWOOLE_ERROR_SERVER_WORKER_UNPROCESSED_DATA`** ([int](language.types.integer.md))
:   Dados não processados ​​do trabalhador do servidor.

**`SWOOLE_ERROR_CO_OUT_OF_COROUTINE`** ([int](language.types.integer.md))
:   Corrotina fora de corrotina.

**`SWOOLE_ERROR_CO_HAS_BEEN_BOUND`** ([int](language.types.integer.md))
:   A corrotina foi vinculada.

**`SWOOLE_ERROR_CO_HAS_BEEN_DISCARDED`** ([int](language.types.integer.md))
:   A corrotina foi descartada.

**`SWOOLE_ERROR_CO_MUTEX_DOUBLE_UNLOCK`** ([int](language.types.integer.md))
:   Desbloqueio duplo de mutex de corrotina.

**`SWOOLE_ERROR_CO_BLOCK_OBJECT_LOCKED`** ([int](language.types.integer.md))
:   Objeto de bloco de corrotina bloqueado.

**`SWOOLE_ERROR_CO_BLOCK_OBJECT_WAITING`** ([int](language.types.integer.md))
:   Objeto de bloco de corrotina aguardando.

**`SWOOLE_ERROR_CO_YIELD_FAILED`** ([int](language.types.integer.md))
:   Geração de corrotina falhou.

**`SWOOLE_ERROR_CO_GETCONTEXT_FAILED`** ([int](language.types.integer.md))
:   Falha na corrotina getcontext.

**`SWOOLE_ERROR_CO_SWAPCONTEXT_FAILED`** ([int](language.types.integer.md))
:   Falha na corrotina swapcontext.

**`SWOOLE_ERROR_CO_MAKECONTEXT_FAILED`** ([int](language.types.integer.md))
:   Falha na corrotina makecontext.

**`SWOOLE_ERROR_CO_IOCPINIT_FAILED`** ([int](language.types.integer.md))
:   Falha na corrotina iocpinit.

**`SWOOLE_ERROR_CO_PROTECT_STACK_FAILED`** ([int](language.types.integer.md))
:   Falha na corrotina protect\_stack.

**`SWOOLE_ERROR_CO_STD_THREAD_LINK_ERROR`** ([int](language.types.integer.md))
:   Falha na corrotina std\_thread\_link.

**`SWOOLE_ERROR_CO_DISABLED_MULTI_THREAD`** ([int](language.types.integer.md))
:   Coroutine desabilitou multithread.

**`SWOOLE_ERROR_CO_CANNOT_CANCEL`** ([int](language.types.integer.md))
:   A corrotina não pode ser cancelada.

**`SWOOLE_ERROR_CO_NOT_EXISTS`** ([int](language.types.integer.md))
:   Corrotina não existe.

**`SWOOLE_ERROR_CO_CANCELED`** ([int](language.types.integer.md))
:   Corrotina cancelada.

**`SWOOLE_ERROR_CO_TIMEDOUT`** ([int](language.types.integer.md))
:   Tempo limite da corrotina.

**`SWOOLE_ERROR_CO_SOCKET_CLOSE_WAIT`** ([int](language.types.integer.md))
:   Aguardando o fechamento do soquete da corrotina.

**`SWOOLE_TRACE_SERVER`** ([int](language.types.integer.md))
:   Sinalizador para registro do servidor.

**`SWOOLE_TRACE_CLIENT`** ([int](language.types.integer.md))
:   Sinalizador para registro do cliente.

**`SWOOLE_TRACE_BUFFER`** ([int](language.types.integer.md))
:   Sinalizador para registro do buffer.

**`SWOOLE_TRACE_CONN`** ([int](language.types.integer.md))
:   Sinalizador para registro da conexão.

**`SWOOLE_TRACE_EVENT`** ([int](language.types.integer.md))
:   Sinalizador para registro do evento.

**`SWOOLE_TRACE_WORKER`** ([int](language.types.integer.md))
:   Sinalizador para registro do trabalhador.

**`SWOOLE_TRACE_MEMORY`** ([int](language.types.integer.md))
:   Sinalizador para registro da memória.

**`SWOOLE_TRACE_REACTOR`** ([int](language.types.integer.md))
:   Sinalizador para registro do reator.

**`SWOOLE_TRACE_PHP`** ([int](language.types.integer.md))
:   Sinalizador para registro do PHP.

**`SWOOLE_TRACE_HTTP`** ([int](language.types.integer.md))
:   Sinalizador para registro do HTTP.

**`SWOOLE_TRACE_HTTP2`** ([int](language.types.integer.md))
:   Sinalizador para registro do HTTP2.

**`SWOOLE_TRACE_EOF_PROTOCOL`** ([int](language.types.integer.md))
:   Sinalizador para registro do protocolo EOF.

**`SWOOLE_TRACE_LENGTH_PROTOCOL`** ([int](language.types.integer.md))
:   Sinalizador para registro do protocolo de comprimento.

**`SWOOLE_TRACE_CLOSE`** ([int](language.types.integer.md))
:   Sinalizador para registro do evento de encerramento.

**`SWOOLE_TRACE_WEBSOCKET`** ([int](language.types.integer.md))
:   Sinalizador para registro do Websocket.

**`SWOOLE_TRACE_REDIS_CLIENT`** ([int](language.types.integer.md))
:   Sinalizador para registro do REDIS.

**`SWOOLE_TRACE_MYSQL_CLIENT`** ([int](language.types.integer.md))
:   Sinalizador para registro do cliente MySQL.

**`SWOOLE_TRACE_HTTP_CLIENT`** ([int](language.types.integer.md))
:   Sinalizador para registro do cliente HTTP.

**`SWOOLE_TRACE_AIO`** ([int](language.types.integer.md))
:   Sinalizador para registro do AIO.

**`SWOOLE_TRACE_SSL`** ([int](language.types.integer.md))
:   Sinalizador para registro do SSL.

**`SWOOLE_TRACE_NORMAL`** ([int](language.types.integer.md))
:   Sinalizador para registro normal.

**`SWOOLE_TRACE_CHANNEL`** ([int](language.types.integer.md))
:   Sinalizador para registro do canal.

**`SWOOLE_TRACE_TIMER`** ([int](language.types.integer.md))
:   Sinalizador para registro do temporizador.

**`SWOOLE_TRACE_SOCKET`** ([int](language.types.integer.md))
:   Sinalizador para registro do soquete.

**`SWOOLE_TRACE_COROUTINE`** ([int](language.types.integer.md))
:   Sinalizador para registro da corrotina.

**`SWOOLE_TRACE_CONTEXT`** ([int](language.types.integer.md))
:   Sinalizador para registro do contexto.

**`SWOOLE_TRACE_CO_HTTP_SERVER`** ([int](language.types.integer.md))
:   Sinalizador para registro do servidor HTTP da corrotina.

**`SWOOLE_TRACE_TABLE`** ([int](language.types.integer.md))
:   Sinalizador para registro de tabela.

**`SWOOLE_TRACE_CO_CURL`** ([int](language.types.integer.md))
:   Sinalizador para registro do cURL da corrotina.

**`SWOOLE_TRACE_CARES`** ([int](language.types.integer.md))
:   Sinalizador para registro de cares.

**`SWOOLE_TRACE_ZLIB`** ([int](language.types.integer.md))
:   Sinalizador para registro de zlib.

**`SWOOLE_TRACE_CO_PGSQL`** ([int](language.types.integer.md))
:   Sinalizador para registro da corrotina PGSQL.

**`SWOOLE_TRACE_CO_ODBC`** ([int](language.types.integer.md))
:   Sinalizador para registro da corrotina ODBC.

**`SWOOLE_TRACE_CO_ORACLE`** ([int](language.types.integer.md))
:   Sinalizador para registro da corrotina Oracle.

**`SWOOLE_TRACE_CO_SQLITE`** ([int](language.types.integer.md))
:   Sinalizador para registro de corrotina sqlite.

**`SWOOLE_TRACE_ALL`** ([int](language.types.integer.md))
:   Sinalizador para registro em todos os níveis.

**`SWOOLE_LOG_DEBUG`** ([int](language.types.integer.md))
:   Sinalizador para registro no nível de depuração.

**`SWOOLE_LOG_TRACE`** ([int](language.types.integer.md))
:   Sinalizador para registro no nível de rastreamento.

**`SWOOLE_LOG_INFO`** ([int](language.types.integer.md))
:   Sinalizador para registro no nível de informação.

**`SWOOLE_LOG_NOTICE`** ([int](language.types.integer.md))
:   Sinalizador para registro no nível de nota.

**`SWOOLE_LOG_WARNING`** ([int](language.types.integer.md))
:   Sinalizador para registro no nível de alerta.

**`SWOOLE_LOG_ERROR`** ([int](language.types.integer.md))
:   Sinalizador para registro no nível de erro.

**`SWOOLE_LOG_NONE`** ([int](language.types.integer.md))
:   Equivalente a desativar as informações de registro. Elas não serão geradas.

**`SWOOLE_LOG_ROTATION_SINGLE`** ([int](language.types.integer.md))
:   Desabilita a rotação de registro.

**`SWOOLE_LOG_ROTATION_MONTHLY`** ([int](language.types.integer.md))
:   Rotaciona os registros mensalmente.

**`SWOOLE_LOG_ROTATION_DAILY`** ([int](language.types.integer.md))
:   Rotaciona os registros diariamente.

**`SWOOLE_LOG_ROTATION_HOURLY`** ([int](language.types.integer.md))
:   Rotaciona os registros de hora em hora.

**`SWOOLE_LOG_ROTATION_EVERY_MINUTE`** ([int](language.types.integer.md))
:   Rotaciona os registros a cada minuto.

**`SWOOLE_IPC_NONE`** ([int](language.types.integer.md))
:   Não usa nenhum recurso de comunicação entre processos (IPC).

**`SWOOLE_IPC_UNIXSOCK`** ([int](language.types.integer.md))
:   Para comunicação entre processos (IPC), é altamente recomendado usar soquetes de domínio
    Unix (UnixSocket) no modo corrotina.

**`SWOOLE_IPC_SOCKET`** ([int](language.types.integer.md))
:   Para usar soquetes para comunicação entre processos (IPC),
    o método listen deve ser chamado para especificar o endereço e a porta a serem monitorados.

**`SWOOLE_IOV_MAX`** ([int](language.types.integer.md))
:   Limite MÁXIMO de IOV.

**`SWOOLE_IOURING_DEFAULT`** ([int](language.types.integer.md))
:   No modo controlado por interrupção, as solicitações de E/S podem ser enviadas por meio da chamada de sistema io\_uring\_enter,
    e a conclusão é determinada pela verificação direta do status da fila de conclusão.

**`SWOOLE_IOURING_SQPOLL`** ([int](language.types.integer.md))
:   No modo de pesquisa do kernel, o kernel cria threads dedicadas para enviar e receber solicitações de E/S,
    quase eliminando as trocas de contexto entre usuário e kernel.

**`SWOOLE_BASE`** ([int](language.types.integer.md))
:   Modo básico.

**`SWOOLE_PROCESS`** ([int](language.types.integer.md))
:   Modo multiprocesso.

**`SWOOLE_THREAD`** ([int](language.types.integer.md))
:   Modo multithread.

**`SWOOLE_IPC_UNSOCK`** ([int](language.types.integer.md))
:   O processo de tarefa se comunica com o processo de trabalho usando um soquete Unix.

**`SWOOLE_IPC_MSGQUEUE`** ([int](language.types.integer.md))
:   O processo de tarefa se comunica com o processo de trabalho usando uma fila de mensagem SystemV.

**`SWOOLE_IPC_PREEMPTIVE`** ([int](language.types.integer.md))
:   O processo de tarefa se comunica com o processo de trabalho usando um modo preemptivo por meio de uma fila de mensagem SystemV.

**`SWOOLE_SERVER_COMMAND_MASTER`** ([int](language.types.integer.md))
:   O processo mestre aceita solicitações.

**`SWOOLE_SERVER_COMMAND_MANAGER`** ([int](language.types.integer.md))
:   O processo gerenciador aceita solicitações.

**`SWOOLE_SERVER_COMMAND_REACTOR_THREAD`** ([int](language.types.integer.md))
:   O thread do Reactor aceita solicitações.

**`SWOOLE_SERVER_COMMAND_EVENT_WORKER`** ([int](language.types.integer.md))
:   O processo de thread do trabalhador de evento aceita solicitações.

**`SWOOLE_SERVER_COMMAND_TASK_WORKER`** ([int](language.types.integer.md))
:   O processo de thread do trabalhador de tarefa aceita solicitações.

**`SWOOLE_DISPATCH_ROUND`** ([int](language.types.integer.md))
:   Modo "round robin", cada processo Worker será alocado sequencialmente para cada conexão recebida.

**`SWOOLE_DISPATCH_FDMOD`** ([int](language.types.integer.md))
:   Aloca o trabalhador com base no descritor de arquivo da conexão. Isso garante que os dados da mesma conexão
    sejam processados ​​apenas pelo mesmo trabalhador.

**`SWOOLE_DISPATCH_IDLE_WORKER`** ([int](language.types.integer.md))
:   O processo principal escolherá a entrega com base no status da carga de trabalho do trabalhador, entregando apenas para trabalhadores ociosos.

**`SWOOLE_DISPATCH_IPMOD`** ([int](language.types.integer.md))
:   Aloca com base no IP do cliente usando hash de módulo, atribuindo a um processo trabalhador específico.
    Isso garante que os dados da mesma conexão de IP de origem sejam sempre atribuídos
    ao mesmo processo trabalhador. Algoritmo: inet\_addr\_mod(ClientIP, worker\_num).

**`SWOOLE_DISPATCH_UIDMOD`** ([int](language.types.integer.md))
:   Requer a vinculação de uma conexão a um UID exclusivo, chamando Server->bind() no código do usuário.
    Em seguida, o sistema subjacente aloca a diferentes processos de trabalho com base no valor do UID.
    Algoritmo: UID % worker\_num. Para usar strings como UID, pode-se usar crc32(UID\_STRING).

**`SWOOLE_DISPATCH_USERFUNC`** ([int](language.types.integer.md))
:   Define uma função de retorno dispatch\_func, onde seu valor de retorno determina
    qual processo manipula a solicitação.

**`SWOOLE_DISPATCH_CO_CONN_LB`** ([int](language.types.integer.md))
:   Determina qual processo manipula a solicitação com base no número de conexões.

**`SWOOLE_DISPATCH_CO_REQ_LB`** ([int](language.types.integer.md))
:   Determina qual processo manipula a solicitação com base no número de solicitações.

**`SWOOLE_DISPATCH_CONCURRENT_LB`** ([int](language.types.integer.md))
:   Determina qual processo manipula a solicitação com base na contagem de simultaneidade.

**`SWOOLE_WORKER_BUSY`** ([int](language.types.integer.md))
:   O processo está ocupado.

**`SWOOLE_WORKER_IDLE`** ([int](language.types.integer.md))
:   O processo está ocioso.

**`SWOOLE_WORKER_EXIT`** ([int](language.types.integer.md))
:   O processo terminou.

**`SWOOLE_MUTEX`** ([int](language.types.integer.md))
:   Bloqueio mutex.

**`SWOOLE_RWLOCK`** ([int](language.types.integer.md))
:   Bloqueio de leitura e gravação.

**`SWOOLE_SPINLOCK`** ([int](language.types.integer.md))
:   Bloqueio de grio.

**`SWOOLE_CORO_MAX_NUM_LIMIT`** ([int](language.types.integer.md))
:   Número máximo de corrotinas criadas (PHP\_INT\_MAX).

**`SWOOLE_CORO_INIT`** ([int](language.types.integer.md))
:   Inicialização de corrotina.

**`SWOOLE_CORO_WAITING`** ([int](language.types.integer.md))
:   Corrotina aguardando.

**`SWOOLE_CORO_RUNNING`** ([int](language.types.integer.md))
:   Corrotina em execução.

**`SWOOLE_CORO_END`** ([int](language.types.integer.md))
:   Corrotina concluída.

**`SWOOLE_EXIT_IN_COROUTINE`** ([int](language.types.integer.md))
:   Executando a função exit() na corrotina.

**`SWOOLE_EXIT_IN_SERVER`** ([int](language.types.integer.md))
:   Executando a função exit() no servidor.

**`SWOOLE_HTTP2_TYPE_DATA`** ([int](language.types.integer.md))
:   Quadro de dados HTTP2.

**`SWOOLE_HTTP2_TYPE_HEADERS`** ([int](language.types.integer.md))
:   Quadro de cabeçalhos HTTP2.

**`SWOOLE_HTTP2_TYPE_PRIORITY`** ([int](language.types.integer.md))
:   Quadro de prioridade HTTP2.

**`SWOOLE_HTTP2_TYPE_RST_STREAM`** ([int](language.types.integer.md))
:   Quadro de fluxo "rst" HTTP2.

**`SWOOLE_HTTP2_TYPE_SETTINGS`** ([int](language.types.integer.md))
:   Quadro de configurações HTTP2.

**`SWOOLE_HTTP2_TYPE_PUSH_PROMISE`** ([int](language.types.integer.md))
:   Quadro de promessa de push HTTP2.

**`SWOOLE_HTTP2_TYPE_PING`** ([int](language.types.integer.md))
:   Quadro ping HTTP2.

**`SWOOLE_HTTP2_TYPE_GOAWAY`** ([int](language.types.integer.md))
:   Quadro HTTP2 Goaway.

**`SWOOLE_HTTP2_TYPE_WINDOW_UPDATE`** ([int](language.types.integer.md))
:   Quadro de atualização de janela HTTP2.

**`SWOOLE_HTTP2_TYPE_CONTINUATION`** ([int](language.types.integer.md))
:   Quadro de continuação HTTP2.

**`SWOOLE_HTTP2_ERROR_NO_ERROR`** ([int](language.types.integer.md))
:   HTTP2 sem erro.

**`SWOOLE_HTTP2_ERROR_PROTOCOL_ERROR`** ([int](language.types.integer.md))
:   Erro de protocolo HTTP2.

**`SWOOLE_HTTP2_ERROR_INTERNAL_ERROR`** ([int](language.types.integer.md))
:   Erro interno HTTP2.

**`SWOOLE_HTTP2_ERROR_FLOW_CONTROL_ERROR`** ([int](language.types.integer.md))
:   Erro de controle de fluxo HTTP2.

**`SWOOLE_HTTP2_ERROR_SETTINGS_TIMEOUT`** ([int](language.types.integer.md))
:   Erro de limite de tempo de configuração HTTP2.

**`SWOOLE_HTTP2_ERROR_STREAM_CLOSED`** ([int](language.types.integer.md))
:   Erro de fluxo HTTP2 fechado.

**`SWOOLE_HTTP2_ERROR_FRAME_SIZE_ERROR`** ([int](language.types.integer.md))
:   Erro de tamanho de quadro HTTP2.

**`SWOOLE_HTTP2_ERROR_REFUSED_STREAM`** ([int](language.types.integer.md))
:   Erro de transmissão recusada por HTTP2.

**`SWOOLE_HTTP2_ERROR_CANCEL`** ([int](language.types.integer.md))
:   Erro de cancelamento HTTP2.

**`SWOOLE_HTTP2_ERROR_COMPRESSION_ERROR`** ([int](language.types.integer.md))
:   Erro de compressão HTTP2.

**`SWOOLE_HTTP2_ERROR_CONNECT_ERROR`** ([int](language.types.integer.md))
:   Erro de conexão HTTP2.

**`SWOOLE_HTTP2_ERROR_ENHANCE_YOUR_CALM`** ([int](language.types.integer.md))
:   Erro "enhance your calm" HTTP2.

**`SWOOLE_HTTP2_ERROR_INADEQUATE_SECURITY`** ([int](language.types.integer.md))
:   Erro de segurança inadequada HTTP2.

**`SWOOLE_HTTP2_ERROR_HTTP_1_1_REQUIRED`** ([int](language.types.integer.md))
:   Erro HTTP1.1 requerido do HTTP2.

**`SWOOLE_HTTP_CLIENT_ESTATUS_CONNECT_FAILED`** ([int](language.types.integer.md))
:   Tempo limite de conexão, o servidor não está escutando na porta ou há uma falha de rede.
    $errCode pode ser lido para obter o código de erro de rede específico.

**`SWOOLE_HTTP_CLIENT_ESTATUS_REQUEST_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite da solicitação, o servidor não retornou uma resposta dentro do tempo limite especificado.

**`SWOOLE_HTTP_CLIENT_ESTATUS_SERVER_RESET`** ([int](language.types.integer.md))
:   Após o envio da solicitação do cliente, o servidor desconectou a conexão à força.

**`SWOOLE_HTTP_CLIENT_ESTATUS_SEND_FAILED`** ([int](language.types.integer.md))
:   Falha no envio do cliente (esta constante está disponível na versão Swoole >= v4.5.9,
    para versões anteriores a esta, use o código de status).

**`SWOOLE_MSGQUEUE_ORIENT`** ([int](language.types.integer.md))
:   Swoole\Process::pop() retornará dados específicos na fila com o tipo de mensagem como ID do processo + 1.
    Swoole\Process::push() adicionará o tipo ID do processo + 1 à mensagem.

**`SWOOLE_MSGQUEUE_BALANCE`** ([int](language.types.integer.md))
:   Swoole\Process::pop() retornará a primeira mensagem na fila.
    Swoole\Process::push() não adicionará um tipo específico à mensagem.

**`SWOOLE_HOOK_TCP`** ([int](language.types.integer.md))
:   Fluxo baseado em corrotina do tipo TCP Socket, incluindo os mais comuns como Redis, PDO, Mysqli.

**`SWOOLE_HOOK_UDP`** ([int](language.types.integer.md))
:   Fluxo baseado em corrotina do tipo UDP Socket.

**`SWOOLE_HOOK_UNIX`** ([int](language.types.integer.md))
:   Fluxo baseado em corrotina para o tipo de soquete de fluxo Unix.

**`SWOOLE_HOOK_UDG`** ([int](language.types.integer.md))
:   Fluxo baseado em corrotina para o tipo de soquete de fluxo UDG.

**`SWOOLE_HOOK_SSL`** ([int](language.types.integer.md))
:   Fluxo baseado em corrotina para o tipo de soquete de fluxo SSL.

**`SWOOLE_HOOK_TLS`** ([int](language.types.integer.md))
:   Fluxo baseado em corrotina para o tipo de soquete de fluxo TLS.

**`SWOOLE_HOOK_STREAM_FUNCTION`** ([int](language.types.integer.md))
:   Função stream\_\*() baseada em corrotina.

**`SWOOLE_HOOK_FILE`** ([int](language.types.integer.md))
:   Operações de arquivo baseadas em corrotinas.

**`SWOOLE_HOOK_STDIO`** ([int](language.types.integer.md))
:   Operações STDIO baseadas em corrotinas.

**`SWOOLE_HOOK_SLEEP`** ([int](language.types.integer.md))
:   Operações de sono baseadas em corrotinas, incluindo sleep, usleep, time\_nanosleep, time\_sleep\_until.

**`SWOOLE_HOOK_PROC`** ([int](language.types.integer.md))
:   Funções proc\* baseadas em corrotina, incluindo: proc\_open, proc\_close, proc\_get\_status, proc\_terminate.

**`SWOOLE_HOOK_CURL`** ([int](language.types.integer.md))
:   Baseadas em corrotina para extensão curl.

**`SWOOLE_HOOK_NATIVE_CURL`** ([int](language.types.integer.md))
:   Baseadas em corrotina para extensão curl nativa.

**`SWOOLE_HOOK_BLOCKING_FUNCTION`** ([int](language.types.integer.md))
:   Baseadas em corrotina para funções de bloqueio, incluem gethostbyname, exec, shell\_exec.

**`SWOOLE_HOOK_SOCKETS`** ([int](language.types.integer.md))
:   Baseadas em corrotina para extensão sockets.

**`SWOOLE_HOOK_PDO_PGSQL`** ([int](language.types.integer.md))
:   Baseadas em corrotina para extensão pdo\_pgsql.

**`SWOOLE_HOOK_PDO_ODBC`** ([int](language.types.integer.md))
:   Baseadas em corrotina para extensão pdo\_odbc.

**`SWOOLE_HOOK_PDO_ORACLE`** ([int](language.types.integer.md))
:   Baseadas em corrotina para extensão pdo\_oci.

**`SWOOLE_HOOK_PDO_SQLITE`** ([int](language.types.integer.md))
:   Baseadas em corrotina para extensão pdo\_sqlite.

**`SWOOLE_HOOK_ALL`** ([int](language.types.integer.md))
:   Baseadas em corrotinas para todas as funções de bloco e extensões.

**`SOCKET_ECANCELED`** ([int](language.types.integer.md))
:   Erro de soquete "ecanceled".

**`TCP_INFO`** ([int](language.types.integer.md))
:   TCP\_INFO.

**`SWOOLE_TIMER_MIN_MS`** ([int](language.types.integer.md))
:   Intervalo mínimo de temporizador suportado (em milissegundos).

**`SWOOLE_TIMER_MIN_SEC`** ([double](language.types.float.md))
:   Intervalo mínimo de tempo suportado (em segundos).

**`SWOOLE_TIMER_MAX_MS`** ([int](language.types.integer.md))
:   Intervalo máximo de temporizador suportado (em milissegundos).

**`SWOOLE_TIMER_MAX_SEC`** ([int](language.types.integer.md))
:   Intervalo máximo de tempo suportado (em segundos).

**`SWOOLE_WEBSOCKET_STATUS_CONNECTION`** ([int](language.types.integer.md))
:   O WebSocket está estabelecendo uma conexão.

**`SWOOLE_WEBSOCKET_STATUS_HANDSHAKE`** ([int](language.types.integer.md))
:   O WebSocket está na fase de handshake.

**`SWOOLE_WEBSOCKET_STATUS_ACTIVE`** ([int](language.types.integer.md))
:   Conexão WebSocket ativa.

**`SWOOLE_WEBSOCKET_STATUS_CLOSING`** ([int](language.types.integer.md))
:   A conexão WebSocket está fechada.

**`SWOOLE_WEBSOCKET_OPCODE_CONTINUATION`** ([int](language.types.integer.md))
:   Quadro de continuação do Websocket.

**`SWOOLE_WEBSOCKET_OPCODE_TEXT`** ([int](language.types.integer.md))
:   Quadro de texto do Websocket.

**`SWOOLE_WEBSOCKET_OPCODE_BINARY`** ([int](language.types.integer.md))
:   Quadro binário do Websocket.

**`SWOOLE_WEBSOCKET_OPCODE_CLOSE`** ([int](language.types.integer.md))
:   Quadro de fechamento do Websocket.

**`SWOOLE_WEBSOCKET_OPCODE_PING`** ([int](language.types.integer.md))
:   Quadro de ping do Websocket.

**`SWOOLE_WEBSOCKET_OPCODE_PONG`** ([int](language.types.integer.md))
:   Quadro para pong Websocket.

**`SWOOLE_WEBSOCKET_FLAG_FIN`** ([int](language.types.integer.md))
:   Sinalizador FIN do Websocket.

**`SWOOLE_WEBSOCKET_FLAG_RSV1`** ([int](language.types.integer.md))
:   Sinalizador RSV1 do Websocket.

**`SWOOLE_WEBSOCKET_FLAG_RSV2`** ([int](language.types.integer.md))
:   Sinalizador RSV2 do Websocket.

**`SWOOLE_WEBSOCKET_FLAG_RSV3`** ([int](language.types.integer.md))
:   Sinalizador RSV3 do Websocket.

**`SWOOLE_WEBSOCKET_FLAG_MASK`** ([int](language.types.integer.md))
:   Sinalizador MASK do Websocket.

**`SWOOLE_WEBSOCKET_FLAG_COMPRESS`** ([int](language.types.integer.md))
:   Sinalizador COMPRESS do Websocket.

**`SWOOLE_WEBSOCKET_CLOSE_NORMAL`** ([int](language.types.integer.md))
:   Fechamento normal (conexão concluída com sucesso).

**`SWOOLE_WEBSOCKET_CLOSE_GOING_AWAY`** ([int](language.types.integer.md))
:   O endpoint está desaparecendo (por exemplo, aba do navegador fechada).

**`SWOOLE_WEBSOCKET_CLOSE_PROTOCOL_ERROR`** ([int](language.types.integer.md))
:   Erro de protocolo (quadro de dados malformado).

**`SWOOLE_WEBSOCKET_CLOSE_DATA_ERROR`** ([int](language.types.integer.md))
:   Dados não suportados recebidos (por exemplo, binários ao esperar texto).

**`SWOOLE_WEBSOCKET_CLOSE_STATUS_ERROR`** ([int](language.types.integer.md))
:   Nenhum código de status fornecido (enviado como um marcador).

**`SWOOLE_WEBSOCKET_CLOSE_ABNORMAL`** ([int](language.types.integer.md))
:   Fechamento anormal (nenhum quadro de fechamento recebido, por exemplo, reinicialização de TCP).

**`SWOOLE_WEBSOCKET_CLOSE_MESSAGE_ERROR`** ([int](language.types.integer.md))
:   Dados inválidos (por exemplo, texto não UTF-8 em um quadro de texto).

**`SWOOLE_WEBSOCKET_CLOSE_POLICY_ERROR`** ([int](language.types.integer.md))
:   Violação de política (por exemplo, ação não autorizada).

**`SWOOLE_WEBSOCKET_CLOSE_MESSAGE_TOO_BIG`** ([int](language.types.integer.md))
:   Mensagem muito grande (excede o tamanho máximo do servidor).

**`SWOOLE_WEBSOCKET_CLOSE_EXTENSION_MISSING`** ([int](language.types.integer.md))
:   O cliente não negociou as extensões necessárias.

**`SWOOLE_WEBSOCKET_CLOSE_SERVER_ERROR`** ([int](language.types.integer.md))
:   O servidor encontrou um erro.

**`SWOOLE_WEBSOCKET_CLOSE_CLOSE_SERVICE_RESTART`** ([int](language.types.integer.md))
:   O servidor está reiniciando (condição temporária).

**`SWOOLE_WEBSOCKET_CLOSE_TRY_AGAIN_LATER`** ([int](language.types.integer.md))
:   Sobrecarga temporária do servidor (o cliente deve tentar novamente).

**`SWOOLE_WEBSOCKET_CLOSE_BAD_GATEWAY`** ([int](language.types.integer.md))
:   Resposta inválida do servidor upstream.

**`SWOOLE_WEBSOCKET_CLOSE_TLS`** ([int](language.types.integer.md))
:   Falha no handshake TLS (usado quando o HTTPS falha).

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
