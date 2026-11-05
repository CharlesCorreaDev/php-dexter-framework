# Busca um fluxo de dados estendido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-fetch-stream.php

---

# ssh2\_fetch\_stream

(PECL ssh2 >= 0.9.0)

ssh2\_fetch\_stream — Busca um fluxo de dados estendido

### Descrição

function **ssh2\_fetch\_stream**([resource](language.types.resource.md) `$channel`, [int](language.types.integer.md) `$streamid`): [resource](language.types.resource.md)

Busca um subfluxo alternativo associado a um fluxo de canal SSH2.
O protocolo SSH2 atualmente define apenas um subfluxo, STDERR, que possui
um ID de subfluxo de **`SSH2_STREAM_STDERR`** (definido como 1).

### Parâmetros

`channel`

`streamid`
:   Um fluxo de canal SSH2.

### Valor Retornado

Retorna o recurso de fluxo solicitado.

### Examples

**Exemplo #1 Abrindo um shell e recuperando o fluxo stderr associado a ele**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');

$stdio_stream = ssh2_shell($connection);
$stderr_stream = ssh2_fetch_stream($stdio_stream, SSH2_STREAM_STDERR);
?>
```

### Veja também

- [ssh2\_shell()](function.ssh2-shell.md) - Solicita um shell interativo
- [ssh2\_exec()](function.ssh2-exec.md) - Executa um comando em um servidor remoto
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
