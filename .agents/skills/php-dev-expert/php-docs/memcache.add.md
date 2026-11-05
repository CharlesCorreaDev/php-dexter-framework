# Adiciona um item ao servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.add.php

---

# Memcache::add

# memcache\_add

(PECL memcache >= 0.2.0)

Memcache::add -- memcache\_add — Adiciona um item ao servidor

### Descrição

function **Memcache::add**(  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

function **memcache\_add**(  
    [Memcache](class.memcache.md) `$memcache`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

**Memcache::add()** armazena a variável
`var` com a chave `key` somente se tal
chave ainda não existir no servidor.

### Parâmetros

`key`
:   A chave que será associada ao item.

`var`
:   A variável a ser armazenada. Strings e inteiros são armazenados como estão, outros
    tipos são armazenados serializados.

`flag`
:   Use **`MEMCACHE_COMPRESSED`** para armazenar o item
    compactado (usa zlib).

`expire`
:   Tempo de expiração do item. Se for igual a zero, o item nunca
    irá expirar. Pode-se também usar o timestamp Unix ou um número de segundos começando
    no horário atual, mas no último caso o número de segundos não pode
    exceder 2592000 (30 dias).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Retorna **`false`** se tal chave já existir. Para o resto
**Memcache::add()** se comporta similarmente a
[Memcache::set()](memcache.set.md).

### Examples

**Exemplo #1 Exemplo de **Memcache::add()****

```
<?php

$memcache_obj = memcache_connect("localhost", 11211);

/* API procedural */
memcache_add($memcache_obj, 'chave_var', 'variável de teste', false, 30);

/* API orientada a objeto */
$memcache_obj->add('chave_var', 'variável de teste', false, 30);

?>
```

### Veja também

- [Memcache::set()](memcache.set.md) - Armazena dados no servidor
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
