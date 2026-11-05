# Envia um arquivo via SCP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-scp-send.php

---

# ssh2\_scp\_send

(PECL ssh2 >= 0.9.0)

ssh2\_scp\_send — Envia um arquivo via SCP

### Descrição

function **ssh2\_scp\_send**(  
    [resource](language.types.resource.md) `$session`,  
    [string](language.types.string.md) `$local_file`,  
    [string](language.types.string.md) `$remote_file`,  
    [int](language.types.integer.md) `$create_mode` = 0644  
): [bool](language.types.boolean.md)

Copia um arquivo do sistema de arquivos local para o servidor remoto usando o protocolo SCP.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`local_file`
:   Caminho para o arquivo local.

`remote_file`
:   Caminho para o arquivo remoto.

`create_mode`
:   O arquivo será criado com o modo especificado por
    `create_mode`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Enviando um arquivo via SCP**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');

ssh2_scp_send($connection, '/local/filename', '/remote/filename', 0644);
?>
```

### Veja também

- [ssh2\_scp\_recv()](function.ssh2-scp-recv.md) - Solicita um arquivo via SCP
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
