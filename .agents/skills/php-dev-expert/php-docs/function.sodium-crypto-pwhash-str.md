# Obtém um hash codificado em ASCII

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-pwhash-str.php

---

# sodium\_crypto\_pwhash\_str

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_pwhash\_str — Obtém um hash codificado em ASCII

### Descrição

function **sodium\_crypto\_pwhash\_str**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`, [int](language.types.integer.md) `$opslimit`, [int](language.types.integer.md) `$memlimit`): [string](language.types.string.md)

Usa um algoritmo de hash de alta capacidade de CPU e memória, juntamente com um salt gerado aleatoriamente e limites de memória e CPU para gerar um hash codificado em ASCII adequado para armazenamento de senhas.

### Parâmetros

`password`
:   [string](language.types.string.md); A senha para a qual será gerado um hash.

`opslimit`
:   Representa uma quantidade máxima de cálculos a serem realizados. Aumentar esse número fará com que a função exija mais ciclos de CPU para calcular uma chave. Há constantes disponíveis para definir o limite de operações para valores apropriados, dependendo do uso pretendido, em ordem de intensidade: **`SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE`**, **`SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE`** e **`SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE`**.

`memlimit`
:   A quantidade máxima de RAM que a função utilizará, em bytes. Existem constantes para ajudar a escolher um valor apropriado, em ordem de tamanho: **`SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE`**, **`SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE`** e **`SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE`**. Normalmente, eles devem ser pareados com os valores de opslimit correspondentes.

### Valor Retornado

Retorna a senha com hash.

Para produzir o mesmo hash de senha a partir da mesma senha, os mesmos valores para `opslimit` e `memlimit` devem ser usados. Eles são incorporados ao hash gerado, portanto,
tudo o que é necessário para verificar o hash está incluído. Isso permite
que a função [sodium\_crypto\_pwhash\_str\_verify()](function.sodium-crypto-pwhash-str-verify.md) verifique o hash sem
precisar de armazenamento separado para os outros parâmetros.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_pwhash\_str()****

```
<?php
$password = 'password';
echo sodium_crypto_pwhash_str(
    $password,
    SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE,
    SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE
);
```

O exemplo acima produzirá
algo semelhante a:

```
$argon2id$v=19$m=65536,t=2,p=1$oWIfdaXwWwhVmovOBc2NAQ$EbsZ+JnZyyavkafS0hoc4HdaOB0ILWZESAZ7kVGa+Iw
```

### Notas

> **Nota**:
>
> Os hashes são calculados usando o algoritmo Argon2ID,
> fornecendo resistência a ataques de GPU e de canal lateral.
> Ao contrário da função [password\_hash()](function.password-hash.md),
> não há parâmetro salt (um salt é gerado automaticamente),
> e os parâmetros `opslimit` e
> `memlimit` não são opcionais.

### Veja também

- [sodium\_crypto\_pwhash\_str\_verify()](function.sodium-crypto-pwhash-str-verify.md) - Verifica se uma senha corresponde a um hash
- [sodium\_crypto\_pwhash()](function.sodium-crypto-pwhash.md) - Deriva uma chave de uma senha, usando Argon2
- [password\_hash()](function.password-hash.md) - Cria um hash de senha
- [password\_verify()](function.password-verify.md) - Verifica se uma senha corresponde a um hash
- [» Libsodium Argon2 docs](https://doc.libsodium.org/password_hashing/default_phf)

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
