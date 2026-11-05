# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.ini.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração do Memcache**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [memcache.allow\_failover](memcache.ini.md#ini.memcache.allow-failover) | "1" | **`INI_ALL`** | Disponível desde o memcache 2.0.2. |
| [memcache.max\_failover\_attempts](memcache.ini.md#ini.memcache.max-failover-attempts) | "20" | **`INI_ALL`** | Disponível desde o memcache 2.1.0. |
| [memcache.chunk\_size](memcache.ini.md#ini.memcache.chunk-size) | "8192" | **`INI_ALL`** | Disponível desde o memcache 2.0.2. |
| [memcache.default\_port](memcache.ini.md#ini.memcache.default-port) | "11211" | **`INI_ALL`** | Disponível desde o memcache 2.0.2. |
| [memcache.hash\_strategy](memcache.ini.md#ini.memcache.hash-strategy) | "standard" | **`INI_ALL`** | Disponível desde o memcache 2.2.0. |
| [memcache.hash\_function](memcache.ini.md#ini.memcache.hash-function) | "crc32" | **`INI_ALL`** | Disponível desde o memcache 2.2.0. |
| [memcache.protocol](memcache.ini.md#ini.memcache.protocol) | ascii | **`INI_ALL`** | Suportado desde o memcache 3.0.0 |
| [memcache.redundancy](memcache.ini.md#ini.memcache.redundancy) | 1 | **`INI_ALL`** | Suportado desde o memcache 3.0.0 |
| [memcache.session\_redundancy](memcache.ini.md#ini.memcache.session-redundancy) | 2 | **`INI_ALL`** | Suportado desde o memcache 3.0.0 |
| [memcache.compress\_threshold](memcache.ini.md#ini.memcache.compress-threshold) | 20000 | **`INI_ALL`** | Suportado desde o memcache 3.0.3 |
| [memcache.lock\_timeout](memcache.ini.md#ini.memcache.lock-timeout) | 15 | **`INI_ALL`** | Suportado desde o memcache 3.0.4 |

**Opções de Configuração de Sessão que Afetam o Comportamento do Memcache**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [session.save\_handler](memcache.ini.md#ini.memcache.save-handler) | "files" | **`INI_ALL`** | Suportado desde o memcache 2.1.2 |
| [session.save\_path](memcache.ini.md#ini.memcache.save-path) | "" | **`INI_ALL`** | Suportado desde o memcache 2.1.2 |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`memcache.allow_failover` [bool](language.types.boolean.md)
:   Se deve falhar transparentemente para outros servidores em
    caso de erros.

`memcache.max_failover_attempts` [int](language.types.integer.md)
:   Define quantos servidores tentar ao definir e obter dados.
    Usado apenas em conjunto com memcache.allow\_failover.

`memcache.chunk_size` [int](language.types.integer.md)
:   Os dados serão transferidos em pedaços desse tamanho, definir
    o valor menor requer mais gravações de rede. Experimente
    aumentar esse valor para 32768 se notar lentidões
    inexplicáveis.

`memcache.default_port` [string](language.types.string.md)
:   O número da porta TCP padrão a ser usado ao se conectar a
    o servidor memcached se nenhuma outra porta for especificada.

`memcache.hash_strategy` [string](language.types.string.md)
:   Controla qual estratégia usar ao mapear chaves para servidores. Defina este valor para
    `consistent` para habilitar o hashing consistente que permite servidores
    serem adicionados ou removidos do pool sem causar remapeamento de chaves.
    Definir este valor para `standard` resulta na antiga estratégia
    sendo usada.

`memcache.hash_function` [string](language.types.string.md)
:   Controla qual função de hash aplicar ao mapear chaves para servidores, `crc32`
    usa o hash CRC32 padrão enquanto `fnv` usa FNV-1a.

`memcache.protocol` [string](language.types.string.md)

`memcache.redundancy` [int](language.types.integer.md)

`memcache.session_redundancy` [int](language.types.integer.md)

`memcache.compress_threshold` [int](language.types.integer.md)

`memcache.lock_timeout` [int](language.types.integer.md)

`session.save_handler` [string](language.types.string.md)
:   Use o memcache como manipulador de sessão definindo este valor para `memcache`.

`session.save_path` [string](language.types.string.md)
:   Define uma lista separada por vírgulas de URLs do servidor a serem usadas para o armazenamento de sessão,
    por exemplo, `"tcp://host1:11211, tcp://host2:11211"`.

    Cada URL pode conter parâmetros que são aplicados a esse servidor, eles são os mesmos
    que para o método [Memcache::addServer()](memcache.addserver.md). Por exemplo,
    `"tcp://host1:11211?persistent=1&weight=1&timeout=1&retry_interval=15"`

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
