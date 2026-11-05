# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stream.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Opções do parâmetro `flags` para a função
[stream\_socket\_client()](function.stream-socket-client.md)**

**`STREAM_CLIENT_ASYNC_CONNECT`** ([int](language.types.integer.md))
:   Abre o socket do cliente de forma assíncrona.
    Esta opção deve ser usada junto com a opção
    **`STREAM_CLIENT_CONNECT`**.

**`STREAM_CLIENT_CONNECT`** ([int](language.types.integer.md))
:   Abre a conexão socket do cliente.
    Sockets do cliente devem sempre incluir esta opção.

**`STREAM_CLIENT_PERSISTENT`** ([int](language.types.integer.md))
:   Socket do cliente deve permanecer persistente entre carregamentos de páginas.

**Opções do parâmetro `flags` para a função
[stream\_socket\_server()](function.stream-socket-server.md)**

**`STREAM_SERVER_BIND`** ([int](language.types.integer.md))
:   Indica que um fluxo deve se ligar ao alvo especificado.
    Sockets de servidor devem sempre incluir esta opção.

**`STREAM_SERVER_LISTEN`** ([int](language.types.integer.md))
:   Indica que um fluxo ligado usando a opção
    **`STREAM_SERVER_BIND`**
    deve iniciar a escuta ao socket.
    Transportes orientados a conexão (como o TCP) devem usar esta opção,
    caso contrário o socket do servidor não será habilitado.
    Usar esta opção em transportes sem conexão (como o UDP) é um erro.

**Valores para o parâmetro `mode` da função
[stream\_socket\_shutdown()](function.stream-socket-shutdown.md)**

**`STREAM_SHUT_RD`** ([int](language.types.integer.md))
:   Desabilita recepções adicionais.

**`STREAM_SHUT_WR`** ([int](language.types.integer.md))
:   Desabilita transmissões adicionais.

**`STREAM_SHUT_RDWR`** ([int](language.types.integer.md))
:   Desabilita recepções e transmissões adicionais.

**Opções de Transferências de Sockets de Fluxo**

Essas constantes são usadas para o parâmetro `flags`
das funções
[stream\_socket\_recvfrom()](function.stream-socket-recvfrom.md) e
[stream\_socket\_sendto()](function.stream-socket-sendto.md).

**`STREAM_OOB`** ([int](language.types.integer.md))
:   Processa dados fora-de-banda OOB (`out-of-band`).

**`STREAM_PEEK`** ([int](language.types.integer.md))
:   Busca dados do soquete, mas não consome o buffer.

    Chamadas subsequentes a [fread()](function.fread.md) ou
    [stream\_socket\_recvfrom()](function.stream-socket-recvfrom.md) receberão os mesmos dados.

    > **Nota**:
    >
    > Não é uma opção válida para [stream\_socket\_sendto()](function.stream-socket-sendto.md).

**Constantes de Filtro de Fluxo**

Essas constantes são usadas pelas funções
[stream\_filter\_append()](function.stream-filter-append.md) e
[stream\_filter\_prepend()](function.stream-filter-prepend.md).

**`STREAM_FILTER_READ`** ([int](language.types.integer.md))
:   Indica que o filtro especificado deve somente ser aplicado durante
    *leitura*.

**`STREAM_FILTER_WRITE`** ([int](language.types.integer.md))
:   Indica que o filtro especificado deve somente ser aplicado durante
    *escrita*.

**`STREAM_FILTER_ALL`** ([int](language.types.integer.md))
:   Equivalente a `STREAM_FILTER_READ | STREAM_FILTER_WRITE`.

**Métodos de Criptografia de Fluxo**

**`STREAM_CRYPTO_METHOD_ANY_CLIENT`** ([int](language.types.integer.md))
:   Qualquer versão TLS ou SSL em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_SSLv2_CLIENT`** ([int](language.types.integer.md))
:   SSL 2 em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_SSLv3_CLIENT`** ([int](language.types.integer.md))
:   SSL 3 em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_SSLv23_CLIENT`** ([int](language.types.integer.md))
:   TLS 1.0, 1.1 ou 1.2 em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_TLS_CLIENT`** ([int](language.types.integer.md))
:   Qualquer versão TLS em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT`** ([int](language.types.integer.md))
:   TLS 1.0 em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT`** ([int](language.types.integer.md))
:   TLS 1.1 em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT`** ([int](language.types.integer.md))
:   TLS 1.2 em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT`** ([int](language.types.integer.md))
:   TLS 1.3 em um fluxo de cliente.

**`STREAM_CRYPTO_METHOD_ANY_SERVER`** ([int](language.types.integer.md))
:   Qualquer versão de TLS ou SSL em um fluxo de servidor.

