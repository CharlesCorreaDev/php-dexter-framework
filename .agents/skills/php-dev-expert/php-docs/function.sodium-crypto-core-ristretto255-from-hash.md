# Mapeia um vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-core-ristretto255-from-hash.php

---

# sodium\_crypto\_core\_ristretto255\_from\_hash

(PHP 8 >= 8.1.0)

sodium\_crypto\_core\_ristretto255\_from\_hash — Mapeia um vetor

### Descrição

function **sodium\_crypto\_core\_ristretto255\_from\_hash**([string](language.types.string.md) `$s`): [string](language.types.string.md)

Mapeia um vetor de 64 bytes `s` a um elemento de grupo.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`s`
:   Um vetor de 64 bytes.

### Valor Retornado

Retorna uma [string](language.types.string.md) de 32 bytes aleatória.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_core\_ristretto255\_from\_hash()****

```
<?php

$hashes = sodium_hex2bin(
    '5d1be09e3d0c82fc538112490e35701979d99e06ca3e2b5b54bffe8b4dc772c1' .
    '4d98b696a1bbfb5ca32c436cc61c16563790306c79eaca7705668b47dffe5bb6'
);
var_dump(sodium_bin2hex(sodium_crypto_core_ristretto255_from_hash($hashes)));
?>
```

O exemplo acima produzirá:

```
string(64) "3066f82a1a747d45120d1740f14358531a8f04bbffe6a819f86dfe50f44a0a46"
```

### Veja também

- [sodium\_hex2bin()](function.sodium-hex2bin.md) - Decodifica uma string binária codificada em hexadecimal
- [sodium\_bin2hex()](function.sodium-bin2hex.md) - Codifica para hexadecimal
- **sodium\_crypto\_core\_ristretto255\_from\_hash()**

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
