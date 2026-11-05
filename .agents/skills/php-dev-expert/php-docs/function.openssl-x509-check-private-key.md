# Verifica se uma chave privada corresponde a um certificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-x509-check-private-key.php

---

# openssl\_x509\_check\_private\_key

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_x509\_check\_private\_key — Verifica se uma chave privada corresponde a um certificado

### Descrição

function **openssl\_x509\_check\_private\_key**([OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`): [bool](language.types.boolean.md)

Verifica se a chave privada informada em `private_key` é a
que corresponde ao certificado fornecidor em `certificate`.

**Aviso**

A função não verifica se `private_key` é de fato uma chave privada ou não.
Ela apenas compara os materiais públicos (por exemplo, expoente e módulo de uma chave RSA)
e/ou parâmetros da chave (por exemplo, parâmetros EC de uma chave EC) de um par de chaves.

Isto significa, por exemplo, que uma chave pública poderia ser informada em `private_key`
e a função poderia retornar **`true`**.

### Parâmetros

`certificate`
:   O certificado.

`private_key`
:   A chave privada.

### Valor Retornado

Retorna **`true`** se `private_key` for a chave privada que
corresponde ao certificado do parâmetro `certificate`, ou **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `certificate` agora aceita uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509` era aceito. |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

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
