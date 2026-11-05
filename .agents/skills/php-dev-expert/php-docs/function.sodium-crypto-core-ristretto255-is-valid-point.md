# Determina se um ponto está na curva ristretto255

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-core-ristretto255-is-valid-point.php

---

# sodium\_crypto\_core\_ristretto255\_is\_valid\_point

(PHP 8 >= 8.1.0)

sodium\_crypto\_core\_ristretto255\_is\_valid\_point — Determina se um ponto está na curva ristretto255

### Descrição

function **sodium\_crypto\_core\_ristretto255\_is\_valid\_point**([string](language.types.string.md) `$s`): [bool](language.types.boolean.md)

Determina se um ponto na curva ristretto255,
na forma canônica, está no subgrupo principal e se o ponto não possui uma ordem pequena.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`s`
:   Um ponto de curva elíptica.

### Valor Retornado

Retorna **`true`** se `s` estiver na curva ristretto255, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_core\_ristretto255\_is\_valid\_point()****

```
<?php

$foo = sodium_crypto_core_ristretto255_scalar_random();
$bar = sodium_crypto_scalarmult_ristretto255_base($foo);

var_dump(sodium_crypto_core_ristretto255_is_valid_point($bar));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [sodium\_crypto\_core\_ristretto255\_scalar\_random()](function.sodium-crypto-core-ristretto255-scalar-random.md) - Gera uma chave aleatória
- [sodium\_crypto\_scalarmult\_ristretto255\_base()](function.sodium-crypto-scalarmult-ristretto255-base.md) - Calcula a chave pública a partir de uma chave secreta

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
