# Cria um novo par de chaves sodium

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-kx-keypair.php

---

# sodium\_crypto\_kx\_keypair

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_kx\_keypair — Cria um novo par de chaves sodium

### Descrição

function **sodium\_crypto\_kx\_keypair**(): [string](language.types.string.md)

Cria um novo par de chaves sodium composto pela chave secreta (32 bytes)
seguida pela chave pública (32 bytes). As chaves podem ser recuperadas chamando
[sodium\_crypto\_kx\_secretkey()](function.sodium-crypto-kx-secretkey.md) e
[sodium\_crypto\_kx\_publickey()](function.sodium-crypto-kx-publickey.md), respectivamente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o novo par de chaves em caso de sucesso; caso contrário, lança uma exceção.

### Examples

**Exemplo #1 **sodium\_crypto\_kx\_keypair()** usage**

Cria um novo par de chaves e recupera a chave secreta e a chave pública dele.

```
<?php
$keypair = sodium_crypto_kx_keypair();
$secret = sodium_crypto_kx_secretkey($keypair);
$public = sodium_crypto_kx_publickey($keypair);
printf("secret: %s\npublic: %s", sodium_bin2hex($secret), sodium_bin2hex($public));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
secret: e7c5c918fdc40762e6000542c0118f4368ce8fd242b0e48c1e17202797a25daf
public: d1f59fda8652caf40ed1a01d2b6f3802b60846986372cd8fa337b7c12c428b18
```

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
