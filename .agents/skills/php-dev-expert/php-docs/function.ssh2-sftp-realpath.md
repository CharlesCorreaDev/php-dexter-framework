# Resolve o caminho real de uma string de caminho fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-realpath.php

---

# ssh2\_sftp\_realpath

(PECL ssh2 >= 0.9.0)

ssh2\_sftp\_realpath — Resolve o caminho real de uma string de caminho fornecida

### Descrição

function **ssh2\_sftp\_realpath**([resource](language.types.resource.md) `$sftp`, [string](language.types.string.md) `$filename`): [string](language.types.string.md)|[false](language.types.singleton.md)

Traduz `filename` para o caminho real efetivo
no sistema de arquivos remoto.

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`filename`

### Valor Retornado

Retorna o caminho real como uma string ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Resolvendo um nome de caminho**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'usuario', 'senha');
$sftp = ssh2_sftp($connection);

$realpath = ssh2_sftp_realpath($sftp, '/home/usuario/../../../..//./usr/../etc/passwd');
/* $realpath agora é: '/etc/passwd' */
?>
```

### Veja também

- [realpath()](function.realpath.md) - Retorna o path absoluto canonizado
- [ssh2\_sftp\_symlink()](function.ssh2-sftp-symlink.md) - Cria uma ligação simbólica
- [ssh2\_sftp\_readlink()](function.ssh2-sftp-readlink.md) - Retorna o alvo de uma ligação simbólica

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
