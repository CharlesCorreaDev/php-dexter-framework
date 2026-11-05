# Verifica se o equipamento suporta AES256-GCM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-aes256gcm-is-available.php

---

# sodium\_crypto\_aead\_aes256gcm\_is\_available

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_aead\_aes256gcm\_is\_available — Verifica se o equipamento suporta AES256-GCM

### Descrição

function **sodium\_crypto\_aead\_aes256gcm\_is\_available**(): [bool](language.types.boolean.md)

O valor de retorno desta função depende se o equipamento suporta ou não AES acelerado por hardware.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se for seguro criptografar com AES-256-GCM e **`false`** caso contrário.

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
