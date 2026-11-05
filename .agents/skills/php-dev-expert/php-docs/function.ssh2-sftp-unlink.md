# Exclui um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-unlink.php

---

# ssh2\_sftp\_unlink

(PECL ssh2 >= 0.9.0)

ssh2\_sftp\_unlink — Exclui um arquivo

### Descrição

function **ssh2\_sftp\_unlink**([resource](language.types.resource.md) `$sftp`, [string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Exclui um arquivo no sistema de arquivos remoto.

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`filename`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Excluindo um arquivo**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'usuario', 'senha');
$sftp = ssh2_sftp($connection);

ssh2_sftp_unlink($sftp, '/home/usuario/arquivo_para_excluir');
?>
```

### Veja também

- [unlink()](function.unlink.md) - Apaga um arquivo

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
