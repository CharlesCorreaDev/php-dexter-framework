# Executa um comando em um servidor remoto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-exec.php

---

# ssh2\_exec

(PECL ssh2 >= 0.9.0)

ssh2\_exec — Executa um comando em um servidor remoto

### Descrição

function **ssh2\_exec**(  
    [resource](language.types.resource.md) `$session`,  
    [string](language.types.string.md) `$command`,  
    [string](language.types.string.md) `$pty` = ?,  
    [array](language.types.array.md) `$env` = ?,  
    [int](language.types.integer.md) `$width` = 80,  
    [int](language.types.integer.md) `$height` = 25,  
    [int](language.types.integer.md) `$width_height_type` = SSH2\_TERM\_UNIT\_CHARS  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Executa um comando na extremidade remota e aloca um canal para ele.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`command`

`pty`

`env`
:   `env` pode ser passado como um array associativo de
    pares nome/valor para definir no ambiente de destino.

`width`
:   Largura do terminal virtual.

`height`
:   Altura do terminal virtual.

`width_height_type`
:   `width_height_type` deve ser um dos seguintes:
    **`SSH2_TERM_UNIT_CHARS`** ou
    **`SSH2_TERM_UNIT_PIXELS`**.

### Valor Retornado

Retorna um fluxo em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Executando um comando**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'username', 'password');

$stream = ssh2_exec($connection, '/usr/local/bin/php -i');
?>
```

### Veja também

- [ssh2\_connect()](function.ssh2-connect.md) - Conecta-se a um servidor SSH
- [ssh2\_shell()](function.ssh2-shell.md) - Solicita um shell interativo
- [ssh2\_tunnel()](function.ssh2-tunnel.md) - Abre um túnel através de um servidor remoto

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
