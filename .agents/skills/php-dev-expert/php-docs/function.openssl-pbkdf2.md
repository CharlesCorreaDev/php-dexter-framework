# Gera uma string PKCS5 v2 PBKDF2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pbkdf2.php

---

# openssl\_pbkdf2

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

openssl\_pbkdf2 — Gera uma string PKCS5 v2 PBKDF2

### Descrição

function **openssl\_pbkdf2**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`,  
    [string](language.types.string.md) `$salt`,  
    [int](language.types.integer.md) `$key_length`,  
    [int](language.types.integer.md) `$iterations`,  
    [string](language.types.string.md) `$digest_algo` = "sha1"  
): [string](language.types.string.md)|[false](language.types.singleton.md)

**openssl\_pbkdf2()** calcula PBKDF2 (Função 2 de derivação de chave baseada em senha),
uma função de derivação de chave definida em PKCS5 v2.

### Parâmetros

`password`
:   Senha a partir da qual a chave derivada é gerada.

`salt`
:   PBKDF2 recomenda um sal criptográfico de pelo menos 128 bits (16 bytes).

`key_length`
:   Comprimento da chave de saída desejada.

`iterations`
:   O número de iterações desejadas.
    [» O NIST
    recomenda pelo menos 1.000](https://nvlpubs.nist.gov/nistpubs/Legacy/SP/nistspecialpublication800-132.pdf). A partir de 2023, a OWASP recomenda 600.000 iterações para
    PBKDF2-HMAC-SHA256 e 210.000 para PBKDF2-HMAC-SHA512.

`digest_algo`
:   Algoritmo opcional de hash ou de resumo de [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md). O padrão
    é SHA-1. Recomenda-se configurá-lo para SHA-256 ou SHA-512.

### Valor Retornado

Retorna string binária bruta ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de openssl\_pbkdf2()**

```
<?php
$password = 'password';
$salt = openssl_random_pseudo_bytes(16);
$keyLength = 20;
$iterations = 600000;
$generated_key = openssl_pbkdf2($password, $salt, $keyLength, $iterations, 'sha256');
echo bin2hex($generated_key)."\n";
echo base64_encode($generated_key)."\n";
?>
```

### Veja também

- [hash\_pbkdf2()](function.hash-pbkdf2.md) - Gera uma derivação de chave PBKDF2 de uma senha fornecida
- [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md) - Obtém métodos de resumo disponíveis

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
