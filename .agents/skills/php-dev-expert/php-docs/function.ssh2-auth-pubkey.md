# Autentica usando uma chave pública em uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-auth-pubkey.php

---

# ssh2\_auth\_pubkey

(PECL ssh2 >= 1.4)

ssh2\_auth\_pubkey — Autentica usando uma chave pública em uma variável

### Descrição

function **ssh2\_auth\_pubkey**(  
    [resource](language.types.resource.md) `$session`,  
    [string](language.types.string.md) `$username`,  
    [string](language.types.string.md) `$pubkey`,  
    [string](language.types.string.md) `$privkey`,  
    [string](language.types.string.md) `$passphrase` = ?  
): [bool](language.types.boolean.md)

Autentica usando uma chave pública em uma variável.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`username`
:   Nome do usuário para autenticação no servidor remoto.

`pubkey`
:   Chave pública no formato do OpenSSH. Deve ser algo como:
    `ssh-rsa AAAAB3NzaC1yc2EAAA....NX6sqSnHA8= rsa-key-20121110`

`privkey`
:   Chave privada OpenSSH. Deve começar com:
    `-----BEGIN RSA PRIVATE KEY-----`

`passphrase`
:   Se `privkey` for criptografada (e deveria
    ser), o parâmetro `passphrase` precisa ser fornecido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Autenticação usando uma chave pública**

```
<?php
$connection = ssh2_connect('shell.example.com', 22, array('hostkey'=>'ssh-rsa'));
$publicKey = file_get_contents('/home/username/.ssh/id_rsa.pub');
$privateKey = file_get_contents('/home/username/.ssh/id_rsa');

if (ssh2_auth_pubkey($connection, 'username',
                     $publicKey,
                     $privateKey, 'secret')) {
  echo "Sucesso na autenticação com chave pública\n";
} else {
  die('Falha na autenticação com chave pública');
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

- [ssh2\_auth\_pubkey\_file()](function.ssh2-auth-pubkey-file.md) - Autentica usando uma chave pública lida de um arquivo

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
