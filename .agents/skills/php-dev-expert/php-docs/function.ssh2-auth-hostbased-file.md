# Autentica usando uma chave de host pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-auth-hostbased-file.php

---

# ssh2\_auth\_hostbased\_file

(PECL ssh2 >= 0.9.0)

ssh2\_auth\_hostbased\_file — Autentica usando uma chave de host pública

### Descrição

function **ssh2\_auth\_hostbased\_file**(  
    [resource](language.types.resource.md) `$session`,  
    [string](language.types.string.md) `$username`,  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$pubkeyfile`,  
    [string](language.types.string.md) `$privkeyfile`,  
    [string](language.types.string.md) `$passphrase` = ?,  
    [string](language.types.string.md) `$local_username` = ?  
): [bool](language.types.boolean.md)

Autentica usando uma chave de host pública lida de um arquivo.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`username`

`hostname`

`pubkeyfile`

`privkeyfile`

`passphrase`
:   Se `privkeyfile` estiver criptografado (o que deveria
    estar), a senha deverá ser fornecida neste parâmetro.

`local_username`
:   Se `local_username` for omitido, o valor
    de `username` será usado para ele.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Autenticação usando uma chave de host pública**

```
<?php
$connection = ssh2_connect('shell.example.com', 22, array('hostkey'=>'ssh-rsa'));

if (ssh2_auth_hostbased_file($connection, 'remoteusername', 'myhost.example.com',
                             '/usr/local/etc/hostkey_rsa.pub',
                             '/usr/local/etc/hostkey_rsa', 'secret',
                             'localusername')) {
  echo "Autenticação baseada em host de chave pública bem-sucedida\n";
} else {
  die('Falha na autenticação baseada em host de chave pública');
}
?>
```

### Notas

> **Nota**:
>
> **ssh2\_auth\_hostbased\_file()** requer libssh2 >= 0.7 e
> PHP/SSH2 >= 0.7

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
