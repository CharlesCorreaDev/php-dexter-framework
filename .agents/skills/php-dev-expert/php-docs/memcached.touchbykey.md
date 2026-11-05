# Define uma nova expiração para um item em um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.touchbykey.php

---

# Memcached::touchByKey

(PECL memcached >= 2.0.0)

Memcached::touchByKey — Define uma nova expiração para um item em um servidor específico

### Descrição

public function **Memcached::touchByKey**([string](language.types.string.md) `$server_key`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

**Memcached::touchByKey()** é funcionalmente equivalente a
[Memcached::touch()](memcached.touch.md), exceto que a forma livre
`server_key` pode ser usada para mapear a
`key` para um servidor específico.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`key`
:   A chave sob a qual armazenar o valor.

`expiration`
:   O tempo de expiração padrão é 0. Consulte [Tempos de Expiração](memcached.expiration.md) para mais informações.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Veja também

- [Memcached::touch()](memcached.touch.md) - Define uma nova expiração para um item

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
