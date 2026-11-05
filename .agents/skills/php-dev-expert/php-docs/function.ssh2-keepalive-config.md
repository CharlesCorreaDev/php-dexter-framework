# Configure how often keepalive messages should be sent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-keepalive-config.php

---

# ssh2\_keepalive\_config

(PECL ssh2 >= 1.5.0)

ssh2\_keepalive\_config — Configure how often keepalive messages should be sent

### Descrição

function **ssh2\_keepalive\_config**([resource](language.types.resource.md) `$session`, [bool](language.types.boolean.md) `$want_reply`, [int](language.types.integer.md) `$interval`): [void](language.types.void.md)

Configures how often keepalive messages are sent on the given
`session`, and whether the server is asked to reply to
them.

Keepalive messages are not sent automatically. Once configured,
[ssh2\_keepalive\_send()](function.ssh2-keepalive-send.md) must be called to actually send a
keepalive message.

> **Nota**:
>
> This function is only available when the extension is built against a
> libssh2 version providing keepalive support.

### Parâmetros

`session`
:   An SSH connection link identifier, obtained from a call to
    [ssh2\_connect()](function.ssh2-connect.md).

`want_reply`
:   Whether the server is requested to reply to keepalive messages.
    Requesting a reply makes an unresponsive server detectable, at the cost
    of some extra traffic.

`interval`
:   The number of seconds that may pass without any traffic before a
    keepalive message should be sent. A value of `0`
    disables keepalive messages, and a value of `1` is
    treated as `2` by the underlying library.

    Accepted values range from `0` to
    `4294967295`.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

An **`E_WARNING`** is emitted when
`interval` is outside the accepted range, in which
case the keepalive configuration is left unchanged.

### Examples

**Exemplo #1 Sending keepalive messages**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');

// Ask the server to reply, after 30 seconds without any traffic
ssh2_keepalive_config($connection, true, 30);

// Keepalive messages are only sent when this function is called
ssh2_keepalive_send($connection);
?>
```

### Veja também

- [ssh2\_keepalive\_send()](function.ssh2-keepalive-send.md) - Send a keepalive message
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
