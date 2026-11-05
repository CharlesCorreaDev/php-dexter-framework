# Retorna a versão do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.getversion.php

---

# Memcache::getVersion

# memcache\_get\_version

(PECL memcache >= 0.2.0)

Memcache::getVersion -- memcache\_get\_version — Retorna a versão do servidor

### Descrição

function **Memcache::getVersion**(): [string](language.types.string.md)|[false](language.types.singleton.md)

function **memcache\_get\_version**([Memcache](class.memcache.md) `$memcache`): [string](language.types.string.md)|[false](language.types.singleton.md)

**Memcache::getVersion()** retorna uma string com o número da versão
do servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string com a versão do servidor ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcache::getVersion()****

```
<?php

/* API orientada a objeto */
$memcache = new Memcache;
$memcache->connect('memcache_host', 11211);
echo $memcache->getVersion();

/* API procedural */
$memcache = memcache_connect('memcache_host', 11211);
echo memcache_get_version($memcache);

?>
```

### Veja também

- [Memcache::getExtendedStats()](memcache.getextendedstats.md) - Obtém estatísticas de todos os servidores no pool
- [Memcache::getStats()](memcache.getstats.md) - Obtém estatísticas do servidor

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
