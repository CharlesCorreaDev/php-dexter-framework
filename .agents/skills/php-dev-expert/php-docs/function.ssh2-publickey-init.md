# Inicializa o subsistema de chave pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-publickey-init.php

---

# ssh2\_publickey\_init

(PECL ssh2 >= 0.10)

ssh2\_publickey\_init — 
Inicializa o subsistema de chave pública

### Descrição

function **ssh2\_publickey\_init**([resource](language.types.resource.md) `$session`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Solicita o subsistema de chave pública de um servidor SSH2 já conectado.

O subsistema de chave pública permite que um cliente já conectado e autenticado
gerencie a lista de chaves públicas autorizadas armazenadas no
servidor de destino de forma independente da implementação.
Se o servidor remoto não suportar o subsistema de chave pública,
a função **ssh2\_publickey\_init()** retornará **`false`**.

### Parâmetros

`session`

### Valor Retornado

Retorna um recurso `SSH2 Publickey Subsystem` para uso
com todos os outros métodos ssh2\_publickey\_\*() ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> O subsistema de chave pública
> é usado para gerenciar chaves públicas em um servidor no qual o cliente
> *já está* autenticado. Para autenticar em um servidor remoto
> usando autenticação com chave pública, use a função
> [ssh2\_auth\_pubkey\_file()](function.ssh2-auth-pubkey-file.md).

### Veja também

- [ssh2\_publickey\_add()](function.ssh2-publickey-add.md) - Adiciona uma chave pública autorizada
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
