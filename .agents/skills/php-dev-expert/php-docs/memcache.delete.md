# Exclui item do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.delete.php

---

# Memcache::delete

# memcache\_delete

(PECL memcache >= 0.2.0)

Memcache::delete -- memcache\_delete — Exclui item do servidor

### Descrição

function **Memcache::delete**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$exptime` = 0): [bool](language.types.boolean.md)

function **memcache\_delete**([Memcache](class.memcache.md) `$memcache`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `$exptime` = 0): [bool](language.types.boolean.md)

**Memcache::delete()** exclui um item com a chave `key`.

### Parâmetros

`key`
:   A chave associada ao item a ser excluído.

`exptime`
:   Este parâmetro descontinuado não é suportado e tem como padrão `0` segundo.
    Não use este parâmetro.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL memcache 3.0.5 | O `exptime` foi descontinuado e não deve ser fornecido. Valores diferentes de `0` podem causar erros inesperados. |

### Examples

**Exemplo #1 Exemplo de **Memcache::delete()****

```
<?php

/* API procedural */
$memcache_obj = memcache_connect('memcache_host', 11211);

/* O item será excluído do servidor */
memcache_delete($memcache_obj, 'key_to_delete');

/* API orientada a objeto */
$memcache_obj = new Memcache;
$memcache_obj->connect('memcache_host', 11211);

$memcache_obj->delete('key_to_delete');

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
