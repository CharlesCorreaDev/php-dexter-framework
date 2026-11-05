# Autentica usando uma chave pública lida de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-auth-pubkey-file.php

---

# ssh2\_auth\_pubkey\_file

(PECL ssh2 >= 0.9.0)

ssh2\_auth\_pubkey\_file — Autentica usando uma chave pública lida de um arquivo

### Descrição

function **ssh2\_auth\_pubkey\_file**(  
    [resource](language.types.resource.md) `$session`,  
    [string](language.types.string.md) `$username`,  
    [string](language.types.string.md) `$pubkeyfile`,  
    [string](language.types.string.md) `$privkeyfile`,  
    [string](language.types.string.md) `$passphrase` = ?  
): [bool](language.types.boolean.md)

Autentica usando uma chave pública lida de um arquivo.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`username`
:   Nome do usuário para autenticação no servidor remoto.

`pubkeyfile`
:   O arquivo de chave pública precisa estar no formato OpenSSH. Deve ser algo como:

    ssh-rsa AAAAB3NzaC1yc2EAAA....NX6sqSnHA8= rsa-key-20121110

`privkeyfile`

`passphrase`
:   Se `privkeyfile` estiver criptografado (o que deveria
    estar), a senha `passphrase` deverá ser fornecida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Autenticação usando uma chave pública**

```
<?php
$connection = ssh2_connect('shell.example.com', 22, array('hostkey'=>'ssh-rsa'));

if (ssh2_auth_pubkey_file($connection, 'username',
                          '/home/username/.ssh/id_rsa.pub',
                          '/home/username/.ssh/id_rsa', 'secret')) {
  echo "Autenticação de chave pública bem-sucedida\n";
} else {
  die('Falha na autenticação da chave pública');
}
?>
```

### Notas

> **Nota**:
>
> A biblioteca libssh subjacente não suporta autenticações parciais de forma muito clara.
> Ou seja, se for necessário fornecer uma chave pública e uma senha,
> parecerá que esta função falhou. Neste caso específico, uma falha
> desta chamada pode significar apenas que a autenticação ainda não foi concluída.
> É preciso ignorar esta falha, continuar e chamar
> [ssh2\_auth\_password()](function.ssh2-auth-password.md) para concluir
> a autenticação.

### Veja também

- [ssh2\_auth\_pubkey()](function.ssh2-auth-pubkey.md) - Autentica usando uma chave pública em uma variável

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
