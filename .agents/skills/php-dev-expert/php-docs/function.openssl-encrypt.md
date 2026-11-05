# Criptografa dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-encrypt.php

---

# openssl\_encrypt

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

openssl\_encrypt — Criptografa dados

### Descrição

function **openssl\_encrypt**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$cipher_algo`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$passphrase`,  
    [int](language.types.integer.md) `$options` = 0,  
    [string](language.types.string.md) `$iv` = "",  
    [string](language.types.string.md) `&$tag` = **`null`**,  
    [string](language.types.string.md) `$aad` = "",  
    [int](language.types.integer.md) `$tag_length` = 16  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Criptografa dados fornecidos com determinado método e senha, retorna uma
string bruta ou codificada em base64.

### Parâmetros

`data`
:   Os dados da mensagem de texto simples a serem criptografados.

`cipher_algo`
:   O método de criptografia. Para obter uma lista de métodos de criptografia disponíveis, use [openssl\_get\_cipher\_methods()](function.openssl-get-cipher-methods.md).

`passphrase`
:   A senha. Se a senha for menor que o esperado, ela será preenchida silenciosamente com
    caracteres `NUL`; se a senha for maior que o esperado, ela será
    truncada silenciosamente.

    **Cuidado**

    Não há função de derivação de chave usada para `passphrase` como o próprio
    nome pode sugerir. A única operação utilizada é o preenchimento com caracteres `NUL`
    ou truncamento se o comprimento for diferente do esperado.

`options`
:   `options` é uma disjunção binária das opções
    **`OPENSSL_RAW_DATA`** e
    **`OPENSSL_ZERO_PADDING`**
    e **`OPENSSL_DONT_ZERO_PAD_KEY`**.

    Quando **`OPENSSL_RAW_DATA`** estiver definido,
    a saída criptografada será retornada como dados binários brutos. Quando não estiver definido,
    o valor de retorno será codificado em Base64.

`iv`
:   Um Vetor de Inicialização não-**`null`**. Se for menor que o esperado, será preenchido com
    caracteres `NUL` e um alerta será emitido; se for maior que o
    o esperado, será truncado e um alerta será emitido.

`tag`
:   A etiqueta de autenticação passada por referência ao usar o modo de criptografia AEAD (GCM ou CCM).

`aad`
:   Dados autenticados adicionais.

`tag_length`
:   O comprimento da etiqueta de autenticação (parâmetro `tag`). Seu valor pode estar entre 4 e 16 para o modo GCM.

### Valor Retornado

Retorna a string criptografada em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se um algoritmo de criptografia
desconhecido for passado através do parâmetro `cipher_algo`.

Emite um erro de nível **`E_WARNING`** se um valor vazio
for passado através do parâmetro `iv`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Os parâmetros `tag`, `aad` e `tag_length` foram adicionados. |

### Examples

**Exemplo #1 Exemplo de criptografia autenticada AES no modo GCM para PHP 7.1+**

```
<?php
// $key deve ter sido gerada previamente de forma criptograficamente segura, como openssl_random_pseudo_bytes
$plaintext = "mensagem a ser criptografada";
$cipher = "aes-128-gcm";
if (in_array($cipher, openssl_get_cipher_methods()))
{
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
    // armazena $cipher, $iv e $tag para descriptografia posterior
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
    echo $original_plaintext."\n";
}
?>
```

**Exemplo #2 Exemplo de criptografia autenticada AES antes do PHP 7.1**

```
<?php
// $key gerada anteriormente com segurança, ou seja: openssl_random_pseudo_bytes
$plaintext = "mensagem a ser criptografada";
$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
$iv = openssl_random_pseudo_bytes($ivlen);
$ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
$ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );

// descriptografa mais tarde....
$c = base64_decode($ciphertext);
$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
$iv = substr($c, 0, $ivlen);
$hmac = substr($c, $ivlen, $sha2len=32);
$ciphertext_raw = substr($c, $ivlen+$sha2len);
$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
if (hash_equals($hmac, $calcmac))// comparação segura contra ataque de temporização
{
    echo $original_plaintext."\n";
}
?>
```

### Veja também

- [openssl\_decrypt()](function.openssl-decrypt.md) - Descritografa dados

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
