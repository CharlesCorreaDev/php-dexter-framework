# Retorna o alvo de uma ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-readlink.php

---

# ssh2\_sftp\_readlink

(PECL ssh2 >= 0.9.0)

ssh2\_sftp\_readlink — Retorna o alvo de uma ligação simbólica

### Descrição

function **ssh2\_sftp\_readlink**([resource](language.types.resource.md) `$sftp`, [string](language.types.string.md) `$link`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o alvo de uma ligação simbólica.

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`link`
:   Caminho da ligação simbólica.

### Valor Retornado

Retorna o destino da ligação simbólica do parâmetro `link` ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Lendo uma ligação simbólica**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');
$sftp = ssh2_sftp($connection);

$target = ssh2_sftp_readlink($sftp, '/tmp/mysql.sock');
/* $target agora é (por exemplo): '/var/run/mysql.sock' */
?>
```

### Veja também

- [readlink()](function.readlink.md) - Retornar o alvo de uma ligação simbólica
- [ssh2\_sftp\_symlink()](function.ssh2-sftp-symlink.md) - Cria uma ligação simbólica

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
