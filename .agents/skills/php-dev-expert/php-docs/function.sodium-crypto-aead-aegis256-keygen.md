# Gera uma chave AEGIS-256 aleatória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-aegis256-keygen.php

---

# sodium\_crypto\_aead\_aegis256\_keygen

(PHP 8 >= 8.4.0)

sodium\_crypto\_aead\_aegis256\_keygen — Gera uma chave AEGIS-256 aleatória

### Descrição

function **sodium\_crypto\_aead\_aegis256\_keygen**(): [string](language.types.string.md)

Gera uma chave aleatória para uso com [sodium\_crypto\_aead\_aegis256\_encrypt()](function.sodium-crypto-aead-aegis256-encrypt.md) e
[sodium\_crypto\_aead\_aegis256\_decrypt()](function.sodium-crypto-aead-aegis256-decrypt.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma chave 256-bit aleatória.

### Veja também

- [sodium\_crypto\_aead\_aegis256\_decrypt()](function.sodium-crypto-aead-aegis256-decrypt.md) - Verifica e descriptografa uma mensagem com AEGIS-256
- [sodium\_crypto\_aead\_aegis256\_encrypt()](function.sodium-crypto-aead-aegis256-encrypt.md) - Criptografa e autentica uma mensagem com AEGIS-256

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
