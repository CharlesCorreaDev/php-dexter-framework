# Adiciona uma chave pública autorizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-publickey-add.php

---

# ssh2\_publickey\_add

(PECL ssh2 >= 0.10)

ssh2\_publickey\_add — 
Adiciona uma chave pública autorizada

### Descrição

function **ssh2\_publickey\_add**(  
    [resource](language.types.resource.md) `$pkey`,  
    [string](language.types.string.md) `$algoname`,  
    [string](language.types.string.md) `$blob`,  
    [bool](language.types.boolean.md) `$overwrite` = **`false`**,  
    [array](language.types.array.md) `$attributes` = ?  
): [bool](language.types.boolean.md)

> **Nota**:
>
> O subsistema de chave pública
> é usado para gerenciar chaves públicas em um servidor no qual o cliente
> *já está* autenticado. Para autenticar em um servidor remoto
> usando autenticação com chave pública, use a função
> [ssh2\_auth\_pubkey\_file()](function.ssh2-auth-pubkey-file.md).

### Parâmetros

`pkey`
:   Recurso do subsistema de chave pública criado por [ssh2\_publickey\_init()](function.ssh2-publickey-init.md).

`algoname`
:   Algoritmo de chave pública (por exemplo): ssh-dss, ssh-rsa

`blob`
:   Blob de chave pública como dados binários brutos

`overwrite`
:   Se a chave especificada já existir, ela deverá ser substituída?

`attributes`
:   Array associativo de atributos a serem atribuídos a esta chave pública.
    Consulte ietf-secsh-publickey-subsystem para obter uma lista de atributos suportados.
    Para marcar um atributo como obrigatório, coloque um asterisco antes do seu nome.
    Se o servidor não suportar um atributo marcado como obrigatório,
    o processo de adição será abortado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Adicionando uma chave pública com **ssh2\_publickey\_add()****

```
<?php
$ssh2 = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($ssh2, 'jdoe', 'password');
$pkey = ssh2_publickey_init($ssh2);

$keyblob = base64_decode('
AAAAB3NzaC1yc2EAAAABIwAAAIEA5HVt6VqSGd5PTrLRdjNONxXH1tVFGn0
Bd26BF0aCP9qyJRlvdJ3j4WBeX4ZmrveGrjMgkseSYc4xZ26sDHwfL351xj
zaLpipu\BGRrw17mWVBhuCExo476ri5tQFzbTc54VEHYckxQ16CjSTibI5X
69GmnYC9PNqEYq/1TP+HF10=');

ssh2_publickey_add($pkey, 'ssh-rsa', $keyblob, false, array('comment'=>"Chave de John"));
?>
```

### Veja também

- [ssh2\_publickey\_init()](function.ssh2-publickey-init.md) - Inicializa o subsistema de chave pública
- [ssh2\_publickey\_remove()](function.ssh2-publickey-remove.md) - Remove uma chave pública autorizada
- [ssh2\_publickey\_list()](function.ssh2-publickey-list.md) - Lista as chaves públicas atualmente autorizadas

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
