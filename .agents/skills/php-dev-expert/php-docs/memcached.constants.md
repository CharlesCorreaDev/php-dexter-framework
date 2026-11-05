# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`Memcached::OPT_COMPRESSION`**
:   Ativa ou desativa a compactação de dados. Quando ativada,
    os valores de itens maiores que um determinado limite (atualmente 2000 bytes) serão
    compactados durante o armazenamento e descompactados durante a recuperação de forma
    transparente. O limite pode ser configurado usando a configuração
    [memcached.compression\_threshold](memcached.configuration.md#ini.memcached.compression-threshold)
    do arquivo INI.

    Tipo: [bool](language.types.boolean.md), padrão: **`true`**.

**`Memcached::OPT_COMPRESSION_TYPE`**
:   Especifica o algoritmo de compactação a ser usado, se a compactação estiver habilitada.
    Os algoritmos válidos são **`Memcached::COMPRESSION_FASTLZ`**,
    **`Memcached::COMPRESSION_ZLIB`** e
    **`Memcached::COMPRESSION_ZSTD`**.

    Tipo: [int](language.types.integer.md), padrão: **`Memcached::COMPRESSION_FASTLZ`**.

**`Memcached::COMPRESSION_FASTLZ`**
:   O algoritmo de compressão FASTLZ.

**`Memcached::COMPRESSION_ZLIB`**
:   O algoritmo de compressão ZLIB.

**`Memcached::COMPRESSION_ZSTD`**
:   O algoritmo de compressão ZSTD.

    Disponível a partir do Memcached 3.3.0.

**`Memcached::OPT_COMPRESSION_LEVEL`**
:   Especifica o nível de compactação a ser usado, se a compactação estiver habilitada.

    - **`Memcached::COMPRESSION_FASTLZ`** não suporta níveis de compactação.
    - **`Memcached::COMPRESSION_ZSTD`**: nível mínimo é `-22` e nível máximo é `22`.
    - **`Memcached::COMPRESSION_ZLIB`**: nível mínimo é `0` e nível máximo é `9`.

    Tipo: [int](language.types.integer.md), padrão: `3`.

**`Memcached::OPT_SERIALIZER`**
:   Especifica o serializador a ser usado para serializar valores não escalares.
    Os serializadores válidos são **`Memcached::SERIALIZER_PHP`**,
    **`Memcached::SERIALIZER_IGBINARY`**,
    **`Memcached::SERIALIZER_JSON`**,
    **`Memcached::SERIALIZER_JSON_ARRAY`** e
    **`Memcached::SERIALIZER_MSGPACK`**.

    Tipo: [int](language.types.integer.md), padrão: **`Memcached::SERIALIZER_IGBINARY`** se disponível,
    depois **`Memcached::SERIALIZER_MSGPACK`** se disponível
    e depois **`Memcached::SERIALIZER_PHP`**.

**`Memcached::SERIALIZER_PHP`**
:   O serializador PHP padrão.

**`Memcached::SERIALIZER_IGBINARY`**
:   O serializador [igbinary](book.igbinary.md).
    Em vez de representação textual, ele armazena estruturas de dados PHP
    em um formato binário compacto, resultando em ganhos de espaço e tempo.

    Este serializador é suportado somente se o memcached estiver configurado com
    a opção **--enable-memcached-igbinary** e a
    extensão [igbinary](book.igbinary.md#intro.igbinary) estiver carregada.

**`Memcached::SERIALIZER_JSON`**
:   O serializador JSON. Este serializador desserializa de JSON para um objeto.

**`Memcached::SERIALIZER_JSON_ARRAY`**
:   O serializador de array JSON.
    Este serializador desserializa de JSON para um array associativo.

**`Memcached::SERIALIZER_MSGPACK`**
:   O serializador [» MessagePack](https://pecl.php.net/package/msgpack).

    Este serializador é suportado somente se o memcached estiver configurado com
    a opção **--enable-memcached-msgpack** e a
    extensão `msgpack` estiver carregada.

**`Memcached::OPT_PREFIX_KEY`**
:   Isso pode ser usado para criar um "domínio" para as chaves de item. O valor
    especificado aqui será prefixado para cada uma das chaves. Não pode ter
    mais de `128` caracteres e reduzirá o tamanho
    máximo de chave disponível. O prefixo é aplicado apenas às chaves do item,
    não às chaves do servidor.

    Tipo: [string](language.types.string.md), padrão: `""`.

**`Memcached::OPT_HASH`**
:   Especifica o algoritmo de hash usado para as chaves do item. Os valores
    válidos são fornecidos por meio das constantes **`Memcached::HASH_*`**.
    Cada algoritmo de hash tem suas vantagens e desvantagens. Use o padrão
    se o algoritmo não for conhecido ou se não tiver importância.

    Tipo: [int](language.types.integer.md), padrão: **`Memcached::HASH_DEFAULT`**

**`Memcached::HASH_DEFAULT`**
:   O algoritmo de hash de chave de item padrão (Jenkins one-at-a-time).

**`Memcached::HASH_MD5`**
:   Algoritmo de hash de chave de item MD5.

**`Memcached::HASH_CRC`**
:   Algoritmo de hash de chave de item CRC.

**`Memcached::HASH_FNV1_64`**
:   Algoritmo de hash de chave de item FNV1\_64.

**`Memcached::HASH_FNV1A_64`**
:   Algoritmo de hash de chave de item FNV1\_64A.

**`Memcached::HASH_FNV1_32`**
:   Algoritmo de hash de chave de item FNV1\_32.

**`Memcached::HASH_FNV1A_32`**
:   Algoritmo de hash de chave de item FNV1\_32A.

**`Memcached::HASH_HSIEH`**
:   Algoritmo de hash de chave de item Hsieh.

**`Memcached::HASH_MURMUR`**
:   Algoritmo de hash de chave de item de Murmur.

**`Memcached::OPT_DISTRIBUTION`**
:   Especifica o método de distribuição de chaves de itens para os servidores.
    Os métodos atualmente suportados são módulo e hashing consistente. O hash consistente
    oferece melhor distribuição e permite que os servidores sejam adicionados ao cluster
    com perdas mínimas de cache.

    Tipo: [int](language.types.integer.md), padrão: **`Memcached::DISTRIBUTION_MODULA`**.

**`Memcached::DISTRIBUTION_MODULA`**
:   Algoritmo de distribuição de chaves baseado em módulo.

**`Memcached::DISTRIBUTION_CONSISTENT`**
:   Algoritmo consistente de distribuição de chaves de hash (baseado em libketama).

**`Memcached::DISTRIBUTION_VIRTUAL_BUCKET`**
:   Algoritmo de distribuição de chave de hash do Virtual Bucket (também chamado de vbucket).

**`Memcached::OPT_LIBKETAMA_COMPATIBLE`**
:   Ativa ou desativa a compatibilidade com comportamento semelhante ao libketama.
    Quando ativado, o algoritmo de hash da chave do item é definido como MD5 e a distribuição
    é definida para ser uma distribuição de hash consistente ponderada. Isso é útil porque
    outros clientes baseados em libketama (Python, Ruby, etc.) com a mesma
    configuração de servidor poderão acessar as chaves de forma transparente.

    > **Nota**:
    >
    > É altamente recomendável ativar esta opção se você deseja usar
    > hashing consistente e pode ser ativado por padrão em versões
    > futuras.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_LIBKETAMA_HASH`**
:   Especifica o algoritmo de hash para mapeamento de host.

    Tipo: [int](language.types.integer.md).

**`Memcached::OPT_TCP_KEEPALIVE`**
:   Permite que o TCP continue ativo.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_BUFFER_WRITES`**
:   Ativa ou desativa a E/S em buffer. Habilitar a E/S em buffer
    faz com que os comandos de armazenamento sejam "armazenados" em vez de serem enviados.
    Qualquer ação que recupera dados faz com que esse buffer seja enviado para a conexão remota.
    Sair da conexão ou encerrar a conexão também fará com que os dados armazenados em buffer
    sejam enviados para a conexão remota.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_BINARY_PROTOCOL`**
:   Habilita o uso do protocolo binário. Observe que não se pode
    alternar esta opção em uma conexão aberta.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_NO_BLOCK`**
:   Ativa ou desativa a E/S assíncrona. Este é o transporte mais
    rápido disponível para funções de armazenamento.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_NOREPLY`**
:   Habilita ou desabilita ignorar o resultado dos comandos de armazenamento
    (set, add, replace, append, prepend, delete, increment, decrement, etc.).
    Comandos de armazenamento serão enviados sem perder tempo esperando por uma
    resposta (não haveria resposta).
    Comandos de recuperação como [Memcached::get()](memcached.get.md) não são afetados por esta configuração.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_TCP_NODELAY`**
:   Ativa ou desativa o recurso sem atraso para conectar sockets
    (pode ser mais rápido em alguns ambientes).

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_SOCKET_SEND_SIZE`**
:   O buffer máximo de envio de socket em bytes.

    Tipo: [int](language.types.integer.md), padrão: varia de acordo com a plataforma/kernel
    configuração.

**`Memcached::OPT_SOCKET_RECV_SIZE`**
:   O buffer máximo de recebimento de socket em bytes.

    Tipo: [int](language.types.integer.md), padrão: varia de acordo com a plataforma/kernel
    configuração.

**`Memcached::OPT_CONNECT_TIMEOUT`**
:   No modo não bloqueante, define o valor do limite de tempo durante a conexão
    do socket, em milissegundos.

    Tipo: [int](language.types.integer.md), padrão: `1000`.

**`Memcached::OPT_RETRY_TIMEOUT`**
:   A quantidade de tempo, em segundos, para aguardar até tentar novamente uma
    tentativa de conexão com falha.

    Tipo: [int](language.types.integer.md), padrão: `2`.

**`Memcached::OPT_DEAD_TIMEOUT`**
:   A quantidade de tempo, em segundos, de espera até a nova tentativa de servidores inativos.
    `0` significa que não há nova tentativa.

    Tipo: [int](language.types.integer.md), padrão: `0`.

**`Memcached::OPT_SEND_TIMEOUT`**
:   Tempo limite de envio do socket, em microssegundos. Nos casos em que
    não seja possível usar E/S não bloqueante, isso permitirá que haja limites
    de tempo no envio de dados.

    Tipo: [int](language.types.integer.md), padrão: `0`.

**`Memcached::OPT_RECV_TIMEOUT`**
:   Tempo limite de leitura do Socket, em microssegundos. Nos casos em que
    não seja possível usar E/S não bloqueante, isso permitirá que haja limites
    de tempo na leitura de dados.

    Tipo: [int](language.types.integer.md), padrão: `0`.

**`Memcached::OPT_POLL_TIMEOUT`**
:   Tempo limite para polling de conexão, em milissegundos.

    Tipo: [int](language.types.integer.md), padrão: `1000`.

**`Memcached::OPT_CACHE_LOOKUPS`**
:   Ativa ou desativa o cache de pesquisas de DNS.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_SERVER_FAILURE_LIMIT`**
:   Especifica o limite de falha para tentativas de conexão do servidor. O
    servidor será removido após tantas falhas contínuas de
    conexão.

    Tipo: [int](language.types.integer.md), padrão: `5`.

**`Memcached::OPT_SERVER_TIMEOUT_LIMIT`**
:   Especifica o limite de tempo limite para tentativas de conexão do servidor.
    O servidor será removido após este número de expirações contínuas de limite de tempo de conexão.

    Tipo: [int](language.types.integer.md), padrão: `0`.

**`Memcached::OPT_AUTO_EJECT_HOSTS`**
:   Remove servidores desabilitados da lista. Usar junto com
    **`Memcached::OPT_SERVER_FAILURE_LIMIT`** e
    **`Memcached::OPT_SERVER_TIMEOUT_LIMIT`**.

    > **Nota**:
    >
    > Esta opção é substituída por
    > **`Memcached::OPT_REMOVE_FAILED_SERVERS`**.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_VERIFY_KEY`**
:   Permite a verificação de chaves pelo memcached.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_USE_UDP`**
:   Usa UDP em vez de TCP.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_NUMBER_OF_REPLICAS`**
:   Armazena tantas réplicas de cada item em servidores diferentes.

    Tipo: [int](language.types.integer.md), padrão: `0`.

**`Memcached::OPT_RANDOMIZE_REPLICA_READS`**
:   Randomiza o servidor de leitura de réplica.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::OPT_REMOVE_FAILED_SERVERS`**
:   Remove servidores desabilitados da lista. Usar junto com
    **`Memcached::OPT_SERVER_FAILURE_LIMIT`** e
    **`Memcached::OPT_SERVER_TIMEOUT_LIMIT`**.

    Tipo: [bool](language.types.boolean.md), padrão: **`false`**.

**`Memcached::HAVE_IGBINARY`**
:   Indica se o suporte ao serializador igbinary está disponível.

    Tipo: [bool](language.types.boolean.md).

**`Memcached::HAVE_JSON`**
:   Indica se o suporte ao serializador JSON está disponível.

    Tipo: [bool](language.types.boolean.md).

**`Memcached::HAVE_MSGPACK`**
:   Indica se o suporte ao serializador msgpack está disponível.

    Tipo: [bool](language.types.boolean.md).

    Disponível a partir do Memcached 3.0.0.

**`Memcached::HAVE_ZSTD`**
:   Indica se o suporte à compactação ZSTD está disponível.

    Tipo: [bool](language.types.boolean.md).

    Disponível a partir do Memcached 3.3.0.

**`Memcached::HAVE_ENCODING`**
:   Indica se a criptografia de dados usando
    [Memcached::setEncodingKey()](memcached.setencodingkey.md) é suportada.

    Tipo: [bool](language.types.boolean.md).

    Disponível a partir do Memcached 3.1.0.

**`Memcached::HAVE_SESSION`**
:   Tipo: [bool](language.types.boolean.md).

    Disponível a partir do Memcached 3.0.0.

**`Memcached::HAVE_SASL`**
:   Tipo: [bool](language.types.boolean.md).

    Disponível a partir do Memcached 3.0.0.

**`Memcached::GET_EXTENDED`**
:   Uma opção para [Memcached::get()](memcached.get.md), [Memcached::getMulti()](memcached.getmulti.md) e
    [Memcached::getMultiByKey()](memcached.getmultibykey.md) para garantir que os valores de token CAS
    também sejam retornados.

    Disponível a partir do Memcached 3.0.0.

**`Memcached::GET_PRESERVE_ORDER`**
:   Uma opção para [Memcached::getMulti()](memcached.getmulti.md) e
    [Memcached::getMultiByKey()](memcached.getmultibykey.md) para garantir que as chaves sejam
    retornadas na mesma ordem em que foram solicitadas. Chaves não existentes
    obtêm um valor padrão de **`null`**.

**`Memcached::RES_SUCCESS`**
:   A operação foi bem-sucedida.

**`Memcached::RES_FAILURE`**
:   A operação falhou de alguma forma.

**`Memcached::RES_HOST_LOOKUP_FAILURE`**
:   Falha na pesquisa de DNS.

**`Memcached::RES_UNKNOWN_READ_FAILURE`**
:   Falha ao ler os dados da rede.

**`Memcached::RES_PROTOCOL_ERROR`**
:   Comando inválido no protocolo memcached.

**`Memcached::RES_CLIENT_ERROR`**
:   Erro no lado do cliente.

**`Memcached::RES_SERVER_ERROR`**
:   Erro no lado do servidor.

**`Memcached::RES_WRITE_FAILURE`**
:   Falha ao gravar dados de rede.

**`Memcached::RES_DATA_EXISTS`**
:   Falha ao comparar e trocar: o item que você está tentando armazenar foi
    modificado desde a última vez que foi obtido.

**`Memcached::RES_NOTSTORED`**
:   O item não foi armazenado: mas não devido a um erro. Isso normalmente
    significa que a condição para um comando "add" ou "replace" não foi
    atendida ou que o item está em uma fila de exclusão.

**`Memcached::RES_NOTFOUND`**
:   O item com estas chaves não foi encontrado (com operação "get" ou
    operações "cas").

**`Memcached::RES_PARTIAL_READ`**
:   Erro parcial de leitura de dados de rede.

**`Memcached::RES_SOME_ERRORS`**
:   Alguns erros ocorreram durante a obtenção múltipla.

**`Memcached::RES_NO_SERVERS`**
:   A lista de servidores está vazia.

**`Memcached::RES_END`**
:   Fim do conjunto de resultados.

**`Memcached::RES_ERRNO`**
:   Erro no sistema.

**`Memcached::RES_BUFFERED`**
:   A operação foi armazenada em buffer.

**`Memcached::RES_TIMEOUT`**
:   A operação expirou.

**`Memcached::RES_BAD_KEY_PROVIDED`**
:   Chave ruim.

**`Memcached::RES_STORED`**
:   Item armazenado.

**`Memcached::RES_DELETED`**
:   Item excluído.

**`Memcached::RES_STAT`**
:   Estatísticas.

**`Memcached::RES_ITEM`**
:   Item.

**`Memcached::RES_NOT_SUPPORTED`**
:   Não suportado.

**`Memcached::RES_FETCH_NOTFINISHED`**
:   A busca não foi concluída.

**`Memcached::RES_SERVER_MARKED_DEAD`**
:   Servidor marcado como morto.

**`Memcached::RES_UNKNOWN_STAT_KEY`**
:   Chave estatística desconhecida.

**`Memcached::RES_INVALID_HOST_PROTOCOL`**
:   Protocolo de host inválido.

**`Memcached::RES_MEMORY_ALLOCATION_FAILURE`**
:   Falha na alocação de memória.

**`Memcached::RES_CONNECTION_SOCKET_CREATE_FAILURE`**
:   Falha ao criar soquete de rede.

**`Memcached::RES_PAYLOAD_FAILURE`**
:   Falha de dados: não foi possível compactar/descompactar ou serializar/desserializar o valor.

**`Memcached::RES_AUTH_PROBLEM`**
:   Disponível a partir do Memcached 3.0.0.

**`Memcached::RES_AUTH_FAILURE`**
:   Disponível a partir do Memcached 3.0.0.

**`Memcached::RES_AUTH_CONTINUE`**
:   Disponível a partir do Memcached 3.0.0.

**`Memcached::RES_E2BIG`**
:   Disponível a partir do Memcached 3.0.0.

**`Memcached::RES_KEY_TOO_BIG`**
:   Disponível a partir do Memcached 3.0.0.

**`Memcached::RES_SERVER_TEMPORARILY_DISABLED`**
:   Disponível a partir do Memcached 3.0.0.

**`Memcached::RES_SERVER_MEMORY_ALLOCATION_FAILURE`**
:   Disponível a partir do Memcached 3.0.0.

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
