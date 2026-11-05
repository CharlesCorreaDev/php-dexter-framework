# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Memcached**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [memcached.sess\_locking](memcached.configuration.md#ini.memcached.sess-locking) | On | **`INI_ALL`** | Disponível a partir do memcached 0.1.0. |
| [memcached.sess\_consistent\_hash](memcached.configuration.md#ini.memcached.sess-consistent-hash) | On | **`INI_ALL`** | Disponível a partir do memcached 2.1.0. O valor padrão é `On` a partir do memcached 3.0.0. |
| [memcached.sess\_binary](memcached.configuration.md#ini.memcached.sess-binary) | Off | **`INI_ALL`** | Disponível a partir do memcached 2.0.0. Substituído por `memcached.sess_binary_protocol` a partir do memcached 3.0.0. |
| [memcached.sess\_lock\_wait](memcached.configuration.md#ini.memcached.sess-lock-wait) | 150000 | **`INI_ALL`** | Disponível a partir do memcached 0.1.0. Removido a partir do memcached 3.0.0. |
| [memcached.sess\_prefix](memcached.configuration.md#ini.memcached.sess-prefix) | memc.sess.key. | **`INI_ALL`** | Disponível a partir do memcached 0.1.0. |
| [memcached.sess\_number\_of\_replicas](memcached.configuration.md#ini.memcached.sess-number-of-replicas) | 0 | **`INI_ALL`** | Disponível a partir do memcached 2.1.0. |
| [memcached.sess\_randomize\_replica\_read](memcached.configuration.md#ini.memcached.sess-randomize-replica-read) | Off | **`INI_ALL`** | Disponível a partir do memcached 2.1.0. |
| [memcached.sess\_remove\_failed](memcached.configuration.md#ini.memcached.sess-remove-failed) | On | **`INI_ALL`** | Disponível a partir do memcached 2.1.0. Substituído por `memcached.sess_remove_failed_servers` a partir do memcached 3.0.0. |
| [memcached.compression\_type](memcached.configuration.md#ini.memcached.compression-type) | fastlz | **`INI_ALL`** | Disponível a partir do memcached 0.1.0. |
| [memcached.compression\_factor](memcached.configuration.md#ini.memcached.compression-factor) | 1.3 | **`INI_ALL`** | Disponível a partir do memcached 0.1.0. |
| [memcached.compression\_threshold](memcached.configuration.md#ini.memcached.compression-threshold) | 2000 | **`INI_ALL`** | Disponível a partir do memcached 0.1.0. |
| [memcached.serializer](memcached.configuration.md#ini.memcached.serializer) | igbinary | **`INI_ALL`** | Disponível a partir do memcached 0.1.0. |
| [memcached.use\_sasl](memcached.configuration.md#ini.memcached.use-sasl) | Off | **`INI_ALL`** | Disponível a partir do memcached 2.2.0. Removido a partir do memcached 3.0.0. |
| [memcached.default\_binary\_protocol](memcached.configuration.md#ini.memcached.default-binary-protocol) | Off | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. |
| [memcached.default\_connect\_timeout](memcached.configuration.md#ini.memcached.default-connect-timeout) | 0 | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. |
| [memcached.default\_consistent\_hash](memcached.configuration.md#ini.memcached.default-consistent-hash) | Off | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. |
| [memcached.sess\_binary\_protocol](memcached.configuration.md#ini.memcached.sess-binary-protocol) | On | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. Substitui `memcached.sess_binary`. |
| [memcached.sess\_connect\_timeout](memcached.configuration.md#ini.memcached.sess-connect-timeout) | 1000 | **`INI_ALL`** | Disponível a partir do memcached 2.2.0. |
| [memcached.sess\_consistent\_hash\_type](memcached.configuration.md#ini.memcached.sess-consistent-hash-type) | ketama | **`INI_ALL`** | Disponível a partir do memcached 3.1.0. |
| [memcached.sess\_lock\_expire](memcached.configuration.md#ini.memcached.sess-lock-expire) | 0 | **`INI_ALL`** | Disponível a partir do memcached 2.2.0. |
| [memcached.sess\_lock\_retries](memcached.configuration.md#ini.memcached.sess-lock-retries) | 5 | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. |
| [memcached.sess\_lock\_wait\_max](memcached.configuration.md#ini.memcached.sess-lock-wait-max) | 150 | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. Valor padrão `150` a partir do memcached 3.1.0 (anteriormente `2000`). |
| [memcached.sess\_lock\_wait\_min](memcached.configuration.md#ini.memcached.sess-lock-wait-min) | 150 | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. Valor padrão `150` a partir do memcached 3.1.0 (anteriormente `1000`). |
| [memcached.sess\_persistent](memcached.configuration.md#ini.memcached.sess-persistent) | Off | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. |
| [memcached.sess\_remove\_failed\_servers](memcached.configuration.md#ini.memcached.sess-remove-failed-servers) | Off | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. Substitui `memcached.sess_remove_failed`. |
| [memcached.sess\_server\_failure\_limit](memcached.configuration.md#ini.memcached.sess-server-failure-limit) | 0 | **`INI_ALL`** | Disponível a partir do memcached 3.0.0. |
| [memcached.sess\_sasl\_password](memcached.configuration.md#ini.memcached.sess-sasl-password) | null | **`INI_ALL`** | Disponível a partir do memcached 2.2.0. |
| [memcached.sess\_sasl\_username](memcached.configuration.md#ini.memcached.sess-sasl-username) | null | **`INI_ALL`** | Disponível a partir do memcached 2.2.0. |
| [memcached.store\_retry\_count](memcached.configuration.md#ini.memcached.store-retry-count) | 0 | **`INI_ALL`** | Disponível a partir do memcached 2.2.0 O valor padrão é `0` no memcached 3.2.0 (anteriormente `2`). |

Aqui está uma breve explicação das
diretivas de configuração.

`memcached.sess_locking` [bool](language.types.boolean.md)
:   Usa travamento de sessão. Valores válidos: `On`, `Off`, o padrão é `On`.

`memcached.sess_consistent_hash` [bool](language.types.boolean.md)
:   Se definido como `On`, hashing consistente (libketama) é usado para manipulação de sessão.
    Quando hashing consistente é usado,
    pode-se adicionar ou remover nó(s) de cache sem atrapalhar muito as chaves existentes.
    O padrão é `On`.

`memcached.sess_binary` [bool](language.types.boolean.md)
:   Usa o modo binário de sessão memcached. As réplicas Libmemcached funcionam
    apenas se o modo binário estiver ativado. O padrão é `Off`.

`memcached.sess_lock_wait` [int](language.types.integer.md)
:   Tempo de espera de tentativa de travamento rotativo da sessão em microssegundos. Tenha cuidado
    ao definir esse valor. Os valores válidos são inteiros, onde `0` é interpretado
    como o valor padrão. Valores negativos resultam em um travamento reduzido para
    um travamento de tentativa. O padrão é `150000`.

`memcached.sess_prefix` [string](language.types.string.md)
:   Prefixo da chave de sessão Memcached. Os valores válidos são strings com menos de 219
    bytes de comprimento. O valor padrão é `memc.sess.key`.

`memcached.sess_number_of_replicas` [int](language.types.integer.md)
:   Grava dados em vários servidores memcached adicionais. Isso é "poor men's HA" (Alta Disponibilidade de pobre, em tradução livre), como libmemcached o chama.
    Se esse valor for positivo e `sess_remove_failed_servers` estiver ativado
    quando um servidor memcached falhar, a sessão continuará disponível a partir de uma réplica.
    No entanto, se o servidor de memcache com falha ficar disponível novamente, ele lerá a sessão
    a partir daí, que pode ter dados antigos ou nenhum dado.
    O padrão é `0`.

`memcached.sess_randomize_replica_read` [bool](language.types.boolean.md)
:   A réplica da sessão do Memcached é lida aleatoriamente.

`memcached.sess_remove_failed` [int](language.types.integer.md)
:   Permite que o servidor memcached com falha seja removido automaticamente.

`memcached.compression_type` [string](language.types.string.md)
:   Define o tipo de compactação, os valores válidos são: `fastlz`, `zlib`.
    O padrão é `fastlz`.

`memcached.compression_factor` [float](language.types.float.md)
:   Fator de compressão. Armazene o valor compactado somente se o fator de
    compactação (economia) exceder o limite definido. Armazene compactado se:
    `plain_len > comp_len * factor`. O valor padrão
    é `1.3` (23% de economia de espaço).

`memcached.compression_threshold` [int](language.types.integer.md)
:   O limite de compressão. Não compacta valores serializados abaixo desse limite.
    O padrão é `2000` bytes.

`memcached.serializer` [string](language.types.string.md)
:   Define o serializador padrão para novos objetos memcached. Os valores válidos
    são: `php`, `igbinary`, `json`,
    `json_array`, `msgpack`.

    json
    :   Codificação JSON PHP padrão. Este serializador é rápido e compacto, mas
        funciona apenas em dados codificados em UTF-8 e não implementa totalmente
        a serialização. Consulte a extensão JSON. Disponível a partir do memcached 0.2.0.

    json\_array
    :   Como `json`, mas decodifica em arrays. Disponível a partir do memcached 2.0.0.

    php
    :   O serializador PHP padrão.

    igbinary
    :   Um serializador binário. Disponível a partir do memcached 0.1.4.

    msgpack
    :   Um serializador binário multilíngue. Disponível a partir do memcached 2.2.0.

    O padrão é `igbinary` se disponível, depois `msgpack` se
    disponível, depois `php` em último caso.

`memcached.use_sasl` [bool](language.types.boolean.md)
:   Use autenticação SASL para conexões. Valores válidos: `On`, `Off`. O
    padrão é `Off`.

`memcached.default_binary_protocol` [bool](language.types.boolean.md)
:   Define o protocolo memcached padrão para novas conexões. (Para configurar o protocolo memcached para
    conexões usadas por sessões, use `memcached.sess_binary_protocol` no lugar.)
    Se definido como `On`, o protocolo binário memcached é usado por padrão.
    Se definido como `Off`, o protocolo de texto memcached é usado.
    O padrão é `Off`.

`memcached.default_connect_timeout` [int](language.types.integer.md)
:   Define o tempo limite de conexão memcached padrão para novas conexões.
    (Para configurar o tempo limite de conexão do memcached para sessões, use `memcached.sess_connect_timeout` no lugar.)
    No modo de não-bloqueio, isso altera o valor do tempo limite
    durante a conexão do socket em milissegundos.
    Especificar `-1` significa um tempo limite infinito.
    Especificar `0` significa usar o tempo limite de conexão padrão da biblioteca memcached.
    O padrão é `0`.

`memcached.default_consistent_hash` [bool](language.types.boolean.md)
:   Define o padrão para hash consistente para novas conexões.
    (Para configurar hashing consistente para conexões de sessão,
    use `memcached.sess_consistent_hash` no lugar.)
    Se definido como `On`, hashing consistente (libketama) é usado para
    manipulação de sessão. Quando hashing consistente é usado, pode-se adicionar ou remover nó(s) de cache
    sem bagunçar muito as chaves existentes. O padrão é `Off`.

`memcached.sess_binary_protocol` [bool](language.types.boolean.md)
:   Usa o protocolo binário memcached para sessões memcached em vez do protocolo de texto.
    As réplicas libmemcached funcionam apenas se o modo binário estiver ativado.
    No entanto, certos proxies (como twemproxy) funcionarão somente se o protocolo binário estiver desabilitado.
    O padrão é `On` a partir da libmemcached 1.0.18.
    Antes da libmemcached 1.0.18, padrão era `Off`.

    > **Nota**:
    >
    > Em versões mais antigas do php-memcached, essa configuração era chamada
    > de `memcached.sess_binary`.

`memcached.sess_connect_timeout` [int](language.types.integer.md)
:   Valor de tempo limite de conexão memcached.
    No modo de não-bloqueio, isso altera o valor do tempo
    limite durante a conexão do socket em milissegundos.
    Especificar `-1` significa um tempo limite infinito.

`memcached.sess_consistent_hash_type` [string](language.types.string.md)
:   Tipo de hash consistente da sessão Memcached.
    Se definido como `ketama`, hash consistente (libketama)
    é usado para manipulação de sessão.
    Se definido como `ketama_weighted`, hashing consistente ponderado (libketama)
    é usado para manipulação de sessão.
    O padrão é `ketama`.
    Antes do memcached 3.0, o padrão era `ketama_weighted`.

`memcached.sess_lock_expire` [int](language.types.integer.md)
:   O tempo, em segundos, antes que um bloqueio libere a si mesmo.
    Definir como `0` resulta no comportamento padrão,
    que é usar o `max_execution_time` do PHP.
    O padrão é `0`.

`memcached.sess_lock_retries` [int](language.types.integer.md)
:   O número de vezes para tentar travar novamente a trava de sessão, não incluindo a primeira tentativa.
    O padrão é `5`.

`memcached.sess_lock_wait_max` [int](language.types.integer.md)
:   O tempo máximo, em milissegundos, de espera entre tentativas de travamento de sessão.
    O padrão é `150`.

`memcached.sess_lock_wait_min` [int](language.types.integer.md)
:   O tempo mínimo, em milissegundos, de espera entre tentativas de travamento de sessão.
    Esse valor é dobrado em cada nova tentativa de travamento até que `memcached.sess_lock_wait_max` seja
    alcançado, após o qual qualquer nova tentativa levará
    `memcached.sess_lock_wait_max` segundos.
    O padrão é `150`.

`memcached.sess_persistent` [bool](language.types.boolean.md)
:   Se deve-se ou não reutilizar as conexões memcached correspondentes ao(s) valor(es)
    de `session.save_path` após o término da execução do script. Não use isso se
    certas configurações (por exemplo, configurações SASL, sess\_binary\_protocol) forem substituídas entre as requisições.
    O padrão é `Off`.

`memcached.sess_remove_failed_servers` [bool](language.types.boolean.md)
:   Permite que o servidor memcached com falha seja removido automaticamente.
    O padrão é `Off`.

    > **Nota**:
    >
    > Nas versões anteriores de memcached, essa configuração era chamada
    > de `memcached.sess_remove_failed`.

`memcached.sess_server_failure_limit` [int](language.types.integer.md)
:   Defina esse valor para permitir que o servidor seja removido após
    o número configurado de falhas de conexão contínuas.
    O padrão é `0`.

`memcached.sess_sasl_password` [string](language.types.string.md)
:   Senha SASL da sessão.
    O nome de usuário e a senha precisam ser definidos para que o SASL seja ativado.

`memcached.sess_sasl_username` [string](language.types.string.md)
:   Nome de usuário SASL da sessão.
    O nome de usuário e a senha precisam ser definidos para que o SASL seja ativado.

`memcached.store_retry_count` [int](language.types.integer.md)
:   A quantidade de tentativas para comandos de armazenamento com falha.
    Esse mecanismo permite transferência transparente para servidores secundários quando
    as operações set/increment/decrement/setMulti falham no
    servidor desejado em um ambiente multiservidor.
    O padrão é `2`.

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
