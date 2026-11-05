# Cria uma sequência de pares de chaves unificada a partir de uma chave secreta e uma chave pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-box-keypair-from-secretkey-and-publickey.php

---

# sodium\_crypto\_box\_keypair\_from\_secretkey\_and\_publickey

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_box\_keypair\_from\_secretkey\_and\_publickey — Cria uma sequência de pares de chaves unificada a partir de uma chave secreta e uma chave pública

### Descrição

function **sodium\_crypto\_box\_keypair\_from\_secretkey\_and\_publickey**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$secret_key`, [string](language.types.string.md) `$public_key`): [string](language.types.string.md)

Esta função existe para satisfazer os requisitos da API de, por exemplo, **crypto\_box()**.
Passe a chave secreta de uma parte e a chave pública da outra, e será obtido um "par de chaves" para
a conversa.

### Parâmetros

`secret_key`
:   Chave secreta.

`public_key`
:   Chave pública.

### Valor Retornado

Par de chaves X25519.

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
