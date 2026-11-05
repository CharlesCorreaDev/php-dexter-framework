# Solicita vários itens de um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getdelayedbykey.php

---

# Memcached::getDelayedByKey

(PECL memcached >= 0.1.0)

Memcached::getDelayedByKey — Solicita vários itens de um servidor específico

### Descrição

public function **Memcached::getDelayedByKey**(  
    [string](language.types.string.md) `$server_key`,  
    [array](language.types.array.md) `$keys`,  
    [bool](language.types.boolean.md) `$with_cas` = **`false`**,  
    [?](language.types.null.md)[callable](language.types.callable.md) `$value_cb` = **`null`**  
): [bool](language.types.boolean.md)

**Memcached::getDelayedByKey()** é funcionalmente equivalente a
[Memcached::getDelayed()](memcached.getdelayed.md), exceto que a forma livre
`server_key` pode ser usada para mapear as
`keys` para um servidor específico.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`keys`
:   Array de chaves a ser recuperado.

`with_cas`
:   Se os valores de token CAS também devem ser solicitados.

`value_cb`
:   O resultado de callback ou **`null`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Veja também

- [Memcached::getDelayed()](memcached.getdelayed.md) - Solicita vários itens
- [Memcached::fetch()](memcached.fetch.md) - Busca o próximo resultado
- [Memcached::fetchAll()](memcached.fetchall.md) - Busca todos os resultados restantes

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
