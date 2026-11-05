# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcache.constants.php

---

# Constantes predefinidas

**Constantes do Memcache**

| Nome | Descrição |
| --- | --- |
| **`MEMCACHE_COMPRESSED`** ([int](language.types.integer.md)) | Usado para ativar a compressão de dados sob demanda com [Memcache::set()](memcache.set.md), [Memcache::add()](memcache.add.md) e [Memcache::replace()](memcache.replace.md). |
| **`MEMCACHE_HAVE_SESSION`** ([int](language.types.integer.md)) | 1 se este manipulador de sessão Memcache estiver disponível, 0 caso contrário. |
| **`MEMCACHE_USER1`** ([int](language.types.integer.md)) | Usado para ativar a sinalização de aplicação definida pelo usuário com [Memcache::set()](memcache.set.md), [Memcache::add()](memcache.add.md) e [Memcache::replace()](memcache.replace.md). |
| **`MEMCACHE_USER2`** ([int](language.types.integer.md)) | Usado para ativar a sinalização de aplicação definida pelo usuário com [Memcache::set()](memcache.set.md), [Memcache::add()](memcache.add.md) e [Memcache::replace()](memcache.replace.md). |
| **`MEMCACHE_USER3`** ([int](language.types.integer.md)) | Usado para ativar a sinalização de aplicação definida pelo usuário com [Memcache::set()](memcache.set.md), [Memcache::add()](memcache.add.md) e [Memcache::replace()](memcache.replace.md). |
| **`MEMCACHE_USER4`** ([int](language.types.integer.md)) | Usado para ativar a sinalização de aplicação definida pelo usuário com [Memcache::set()](memcache.set.md), [Memcache::add()](memcache.add.md) e [Memcache::replace()](memcache.replace.md). |

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