**`STREAM_CRYPTO_METHOD_SSLv2_SERVER`** ([int](language.types.integer.md))
:   SSL 2 em um fluxo de servidor.

**`STREAM_CRYPTO_METHOD_SSLv3_SERVER`** ([int](language.types.integer.md))
:   SSL 3 em um fluxo de servidor.

**`STREAM_CRYPTO_METHOD_SSLv23_SERVER`** ([int](language.types.integer.md))
:   TLS 1.0, 1.1 ou 1.2 em um fluxo de servidor.

**`STREAM_CRYPTO_METHOD_TLS_SERVER`** ([int](language.types.integer.md))
:   Qualquer versão de TLS em um fluxo de servidor.

**`STREAM_CRYPTO_METHOD_TLSv1_0_SERVER`** ([int](language.types.integer.md))
:   TLS 1.0 em um fluxo de servidor.

**`STREAM_CRYPTO_METHOD_TLSv1_1_SERVER`** ([int](language.types.integer.md))
:   TLS 1.1 em um fluxo de servidor.

**`STREAM_CRYPTO_METHOD_TLSv1_2_SERVER`** ([int](language.types.integer.md))
:   TLS 1.2 em um fluxo de servidor.

**`STREAM_CRYPTO_METHOD_TLSv1_3_SERVER`** ([int](language.types.integer.md))
:   TLS 1.3 em um fluxo de servidor.

**`STREAM_CRYPTO_PROTO_SSLv3`** ([int](language.types.integer.md))
:   Sinônimo de **`STREAM_CRYPTO_METHOD_SSLv3_SERVER`**.

**`STREAM_CRYPTO_PROTO_TLSv1_0`** ([int](language.types.integer.md))
:   Sinônimo de **`STREAM_CRYPTO_METHOD_TLSv1_0_SERVER`**.

**`STREAM_CRYPTO_PROTO_TLSv1_1`** ([int](language.types.integer.md))
:   Sinônimo de **`STREAM_CRYPTO_METHOD_TLSv1_1_SERVER`**.

**`STREAM_CRYPTO_PROTO_TLSv1_2`** ([int](language.types.integer.md))
:   Sinônimo de **`STREAM_CRYPTO_METHOD_TLSv1_2_SERVER`**.

**`STREAM_CRYPTO_PROTO_TLSv1_3`** ([int](language.types.integer.md))
:   Sinônimo de **`STREAM_CRYPTO_METHOD_TLSv1_3_SERVER`**.

**Constantes internas não utilizadas**

**`STREAM_MUST_SEEK`** ([int](language.types.integer.md))
:   Certifica que o fluxo é pesquisável.
    Isto pode resultar na criação de uma cópia do fluxo.

**`STREAM_IGNORE_URL`** ([int](language.types.integer.md))
:   Não usa empacotadores de plugin.

### Constantes usadas com a função [stream\_socket\_pair()](function.stream-socket-pair.md)

> **Nota**:
>
> Nem todas as constantes estarão disponíveis em um sistema específico.

**Constantes para o parâmetro `domain`**

**`STREAM_PF_INET`** ([int](language.types.integer.md))
:   Versão 4 de Protocolo de Internet (IPv4).

**`STREAM_PF_INET6`** ([int](language.types.integer.md))
:   Versão 6 de Protocolo de Internet (IPv6).

**`STREAM_PF_UNIX`** ([int](language.types.integer.md))
:   Protocolos internos do sistema Unix.

**Constantes para o parâmetro `type`**

**`STREAM_SOCK_DGRAM`** ([int](language.types.integer.md))
:   Fornece datagramas, que são mensagens sem conexão.
    Por exemplo: UDP.

**`STREAM_SOCK_RAW`** ([int](language.types.integer.md))
:   Fornece um socket bruro, que dá acessoa a protocolos e interfaces internos
    da rede.
    Normalmente este tipo de socket está disponível somente ao usuário raiz (administrador).

**`STREAM_SOCK_RDM`** ([int](language.types.integer.md))
:   Fornece um socket RDM (mensagem entrege com confiabilidade).

**`STREAM_SOCK_SEQPACKET`** ([int](language.types.integer.md))
:   Fornece um socket de fluxo de pacotes sequenciados.

**`STREAM_SOCK_STREAM`** ([int](language.types.integer.md))
:   Fornece fluxos de bytes de mão dupla, sequenciados com um mecanismo de transmissão
    para dados fora-de-banda.
    Por exemplo: TCP.

**Constantes para o parâmetro `protocol`**

**`STREAM_IPPROTO_ICMP`** ([int](language.types.integer.md))
:   Fornece um socket ICMP.

