# Extrai a chave pública do certificado e prepara-a para uso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkey-get-public.php

---

# openssl\_pkey\_get\_public

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_pkey\_get\_public — Extrai a chave pública do certificado e prepara-a para uso

### Descrição

function **openssl\_pkey\_get\_public**([OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$public_key`): [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[false](language.types.singleton.md)

**openssl\_pkey\_get\_public()** extrai a chave pública de
`public_key` e prepara-a para uso por outras
funções.

### Parâmetros

`public_key`
:   `public_key` pode ser uma das seguintes opções:

    1. uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)
    2. uma string no formato
       file://caminho/para/arquivo.pem. O arquivo precisa
       conter uma chave pública ou certificado (pode conter ambos) codificados em PEM.
    3. Uma chave pública no formato PEM.

### Valor Retornado

Retorna uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) em caso de sucesso ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna uma instância [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) agora; anteriormente, retornava um [resource](language.types.resource.md) do tipo `OpenSSL key`. |
| 8.0.0 | `public_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

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
