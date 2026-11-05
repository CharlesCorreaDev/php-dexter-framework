# Send a keepalive message

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-keepalive-send.php

---

# ssh2\_keepalive\_send

(PECL ssh2 >= 1.5.0)

ssh2\_keepalive\_send — Send a keepalive message

### Descrição

function **ssh2\_keepalive\_send**([resource](language.types.resource.md) `$session`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Sends a keepalive message on the given `session`,
according to the configuration set with
[ssh2\_keepalive\_config()](function.ssh2-keepalive-config.md).

> **Nota**:
>
> This function is only available when the extension is built against a
> libssh2 version providing keepalive support.

### Parâmetros

`session`
:   An SSH connection link identifier, obtained from a call to
    [ssh2\_connect()](function.ssh2-connect.md).

### Valor Retornado

Returns the number of seconds that may pass before another keepalive message
must be sent, or **`false`** on failure. `0` is returned when
keepalive messages are disabled.

Since `0` and **`false`** are both falsy, the
`===` operator has to be used to tell them apart.

### Examples

**Exemplo #1 Sending a keepalive message**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');
ssh2_keepalive_config($connection, true, 30);

$seconds = ssh2_keepalive_send($connection);

if ($seconds === false) {
    echo "The keepalive message could not be sent", PHP_EOL;
} elseif ($seconds === 0) {
    echo "Keepalive messages are disabled", PHP_EOL;
} else {
    echo "Next keepalive message due in $seconds seconds", PHP_EOL;
}
?>
```

### Veja também

- [ssh2\_keepalive\_config()](function.ssh2-keepalive-config.md) - Configure how often keepalive messages should be sent
- [ssh2\_connect()](function.ssh2-connect.md) - Conecta-se a um servidor SSH

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
