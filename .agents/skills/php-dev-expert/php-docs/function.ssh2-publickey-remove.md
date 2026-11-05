# Remove uma chave pública autorizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-publickey-remove.php

---

# ssh2\_publickey\_remove

(PECL ssh2 >= 0.10)

ssh2\_publickey\_remove — 
Remove uma chave pública autorizada

### Descrição

function **ssh2\_publickey\_remove**([resource](language.types.resource.md) `$pkey`, [string](language.types.string.md) `$algoname`, [string](language.types.string.md) `$blob`): [bool](language.types.boolean.md)

Remove uma chave pública autorizada.

### Parâmetros

`pkey`
:   Recurso do subsistema de chave pública

`algoname`
:   Algoritmo de chave pública (por exemplo): ssh-dss, ssh-rsa

`blob`
:   Blob de chave pública como dados binários brutos

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
