# Gera uma chave aleatória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-core-ristretto255-random.php

---

# sodium\_crypto\_core\_ristretto255\_random

(PHP 8 >= 8.1.0)

sodium\_crypto\_core\_ristretto255\_random — Gera uma chave aleatória

### Descrição

function **sodium\_crypto\_core\_ristretto255\_random**(): [string](language.types.string.md)

Gera uma chave aleatória.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) de 32 bytes aleatória.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_core\_ristretto255\_random()****

```
<?php

$foo = sodium_crypto_core_ristretto255_random();
$bar = sodium_crypto_core_ristretto255_random();

$value = sodium_crypto_core_ristretto255_add($foo, $bar);
$value = sodium_crypto_core_ristretto255_sub($value, $bar);

var_dump(hash_equals($foo, $value));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [sodium\_crypto\_core\_ristretto255\_add()](function.sodium-crypto-core-ristretto255-add.md) - Adiciona um elemento
- [sodium\_crypto\_core\_ristretto255\_sub()](function.sodium-crypto-core-ristretto255-sub.md) - Subtrai um elemento

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
