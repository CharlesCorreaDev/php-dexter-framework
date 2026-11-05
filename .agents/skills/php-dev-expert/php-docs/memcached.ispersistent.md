# Verifica se uma conexão persistente com o memcache está sendo usada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.ispersistent.php

---

# Memcached::isPersistent

(PECL memcached >= 2.0.0)

Memcached::isPersistent — Verifica se uma conexão persistente com o memcache está sendo usada

### Descrição

public function **Memcached::isPersistent**(): [bool](language.types.boolean.md)

**Memcached::isPersistent()** verifica se as conexões com os servidores
memcache são conexões persistentes.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a instância do Memcache usar uma conexão persistente, **`false`** caso contrário.

### Veja também

- [Memcached::isPristine()](memcached.ispristine.md) - Verifica se a instância foi criada recentemente

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
