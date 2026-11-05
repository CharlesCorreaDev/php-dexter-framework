# Abre dados lacrados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-open.php

---

# openssl\_open

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

openssl\_open — Abre dados lacrados

### Descrição

function **openssl\_open**(  
    [string](language.types.string.md) `$data`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `&$output`,  
    [string](language.types.string.md) `$encrypted_key`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    [string](language.types.string.md) `$cipher_algo`,  
    [?](language.types.null.md)[string](language.types.string.md) `$iv` = **`null`**  
): [bool](language.types.boolean.md)

**openssl\_open()** abre (descriptografa) os dados do parâmetro `data` usando uma chave
de envelope que é descriptografada da chave `encrypted_key` usando
a chave privada de `private_key`. A descriptografia é feita usando
o método `cipher_algo` e o vetor de inicialização `iv`. O IV é necessário apenas se o
método de criptografia exigir. A função preenche a variável em `output` com os dados
descriptografados. A chave do envelope normalmente é gerada quando os dados são lacrados por meio de uma chave pública
associada à chave privada. Consulte [openssl\_seal()](function.openssl-seal.md) para obter mais informações.

### Parâmetros

`data`
:   Os dados lacrados.

`output`
:   Se a chamada for bem-sucedida, os dados abertos serão retornados neste parâmetro.

`encrypted_key`
:   A chave simétrica criptografada que pode ser descriptografada usando `private_key`.

`private_key`
:   A chave privada usada para descriptografar `encrypted_key`.

`cipher_algo`
:   O método de criptografia usado para descriptografar `data`.

    **Cuidado**

    O valor padrão para versões do PHP anteriores a 8.0 é (`'RC4'`) que é
    considerado inseguro. É altamente recomendável especificar explicitamente um método de criptografia
    seguro.

`iv`
:   O vetor de inicialização usado para descriptografia de `data`. É necessário
    se o método de criptografia exigi-lo. Isso pode ser descoberto chamando
    [openssl\_cipher\_iv\_length()](function.openssl-cipher-iv-length.md) com `cipher_algo`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509 CSR` era aceito. |
| 8.0.0 | `cipher_algo` não é mais um parâmetro opcional. |

### Examples

**Exemplo #1 Exemplo de **openssl\_open()****

```
<?php

// Presume-se que $sealed, $env_key e $iv contenham os dados selados,
// a chave de envelope e IV. Tudo recebido de quem criptografou.

// Busca a chave privada do arquivo localizado em private_key.pem
$pkey = openssl_get_privatekey("file://private_key.pem");

// Descriptografa os dados e os armazena em $open
if (openssl_open($sealed, $open, $env_key, $pkey, 'AES256', $iv)) {
    echo "Aqui estão os dados abertos: ", $open;
} else {
    echo "Falha ao abrir dados";
}

?>
```

### Veja também

- [openssl\_seal()](function.openssl-seal.md) - Sela (criptografa) dados

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
