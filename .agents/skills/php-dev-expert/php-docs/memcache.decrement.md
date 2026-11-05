# Decrementa o valor do item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.decrement.php

---

# Memcache::decrement

# memcache\_decrement

(PECL memcache >= 0.2.0)

Memcache::decrement -- memcache\_decrement — Decrementa o valor do item

### Descrição

function **Memcache::decrement**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value` = 1): [int](language.types.integer.md)|[false](language.types.singleton.md)

function **memcache\_decrement**([Memcache](class.memcache.md) `$memcache`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value` = 1): [int](language.types.integer.md)|[false](language.types.singleton.md)

**Memcache::decrement()** decrementa o valor do
item por `value`. Similarmente a
[Memcache::increment()](memcache.increment.md), o valor atual do item será
convertido para numérico e depois disso `value`
é subtraído.
> **Nota**:
>
> O valor do novo item não será menor que zero.

> **Nota**:
>
> Não use **Memcache::decrement()** com item que foi
> armazenado compactado porque a chamada subsequente para
> [Memcache::get()](memcache.get.md) falhará.

**Memcache::decrement()** *não*
cria um item se ele não existir.

### Parâmetros

`key`
:   A chave do item a ser decrementado.

`value`
:   `value` é o valor a ser substraído do item.

### Valor Retornado

Retorna o novo valor do item em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::decrement()****

```
<?php

/* API procedural */
$memcache_obj = memcache_connect('memcache_host', 11211);
/* diminui o item em 2 */
$new_value = memcache_decrement($memcache_obj, 'test_item', 2);

/* API orientada a objeto */
$memcache_obj = new Memcache;
$memcache_obj->connect('memcache_host', 11211);
/* diminui o item em 3 */
$new_value = $memcache_obj->decrement('test_item', 3);
?>
```

### Veja também

- [Memcache::increment()](memcache.increment.md) - Incrementa o valor do item
- [Memcache::replace()](memcache.replace.md) - Substitui o valor do item existente

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
