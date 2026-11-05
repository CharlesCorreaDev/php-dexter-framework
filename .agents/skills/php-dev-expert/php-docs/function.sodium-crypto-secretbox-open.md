# Descriptografia de chave compartilhada autenticada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-secretbox-open.php

---

# sodium\_crypto\_secretbox\_open

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_secretbox\_open — Descriptografia de chave compartilhada autenticada

### Descrição

function **sodium\_crypto\_secretbox\_open**([string](language.types.string.md) `$ciphertext`, [string](language.types.string.md) `$nonce`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)|[false](language.types.singleton.md)

Descriptografa uma mensagem criptografada com uma chave simétrica (compartilhada).

### Parâmetros

`ciphertext`
:   Precisa estar no formato fornecido por [sodium\_crypto\_secretbox()](function.sodium-crypto-secretbox.md)
    (texto cifrado e tag, concatenados).

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 24 bytes de comprimento.
    Este é um limite grande o suficiente para ser gerado aleatoriamente (por exemplo, [random\_bytes()](function.random-bytes.md)).

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

A string descriptografada em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

- Se `nonce` tiver um comprimento de bytes diferente de
  [**`SODIUM_CRYPTO_SECRETBOX_NONCEBYTES`**](sodium.constants.md#constant.sodium-crypto-secretbox-noncebytes)
  (24 bytes), uma [SodiumException](class.sodiumexception.md) será lançada.
- Se `key` tiver um comprimento de bytes diferente de
  [**`SODIUM_CRYPTO_SECRETBOX_KEYBYTES`**](sodium.constants.md#constant.sodium-crypto-secretbox-keybytes)
  (32 bytes), uma [SodiumException](class.sodiumexception.md) será lançada.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_secretbox\_open()****

```
<?php
// A chave $key deve ser mantida confidencial
$key = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
// Não reutilize $nonce com a mesma chave
$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
$ciphertext = sodium_crypto_secretbox('mensagem a ser criptografada', $nonce, $key);

// O mesmo nonce e chave são necessários para descriptografar o $ciphertext
$plaintext = sodium_crypto_secretbox_open($ciphertext, $nonce, $key);
if ($plaintext !== false) {
    echo $plaintext . PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
mensagem a ser criptografada
```

### Veja também

- [sodium\_crypto\_secretbox()](function.sodium-crypto-secretbox.md) - Criptografia de chave compartilhada autenticada
- [sodium\_crypto\_secretbox\_keygen()](function.sodium-crypto-secretbox-keygen.md) - Gera chave aleatória para sodium\_crypto\_secretbox
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
