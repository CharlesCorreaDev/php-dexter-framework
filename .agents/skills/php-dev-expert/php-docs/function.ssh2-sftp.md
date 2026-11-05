# Inicializa o subsistema SFTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp.php

---

# ssh2\_sftp

(PECL ssh2 >= 0.9.0)

ssh2\_sftp — Inicializa o subsistema SFTP

### Descrição

function **ssh2\_sftp**([resource](language.types.resource.md) `$session`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Solicita o subsistema SFTP de um servidor SSH2 já conectado.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

### Valor Retornado

Este método retorna um recurso `SSH2 SFTP` para uso com
todos os outros métodos ssh2\_sftp\_\*() e o empacotador
fopen [ssh2.sftp://](wrappers.ssh2.md),
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Abrindo um arquivo via SFTP**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'usuario', 'senha');

$sftp = ssh2_sftp($connection);

$stream = fopen('ssh2.sftp://' . intval($sftp) . '/caminho/para/arquivo', 'r');
?>
```

### Veja também

- [ssh2\_scp\_recv()](function.ssh2-scp-recv.md) - Solicita um arquivo via SCP
- [ssh2\_scp\_send()](function.ssh2-scp-send.md) - Envia um arquivo via SCP

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
