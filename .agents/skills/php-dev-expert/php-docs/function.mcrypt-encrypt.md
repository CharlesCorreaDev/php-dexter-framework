# Criptografa texto simples com parâmetros fornecidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-encrypt.php

---

# mcrypt\_encrypt

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_encrypt — Criptografa texto simples com parâmetros fornecidos

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_encrypt**(  
    [string](language.types.string.md) `$cipher`,  
    [string](language.types.string.md) `$key`,  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$mode`,  
    [string](language.types.string.md) `$iv` = ?  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Criptografa os dados e os retorna.

### Parâmetros

`cipher`
:   Uma das constantes **`MCRYPT_nome_da_cifra`** ou o nome do algoritmo como string.

`key`
:   A chave com a qual os dados serão criptografados. Se o tamanho da chave fornecida não for
    suportado pela cifra, a função emitirá um aviso e retornará **`false`**.

`data`
:   Os dados que serão criptografados com `cipher`
    e `mode` fornecidos. Se o tamanho dos dados não for n \* tamanho\_do\_bloco,
    os dados serão preenchidos com '`\0`'.

    O texto criptografado retornado pode ser maior que o tamanho dos dados que foram
    fornecidos por `data`.

`mode`
:   Uma das constantes **`MCRYPT_MODE_nome_do_modo`** ou uma das seguintes strings: "ecb", "cbc", "cfb", "ofb", "nofb" ou "stream".

`iv`
:   Usado para a inicialização nos modos CBC, CFB, OFB e em alguns algoritmos no modo STREAM. Se o tamanho do IV fornecido não for suportado pelo modo de encadeamento ou nenhum IV for fornecido, mas o modo de encadeamento exigir um, a função emitirá um aviso e retornará **`false`**.

### Valor Retornado

Retorna os dados criptografados como uma string ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_encrypt()****

```
<?php
    # --- CRIPTOGRAFIA ---

    # A chave deve ser binária aleatória, use scrypt, bcrypt ou PBKDF2 para
    # converter uma string em uma chave.
    # A chave é especificada usando hexadecimal
    $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");

    # Mostra o tamanho da chave. Use chaves de 16, 24 ou 32 bytes para AES-128, 192
    # e 256 respectivamente
    $key_size =  strlen($key);
    echo "Tamanho da chave: " . $key_size . "\n";

    $plaintext = "This string was AES-256 / CBC / ZeroBytePadding encrypted.";

    # Cria um IV aleatório para usar com codificação CBC
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

    # Cria um texto criptografado compatível com AES (tamanho do bloco Rijndael = 128)
    # para manter o texto confidencial.
    # Adequado somente para entrada codificada que nunca termina com o valor 00h
    # (por causa do preenchimento padrão com zero).
    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,
                                 $plaintext, MCRYPT_MODE_CBC, $iv);

    # Adiciona o IV para que ele fique disponível para descriptografia
    $ciphertext = $iv . $ciphertext;

    # Codifica o texto criptografado resultante para que possa ser representado por uma string
    $ciphertext_base64 = base64_encode($ciphertext);

    echo  $ciphertext_base64 . "\n";

    # === ALERTA ===

    # O texto criptografado resultante não tem integridade ou autenticidade adicionada
    # e não é protegido contra ataques "padding oracle".

    # --- DESCRIPTOGRAFIA ---

    $ciphertext_dec = base64_decode($ciphertext_base64);

    # Recupera o IV, iv_size deve ser criado usando mcrypt_get_iv_size()
    $iv_dec = substr($ciphertext_dec, 0, $iv_size);

    # Recupera o texto criptografado (tudo, exceto o $iv_size na frente)
    $ciphertext_dec = substr($ciphertext_dec, $iv_size);

    # Pode remover caracteres com valor 00h do final do texto simples
    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key,
                                    $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);

    echo  $plaintext_dec . "\n";
?>
```

O exemplo acima produzirá:

```
Tamanho da chave: 32
ENJW8mS2KaJoNB5E5CoSAAu0xARgsR1bdzFWpEn+poYw45q+73az5kYi4j+0haevext1dGrcW8Qi59txfCBV8BBj3bzRP3dFCp3CPQSJ8eU=
This string was AES-256 / CBC / ZeroBytePadding encrypted.
```

### Veja também

- [mcrypt\_decrypt()](function.mcrypt-decrypt.md) - Descriptografa texto criptografado com parâmetros fornecidos
- [mcrypt\_module\_open()](function.mcrypt-module-open.md) - Abre o módulo do algoritmo e o modo a ser utilizado

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
