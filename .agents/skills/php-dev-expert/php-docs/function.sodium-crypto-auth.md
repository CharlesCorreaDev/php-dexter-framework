# Calcula uma tag para a mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-auth.php

---

# sodium\_crypto\_auth

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_auth — Calcula uma tag para a mensagem

### Descrição

function **sodium\_crypto\_auth**([string](language.types.string.md) `$message`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)

A autenticação simétrica de mensagens via **sodium\_crypto\_auth()** fornece
integridade, mas não confidencialidade.

Ao contrário das assinaturas digitais (por exemplo, [sodium\_crypto\_sign\_detached()](function.sodium-crypto-sign-detached.md)),
qualquer parte capaz de verificar uma mensagem também é capaz de autenticar
suas próprias mensagens. (Daí a autenticação simétrica.)

### Parâmetros

`message`
:   A mensagem que se pretende autenticar

`key`
:   Chave de autenticação

### Valor Retornado

Tag de autenticação.

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
