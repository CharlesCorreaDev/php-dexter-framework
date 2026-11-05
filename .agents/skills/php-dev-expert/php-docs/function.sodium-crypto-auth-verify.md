# Verifica se a tag é válida para a mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-auth-verify.php

---

# sodium\_crypto\_auth\_verify

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_auth\_verify — Verifica se a tag é válida para a mensagem

### Descrição

function **sodium\_crypto\_auth\_verify**([string](language.types.string.md) `$mac`, [string](language.types.string.md) `$message`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

Verifique se a tag de autenticação é válida para uma determinada mensagem e chave.

Ao contrário das assinaturas digitais (por exemplo, [sodium\_crypto\_sign\_verify\_detached()](function.sodium-crypto-sign-verify-detached.md)),
qualquer parte capaz de verificar uma mensagem também é capaz de autenticar
suas próprias mensagens. (Daí a autenticação simétrica.)

### Parâmetros

`mac`
:   Etiqueta de autenticação produzida por [sodium\_crypto\_auth()](function.sodium-crypto-auth.md)

`message`
:   Mensagem

`key`
:   Chave de autenticação

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
