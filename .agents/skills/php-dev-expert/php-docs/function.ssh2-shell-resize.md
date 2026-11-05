# Change the dimensions of a channel's pseudo-terminal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-shell-resize.php

---

# ssh2\_shell\_resize

(PECL ssh2 >= 1.4)

ssh2\_shell\_resize — Change the dimensions of a channel's pseudo-terminal

### Descrição

function **ssh2\_shell\_resize**(  
    [resource](language.types.resource.md) `$channel`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$width_px` = 0,  
    [int](language.types.integer.md) `$height_px` = 0  
): [bool](language.types.boolean.md)

Requests that the pseudo-terminal (PTY) attached to the given
`channel` be resized to the given dimensions.

> **Nota**:
>
> The extension declares only the first three parameters, under the name
> `session` for `channel`. As a
> result, `width_px` and
> `height_px` can only be passed positionally.

### Parâmetros

`channel`
:   An SSH channel stream, as returned by [ssh2\_exec()](function.ssh2-exec.md) or
    [ssh2\_shell()](function.ssh2-shell.md).

`width`
:   The width of the terminal, in characters.

`height`
:   The height of the terminal, in characters.

`width_px`
:   The width of the terminal in pixels, or `0` to leave
    the pixel dimensions unspecified.

`height_px`
:   The height of the terminal in pixels, or `0` to leave
    the pixel dimensions unspecified.

### Valor Retornado

Returns **`true`**, or **`false`** when `channel` is not an
SSH channel stream.

The outcome of the resize request itself is not reported: **`true`** is
returned even when the remote end does not honour it.

### Erros/Exceções

An **`E_WARNING`** is emitted when
`channel` is not an SSH channel stream.

### Examples

**Exemplo #1 Resizing the pseudo-terminal of a shell**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');

$shell = ssh2_shell($connection, 'xterm', null, 80, 24);

// Tell the remote end the terminal is now 132 columns by 43 rows
ssh2_shell_resize($shell, 132, 43);
?>
```

### Veja também

- [ssh2\_shell()](function.ssh2-shell.md) - Solicita um shell interativo
- [ssh2\_exec()](function.ssh2-exec.md) - Executa um comando em um servidor remoto

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
