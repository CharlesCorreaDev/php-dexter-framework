# Altera o modo de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-chmod.php

---

# ssh2\_sftp\_chmod

(PECL ssh2 >= 0.12)

ssh2\_sftp\_chmod — Altera o modo de arquivo

### Descrição

function **ssh2\_sftp\_chmod**([resource](language.types.resource.md) `$sftp`, [string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$mode`): [bool](language.types.boolean.md)

Tenta alterar o modo do arquivo especificado para aquele fornecido em
`mode`.

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`filename`
:   Caminho para o arquivo.

`mode`
:   Permissões no arquivo. Consulte a função [chmod()](function.chmod.md) para obter mais detalhes sobre este parâmetro.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Alterando o modo de um arquivo em um servidor remoto**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');
$sftp = ssh2_sftp($connection);

ssh2_sftp_chmod($sftp, '/somedir/somefile', 0755);
?>
```

### Veja também

- [chmod()](function.chmod.md) - Modifica as permissões do arquivo
- [ssh2\_sftp()](function.ssh2-sftp.md) - Inicializa o subsistema SFTP
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