**`STREAM_IPPROTO_IP`** ([int](language.types.integer.md))
:   Fornece um socket IP.

**`STREAM_IPPROTO_RAW`** ([int](language.types.integer.md))
:   Fornece um socket RAW.

**`STREAM_IPPROTO_TCP`** ([int](language.types.integer.md))
:   Fornece um socket TCP.

**`STREAM_IPPROTO_UDP`** ([int](language.types.integer.md))
:   Fornece um socket UDP.

### Constantes usadas com a função [stream\_notification\_callback()](function.stream-notification-callback.md)

**Valores para o parâmetro `notification_code`**

**`STREAM_NOTIFY_RESOLVE`** ([int](language.types.integer.md))
:   Um endereço remoto requerido para este fluxo foi resolvidoo,
    ou a resolução falhou.

    Consulte o parâmetro `severity` para uma indicação do ocorrido.

    **Aviso**

    O suporte para este código de implementação ainda não foi implementado.

**`STREAM_NOTIFY_CONNECT`** ([int](language.types.integer.md))
:   Uma conexão com um recurso externo foi estabalecida.

**`STREAM_NOTIFY_AUTH_REQUIRED`** ([int](language.types.integer.md))
:   Autorização adicional é requerida para acessar o recurso especificado.

    Tipicamente emitido com o nível de severidade (`severity`) de
    **`STREAM_NOTIFY_SEVERITY_ERR`**.

**`STREAM_NOTIFY_MIME_TYPE_IS`** ([int](language.types.integer.md))
:   O `tipo de mídia` do recurso foi identificado.

    Refira-se ao parâmetro `message` para uma descrição do
    tipo descoberto.

**`STREAM_NOTIFY_FILE_SIZE_IS`** ([int](language.types.integer.md))
:   O `tamanho` do recurso foi identificado.

**`STREAM_NOTIFY_REDIRECTED`** ([int](language.types.integer.md))
:   O recurso externo redirecionou o fluxo para uma localização alternativa.

    Refira-se ao parâmetro `message`.

**`STREAM_NOTIFY_PROGRESS`** ([int](language.types.integer.md))
:   Indica o progresso atual da transferência do fluxo em
    `bytes_transferred` e possivelmente em
    `bytes_max` também.

**`STREAM_NOTIFY_COMPLETED`** ([int](language.types.integer.md))
:   Não há mais dados disponíveis no fluxo.
    (Primeira implementação a partir do PHP 8.3.0.)

**`STREAM_NOTIFY_FAILURE`** ([int](language.types.integer.md))
:   Um erro genérico ocorreu no fluxo.

    Consulte os parâmetros `message` e
    `message_code` para detalhes.

**`STREAM_NOTIFY_AUTH_RESULT`** ([int](language.types.integer.md))
:   A autorização foi concluída (com ou sem sucesso).

**Valores para o parâmetro `severity`**

**`STREAM_NOTIFY_SEVERITY_INFO`** ([int](language.types.integer.md))
:   Notificação normal, não relacionada a erro.

**`STREAM_NOTIFY_SEVERITY_WARN`** ([int](language.types.integer.md))
:   Condição de erro não crítica.
    O processamento pode continuar.

**`STREAM_NOTIFY_SEVERITY_ERR`** ([int](language.types.integer.md))
:   Um erro crítico ocorreu.
    O processamento não pode continuar.

### Constantes relacionadas a [streamWrapper](class.streamwrapper.md)

**Opções válidas para a função [stream\_wrapper\_register()](function.stream-wrapper-register.md)**

**`STREAM_IS_URL`** ([int](language.types.integer.md))
:   Indica que o protocolo empacotador de fluxo é um protocolo
    URL.

**Valores para o parâmetro `cast_as` do método
[streamWrapper::stream\_cast()](streamwrapper.stream-cast.md)**

**`STREAM_CAST_FOR_SELECT`** ([int](language.types.integer.md))
:   Indica que [streamWrapper::stream\_cast()](streamwrapper.stream-cast.md)
    foi chamado por **streamWrapper::stream\_select()**.

**`STREAM_CAST_AS_STREAM`** ([int](language.types.integer.md))
:   Indica que [streamWrapper::stream\_cast()](streamwrapper.stream-cast.md)
    foi chamado por qualquer outro método exceto
    **streamWrapper::stream\_select()**.

**Valores para o parâmetro `option` do método
[streamWrapper::stream\_metadata()](streamwrapper.stream-metadata.md)**

**`STREAM_META_TOUCH`** ([int](language.types.integer.md))
:   Indica uma chamada a [touch()](function.touch.md).

