# Solicita um shell interativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-shell.php

---

# ssh2\_shell

(PECL ssh2 >= 0.9.0)

ssh2\_shell — Solicita um shell interativo

### Descrição

function **ssh2\_shell**(  
    [resource](language.types.resource.md) `$session`,  
    [string](language.types.string.md) `$termtype` = "vanilla",  
    [?](language.types.null.md)[array](language.types.array.md) `$env` = **`null`**,  
    [int](language.types.integer.md) `$width` = 80,  
    [int](language.types.integer.md) `$height` = 25,  
    [int](language.types.integer.md) `$width_height_type` = SSH2\_TERM\_UNIT\_CHARS  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Abre um shell na extremidade remota e aloca um fluxo para ele.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`termtype`
:   `termtype` deve corresponder a uma das
    entradas no arquivo `/etc/termcap` do sistema de destino.

`env`
:   `env` pode ser passado como um array associativo de
    pares nome/valor para definir no ambiente de destino.

`width`
:   Largura do terminal virtual.

`height`
:   Altura do terminal virtual.

`width_height_type`
:   `width_height_type` deve ser uma das constantes
    **`SSH2_TERM_UNIT_CHARS`** ou
    **`SSH2_TERM_UNIT_PIXELS`**.

### Valor Retornado

Retorna um [resource](language.types.resource.md) de fluxo em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Solicitando um shell interativo**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'usuario', 'senha');

$stream = ssh2_shell($connection, 'vt102', null, 80, 24, SSH2_TERM_UNIT_CHARS);
?>
```

### Veja também

- [ssh2\_exec()](function.ssh2-exec.md) - Executa um comando em um servidor remoto
- [ssh2\_tunnel()](function.ssh2-tunnel.md) - Abre um túnel através de um servidor remoto
- [ssh2\_fetch\_stream()](function.ssh2-fetch-stream.md) - Busca um fluxo de dados estendido

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
