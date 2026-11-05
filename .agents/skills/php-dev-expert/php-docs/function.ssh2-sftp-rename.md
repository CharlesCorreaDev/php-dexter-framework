# Renomeia um arquivo remoto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-rename.php

---

# ssh2\_sftp\_rename

(PECL ssh2 >= 0.9.0)

ssh2\_sftp\_rename — Renomeia um arquivo remoto

### Descrição

function **ssh2\_sftp\_rename**([resource](language.types.resource.md) `$sftp`, [string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [bool](language.types.boolean.md)

Renomeia um arquivo no sistema de arquivos remoto.

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`from`
:   O arquivo atual que está sendo renomeado.

`to`
:   O novo nome de arquivo que substitui `from`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Renomeando um arquivo via SFTP**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'usuario', 'senha');
$sftp = ssh2_sftp($connection);

ssh2_sftp_rename($sftp, '/home/usuario/nomeantigo', '/home/usuario/nomenovo');
?>
```

### Veja também

- [rename()](function.rename.md) - Renomeia um arquivo ou diretório

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
