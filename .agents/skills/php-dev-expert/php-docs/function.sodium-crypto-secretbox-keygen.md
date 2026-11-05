# Gera chave aleatória para sodium_crypto_secretbox

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-secretbox-keygen.php

---

# sodium\_crypto\_secretbox\_keygen

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_secretbox\_keygen — Gera chave aleatória para sodium\_crypto\_secretbox

### Descrição

function **sodium\_crypto\_secretbox\_keygen**(): [string](language.types.string.md)

Gerar uma chave para uso com [sodium\_crypto\_secretbox()](function.sodium-crypto-secretbox.md) e [sodium\_crypto\_secretbox\_open()](function.sodium-crypto-secretbox-open.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a sequência gerada de bytes aleatórios criptograficamente seguros.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_secretbox\_keygen()****

```
<?php
$key = sodium_crypto_secretbox_keygen();
var_dump( sodium_bin2hex( $key ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(64) "88bd1dc51ec81984f3ddc5a8f59a3d95b647e2da3e879f1b9ceb0abd89e7286c"
```

**Exemplo #2
Comparando **sodium\_crypto\_secretbox\_keygen()**
com [random\_bytes()](function.random-bytes.md)**

```
<?php
$key = sodium_crypto_secretbox_keygen();
$bytes = random_bytes( SODIUM_CRYPTO_SECRETBOX_KEYBYTES );
var_dump( mb_strlen( $key, '8bit' ) === mb_strlen( $bytes, '8bit' ) );
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [sodium\_bin2hex()](function.sodium-bin2hex.md) - Codifica para hexadecimal
- [random\_bytes()](function.random-bytes.md) - Obtém bytes aleatórios criptograficamente seguros

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
