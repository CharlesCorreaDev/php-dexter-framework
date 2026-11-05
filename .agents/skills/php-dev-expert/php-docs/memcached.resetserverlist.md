# Limpa todos os servidores da lista de servidores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.resetserverlist.php

---

# Memcached::resetServerList

(PECL memcached >= 2.0.0)

Memcached::resetServerList — Limpa todos os servidores da lista de servidores

### Descrição

public function **Memcached::resetServerList**(): [bool](language.types.boolean.md)

**Memcached::resetserverlist()** remove todos os
servidores memcache da lista de servidores conhecidos, redefinindo-a para vazio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [Memcached::addServer()](memcached.addserver.md) - Adiciona um servidor ao pool de servidores
- [Memcached::addServers()](memcached.addservers.md) - Adiciona múltiplos servidores ao pool de servidores

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
