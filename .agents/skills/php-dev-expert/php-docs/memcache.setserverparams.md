# Altera os parâmetros e o status do servidor em tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.setserverparams.php

---

# Memcache::setServerParams

# memcache\_set\_server\_params

(PECL memcache >= 2.1.0)

Memcache::setServerParams -- memcache\_set\_server\_params — Altera os parâmetros e o status do servidor em tempo de execução

### Descrição

function **Memcache::setServerParams**(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = 11211,  
    [int](language.types.integer.md) `$timeout` = ?,  
    [int](language.types.integer.md) `$retry_interval` = **`false`**,  
    [bool](language.types.boolean.md) `$status` = ?,  
    [callable](language.types.callable.md) `$failure_callback` = ?  
): [bool](language.types.boolean.md)

function **memcache\_set\_server\_params**(  
    [Memcache](class.memcache.md) `$memcache`,  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = 11211,  
    [int](language.types.integer.md) `$timeout` = ?,  
    [int](language.types.integer.md) `$retry_interval` = **`false`**,  
    [bool](language.types.boolean.md) `$status` = ?,  
    [callable](language.types.callable.md) `$failure_callback` = ?  
): [bool](language.types.boolean.md)

**Memcache::setServerParams()** altera os parâmetros do servidor em tempo de execução.

> **Nota**:
>
> Esta função foi adicionada ao Memcache versão 2.1.0.

### Parâmetros

`host`
:   Aponta para o host onde o memcached está escutando conexões.

`port`
:   Aponta para a porta onde o memcached está escutando conexões.

`timeout`
:   Valor em segundos que será usado para conectar ao daemon. Cuidado
    ao alterar o valor padrão de 1 segundo - podem ser perdidas todas
    as vantagens do cache se a conexão for muito lenta.

`retry_interval`
:   Controla a frequência com que um servidor com falha será tentado novamente, o valor padrão
    é 15 segundos. Definir este parâmetro como -1 desabilita a repetição automática.
    Nem este nem o parâmetro `persistent` têm qualquer
    efeito quando a extensão é carregada dinamicamente via [dl()](function.dl.md).

`status`
:   Controla se o servidor deve ser sinalizado como online. Definir este parâmetro
    como **`false`** e `retry_interval` como -1 permite que um
    servidor com falha seja mantido no pool para não afetar o algoritmo de distribuição de chaves.
    As solicitações para este servidor então farão failover ou falharão imediatamente
    dependendo da configuração `memcache.allow_failover`.
    Padrão é **`true`**, que significa servidor online.

`failure_callback`
:   Permite que o usuário especifique uma função de retorno para ser executada ao encontrar um
    erro. A função de retorno é executada antes da tentativa de failover. A função leva
    dois parâmetros, o nome do host e a porta do servidor com falha.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::setServerParams()****

```
<?php

function _callback_memcache_failure($host, $port) {
    print "memcache '$host:$port' falhou";
}

/* API orientada a objeto */

$memcache = new Memcache;

// Adiciona o servidor no modo offline
$memcache->addServer('memcache_host', 11211, false, 1, 1, -1, false);

// Traz o servidor de volta online
$memcache->setServerParams('memcache_host', 11211, 1, 15, true, '_callback_memcache_failure');

/* API procedural */

$memcache_obj = memcache_connect('memcache_host', 11211);
memcache_set_server_params($memcache_obj, 'memcache_host', 11211, 1, 15, true, '_callback_memcache_failure');

?>
```

### Veja também

- [Memcache::addServer()](memcache.addserver.md) - Adiciona um servidor memcached ao pool de conexão
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
