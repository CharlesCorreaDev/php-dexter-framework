# Adiciona um servidor memcached ao pool de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.addserver.php

---

# Memcache::addServer

# memcache\_add\_server

(PECL memcache >= 2.0.0)

Memcache::addServer -- memcache\_add\_server — Adiciona um servidor memcached ao pool de conexão

### Descrição

function **Memcache::addServer**(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = 11211,  
    [bool](language.types.boolean.md) `$persistent` = ?,  
    [int](language.types.integer.md) `$weight` = ?,  
    [int](language.types.integer.md) `$timeout` = ?,  
    [int](language.types.integer.md) `$retry_interval` = ?,  
    [bool](language.types.boolean.md) `$status` = ?,  
    [callable](language.types.callable.md) `$failure_callback` = ?,  
    [int](language.types.integer.md) `$timeoutms` = ?  
): [bool](language.types.boolean.md)

function **memcache\_add\_server**(  
    [Memcache](class.memcache.md) `$memcache`,  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = 11211,  
    [bool](language.types.boolean.md) `$persistent` = ?,  
    [int](language.types.integer.md) `$weight` = ?,  
    [int](language.types.integer.md) `$timeout` = ?,  
    [int](language.types.integer.md) `$retry_interval` = ?,  
    [bool](language.types.boolean.md) `$status` = ?,  
    [callable](language.types.callable.md) `$failure_callback` = ?,  
    [int](language.types.integer.md) `$timeoutms` = ?  
): [bool](language.types.boolean.md)

**Memcache::addServer()** adiciona um servidor ao pool de conexão.

Ao usar este método (ao contrário de [Memcache::connect()](memcache.connect.md) e
[Memcache::pconnect()](memcache.pconnect.md)) a conexão de rede não é estabelecida
até que seja realmente necessária. Portanto, não há sobrecarga na adição de um grande número de servidores
ao pool, mesmo que eles não sejam todos usados.

O failover pode ocorrer em qualquer estágio em qualquer um dos métodos, desde que outros
servidores estejam disponíveis, a solicitação não será notada pelo usuário. Qualquer tipo de
erro de nível de soquete ou servidor Memcached (exceto falta de memória) pode disparar
o failover. Erros normais do cliente, como adicionar uma chave existente, não
dispararão um failover.

> **Nota**:
>
> Esta função foi adicionada ao Memcache versão 2.0.0.

### Parâmetros

`host`
:   Aponta para o host onde o memcached está escutando conexões. Este parâmetro
    também pode especificar outros transportes como `unix:///path/to/memcached.sock`
    para usar soquetes de domínio UNIX, neste caso `port` também deve
    ser definido como `0`.

`port`
:   Aponta para a porta onde o memcached está escutando conexões.
    Defina este
    parâmetro como `0` ao usar soquetes de domínio UNIX.

    Observe: `port` assume como padrão
    [memcache.default\_port](memcache.ini.md#ini.memcache.default-port)
    se não for especificado. Por esse motivo, é sensato especificar a porta
    explicitamente nessa chamada de método.

`persistent`
:   Controla o uso de uma conexão persistente. Padrão é **`true`**.

`weight`
:   Número de buckets a serem criados para este servidor que, por sua vez, controlam sua
    probabilidade de ser selecionado. A probabilidade é relativa ao
    peso total de todos os servidores.

`timeout`
:   Valor em segundos que será usado para conectar ao daemon. Pense
    duas vezes antes de alterar o valor padrão de 1 segundo - podem ser perdidas todas
    as vantagens do cache se a conexão for muito lenta.

`retry_interval`
:   Controla a frequência com que um servidor com falha será tentado novamente, o valor padrão
    é 15 segundos. Definir este parâmetro como -1 desabilita a repetição automática.
    Nem este nem o parâmetro `persistent` têm qualquer
    efeito quando a extensão é carregada dinamicamente via [dl()](function.dl.md).

    Cada estrutura de conexão com falha tem seu próprio tempo limite e antes que ela expire
    a estrutura será ignorada ao selecionar backends para atender a uma solicitação. Uma vez
    expirada, a conexão será reconectada com sucesso ou marcada como falhada
    por mais `retry_interval` segundos. O efeito
    típico é que cada filho do servidor web tentará novamente a conexão a cada
    `retry_interval` segundos ao atender uma página.

`status`
:   Controla se o servidor deve ser sinalizado como online. Definir este parâmetro
    como **`false`** e `retry_interval` como -1 permite que um
    servidor com falha seja mantido no pool para não afetar o algoritmo de distribuição de chaves.
    As solicitações para este servidor então farão failover ou falharão imediatamente
    dependendo da configuração `memcache.allow_failover`.
    Padrão é **`true`**, significando que o servidor deve ser considerado online.

`failure_callback`
:   Permite que o usuário especifique uma função de retorno para ser executada ao encontrar um
    erro. A função de retorno é executada antes da tentativa de failover. A função leva
    dois parâmetros, o nome do host e a porta do servidor com falha.

`timeoutms`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::addServer()****

```
<?php

/* API orientada a objeto */

$memcache = new Memcache;
$memcache->addServer('memcache_host', 11211);
$memcache->addServer('memcache_host2', 11211);

/* API procedural */

$memcache_obj = memcache_connect('memcache_host', 11211);
memcache_add_server($memcache_obj, 'memcache_host2', 11211);

?>
```

### Notas

**Aviso**

Quando o `port` não é especificado, este método assume como padrão o
conjunto de valores da diretiva INI
[memcache.default\_port](memcache.ini.md#ini.memcache.default-port) do PHP.
Se este valor foi alterado em outro lugar na aplicação, isso pode levar a
resultados inesperados: por este motivo, é sensato sempre especificar a porta
explicitamente nesta chamada de método.

### Veja também

- [Memcache::connect()](memcache.connect.md) - Abre a conexão do servidor memcached
- [Memcache::pconnect()](memcache.pconnect.md) - Abre conexão persistente do servidor memcached
- [Memcache::close()](memcache.close.md) - Fecha a conexão do servidor memcached
- [Memcache::setServerParams()](memcache.setserverparams.md) - Altera os parâmetros e o status do servidor em tempo de execução
- [Memcache::getServerStatus()](memcache.getserverstatus.md) - Retorna o status do servidor

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
