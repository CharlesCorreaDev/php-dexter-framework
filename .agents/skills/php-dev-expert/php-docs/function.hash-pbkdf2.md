# Gera uma derivação de chave PBKDF2 de uma senha fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-pbkdf2.php

---

# hash\_pbkdf2

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

hash\_pbkdf2 — Gera uma derivação de chave PBKDF2 de uma senha fornecida

### Descrição

function **hash\_pbkdf2**(  
    [string](language.types.string.md) `$algo`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`,  
    [string](language.types.string.md) `$salt`,  
    [int](language.types.integer.md) `$iterations`,  
    [int](language.types.integer.md) `$length` = 0,  
    [bool](language.types.boolean.md) `$binary` = **`false`**,  
    [array](language.types.array.md) `$options` = []  
): [string](language.types.string.md)

### Parâmetros

`algo`
:   Nome do algoritmo de hash selecionado (por exemplo, `"sha256"`).
    Para uma lista de algoritmos suportados, veja [hash\_hmac\_algos()](function.hash-hmac-algos.md).
    > **Nota**:
    >
    > Funções de hash não criptográficas não são permitidas.

`password`
:   A senha a ser usada para a derivação.

`salt`
:   O salt a ser usado para a derivação. Este valor deve ser gerado aleatoriamente.

`iterations`
:   O número de iterações internas a serem executadas para a derivação.

`length`
:   O comprimento da string de saída. Se `binary`
    for **`true`** isso corresponde ao comprimento em bytes da chave derivada, se
    `binary` for **`false`** isso corresponde ao dobro do
    comprimento em bytes da chave derivada (pois cada byte da chave é retornado como
    dois caracteres hexadecimais).

    Se `0` for passado, toda a saída do algoritmo
    fornecido será usada.

`binary`
:   Quando definido como **`true`**, gera dados binários brutos. **`false`** gera caracteres
    hexadecimais minúsculos.

`options`
:   Um array de opções para os vários algoritmos de hash.
    Atualmente, apenas a chave `"seed"` é
    suportada pelas variantes MurmurHash.

### Valor Retornado

Retorna uma string contendo a chave derivada como hexadecimais minúsculos, a menos que
`binary` esteja definido como **`true`**, nesse caso, a representação binária bruta
da chave derivada é retornada.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se o algoritmo for
desconhecido, o parâmetro `iterations` for menor ou
igual a `0`, o parâmetro `length` for menor
que `0` ou o parâmetro `salt` for muito longo
(maior que **`INT_MAX`** `- 4`).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora lança uma exceção [ValueError](class.valueerror.md) em caso de erro. Anteriormente, **`false`** era retornado e uma mensagem **`E_WARNING`** era emitida. |
| 7.2.0 | O uso de funções de hash não criptográficas (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) foi desabilitado. |

### Examples

**Exemplo #1 Exemplo de **hash\_pbkdf2()**, uso básico**

```
<?php
$password = "password";
$iterations = 600000;

// Gera um salt aleatório criptograficamente seguro usando random_bytes()
$salt = random_bytes(16);

$hash = hash_pbkdf2("sha256", $password, $salt, $iterations, 20);
var_dump($hash);

// para binário bruto, $length precisa ser reduzido pela metade para resultados equivalentes
$hash = hash_pbkdf2("sha256", $password, $salt, $iterations, 10, true);
var_dump(bin2hex($hash));?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(20) "120fb6cffcf8b32c43e7"
string(20) "120fb6cffcf8b32c43e7"
```

### Notas

**Cuidado**

O método PBKDF2 pode ser usado para fazer hash de senhas para armazenamento. No entanto,
deve ser notado que [password\_hash()](function.password-hash.md) ou
[crypt()](function.crypt.md) com **`CRYPT_BLOWFISH`** são
mais adequados para armazenamento de senhas.

### Veja também

- [password\_hash()](function.password-hash.md) - Cria um hash de senha
- [hash\_hkdf()](function.hash-hkdf.md) - Gera uma derivação de chave HKDF de uma entrada de chave fornecida
- [sodium\_crypto\_pwhash()](function.sodium-crypto-pwhash.md) - Deriva uma chave de uma senha, usando Argon2

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
