# Verifica se a instância foi criada recentemente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.ispristine.php

---

# Memcached::isPristine

(PECL memcached >= 2.0.0)

Memcached::isPristine — Verifica se a instância foi criada recentemente

### Descrição

public function **Memcached::isPristine**(): [bool](language.types.boolean.md)

**Memcached::isPristine()** verifica se a instância do Memcache
foi criada recentemente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a instância foi criada recentemente, **`false`** caso contrário.

### Veja também

- [Memcached::isPersistent()](memcached.ispersistent.md) - Verifica se uma conexão persistente com o memcache está sendo usada

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
