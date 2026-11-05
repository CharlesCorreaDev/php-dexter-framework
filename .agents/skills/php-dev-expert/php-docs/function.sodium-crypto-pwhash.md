# Deriva uma chave de uma senha, usando Argon2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-pwhash.php

---

# sodium\_crypto\_pwhash

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_pwhash — Deriva uma chave de uma senha, usando Argon2

### Descrição

function **sodium\_crypto\_pwhash**(  
    [int](language.types.integer.md) `$length`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`,  
    [string](language.types.string.md) `$salt`,  
    [int](language.types.integer.md) `$opslimit`,  
    [int](language.types.integer.md) `$memlimit`,  
    [int](language.types.integer.md) `$algo` = **`SODIUM_CRYPTO_PWHASH_ALG_DEFAULT`**  
): [string](language.types.string.md)

Esta função fornece acesso de baixo nível à função de derivação de chaves crypto\_pwhash do libsodium. A menos que haja um motivo específico para usar esta função, deve-se usar as funções [sodium\_crypto\_pwhash\_str()](function.sodium-crypto-pwhash-str.md) ou [password\_hash()](function.password-hash.md).

Um motivo comum para usar essa função específica é derivar as sementes para chaves criptográficas a partir de uma senha e um salt,
e então usar essas sementes para gerar as chaves reais necessárias para algum propósito (por exemplo, [sodium\_crypto\_sign\_detached()](function.sodium-crypto-sign-detached.md)).

### Parâmetros

`length`
:   [int](language.types.integer.md); O comprimento do hash da senha a ser gerado, em bytes.

`password`
:   [string](language.types.string.md); A senha para a qual será gerado um hash.

`salt`
:   Um salt para adicionar à senha antes do hash. O sal deve ser imprevisível, idealmente gerado a partir de uma boa fonte de números aleatórios, como [random\_bytes()](function.random-bytes.md), e ter um comprimento de exatamente **`SODIUM_CRYPTO_PWHASH_SALTBYTES`** bytes.

`opslimit`
:   Representa uma quantidade máxima de cálculos a serem realizados. Aumentar esse número fará com que a função exija mais ciclos de CPU para calcular uma chave. Existem algumas constantes disponíveis para definir o limite de operações para valores apropriados, dependendo do uso pretendido, em ordem de intensidade: **`SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE`**, **`SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE`** e **`SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE`**.

`memlimit`
:   A quantidade máxima de RAM que a função utilizará, em bytes. Existem constantes para ajudar você a escolher um valor apropriado, em ordem de tamanho: **`SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE`**, **`SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE`** e **`SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE`**. Normalmente, elas devem ser pareadas com os valores `opslimit` correspondentes.

`algo`
:   [int](language.types.integer.md) Um número que indica o algoritmo de hash a ser usado. Por padrão, **`SODIUM_CRYPTO_PWHASH_ALG_DEFAULT`** (o algoritmo atualmente recomendado, que pode mudar de uma versão do libsodium para outra), ou explicitamente usando **`SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13`**, representando o algoritmo Argon2id versão 1.3.

### Valor Retornado

Retorna a chave derivada. O valor de retorno é uma string binária do hash, não uma representação codificada em ASCII, e não contém informações adicionais sobre os parâmetros usados ​​para criar o hash. Portanto, você precisará manter essas informações se for verificar a senha no futuro. Use [sodium\_crypto\_pwhash\_str()](function.sodium-crypto-pwhash-str.md) para evitar a necessidade de fazer tudo isso.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_pwhash()****

```
<?php
// Precisamos manter o salt se quisermos verificar essa senha
$salt = random_bytes(SODIUM_CRYPTO_PWHASH_SALTBYTES);
// Usando bin2hex para manter a saída legível
echo bin2hex(
    sodium_crypto_pwhash(
        16, // == 128 bits
        'password',
        $salt,
        SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE,
        SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE,
        SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13
    )
);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
a18f346ba57992eb7e4ae6abf3fd30ee
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