**`STREAM_META_OWNER`** ([int](language.types.integer.md))
:   Indica uma chamada a [chown()](function.chown.md).

**`STREAM_META_OWNER_NAME`** ([int](language.types.integer.md))
:   Indica uma chamada a [chown()](function.chown.md).

**`STREAM_META_GROUP`** ([int](language.types.integer.md))
:   Indica uma chamada a [chgrp()](function.chgrp.md).

**`STREAM_META_GROUP_NAME`** ([int](language.types.integer.md))
:   Indica uma chamada a [chgrp()](function.chgrp.md).

**`STREAM_META_ACCESS`** ([int](language.types.integer.md))
:   Indica uma chamada a [chmod()](function.chmod.md).

**Opções válidas para os métodos
[streamWrapper::mkdir()](streamwrapper.mkdir.md)
e
[streamWrapper::rmdir()](streamwrapper.rmdir.md)**

**`STREAM_MKDIR_RECURSIVE`** ([int](language.types.integer.md))
:   Sinalizador recursivo para os parâmetros de opções de
    [mkdir()](function.mkdir.md) e [rmdir()](function.rmdir.md).

**Valores para o parâmetro `options` do método
[streamWrapper::stream\_open()](streamwrapper.stream-open.md)**

**`STREAM_USE_PATH`** ([int](language.types.integer.md))
:   Opção que indica que caminhos relativos devem usar o caminho de inclusão
    para localizar o recurso.

**`STREAM_REPORT_ERRORS`** ([int](language.types.integer.md))
:   Opção que indica que o empacotador de fluxo deve reportar erros.
    Se esta opção não for definida, nenhum erro deve ser reportado.

    Erros são normalmente reportados através da função
    [trigger\_error()](function.trigger-error.md).

**Valores para o parâmetro `option` do método
[streamWrapper::stream\_set\_option()](streamwrapper.stream-set-option.md)**

**`STREAM_OPTION_BLOCKING`** ([int](language.types.integer.md))
:   Define o modo bloqueante/não-bloqueante em um fluxo.

**`STREAM_OPTION_READ_BUFFER`** ([int](language.types.integer.md))
:   Define armazenamento em buffer de leitura de arquivo em um fluxo.

    **Valores de opção válidos**

    **`STREAM_BUFFER_NONE`** ([int](language.types.integer.md))
    :   Sem buffer.

    **`STREAM_BUFFER_LINE`** ([int](language.types.integer.md))
    :   Buffer de linha.

    **`STREAM_BUFFER_FULL`** ([int](language.types.integer.md))
    :   Buffer completo.

**`STREAM_OPTION_READ_TIMEOUT`** ([int](language.types.integer.md))
:   Define limite de tempo de leitura em um fluxo.

**`STREAM_OPTION_WRITE_BUFFER`** ([int](language.types.integer.md))
:   Define armazenamento em buffer de gravação em arquivo em um fluxo.

    Consulte **`STREAM_OPTION_READ_BUFFER`**
    para opções válidas de buffer.

**Valores para o parâmetro `flags` do método
[streamWrapper::url\_stat()](streamwrapper.url-stat.md)**

**`STREAM_URL_STAT_LINK`** ([int](language.types.integer.md))
:   Apenas informação sore a conexão em si deve ser retornada,
    e não o recurso apontado pela conexão.

**`STREAM_URL_STAT_QUIET`** ([int](language.types.integer.md))
:   O empacotador não deve emitir erros.

### Constantes relacionadas a [php\_user\_filter](class.php-user-filter.md)

**Valores de retorno válidos para
[php\_user\_filter::filter()](php-user-filter.filter.md)**

**`PSFS_PASS_ON`** ([int](language.types.integer.md))
:   Valor de retorno indicando que o filtro no espaço do
    usuário retornou buckets em `out`.

**`PSFS_FEED_ME`** ([int](language.types.integer.md))
:   Valor de retorno indicando que o filtro no espaço do
    usuário não retornou buckets em `out`
    (ou seja, nenhum dado disponível).

**`PSFS_ERR_FATAL`** ([int](language.types.integer.md))
:   Valor de retorno indicando que o filtro no espaço do
    usuário encontrou um erro irrecuperável
    (ou seja, dados inválidos recebidos).

**Constantes internas não utilizadas**

**`PSFS_FLAG_NORMAL`** ([int](language.types.integer.md))
:   Leitura/escrita comuns.

**`PSFS_FLAG_FLUSH_INC`** ([int](language.types.integer.md))
:   Uma descarga incremental.

**`PSFS_FLAG_FLUSH_CLOSE`** ([int](language.types.integer.md))
:   Descarga final antes do fechamento.

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
