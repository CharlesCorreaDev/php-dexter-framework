# Remove um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-rmdir.php

---

# ssh2\_sftp\_rmdir

(PECL ssh2 >= 0.9.0)

ssh2\_sftp\_rmdir — Remove um diretório

### Descrição

function **ssh2\_sftp\_rmdir**([resource](language.types.resource.md) `$sftp`, [string](language.types.string.md) `$dirname`): [bool](language.types.boolean.md)

Remove um diretório do servidor de arquivos remoto.

Esta função é semelhante ao uso de [rmdir()](function.rmdir.md) com o empacotador
[ssh2.sftp://](wrappers.ssh2.md).

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`dirname`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Removendo um diretório em um servidor remoto**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'usuario', 'senha');
$sftp = ssh2_sftp($connection);

ssh2_sftp_rmdir($sftp, '/home/usuario/dir_para_remover');
/* Ou:  rmdir("ssh2.sftp://$sftp/home/usuario/dir_para_remover"); */
?>
```

### Veja também

- [rmdir()](function.rmdir.md) - Remove um diretório
- [ssh2\_sftp\_mkdir()](function.ssh2-sftp-mkdir.md) - Cria um diretório

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
