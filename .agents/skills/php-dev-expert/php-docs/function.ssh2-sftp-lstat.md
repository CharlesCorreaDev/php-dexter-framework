# Estatísticas de uma ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-lstat.php

---

# ssh2\_sftp\_lstat

(PECL ssh2 >= 0.9.0)

ssh2\_sftp\_lstat — Estatísticas de uma ligação simbólica

### Descrição

function **ssh2\_sftp\_lstat**([resource](language.types.resource.md) `$sftp`, [string](language.types.string.md) `$path`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obter estatísticas de uma ligação simbólica no sistema de arquivos remoto *sem*
seguir a ligação.

Esta função é semelhante ao uso da função [lstat()](function.lstat.md)
com o empacotador [ssh2.sftp://](wrappers.ssh2.md)
e retorna os mesmos valores.

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`path`
:   Caminho para a ligação simbólica remota.

### Valor Retornado

Retorna um array de estatísticas para a ligação simbólica informada em caso de sucesso ou **`false`** em caso de falha.
Consulte a documentação de [stat()](function.stat.md) para obter detalhes sobre os
valores que podem ser retornados.

### Examples

**Exemplo #1 Obtendo dados de uma ligação simbólica via SFTP**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');

$sftp = ssh2_sftp($connection);
$statinfo = ssh2_sftp_lstat($sftp, '/caminho/para/ligacao_simbolica');

$filesize = $statinfo['size'];
$group = $statinfo['gid'];
$owner = $statinfo['uid'];
$atime = $statinfo['atime'];
$mtime = $statinfo['mtime'];
$mode = $statinfo['mode'];
?>
```

### Veja também

- [ssh2\_sftp\_stat()](function.ssh2-sftp-stat.md) - Obtém estatísticas de um arquivo em um sistema de arquivos remoto
- [lstat()](function.lstat.md) - Obtém informações sobre um arquivo ou ligação simbólica
- [stat()](function.stat.md) - Obtém informações sobre um arquivo

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
