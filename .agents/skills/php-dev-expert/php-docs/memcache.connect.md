# Abre a conexão do servidor memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.connect.php

---

# Memcache::connect

# memcache\_connect

(PECL memcache >= 0.2.0)

Memcache::connect -- memcache\_connect — Abre a conexão do servidor memcached

### Descrição

function **Memcache::connect**([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = ?, [int](language.types.integer.md) `$timeout` = ?): [bool](language.types.boolean.md)

function **memcache\_connect**([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port` = ?, [int](language.types.integer.md) `$timeout` = ?): [Memcache](class.memcache.md)

**Memcache::connect()** estabelece uma conexão com o
servidor memcached.
A conexão, que foi aberta usando
**Memcache::connect()** será fechada automaticamente no
fim da execução do script. Pode-se também fechá-la com
[Memcache::close()](memcache.close.md).

### Parâmetros

`host`
:   Aponta para o host onde o memcached está escutando conexões. Este parâmetro
    também pode especificar outros transportes como `unix:///path/to/memcached.sock`
    para usar soquetes de domínio UNIX, neste caso `port` também deve
    ser definido como `0`.

`port`
:   Aponta para a porta onde o memcached está escutando conexões. Defina este
    parâmetro como `0` ao usar sockets de domínio UNIX.

    Observe: `port` assume como padrão
    [memcache.default\_port](memcache.ini.md#ini.memcache.default-port)
    se não for especificado. Por esse motivo, é sensato especificar a porta
    explicitamente nessa chamada de método.

`timeout`
:   Valor em segundos que será usado para conectar ao daemon. Pense
    duas vezes antes de alterar o valor padrão de 1 segundo - pode-se perder todas
    as vantagens do cache se a conexão for muito lenta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::connect()****

```
<?php

/* API procedural */

$memcache_obj = memcache_connect('memcache_host', 11211);

/* API orientada a objeto */

$memcache = new Memcache;
$memcache->connect('memcache_host', 11211);

?>
```

### Notas

**Aviso**

Quando o `port` não é especificado, este método assume como padrão o
conjunto de valores da diretiva INI
[memcache.default\_port](memcache.ini.md#ini.memcache.default-port) do PHP.
Se este valor foi alterado em outro lugar no seu aplicativo, isso pode levar a
resultados inesperados: por este motivo, é sensato sempre especificar a porta
explicitamente nesta chamada de método.

### Veja também

- [Memcache::pconnect()](memcache.pconnect.md) - Abre conexão persistente do servidor memcached
- [Memcache::close()](memcache.close.md) - Fecha a conexão do servidor memcached

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
