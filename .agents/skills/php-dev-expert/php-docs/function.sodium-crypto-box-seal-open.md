# Descriptografia de chave pública anônima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-box-seal-open.php

---

# sodium\_crypto\_box\_seal\_open

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_box\_seal\_open — Descriptografia de chave pública anônima

### Descrição

function **sodium\_crypto\_box\_seal\_open**([string](language.types.string.md) `$ciphertext`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key_pair`): [string](language.types.string.md)|[false](language.types.singleton.md)

Descriptografa uma mensagem que foi criptografada com [sodium\_crypto\_box\_seal()](function.sodium-crypto-box-seal.md)

### Parâmetros

`ciphertext`
:   A mensagem criptografada.

`key_pair`
:   O par de chaves do destinatário. Deve incluir a chave secreta.

### Valor Retornado

O texto simples em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_box\_seal\_open()****

```
<?php
// O texto cifrado não é sensível; base64_decode está ok
$sealed_b64 = "oRBXXAV4iQBrxlV4A21Bord8Yo/D8ZlrIIGNyaRCcGBfpz0map52I3xq6l+CST+1NSgQkbV+HiYyFjXWiWiaCGupGf+zl4bgWj/A9Adtem7Jt3h3emrMsLw=";
$sealed = base64_decode($sealed_b64);

// O par de chaves contém um segredo criptográfico; use um decodificador seguro contra ataques de temporização
$keypair_b64 = "KZkF8wnB7bnC2aXB3lFOqCTc0Z6MllvaQb9ASVG8o2/MsewkuE4u1uaEgTzSakeiYyIW8DGj+02/L3cWIbs9bQ==";
$keypair = sodium_base642bin($keypair_b64, SODIUM_BASE64_VARIANT_ORIGINAL);

$opened = sodium_crypto_box_seal_open($sealed, $keypair);
var_dump($opened);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(41) "Writing software in PHP can be a delight!"
```

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
