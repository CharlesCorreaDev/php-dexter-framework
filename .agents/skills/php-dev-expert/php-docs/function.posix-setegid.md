# Define o GID efetivo do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-setegid.php

---

# posix\_setegid

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

posix\_setegid — Define o GID efetivo do processo atual

### Descrição

function **posix\_setegid**([int](language.types.integer.md) `$group_id`): [bool](language.types.boolean.md)

Define o ID do grupo efetivo do processo atual. Esta é uma
função que precisa de privilégios apropriados no sistema
(geralmente 'root') para que possa cumprir seu objetivo.

### Parâmetros

`group_id`
:   O ID de grupo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **posix\_setegid()****

Este exemplo exibirá o ID do grupo efetivo, uma vez alterado.

```
<?php
echo 'Meu ID de grupo real é ' . posix_getgid(); // 20
posix_setegid(40);
echo 'Meu ID de grupo real é ' . posix_getgid(); // 20
echo 'Meu ID de grupo efetivo é ' . posix_getegid(); // 40
?>
```

### Veja também

- [posix\_getgrgid()](function.posix-getgrgid.md) - Retorna informação sobre um grupo a partir de um ID de grupo
- [posix\_getgid()](function.posix-getgid.md) - Retorna o ID do grupo real do processo atual
- [posix\_setgid()](function.posix-setgid.md) - Define o GID do processo atual

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
