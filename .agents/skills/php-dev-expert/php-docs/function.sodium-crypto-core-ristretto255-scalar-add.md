# Adiciona um valor escalar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-core-ristretto255-scalar-add.php

---

# sodium\_crypto\_core\_ristretto255\_scalar\_add

(PHP 8 >= 8.1.0)

sodium\_crypto\_core\_ristretto255\_scalar\_add — Adiciona um valor escalar

### Descrição

function **sodium\_crypto\_core\_ristretto255\_scalar\_add**([string](language.types.string.md) `$x`, [string](language.types.string.md) `$y`): [string](language.types.string.md)

Adiciona um elemento `y` a `x`.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`x`
:   Escalar, representando a coordenada X.

`y`
:   Escalar, representando a coordenada Y.

### Valor Retornado

Retorna uma [string](language.types.string.md) de 32 bytes aleatória.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_core\_ristretto255\_scalar\_add()****

```
<?php

$foo = sodium_crypto_core_ristretto255_scalar_random();
$bar = sodium_crypto_core_ristretto255_scalar_random();

$value = sodium_crypto_core_ristretto255_scalar_add($foo, $bar);
$value = sodium_crypto_core_ristretto255_scalar_sub($value, $bar);

var_dump(hash_equals($foo, $value));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [sodium\_crypto\_core\_ristretto255\_scalar\_random()](function.sodium-crypto-core-ristretto255-scalar-random.md) - Gera uma chave aleatória
- [sodium\_crypto\_core\_ristretto255\_scalar\_sub()](function.sodium-crypto-core-ristretto255-scalar-sub.md) - Subtrai um valor escalar

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
