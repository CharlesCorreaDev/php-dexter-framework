# Criptografia de chave compartilhada autenticada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-secretbox.php

---

# sodium\_crypto\_secretbox

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_secretbox — Criptografia de chave compartilhada autenticada

### Descrição

function **sodium\_crypto\_secretbox**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`, [string](language.types.string.md) `$nonce`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)

Criptografa uma mensagem com uma chave simétrica (compartilhada).

### Parâmetros

`message`
:   A mensagem de texto simples a ser criptografada.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 24 bytes de comprimento.
    Este é um limite grande o suficiente para ser gerado aleatoriamente (por exemplo, [random\_bytes()](function.random-bytes.md)).

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

Retorna a string criptografada.

### Erros/Exceções

- Se `nonce` tiver um comprimento de bytes diferente de
  [**`SODIUM_CRYPTO_SECRETBOX_NONCEBYTES`**](sodium.constants.md#constant.sodium-crypto-secretbox-noncebytes)
  (24 bytes), uma [SodiumException](class.sodiumexception.md) será lançada.
- Se `key` tiver um comprimento de bytes diferente de
  [**`SODIUM_CRYPTO_SECRETBOX_KEYBYTES`**](sodium.constants.md#constant.sodium-crypto-secretbox-keybytes)
  (32 bytes), uma [SodiumException](class.sodiumexception.md) será lançada.
- Lança uma [SodiumException](class.sodiumexception.md) em caso de falha.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_secretbox()****

```
<?php
// A chave $key deve ser mantida confidencial
$key = sodium_crypto_secretbox_keygen();
// Não reutilize $nonce com a mesma chave
$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
$plaintext = "message to be encrypted";
$ciphertext = sodium_crypto_secretbox($plaintext, $nonce, $key);

var_dump(bin2hex($ciphertext));
// O mesmo nonce e chave são necessários para descriptografar o $ciphertext
var_dump(sodium_crypto_secretbox_open($ciphertext, $nonce, $key));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(78) "3a1fa3e9f7b72ef8be51d40abf8e296c6899c185d07b18b4c93e7f26aa776d24c50852cd6b1076"
string(23) "message to be encrypted"
```

### Veja também

- [sodium\_crypto\_secretbox\_open()](function.sodium-crypto-secretbox-open.md) - Descriptografia de chave compartilhada autenticada
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
