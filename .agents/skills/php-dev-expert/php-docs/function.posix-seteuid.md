# Define o UID efetivo do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-seteuid.php

---

# posix\_seteuid

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

posix\_seteuid — Define o UID efetivo do processo atual

### Descrição

function **posix\_seteuid**([int](language.types.integer.md) `$user_id`): [bool](language.types.boolean.md)

Define o ID do usuário efetivo do processo atual. Esta é uma
função que necessita de privilégios apropriados no sistema
(normalmente 'root') para poder cumprir o seu objetivo.

### Parâmetros

`user_id`
:   O ID do usuário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [posix\_geteuid()](function.posix-geteuid.md) - Retorna o ID do usuário efetivo do processo atual
- [posix\_setuid()](function.posix-setuid.md) - Define o UID do processo atual
- [posix\_getuid()](function.posix-getuid.md) - Retorna o ID do usuário real do processo atual

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
