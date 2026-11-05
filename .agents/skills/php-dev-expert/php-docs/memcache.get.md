# Recupera item do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.get.php

---

# Memcache::get

# memcache\_get

(PECL memcache >= 0.2.0)

Memcache::get -- memcache\_get — Recupera item do servidor

### Descrição

function **Memcache::get**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `&$flags` = ?): [string](language.types.string.md)

function **Memcache::get**([array](language.types.array.md) `$keys`, [array](language.types.array.md) `&$flags` = ?): [array](language.types.array.md)

function **memcache\_get**([Memcache](class.memcache.md) `$memcache`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `&$flags` = ?): [string](language.types.string.md)

function **memcache\_get**([Memcache](class.memcache.md) `$memcache`, [array](language.types.array.md) `$keys`, [array](language.types.array.md) `&$flags` = ?): [array](language.types.array.md)

**Memcache::get()** retorna dados armazenados anteriormente de
um item, se a chave informada em `key` existir no servidor no
momento.

Pode ser passado um array de chaves para **Memcache::get()** para obter
array de valores. O array resultante conterá apenas pares de chave-valor encontrados.

### Parâmetros

`key`
:   A chave ou conjunto de chaves a serem buscadas.

`flags`
:   Se presente, os sinalizadores buscados junto com os valores serão gravados neste parâmetro. Esses
    sinalizadores são os mesmos que os fornecidos para, por exemplo, [Memcache::set()](memcache.set.md).
    O byte menos significativo do inteiro é reservado para uso interno pecl/memcache (por exemplo, para indicar
    o status de compressão e serialização).

### Valor Retornado

Retorna o valor associado à chave informada em `key` ou
um array de pares de chave-valor encontrados quando `key` é um [array](language.types.array.md).
Retorna **`false`** em caso de falha, `key` não é encontrado ou
`key` é um [array](language.types.array.md) vazio.

### Examples

**Exemplo #1 Exemplo de **Memcache::get()****

```
<?php

/* API procedural */
$memcache_obj = memcache_connect('memcache_host', 11211);
$var = memcache_get($memcache_obj, 'some_key');

/* API orientada a objeto */
$memcache_obj = new Memcache;
$memcache_obj->connect('memcache_host', 11211);
$var = $memcache_obj->get('some_key');

/*
Também pode ser usado um array de chaves como parâmetro.
Se tal item não foi encontrado no servidor, o array de resultados
simplesmente não incluirá tal chave.
*/

/* API procedural */
$memcache_obj = memcache_connect('memcache_host', 11211);
$var = memcache_get($memcache_obj, Array('some_key', 'another_key'));

/* API orientada a objeto */
$memcache_obj = new Memcache;
$memcache_obj->connect('memcache_host', 11211);
$var = $memcache_obj->get(Array('some_key', 'second_key'));

?>
```

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
