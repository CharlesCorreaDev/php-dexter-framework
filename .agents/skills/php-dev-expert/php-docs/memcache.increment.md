# Incrementa o valor do item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.increment.php

---

# Memcache::increment

# memcache\_increment

(PECL memcache >= 0.2.0)

Memcache::increment -- memcache\_increment — Incrementa o valor do item

### Descrição

function **Memcache::increment**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value` = 1): [int](language.types.integer.md)|[false](language.types.singleton.md)

function **memcache\_increment**([Memcache](class.memcache.md) `$memcache`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value` = 1): [int](language.types.integer.md)|[false](language.types.singleton.md)

**Memcache::increment()** incrementa o valor de um item pelo
valor especificado em `value`. Se o item especificado por
`key` não for numérico e não puder ser convertido em um
número, ele mudará seu valor para `value`.
**Memcache::increment()** *não*
cria um item se ele ainda não existir.
> **Nota**:
>
> Não use **Memcache::increment()** com itens que foram
> armazenados compactados porque chamadas subsequentes para
> [Memcache::get()](memcache.get.md) falharão.

### Parâmetros

`key`
:   Chave do item a ser incrementado.

`value`
:   `value` representa o valor com o qual o item será incrementado.

### Valor Retornado

Retorna o novo valor do item em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::increment()****

```
<?php

/* API procedural */
$memcache_obj = memcache_connect('memcache_host', 11211);
/* incrementa contador em 2 */
$current_value = memcache_increment($memcache_obj, 'contador', 2);

/* API orientada a objeto */
$memcache_obj = new Memcache;
$memcache_obj->connect('memcache_host', 11211);
/* incrementa contador em 3 */
$current_value = $memcache_obj->increment('contador', 3);

?>
```

### Veja também

- [Memcache::decrement()](memcache.decrement.md) - Decrementa o valor do item
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
