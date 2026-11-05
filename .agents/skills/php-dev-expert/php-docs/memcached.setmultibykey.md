# Armazena vários itens em um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.setmultibykey.php

---

# Memcached::setMultiByKey

(PECL memcached >= 0.1.0)

Memcached::setMultiByKey — Armazena vários itens em um servidor específico

### Descrição

public function **Memcached::setMultiByKey**([string](language.types.string.md) `$server_key`, [array](language.types.array.md) `$items`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

**Memcached::setMultiByKey()** é funcionalmente equivalente a
[Memcached::setMulti()](memcached.setmulti.md), exceto que a forma livre
`server_key` pode ser usada para mapear as chaves de
`items` para um servidor específico. Isso é útil se você
precisar manter várias chaves relacionadas em um determinado servidor.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`items`
:   Um array de pares chave/valor para armazenar no servidor.

`expiration`
:   O tempo de expiração padrão é 0. Consulte [Tempos de Expiração](memcached.expiration.md) para mais informações.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Veja também

- [Memcached::setMulti()](memcached.setmulti.md) - Armazena vários itens
- [Memcached::set()](memcached.set.md) - Armazena um item

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
