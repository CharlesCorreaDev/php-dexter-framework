# Verifica a assinatura da mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign-verify-detached.php

---

# sodium\_crypto\_sign\_verify\_detached

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign\_verify\_detached — Verifica a assinatura da mensagem

### Descrição

function **sodium\_crypto\_sign\_verify\_detached**([string](language.types.string.md) `$signature`, [string](language.types.string.md) `$message`, [string](language.types.string.md) `$public_key`): [bool](language.types.boolean.md)

Verifica a assinatura da mensagem

### Parâmetros

`signature`
:   A assinatura criptográfica obtida de [sodium\_crypto\_sign\_detached()](function.sodium-crypto-sign-detached.md)

`message`
:   A mensagem sendo verificada

`public_key`
:   Chave pública Ed25519

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
