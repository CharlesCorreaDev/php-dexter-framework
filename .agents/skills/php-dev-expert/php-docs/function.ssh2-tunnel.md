# Abre um túnel através de um servidor remoto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-tunnel.php

---

# ssh2\_tunnel

(PECL ssh2 >= 0.9.0)

ssh2\_tunnel — Abre um túnel através de um servidor remoto

### Descrição

function **ssh2\_tunnel**([resource](language.types.resource.md) `$session`, [string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port`): [resource](language.types.resource.md)

Abre um fluxo de soquete para um host/porta arbitrário por meio do servidor SSH
conectado no momento.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`host`

`port`

### Valor Retornado

### Examples

**Exemplo #1 Abrindo um túnel para um host arbitrário**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_pubkey_file($connection, 'usuario', 'id_dsa.pub', 'id_dsa');

$tunnel = ssh2_tunnel($connection, '10.0.0.101', 12345);
?>
```

### Veja também

- [ssh2\_connect()](function.ssh2-connect.md) - Conecta-se a um servidor SSH
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet

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
