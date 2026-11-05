# Criptografia de chave pública anônima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-box-seal.php

---

# sodium\_crypto\_box\_seal

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_box\_seal — Criptografia de chave pública anônima

### Descrição

function **sodium\_crypto\_box\_seal**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`, [string](language.types.string.md) `$public_key`): [string](language.types.string.md)

Criptografa uma mensagem de modo que somente o destinatário possa decifrá-la.

Ao contrário de [sodium\_crypto\_box()](function.sodium-crypto-box.md), você só precisa saber a
chave pública do destinatário para usar **sodium\_crypto\_box\_seal()**. Uma consequência dessa
conveniência, no entanto, é que o texto cifrado não está vinculado a uma chave pública estática
e, portanto, não é autenticado. Daí a criptografia de chave pública anônima.

**sodium\_crypto\_box\_seal()** ainda fornece integridade de texto cifrado. Só não
autenticação de identidade do remetente.

Se também for necessária autenticação do remetente, as funções [sodium\_crypto\_sign()](function.sodium-crypto-sign.md)
são provavelmente o melhor lugar para começar.

### Parâmetros

`message`
:   A mensagem a criptografar.

`public_key`
:   A chave pública que corresponde à única chave que pode descriptografar a mensagem.

### Valor Retornado

Uma sequência de texto cifrado no formato de (chave pública única, mensagem criptografada, tag de autenticação).

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_box\_seal()****

```
<?php
$keypair = sodium_crypto_box_keypair();
$public_key = sodium_crypto_box_publickey($keypair);

// Texto simples ofuscado para tornar o exemplo mais divertido
$plaintext_b64 = "V3JpdGluZyBzb2Z0d2FyZSBpbiBQSFAgY2FuIGJlIGEgZGVsaWdodCE=";
$decoded_plaintext = sodium_base642bin($plaintext_b64, SODIUM_BASE64_VARIANT_ORIGINAL);

$sealed = sodium_crypto_box_seal($decoded_plaintext, $public_key);
var_dump(base64_encode($sealed));

$opened = sodium_crypto_box_seal_open($sealed, $keypair);
var_dump($opened);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(120) "oRBXXAV4iQBrxlV4A21Bord8Yo/D8ZlrIIGNyaRCcGBfpz0map52I3xq6l+CST+1NSgQkbV+HiYyFjXWiWiaCGupGf+zl4bgWj/A9Adtem7Jt3h3emrMsLw="
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
