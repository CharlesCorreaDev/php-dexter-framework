# Armazena dados no servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.set.php

---

# Memcache::set

# memcache\_set

(PECL memcache >= 0.2.0)

Memcache::set -- memcache\_set — Armazena dados no servidor

### Descrição

function **Memcache::set**(  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

function **memcache\_set**(  
    [Memcache](class.memcache.md) `$memcache`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$var`,  
    [int](language.types.integer.md) `$flag` = ?,  
    [int](language.types.integer.md) `$expire` = ?  
): [bool](language.types.boolean.md)

**Memcache::set()** armazena um item
`var` com a chave `key` no
servidor memcached. O parâmetro `expire` é o tempo de expiração
em segundos. Se for 0, o item nunca expira (mas o servidor memcached
não garante que este item seja armazenado o tempo todo, ele pode ser excluído
do cache para dar lugar a outros itens).
A constante **`MEMCACHE_COMPRESSED`** pode ser usada como
valor `flag` se a intenção for usar a compactação em tempo real
(usa zlib).
> **Nota**:
>
> Lembre-se de que variáveis ​​de recursos (por exemplo, descritores de arquivo e conexão)
> não podem ser armazenadas no cache, porque não podem ser adequadamente
> representadas no estado serializado.

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

**Exemplo #1 Exemplo de **Memcache::set()****

```
<?php
/* API procedural */

/* Conecta ao servidor memcached */
$memcache_obj = memcache_connect('memcache_host', 11211);

/*
Define o valor do item com chave 'chave_var'
usando 0 como o valor do parâmetro 'flag', compressão não é usada,
tempo de expiração é de 30 segundos
*/
memcache_set($memcache_obj, 'chave_var', 'variável qualquer', 0, 30);

echo memcache_get($memcache_obj, 'chave_var');

?>
```

**Exemplo #2 Exemplo de **Memcache::set()****

```
<?php
/* API orientada a objeto */

$memcache_obj = new Memcache;

/* Conecta ao servidor memcached */
$memcache_obj->connect('memcache_host', 11211);

/*
Define o valor do item com chave 'chave_var', usand compressão em tempo real,
tempo de expiração é de 50 segundos
*/
$memcache_obj->set('chave_var', 'alguma variável realmente grande', MEMCACHE_COMPRESSED, 50);

echo $memcache_obj->get('chave_var');

?>
```

### Veja também

- [Memcache::add()](memcache.add.md) - Adiciona um item ao servidor
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
