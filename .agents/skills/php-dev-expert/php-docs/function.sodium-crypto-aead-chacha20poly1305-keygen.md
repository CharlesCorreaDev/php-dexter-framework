# Gera uma chave ChaCha20-Poly1305 aleatória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-chacha20poly1305-keygen.php

---

# sodium\_crypto\_aead\_chacha20poly1305\_keygen

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_aead\_chacha20poly1305\_keygen — Gera uma chave ChaCha20-Poly1305 aleatória

### Descrição

function **sodium\_crypto\_aead\_chacha20poly1305\_keygen**(): [string](language.types.string.md)

Gera uma chave aleatória para uso com [sodium\_crypto\_aead\_chacha20poly1305\_encrypt()](function.sodium-crypto-aead-chacha20poly1305-encrypt.md) e
[sodium\_crypto\_aead\_chacha20poly1305\_decrypt()](function.sodium-crypto-aead-chacha20poly1305-decrypt.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma chave 256-bit aleatória.

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
