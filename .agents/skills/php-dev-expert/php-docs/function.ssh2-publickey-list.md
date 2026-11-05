# Lista as chaves públicas atualmente autorizadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-publickey-list.php

---

# ssh2\_publickey\_list

(PECL ssh2 >= 0.10)

ssh2\_publickey\_list — 
Lista as chaves públicas atualmente autorizadas

### Descrição

function **ssh2\_publickey\_list**([resource](language.types.resource.md) `$pkey`): [array](language.types.array.md)

Lista as chaves públicas atualmente autorizadas.

### Parâmetros

`pkey`
:   Recurso do subsistema de chave pública

### Valor Retornado

Retorna um array de chaves indexadas numericamente,
cada uma das quais é um array associativo contendo os
elementos: name, blob e attrs.

**Elementos de chave pública**

| Chave do array | Significado |
| --- | --- |
| name | Nome do algoritmo usado por esta chave pública, por exemplo: `ssh-dss` ou `ssh-rsa`. |
| blob | Blob de chave pública como dados binários brutos. |
| attrs | Atributos atribuídos a esta chave pública. O atributo mais comum, e o único suportado pelos servidores de chave pública versão 1, é `comment`, que pode ser qualquer string de formato livre. |

### Examples

**Exemplo #1 Listando chaves autorizadas com **ssh2\_publickey\_list()****

```
<?php
$ssh2 = ssh2_connect('shell.example.com', 22);
ssh2_auth_password($ssh2, 'jdoe', 'secret');
$pkey = ssh2_publickey_init($ssh2);

$list = ssh2_publickey_list($pkey);

foreach($list as $key) {
  echo "Chave: {$key['name']}\n";
  echo "Blob: " . chunk_split(base64_encode($key['blob']), 40, "\n") . "\n";
  echo "Comentário: {$key['attrs']['comment']}\n\n";
}
?>
```

O exemplo acima produzirá:

```
Chave: ssh-rsa
Blob: AAAAB3NzaC1yc2EAAAABIwAAAIEA5HVt6VqSGd5P
TrLRdjNONxXH1tVFGn0Bd26BF0aCP9qyJRlvdJ3j
4WBeX4ZmrveGrjMgkseSYc4xZ26sDHwfL351xjza
Lpipu\BGRrw17mWVBhuCExo476ri5tQFzbTc54VE
HYckxQ16CjSTibI5X69GmnYC9PNqEYq/1TP+HF10
Comentário: Chave de John

Chave: ssh-rsa
Blob: AAAAB3NzaHVt6VqSGd5C1yc2EAAAABIwA232dnJA
AIEA5HVt6VqSGd5PTrLRdjNONxX/1TP+HF1HVt6V
qSGd50H1tVFGn0BB3NzaC1yc2EAd26BF0aCP9qyJ
RlvdJ3j4WBeX4ZmrveGrjMgkseSYc4xZ26HVt6Vq
SGd5sDHwfL351xjzaLpipu\BGB3NzaC1yc2EA/1T
Comentário: Chave de Alice
```

### Notas

> **Nota**:
>
> O subsistema de chave pública
> é usado para gerenciar chaves públicas em um servidor no qual o cliente
> *já está* autenticado. Para autenticar em um servidor remoto
> usando autenticação com chave pública, use a função
> [ssh2\_auth\_pubkey\_file()](function.ssh2-auth-pubkey-file.md).

### Veja também

- [ssh2\_publickey\_init()](function.ssh2-publickey-init.md) - Inicializa o subsistema de chave pública
- [ssh2\_publickey\_add()](function.ssh2-publickey-add.md) - Adiciona uma chave pública autorizada
- [ssh2\_publickey\_remove()](function.ssh2-publickey-remove.md) - Remove uma chave pública autorizada

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
