# Define o UID do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-setuid.php

---

# posix\_setuid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_setuid — Define o UID do processo atual

### Descrição

function **posix\_setuid**([int](language.types.integer.md) `$user_id`): [bool](language.types.boolean.md)

Define o ID do usuário real do processo atual. Esta é uma
função que necessita de privilégios apropriados no sistema
(normalmente 'root') para poder cumprir o seu objetivo.

### Parâmetros

`user_id`
:   O ID do usuário

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **posix\_setuid()****

Este exemplo exibirá o ID do usuário atual e depois o
definirá com um valor diferente.

```
<?php
echo posix_getuid() . "\n";  // 10001
echo posix_geteuid() . "\n"; // 10001
posix_setuid(10000);
echo posix_getuid() . "\n";  // 10000
echo posix_geteuid() . "\n"; // 10000
?>
```

### Veja também

- [posix\_setgid()](function.posix-setgid.md) - Define o GID do processo atual
- [posix\_seteuid()](function.posix-seteuid.md) - Define o UID efetivo do processo atual
- [posix\_getuid()](function.posix-getuid.md) - Retorna o ID do usuário real do processo atual
- [posix\_geteuid()](function.posix-geteuid.md) - Retorna o ID do usuário efetivo do processo atual

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
