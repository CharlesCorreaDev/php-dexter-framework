# Set the timeout for blocking operations on a session

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-set-timeout.php

---

# ssh2\_set\_timeout

(PECL ssh2 >= 1.5.0)

ssh2\_set\_timeout — Set the timeout for blocking operations on a session

### Descrição

function **ssh2\_set\_timeout**([resource](language.types.resource.md) `$session`, [int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds` = 0): [void](language.types.void.md)

Sets how long a blocking operation on the given
`session` may wait before it is considered to have
timed out.

When the resulting timeout is `0`, which is the default,
no timeout is applied and blocking operations may wait indefinitely.

### Parâmetros

`session`
:   An SSH connection link identifier, obtained from a call to
    [ssh2\_connect()](function.ssh2-connect.md).

`seconds`
:   The timeout, in seconds.

`microseconds`
:   An additional number of microseconds added to the timeout. The
    underlying library only supports millisecond precision, so this value
    is rounded up to the next whole millisecond.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Limiting how long blocking operations may wait**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);

// Give up on blocking operations after 5.5 seconds
ssh2_set_timeout($connection, 5, 500000);

ssh2_auth_password($connection, 'username', 'password');
?>
```

### Veja também

- [ssh2\_connect()](function.ssh2-connect.md) - Conecta-se a um servidor SSH
- [ssh2\_keepalive\_config()](function.ssh2-keepalive-config.md) - Configure how often keepalive messages should be sent
- [stream\_set\_timeout()](function.stream-set-timeout.md) - Define o limite de tempo em um fluxo

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
