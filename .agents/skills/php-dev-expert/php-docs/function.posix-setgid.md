# Define o GID do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-setgid.php

---

# posix\_setgid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_setgid — Define o GID do processo atual

### Descrição

function **posix\_setgid**([int](language.types.integer.md) `$group_id`): [bool](language.types.boolean.md)

Define o ID do grupo real do processo atual. Esta é uma
função que necessita de privilégios apropriados no sistema
(normalmente 'root') para poder cumprir o seu objetivo. A
ordem apropriada de chamadas de função é
**posix\_setgid()** primeiro,
[posix\_setuid()](function.posix-setuid.md) por último.

> **Nota**:
>
> Se o chamador for um superusuário, isso também definirá o ID do
> grupo efetivo.

### Parâmetros

`group_id`
:   O ID do grupo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **posix\_setgid()****

Este exemplo exibirá o ID do grupo efetivo, uma vez alterado.

```
<?php
echo 'Meu ID de grupo real é ' . posix_getgid(); // 20
posix_setgid(40);
echo 'Meu ID de grupo real é ' . posix_getgid(); // 40
echo 'Meu ID de grupo efetivo é ' . posix_getegid(); // 40
?>
```

### Veja também

- [posix\_getgrgid()](function.posix-getgrgid.md) - Retorna informação sobre um grupo a partir de um ID de grupo
- [posix\_getgid()](function.posix-getgid.md) - Retorna o ID do grupo real do processo atual

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
