# Criptografia de chave pública autenticada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-box.php

---

# sodium\_crypto\_box

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_box — Criptografia de chave pública autenticada

### Descrição

function **sodium\_crypto\_box**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`, [string](language.types.string.md) `$nonce`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key_pair`): [string](language.types.string.md)

Criptografa uma mensagem usando criptografia assimétrica (chave pública).

O algoritmo usado por funções prefixadas com **sodium\_crypto\_box()** é
Curva Elíptica Diffie-Hellman sobre a curva de Montgomery, Curva25519; geralmente abreviada como
X25519.

### Parâmetros

`message`
:   A mensagem a ser criptografada.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 24 bytes de comprimento.
    Este é um limite grande o suficiente para ser gerado aleatoriamente (por exemplo, [random\_bytes()](function.random-bytes.md)).

`key_pair`
:   Consulte [sodium\_crypto\_box\_keypair\_from\_secretkey\_and\_publickey()](function.sodium-crypto-box-keypair-from-secretkey-and-publickey.md).
    Isso deve incluir a chave secreta X25519 do remetente e a chave pública X25519 do destinatário.

### Valor Retornado

Retorna a mensagem criptografada (texto cifrado mais tag de autenticação). O texto cifrado será
16 bytes maior que o texto simples e uma string binária bruta. Consulte [sodium\_bin2base64()](function.sodium-bin2base64.md)
para codificação segura para armazenamento.

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
