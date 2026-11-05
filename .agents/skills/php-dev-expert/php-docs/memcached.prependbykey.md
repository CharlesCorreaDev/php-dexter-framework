# Anexa dados a um item existente em um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.prependbykey.php

---

# Memcached::prependByKey

(PECL memcached >= 0.1.0)

Memcached::prependByKey — Anexa dados a um item existente em um servidor específico

### Descrição

public function **Memcached::prependByKey**([string](language.types.string.md) `$server_key`, [string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [?](language.types.null.md)[bool](language.types.boolean.md)

**Memcached::prependByKey()** é funcionalmente equivalente a
[Memcached::prepend()](memcached.prepend.md), exceto que a forma livre
`server_key` pode ser usada para mapear a
`key` para um servidor específico.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`key`
:   A chave do item para anexar os dados.

`value`
:   A string a ser anexada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Retorna **`null`** quando a compressão está ativada.

### Erros/Exceções

Retorna **`null`** e gera um **`E_WARNING`** quando a
compressão está habilitada.

### Veja também

- [Memcached::prepend()](memcached.prepend.md) - Anexa dados a um item existente
- [Memcached::append()](memcached.append.md) - Anexa dados a um item existente

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
