# Exclui itens do cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.delete.php

---

# Yac::delete

(PECL yac >= 1.0.0)

Yac::delete — Exclui itens do cache

### Descrição

public function **Yac::delete**([string](language.types.string.md)|[array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$ttl` = ?): [bool](language.types.boolean.md)

Exclui itens do cache.

### Parâmetros

`keys`
:   Chave string, ou array com múltiplas chaves a serem removidas.

`ttl`
:   Tempo em segundos para marcar os itens como inválidos.

### Valor Retornado

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
