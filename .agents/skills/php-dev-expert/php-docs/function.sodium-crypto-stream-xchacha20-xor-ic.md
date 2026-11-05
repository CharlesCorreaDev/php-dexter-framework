# Criptografa uma mensagem usando um nonce e uma chave secreta (sem autenticação)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-stream-xchacha20-xor-ic.php

---

# sodium\_crypto\_stream\_xchacha20\_xor\_ic

(PHP 8 >= 8.2.0)

sodium\_crypto\_stream\_xchacha20\_xor\_ic — Criptografa uma mensagem usando um nonce e uma chave secreta (sem autenticação)

### Descrição

function **sodium\_crypto\_stream\_xchacha20\_xor\_ic**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`,  
    [string](language.types.string.md) `$nonce`,  
    [int](language.types.integer.md) `$counter`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`  
): [string](language.types.string.md)

A função é semelhante a [sodium\_crypto\_stream\_xchacha20\_xor()](function.sodium-crypto-stream-xchacha20-xor.md)
mas adiciona a capacidade de definir o valor inicial do contador de blocos como um valor diferente de zero.
Isso permite acesso direto a qualquer bloco sem precisar calcular os anteriores.

**Cuidado**

Esta criptografia não é autenticada e não impede ataques de texto cifrado escolhido.
Certifique-se de combinar o texto cifrado com um Código de Autenticação de Mensagem,
por exemplo, com a função [sodium\_crypto\_aead\_xchacha20poly1305\_ietf\_encrypt()](function.sodium-crypto-aead-xchacha20poly1305-ietf-encrypt.md),
ou [sodium\_crypto\_auth()](function.sodium-crypto-auth.md).

### Parâmetros

`message`
:   A mensagem a criptografar.

`nonce`
:   Nonce de 24 bytes.

`counter`
:   O valor inicial do contador de blocos.

`key`
:   Chave, possivelmente gerada por [sodium\_crypto\_stream\_xchacha20\_keygen()](function.sodium-crypto-stream-xchacha20-keygen.md).

### Valor Retornado

Mensagem criptografada.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_stream\_xchacha20\_xor\_ic()****

```
<?php
$n2 = random_bytes(SODIUM_CRYPTO_STREAM_XCHACHA20_NONCEBYTES);
$left  = str_repeat("\x01", 64);
$right = str_repeat("\xfe", 64);

// Tudo de uma vez só:
$stream7_unified = sodium_crypto_stream_xchacha20_xor($left . $right, $n2, $key);

// Parte por parte, com contador inicial:
$stream7_left  = sodium_crypto_stream_xchacha20_xor_ic($left, $n2, 0, $key);
$stream7_right = sodium_crypto_stream_xchacha20_xor_ic($right, $n2, 1, $key);
$stream7_concat = $stream7_left . $stream7_right;

var_dump(strlen($stream7_concat));
var_dump($stream7_unified === $stream7_concat);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(128)
bool(true)
```

### Veja também

- [sodium\_crypto\_stream\_xchacha20\_xor()](function.sodium-crypto-stream-xchacha20-xor.md) - Criptografa uma mensagem usando um nonce e uma chave secreta (sem autenticação)

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
