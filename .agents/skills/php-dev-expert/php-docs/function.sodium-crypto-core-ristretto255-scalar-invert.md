# Inverte um valor escalar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-core-ristretto255-scalar-invert.php

---

# sodium\_crypto\_core\_ristretto255\_scalar\_invert

(PHP 8 >= 8.1.0)

sodium\_crypto\_core\_ristretto255\_scalar\_invert — Inverte um valor escalar

### Descrição

function **sodium\_crypto\_core\_ristretto255\_scalar\_invert**([string](language.types.string.md) `$s`): [string](language.types.string.md)

Inverte um valor escalar.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`s`
:   Valor escalar.

### Valor Retornado

Retorna uma [string](language.types.string.md) de 32 bytes aleatória.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_core\_ristretto255\_scalar\_invert()****

```
<?php

$foo = sodium_crypto_core_ristretto255_scalar_random();

$inverted = sodium_crypto_core_ristretto255_scalar_invert($foo);
$reInverted = sodium_crypto_core_ristretto255_scalar_invert($inverted);

var_dump(hash_equals($foo, $reInverted));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [sodium\_crypto\_core\_ristretto255\_scalar\_random()](function.sodium-crypto-core-ristretto255-scalar-random.md) - Gera uma chave aleatória

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
