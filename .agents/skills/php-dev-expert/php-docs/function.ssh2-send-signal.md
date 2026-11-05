# Send a signal to a remote process

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-send-signal.php

---

# ssh2\_send\_signal

(PECL ssh2 >= 1.5.0)

ssh2\_send\_signal — Send a signal to a remote process

### Descrição

function **ssh2\_send\_signal**([resource](language.types.resource.md) `$channel`, [string](language.types.string.md) `$signal`): [bool](language.types.boolean.md)

Sends a signal to the process running at the remote end of the given
`channel`.

> **Nota**:
>
> This function is only available when the extension is built against
> libssh2 >= 1.9.0.

### Parâmetros

`channel`
:   An SSH channel stream, as returned by [ssh2\_exec()](function.ssh2-exec.md) or
    [ssh2\_shell()](function.ssh2-shell.md).

`signal`
:   The name of the signal to send, without the `SIG`
    prefix, as defined by the SSH connection protocol
    ([» RFC 4254](https://datatracker.ietf.org/doc/html/rfc4254)); for
    example `TERM`, `KILL` or
    `INT`.

    The value is forwarded to the server as is; it is not validated
    against the names listed by the protocol.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

An **`E_WARNING`** is emitted when
`channel` is not an SSH channel stream, and when the
signal could not be sent.

### Examples

**Exemplo #1 Interrupting a remote command**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');

$stream = ssh2_exec($connection, 'trap "echo interrupted" INT; sleep 60');

ssh2_send_signal($stream, 'INT');

stream_set_blocking($stream, true);
echo stream_get_contents($stream);
?>
```

### Veja também

- [ssh2\_exec()](function.ssh2-exec.md) - Executa um comando em um servidor remoto
- [ssh2\_shell()](function.ssh2-shell.md) - Solicita um shell interativo
- [ssh2\_send\_eof()](function.ssh2-send-eof.md) - Envia EOF para o fluxo

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
