# Criptografa uma mensagem usando um nonce e uma chave secreta (sem autenticação)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-stream-xchacha20-xor.php

---

# sodium\_crypto\_stream\_xchacha20\_xor

(PHP 8 >= 8.1.0)

sodium\_crypto\_stream\_xchacha20\_xor — Criptografa uma mensagem usando um nonce e uma chave secreta (sem autenticação)

### Descrição

function **sodium\_crypto\_stream\_xchacha20\_xor**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`, [string](language.types.string.md) `$nonce`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)

Criptografa a mensagem `message` usando um `nonce`
e uma chave `key` secreta (sem autenticação).

**Cuidado**

Esta criptografia não é autenticada e não impede ataques de texto cifrado escolhido.
Certifique-se de combinar o texto cifrado com um Código de Autenticação de Mensagem,
por exemplo, com a função [sodium\_crypto\_aead\_xchacha20poly1305\_ietf\_encrypt()](function.sodium-crypto-aead-xchacha20poly1305-ietf-encrypt.md),
ou [sodium\_crypto\_auth()](function.sodium-crypto-auth.md).

### Parâmetros

`message`
:   A mensagem a criptografar.

`nonce`
:   Nonce de 24 bytes.

`key`
:   Chave, possivelmente gerada a partir de [sodium\_crypto\_stream\_xchacha20\_keygen()](function.sodium-crypto-stream-xchacha20-keygen.md).

### Valor Retornado

Mensagem criptografada.

### Veja também

- [sodium\_crypto\_stream\_xchacha20\_xor\_ic()](function.sodium-crypto-stream-xchacha20-xor-ic.md) - Criptografa uma mensagem usando um nonce e uma chave secreta (sem autenticação)

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
