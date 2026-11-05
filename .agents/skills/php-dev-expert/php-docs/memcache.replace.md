# Substitui o valor do item existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.replace.php

---

# Memcache::replace

# memcache\_replace

(PECL memcache >= 0.2.0)

Memcache::replace -- memcache\_replace — Substitui o valor do item existente

### Descrição

function **Memcache::replace**(  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

function **memcache\_replace**(  
    [Memcache](class.memcache.md) `$memcache`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

**Memcache::replace()** deve ser usado para substituir o valor de
item existente por `key`. Caso o item com tal
chave não exista, **Memcache::replace()** retorna
**`false`**. Para o resto, **Memcache::replace()** se comporta
similarmente a [Memcache::set()](memcache.set.md).

### Parâmetros

`key`
:   A chave que será associada ao item.

`var`
:   A variável a ser armazenada. Strings e inteiros são armazenados diretamente, outros
    tipos são armazenados serializados.

`flag`
:   Use **`MEMCACHE_COMPRESSED`** para armazenar o item
    compactado (usa zlib).

`expire`
:   Tempo de expiração do item. Se for igual a zero, o item nunca
    irá expirar. Você também pode usar o timestamp Unix ou um número de segundos iniciando
    do horário atual, mas no último caso o número de segundos não pode
    exceder 2592000 (30 dias).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::replace()****

```
<?php

$memcache_obj = memcache_connect('memcache_host', 11211);

/* API procedural */
memcache_replace($memcache_obj, "chave_teste", "variável qualquer", false, 30);

/* API orientada a objeto */
$memcache_obj->replace("chave_teste", "variável qualquer", false, 30);

?>
```

### Veja também

- [Memcache::set()](memcache.set.md) - Armazena dados no servidor
- [Memcache::add()](memcache.add.md) - Adiciona um item ao servidor

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
