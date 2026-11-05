# Limpa todos os itens existentes no servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.flush.php

---

# Memcache::flush

# memcache\_flush

(PECL memcache >= 1.0.0)

Memcache::flush -- memcache\_flush — Limpa todos os itens existentes no servidor

### Descrição

function **Memcache::flush**(): [bool](language.types.boolean.md)

function **memcache\_flush**([Memcache](class.memcache.md) `$memcache`): [bool](language.types.boolean.md)

**Memcache::flush()** invalida imediatamente todos
os itens existentes. **Memcache::flush()** não
libera nenhum recurso, ele apenas marca todos os itens como expirados, então
a memória ocupada será substituída por novos itens.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::flush()****

```
<?php

/* API procedural */
$memcache_obj = memcache_connect('memcache_host', 11211);

memcache_flush($memcache_obj);

/* API orientada a objeto */

$memcache_obj = new Memcache;
$memcache_obj->connect('memcache_host', 11211);

$memcache_obj->flush();

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
