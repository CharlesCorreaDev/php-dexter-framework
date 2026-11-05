# Retorna o status do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.getserverstatus.php

---

# Memcache::getServerStatus

# memcache\_get\_server\_status

(PECL memcache >= 2.1.0)

Memcache::getServerStatus -- memcache\_get\_server\_status — Retorna o status do servidor

### Descrição

function **Memcache::getServerStatus**([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = 11211): [int](language.types.integer.md)

function **memcache\_get\_server\_status**([Memcache](class.memcache.md) `$memcache`, [string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = 11211): [int](language.types.integer.md)

**Memcache::getServerStatus()** retorna o status
online/offline dos servidores.

> **Nota**:
>
> Esta função foi adicionada ao Memcache versão 2.1.0.

### Parâmetros

`host`
:   Aponta para o host onde o memcached está escutando conexões.

`port`
:   Aponta para a porta onde o memcached está escutando conexões.

### Valor Retornado

Retorna o status do servidor. 0 se o servidor falhou, diferente de zero caso contrário.

### Examples

**Exemplo #1 Exemplo de **Memcache::getServerStatus()****

```
<?php

/* API orientada a objeto */
$memcache = new Memcache;
$memcache->addServer('memcache_host', 11211);
echo $memcache->getServerStatus('memcache_host', 11211);

/* API procedural */
$memcache = memcache_connect('memcache_host', 11211);
echo memcache_get_server_status($memcache, 'memcache_host', 11211);

?>
```

### Veja também

- [Memcache::addServer()](memcache.addserver.md) - Adiciona um servidor memcached ao pool de conexão
- [Memcache::setServerParams()](memcache.setserverparams.md) - Altera os parâmetros e o status do servidor em tempo de execução

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
