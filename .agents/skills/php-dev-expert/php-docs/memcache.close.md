# Fecha a conexão do servidor memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.close.php

---

# Memcache::close

# memcache\_close

(PECL memcache >= 0.4.0)

Memcache::close -- memcache\_close — Fecha a conexão do servidor memcached

### Descrição

function **Memcache::close**(): [bool](language.types.boolean.md)

function **memcache\_close**([Memcache](class.memcache.md) `$memcache`): [bool](language.types.boolean.md)

**Memcache::close()** fecha a conexão com o servidor
memcached. Esta função não fecha conexões persistentes, que são
fechadas somente durante o desligamento/reinicialização do servidor web.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::close()****

```
<?php

/* API procedural */
$memcache_obj = memcache_connect('memcache_host', 11211);
/*
faz algo aqui...
*/
memcache_close($memcache_obj);

/* API orientada a objeto */
$memcache_obj = new Memcache;
$memcache_obj->connect('memcache_host', 11211);
/*
faz algo aqui...
*/
$memcache_obj->close();

?>
```

### Veja também

- [Memcache::connect()](memcache.connect.md) - Abre a conexão do servidor memcached
- [Memcache::pconnect()](memcache.pconnect.md) - Abre conexão persistente do servidor memcached

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
