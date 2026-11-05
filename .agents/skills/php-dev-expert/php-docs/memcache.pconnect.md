# Abre conexão persistente do servidor memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.pconnect.php

---

# Memcache::pconnect

# memcache\_pconnect

(PECL memcache >= 0.4.0)

Memcache::pconnect -- memcache\_pconnect — Abre conexão persistente do servidor memcached

### Descrição

function **Memcache::pconnect**([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = ?, [int](language.types.integer.md) `$timeout` = ?): [bool](language.types.boolean.md)

function **Memcache::pconnect**([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = ?, [int](language.types.integer.md) `$timeout` = ?): [Memcache](class.memcache.md)

**Memcache::pconnect()** é similar a
[Memcache::connect()](memcache.connect.md) com a diferença de que
a conexão que ele estabelece é persistente.
Esta conexão não é fechada após o fim da execução do script e
pela função [Memcache::close()](memcache.close.md).

### Parâmetros

`host`
:   Aponta para o host onde o memcached está escutando conexões. Este parâmetro
    também pode especificar outros transportes como `unix:///path/to/memcached.sock`
    para usar soquetes de domínio UNIX, neste caso `port` também deve
    ser definido como `0`.

`port`
:   Aponta para a porta onde o memcached está escutando conexões. Defina este
    parâmetro como `0` ao usar soquetes de domínio UNIX.

`timeout`
:   Valor em segundos que será usado para conectar ao daemon. Muito
    cuidado antes de alterar o valor padrão de 1 segundo - podem ser perdidas todas
    as vantagens do cache se a conexão for muito lenta.

### Valor Retornado

Retorna um objeto Memcache ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::pconnect()****

```
<?php

/* API procedural */
$memcache_obj = memcache_pconnect('memcache_host', 11211);

/* API orientada a objeto */

$memcache_obj = new Memcache;
$memcache_obj->pconnect('memcache_host', 11211);

?>
```

### Veja também

- [Memcache::connect()](memcache.connect.md) - Abre a conexão do servidor memcached

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
