# Armazena em cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.add.php

---

# Yac::add

(PECL yac >= 1.0.0)

Yac::add — Armazena em cache

### Descrição

public function **Yac::add**([string](language.types.string.md) `$keys`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$ttl` = 0): [bool](language.types.boolean.md)

public function **Yac::add**([array](language.types.array.md) `$key_vals`): [bool](language.types.boolean.md)

Adiciona um item ao cache.

### Parâmetros

`keys`
:   [string](language.types.string.md) de chaves.

`value`
:   Valor, todos os tipos do PHP podem ser armazenados, exceto [resource](language.types.resource.md).

`ttl`
:   Tempo de vida.

### Valor Retornado

[bool](language.types.boolean.md), **`true`** em caso de sucesso, ou **`false`** em caso de falha.
> **Nota**:
>
> **Yac::add()** pode falhar se uma trava CAS não puder ser obtida,
> portanto, se for necessário que o valor seja armazenado adequadamente, pode-se escrever um codigo como este:
>
> **Exemplo #1 Garantindo que um item é armazenado**
>
> ```
> while(!$yac->set("chave", "valor"));
> ```

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
