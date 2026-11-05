# Cria um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-sftp-mkdir.php

---

# ssh2\_sftp\_mkdir

(PECL ssh2 >= 0.9.0)

ssh2\_sftp\_mkdir — Cria um diretório

### Descrição

function **ssh2\_sftp\_mkdir**(  
    [resource](language.types.resource.md) `$sftp`,  
    [string](language.types.string.md) `$dirname`,  
    [int](language.types.integer.md) `$mode` = 0777,  
    [bool](language.types.boolean.md) `$recursive` = **`false`**  
): [bool](language.types.boolean.md)

Cria um diretório no servidor de arquivos remoto com permissões definidas para
`mode`.

Esta função é semelhante ao uso de [mkdir()](function.mkdir.md) com o empacotador
[ssh2.sftp://](wrappers.ssh2.md).

### Parâmetros

`sftp`
:   Um recurso SSH2 SFTP aberto por [ssh2\_sftp()](function.ssh2-sftp.md).

`dirname`
:   Caminho do novo diretório.

`mode`
:   Permissões no novo diretório.
    O modo atual é afetado pela umask atual.

`recursive`
:   Se `recursive` for **`true`**, quaisquer diretórios pais
    necessários para `dirname` também serão criados automaticamente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Criando um diretório em um servidor remoto**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($connection, 'usuario', 'senha');
$sftp = ssh2_sftp($connection);

ssh2_sftp_mkdir($sftp, '/home/usuario/novodir');
/* Or:  mkdir("ssh2.sftp://$sftp/home/usuario/novodir"); */
?>
```

### Veja também

- [mkdir()](function.mkdir.md) - Cria um diretório
- [ssh2\_sftp\_rmdir()](function.ssh2-sftp-rmdir.md) - Remove um diretório

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
