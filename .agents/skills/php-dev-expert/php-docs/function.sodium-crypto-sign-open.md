# Verifica se a mensagem assinada tem uma assinatura válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign-open.php

---

# sodium\_crypto\_sign\_open

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign\_open — Verifica se a mensagem assinada tem uma assinatura válida

### Descrição

function **sodium\_crypto\_sign\_open**([string](language.types.string.md) `$signed_message`, [string](language.types.string.md) `$public_key`): [string](language.types.string.md)|[false](language.types.singleton.md)

Verifica a assinatura anexada a uma mensagem e retorna a mensagem

### Parâmetros

`signed_message`
:   Uma mensagem assinada com [sodium\_crypto\_sign()](function.sodium-crypto-sign.md)

`public_key`
:   Uma chave pública Ed25519

### Valor Retornado

Retorna a mensagem original assinada em caso de sucesso, ou **`false`** em caso de falha.

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
