# Gera aleatoriamente uma chave secreta e uma chave pública correspondente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-box-keypair.php

---

# sodium\_crypto\_box\_keypair

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_box\_keypair — Gera aleatoriamente uma chave secreta e uma chave pública correspondente

### Descrição

function **sodium\_crypto\_box\_keypair**(): [string](language.types.string.md)

Gera uma chave secreta e uma chave pública como uma string.

Para obter a chave secreta desta sequência de chaves unificada, consulte [sodium\_crypto\_box\_secretkey()](function.sodium-crypto-box-secretkey.md).
Para obter a chave pública desta sequência de chaves unificada, consulte [sodium\_crypto\_box\_publickey()](function.sodium-crypto-box-publickey.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma sequência contendo a chave secreta X25519 e a chave pública X25519 correspondente.

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
