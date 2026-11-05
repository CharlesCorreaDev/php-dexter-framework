# Compara e troca um item em um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.casbykey.php

---

# Memcached::casByKey

(PECL memcached >= 0.1.0)

Memcached::casByKey — Compara e troca um item em um servidor específico

### Descrição

public function **Memcached::casByKey**(  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$cas_token`,  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

**Memcached::casByKey()** é funcionalmente equivalente a
[Memcached::cas()](memcached.cas.md), exceto que a forma livre
`server_key` pode ser usada para mapear a
`key` para um servidor específico. Isso é útil se você
precisar manter várias chaves relacionadas em um determinado servidor.

### Parâmetros

`cas_token`
:   Valor exclusivo associado ao item existente. Gerado por memcache.

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`key`
:   A chave sob a qual armazenar o valor.

`value`
:   O valor a ser armazenado.

`expiration`
:   O tempo de expiração padrão é 0. Consulte [Tempos de Expiração](memcached.expiration.md) para mais informações.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
O [Memcached::getResultCode()](memcached.getresultcode.md) retornará
**`Memcached::RES_DATA_EXISTS`** se o item que você
está tentando armazenar tiver sido modificado desde a última vez que você o buscou.

### Veja também

- [Memcached::cas()](memcached.cas.md) - Compara e troca um item

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
