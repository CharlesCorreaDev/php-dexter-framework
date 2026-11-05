# Gera uma chave AEGIS-128L aleatória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-aegis128l-keygen.php

---

# sodium\_crypto\_aead\_aegis128l\_keygen

(PHP 8 >= 8.4.0)

sodium\_crypto\_aead\_aegis128l\_keygen — Gera uma chave AEGIS-128L aleatória

### Descrição

function **sodium\_crypto\_aead\_aegis128l\_keygen**(): [string](language.types.string.md)

Gera uma chave aleatória para uso com [sodium\_crypto\_aead\_aegis128l\_encrypt()](function.sodium-crypto-aead-aegis128l-encrypt.md) e
[sodium\_crypto\_aead\_aegis128l\_decrypt()](function.sodium-crypto-aead-aegis128l-decrypt.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma chave 128-bit aleatória.

### Veja também

- [sodium\_crypto\_aead\_aegis128l\_decrypt()](function.sodium-crypto-aead-aegis128l-decrypt.md) - Verifica e descriptografa uma mensagem com AEGIS-128L
- [sodium\_crypto\_aead\_aegis128l\_encrypt()](function.sodium-crypto-aead-aegis128l-encrypt.md) - Criptografa e autentica uma mensagem com AEGIS-128L

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
