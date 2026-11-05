# Calcula as chaves de sessão do lado do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-kx-server-session-keys.php

---

# sodium\_crypto\_kx\_server\_session\_keys

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_kx\_server\_session\_keys — Calcula as chaves de sessão do lado do servidor

### Descrição

function **sodium\_crypto\_kx\_server\_session\_keys**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$server_key_pair`, [string](language.types.string.md) `$client_key`): [array](language.types.array.md)

Calcula as chaves de sessão do lado do servidor, usando o método de troca de chaves X25519 + BLAKE2b.

### Parâmetros

`server_key_pair`
:   Um par de chaves crypto\_kx, como um gerado por [sodium\_crypto\_kx\_keypair()](function.sodium-crypto-kx-keypair.md).

`client_key`
:   Uma chave pública crypto\_kx.

### Valor Retornado

Um array composto por duas strings. A primeira deve ser usada para receber dados
do cliente. A segunda deve ser usada para enviar dados ao cliente.

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
