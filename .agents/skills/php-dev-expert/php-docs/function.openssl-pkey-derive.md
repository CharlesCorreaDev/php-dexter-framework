# Calcula o segredo compartilhado para o valor público da chave DH ou ECDH remota e local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkey-derive.php

---

# openssl\_pkey\_derive

(PHP 7 >= 7.3.0, PHP 8)

openssl\_pkey\_derive — Calcula o segredo compartilhado para o valor público da chave DH ou ECDH remota e local

### Descrição

function **openssl\_pkey\_derive**([OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$public_key`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`, [int](language.types.integer.md) `$key_length` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

**openssl\_pkey\_derive()** pega um conjunto de `public_key`
e `private_key` e deriva um segredo compartilhado, para chaves DH ou EC.

### Parâmetros

`public_key`
:   `public_key` é a chave pública para a derivação.
    Consulte [Parâmetros de chave pública/privada](openssl.certparams.md) para obter uma lista de valores válidos.

`private_key`
:   `private_key` é a chave privada para a derivação.
    Consulte [Parâmetros de chave pública/privada](openssl.certparams.md) para obter uma lista de valores válidos.

`key_length`
:   Se não for zero, tentará definir o comprimento desejado do segredo derivado.

    **Cuidado**

    Este parâmetro foi descontinuado e não deve ser utilizado, pois não funciona conforme o esperado. Ele
    nunca retorna um segredo maior que o tamanho do primo. Se o comprimento desejado for menor
    que o tamanho do primo, ele truncará o comprimento apenas para chaves ECDH, mas falhará para chaves DH.

### Valor Retornado

O segredo derivado em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro `key_length` foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **openssl\_pkey\_derive()****

```
<?php
// Carrega a chave privada
$priv = openssl_pkey_get_private("-----BEGIN PRIVATE KEY-----
MIICJgIBADCCARcGCSqGSIb3DQEDATCCAQgCggEBAJLxRCaZ933uW+AXmabHFDDy
upojBIRlbmQLJZfigDaSA1f9YOTsIv+WwVFTX/J1mtCyx9uBcz0Nt2kmVwxWuc2f
VtCEMPsmLsVXX7xRUFLpyX1Y1IYGBVXQOoOvLWYQjpZgnx47Pkh1Ok1+smffztfC
0DCNt4KorWrbsPcmqBejXHN79KvWFjZmXOksRiNu/Bn76RiqvofC4z8Ri3kHXQG2
197JGZzzFXHadGC3xbkg8UxsNbYhVMKbm0iANfafUH7/hoS9UjAVQYtvwe7YNiW/
HnyfVCrKwcc7sadd8Iphh+3lf5P1AhaQEAMytanrzq9RDXKBxuvpSJifRYasZYsC
AQIEggEEAoIBAGwAYC2E81Y1U2Aox0U7u1+vBcbht/OO87tutMvc4NTLf6NLPHsW
cPqBixs+3rSn4fADzAIvdLBmogjtiIZoB6qyHrllF/2xwTVGEeYaZIupQH3bMK2b
6eUvnpuu4Ytksiz6VpXBBRMrIsj3frM+zUtnq8vKUr+TbjV2qyKR8l3eNDwzqz30
dlbKh9kIhZafclHfRVfyp+fVSKPfgrRAcLUgAbsVjOjPeJ90xQ4DTMZ6vjiv6tHM
hkSjJIcGhRtSBzVF/cT38GyCeTmiIA/dRz2d70lWrqDQCdp9ArijgnpjNKAAulSY
CirnMsGZTDGmLOHg4xOZ5FEAzZI2sFNLlcw=
-----END PRIVATE KEY-----
");

// Carrega a chave pública
$pub = openssl_pkey_get_public("-----BEGIN PUBLIC KEY-----
MIICJDCCARcGCSqGSIb3DQEDATCCAQgCggEBAJLxRCaZ933uW+AXmabHFDDyupoj
BIRlbmQLJZfigDaSA1f9YOTsIv+WwVFTX/J1mtCyx9uBcz0Nt2kmVwxWuc2fVtCE
MPsmLsVXX7xRUFLpyX1Y1IYGBVXQOoOvLWYQjpZgnx47Pkh1Ok1+smffztfC0DCN
t4KorWrbsPcmqBejXHN79KvWFjZmXOksRiNu/Bn76RiqvofC4z8Ri3kHXQG2197J
GZzzFXHadGC3xbkg8UxsNbYhVMKbm0iANfafUH7/hoS9UjAVQYtvwe7YNiW/Hnyf
VCrKwcc7sadd8Iphh+3lf5P1AhaQEAMytanrzq9RDXKBxuvpSJifRYasZYsCAQID
ggEFAAKCAQAiCSBpxvGgsTorxAWtcAlSmzAJnJxFgSPef0g7OjhESytnc8G2QYmx
ovMt5KVergcitztWh08hZQUdAYm4rI+zMlAFDdN8LWwBT/mGKSzRkWeprd8E7mvy
ucqC1YXCMqmIwPySvLQUB/Dl8kgau7BLAnIJm8VP+MVrn8g9gghD0qRCgPgtEaDV
vocfgnOU43rhKnIgO0cHOKtw2qybSFB8QuZrYugq4j8Bwkrzh6rdMMeyMl/ej5Aj
c0wamOzuBDtXt0T9+Fx3khHaowjCc7xJZRgZCxg43SbqMWJ9lUg94I7+LTX61Gyv
dtlkbGbtoDOnxeNnN93gwQZngGYZYciu
-----END PUBLIC KEY-----
");

// Produz a versão hexadecimal da chave derivada
echo bin2hex(openssl_pkey_derive($pub,$priv));
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
