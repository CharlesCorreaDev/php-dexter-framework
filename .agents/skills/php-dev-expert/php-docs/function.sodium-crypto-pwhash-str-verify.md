# Verifica se uma senha corresponde a um hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-pwhash-str-verify.php

---

# sodium\_crypto\_pwhash\_str\_verify

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_pwhash\_str\_verify — Verifica se uma senha corresponde a um hash

### Descrição

function **sodium\_crypto\_pwhash\_str\_verify**([string](language.types.string.md) `$hash`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`): [bool](language.types.boolean.md)

Verifica se um hash de senha criado usando [sodium\_crypto\_pwhash\_str()](function.sodium-crypto-pwhash-str.md) corresponde a uma senha em texto simples. Observe que os parâmetros estão na ordem inversa aos mesmos parâmetros na função semelhante [password\_verify()](function.password-verify.md).

### Parâmetros

`hash`
:   Um hash criado por [password\_hash()](function.password-hash.md).

`password`
:   A senha do usuário.

### Valor Retornado

Retorna **`true`** se a senha e o hash corresponderem, ou **`false`** caso contrário.

### Notas

> **Nota**:
>
> Os hashes são calculados usando o algoritmo Argon2ID, fornecendo resistência a ataques de GPU e de canal lateral.

### Veja também

- [sodium\_crypto\_pwhash\_str()](function.sodium-crypto-pwhash-str.md) - Obtém um hash codificado em ASCII
- [password\_hash()](function.password-hash.md) - Cria um hash de senha
- [password\_verify()](function.password-verify.md) - Verifica se uma senha corresponde a um hash

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
