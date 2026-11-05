# Assina uma mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign.php

---

# sodium\_crypto\_sign

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign — Assina uma mensagem

### Descrição

function **sodium\_crypto\_sign**([string](language.types.string.md) `$message`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$secret_key`): [string](language.types.string.md)

Assina uma mensagem com uma chave secreta, que pode ser verificada pela chave pública correspondente.
Esta função anexa a assinatura à mensagem. Consulte [sodium\_crypto\_sign\_detached()](function.sodium-crypto-sign-detached.md)
para assinaturas desanexadas.

### Parâmetros

`message`
:   Mensagem para assinar.

`secret_key`
:   Chave secreta. Veja [sodium\_crypto\_sign\_secretkey()](function.sodium-crypto-sign-secretkey.md)

### Valor Retornado

Mensagem assinada (não criptografada).

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
