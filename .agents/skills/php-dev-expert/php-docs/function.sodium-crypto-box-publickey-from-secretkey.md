# Calcula a chave pública a partir de uma chave secreta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-box-publickey-from-secretkey.php

---

# sodium\_crypto\_box\_publickey\_from\_secretkey

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_box\_publickey\_from\_secretkey — Calcula a chave pública a partir de uma chave secreta

### Descrição

function **sodium\_crypto\_box\_publickey\_from\_secretkey**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$secret_key`): [string](language.types.string.md)

Dada uma chave secreta, calcula a chave pública correspondente.

Isso só funciona com o tipo de chave destinado ao uso com **crypto\_box()**
(que usa a Curva Elíptica Diffie-Hellman sobre a curva de Montgomery, Curve25519; abreviada como X25519),
não com **crypto\_sign()** (que usa o Algoritmo de Assinatura Digital Edwards sobre a Curva
de Edwards com os parâmetros correspondentes; abreviada como Ed25519).

### Parâmetros

`secret_key`
:   Chave secreta X25519

### Valor Retornado

Chave pública X25519.

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
