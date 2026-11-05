# Define a chave de criptografia AES para dados no Memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.setencodingkey.php

---

# Memcached::setEncodingKey

(PECL memcached >= 3.1.0)

Memcached::setEncodingKey — Define a chave de criptografia AES para dados no Memcached

### Descrição

public function **Memcached::setEncodingKey**([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

Este método define a chave de criptografia/descriptografia para dados escritos e lidos no Memcached.

### Parâmetros

`key`
:   A chave AES.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [Memcached::get()](memcached.get.md) - Recupera um item
- [Memcached::add()](memcached.add.md) - Adiciona um item em uma nova key
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
