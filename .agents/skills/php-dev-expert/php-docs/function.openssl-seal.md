# Sela (criptografa) dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-seal.php

---

# openssl\_seal

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

openssl\_seal — Sela (criptografa) dados

### Descrição

function **openssl\_seal**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `&$sealed_data`,  
    [array](language.types.array.md) `&$encrypted_keys`,  
    [array](language.types.array.md) `$public_key`,  
    [string](language.types.string.md) `$cipher_algo`,  
    [string](language.types.string.md) `&$iv` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**openssl\_seal()** sela (criptografa) os dados de `data` usando o
algoritmo de criptografia `cipher_algo` com uma chave secreta gerada aleatoriamente. A chave é
então criptografada com cada uma das chaves públicas no array `public_key`,
e cada chave de envelope criptografada é retornada em `encrypted_keys`. Isso permite
que dados selados sejam enviados a vários destinatários (desde que suas chaves públicas estejam disponíveis). Cada
destinatário deve receber os dados selados e a chave do envelope que foi criptografada com a
chave pública do destinatário. O IV (Vetor de Inicialização) é gerado e seu valor é retornado em
`iv`.

### Parâmetros

`data`
:   Os dados a serem selados.

`sealed_data`
:   Os dados selados.

`encrypted_keys`
:   Array de chaves criptografadas.

`public_key`
:   Array de instâncias de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) contendo chaves públicas.

`cipher_algo`
:   O método de criptografia.

    **Cuidado**

    O valor padrão para versões do PHP anteriores a 8.0 é (`'RC4'`) que é
    considerado inseguro. É altamente recomendável especificar explicitamente um método de
    criptografia seguro.

`iv`
:   O vetor de inicialização para descriptografia de `data`. É necessário se
    o método de criptografia exigir IV. Isso pode ser descoberto chamando
    [openssl\_cipher\_iv\_length()](function.openssl-cipher-iv-length.md) com `cipher_algo`.

    **Cuidado**

    O IV não pode ser definido explicitamente. Qualquer valor definido nele é substituído por um valor gerado
    aleatoriamente.

### Valor Retornado

Retorna o comprimento dos dados selados em caso de sucesso ou **`false`** em caso de erro.
Se for bem-sucedido, os dados selados serão retornados em
`sealed_data` e as chaves do envelope em
`encrypted_keys`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `public_key` agora aceita um [array](language.types.array.md) de instâncias de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md); anteriormente, um [array](language.types.array.md) de [resource](language.types.resource.md)s do tipo `OpenSSL key` era aceito. |
| 8.0.0 | `cipher_algo` não é mais um parâmetro opcional. |
| 8.0.0 | `iv` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **openssl\_seal()****

```
<?php
// Presume-se que $data contenha os dados a serem selados
$data = "test";

// busca chaves públicas
$pk1 = openssl_get_publickey("file://cert1.pem");
$pk2 = openssl_get_publickey("file://cert2.pem");

// sela a mensagem, apenas os proprietários de $pk1 e $pk2 podem descriptografar $sealed com as chaves
// $ekeys[0] e $ekeys[1] respectivamente.
if (openssl_seal($data, $sealed, $ekeys, array($pk1, $pk2), 'AES256', $iv) > 0) {
    // possivelmente armazena os valores $sealed e $iv e usa mais tarde em openssl_open
    echo "sucesso\n";
}
?>
```

### Veja também

- [openssl\_open()](function.openssl-open.md) - Abre dados lacrados

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
