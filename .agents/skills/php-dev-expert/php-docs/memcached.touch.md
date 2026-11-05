# Define uma nova expiração para um item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.touch.php

---

# Memcached::touch

(PECL memcached >= 2.0.0)

Memcached::touch — Define uma nova expiração para um item

### Descrição

public function **Memcached::touch**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

**Memcached::touch()**define um novo valor de expiração na chave fornecida.

### Parâmetros

`key`
:   A chave sob a qual armazenar o valor.

`expiration`
:   O tempo de expiração padrão é 0. Consulte [Tempos de Expiração](memcached.expiration.md) para mais informações.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Veja também

- [Memcached::touchByKey()](memcached.touchbykey.md) - Define uma nova expiração para um item em um servidor específico

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
