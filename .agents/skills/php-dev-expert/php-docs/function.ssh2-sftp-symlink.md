# Cria uma ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-symlink.php

---

# ssh2\_sftp\_symlink

(PECL ssh2 >= 0.9.0)

ssh2\_sftp\_symlink — Cria uma ligação simbólica

### Descrição

function **ssh2\_sftp\_symlink**([resource](language.types.resource.md) `$sftp`, [string](language.types.string.md) `$target`, [string](language.types.string.md) `$link`): [bool](language.types.boolean.md)

Cria uma ligação simbólica chamada `link` no sistema de arquivos
remoto, apontando para `target`.

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`target`
:   Alvo da ligação simbólica.

`link`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Criando uma ligação simbólica**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'usuario', 'senha');
$sftp = ssh2_sftp($connection);

ssh2_sftp_symlink($sftp, '/var/run/mysql.sock', '/tmp/mysql.sock');
?>
```

### Veja também

- [ssh2\_sftp\_readlink()](function.ssh2-sftp-readlink.md) - Retorna o alvo de uma ligação simbólica
- [symlink()](function.symlink.md) - Cria uma ligação simbólica

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
