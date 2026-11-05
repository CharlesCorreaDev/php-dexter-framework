# Solicita um arquivo via SCP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-scp-recv.php

---

# ssh2\_scp\_recv

(PECL ssh2 >= 0.9.0)

ssh2\_scp\_recv — Solicita um arquivo via SCP

### Descrição

function **ssh2\_scp\_recv**([resource](language.types.resource.md) `$session`, [string](language.types.string.md) `$remote_file`, [string](language.types.string.md) `$local_file`): [bool](language.types.boolean.md)

Copia um arquivo do servidor remoto para o sistema de arquivos local usando o protocolo SCP.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`remote_file`
:   Caminho para o arquivo remoto.

`local_file`
:   Caminho para o arquivo local.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Baixando um arquivo via SCP**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');

ssh2_scp_recv($connection, '/remote/filename', '/local/filename');
?>
```

### Veja também

- [ssh2\_scp\_send()](function.ssh2-scp-send.md) - Envia um arquivo via SCP
- [copy()](function.copy.md) - Copia arquivo

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
