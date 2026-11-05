# Retorna um array com os detalhes da chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkey-get-details.php

---

# openssl\_pkey\_get\_details

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

openssl\_pkey\_get\_details — Retorna um array com os detalhes da chave

### Descrição

function **openssl\_pkey\_get\_details**([OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) `$key`): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função retorna os detalhes da chave (bits, chave, tipo).

### Parâmetros

`key`
:   Recurso que contém a chave.

### Valor Retornado

Retorna um array com os principais detalhes em caso de sucesso ou **`false`** em caso de falha.
O array retornado tem os índices `bits` (número de bits),
`key` (representação em string da chave pública) e
`type` (tipo da chave que é uma das constantes
**`OPENSSL_KEYTYPE_RSA`**,
**`OPENSSL_KEYTYPE_DSA`**,
**`OPENSSL_KEYTYPE_DH`**,
**`OPENSSL_KEYTYPE_EC`**,
**`OPENSSL_KEYTYPE_X25519`**,
**`OPENSSL_KEYTYPE_ED25519`**,
**`OPENSSL_KEYTYPE_X448`**,
**`OPENSSL_KEYTYPE_ED448`**,
ou `-1` que significa desconhecido).

Dependendo do tipo de chave utilizado, detalhes adicionais poderão ser retornados. Observe que
alguns elementos podem nem sempre estar disponíveis.

- **`OPENSSL_KEYTYPE_RSA`**, uma chave de array adicional chamada `"rsa"`,
  contendo os dados da chave, é retornada.

  | Chave | Descrição |
  | --- | --- |
  | `"n"` | módulo |
  | `"e"` | expoente público |
  | `"d"` | expoente privado |
  | `"p"` | primo número 1 |
  | `"q"` | primo número 2 |
  | `"dmp1"` | expoente 1, d mod (p-1) |
  | `"dmq1"` | expoente 2, d mod (q-1) |
  | `"iqmp"` | coeficiente, (inverso de q) mod p |
- **`OPENSSL_KEYTYPE_DSA`**, uma chave de array adicional chamada `"dsa"`,
  contendo os dados da chave, é retornada.

  | Chave | Descrição |
  | --- | --- |
  | `"p"` | número primo (público) |
  | `"q"` | sub-primo de 160 bits, q | p-1 (público) |
  | `"g"` | gerador de subgrupo (público) |
  | `"priv_key"` | chave privada x |
  | `"pub_key"` | chave pública y = g^x |
- **`OPENSSL_KEYTYPE_DH`**, uma chave de array adicional chamada `"dh"`,
  contendo os dados da chave, é retornada.

  | Chave | Descrição |
  | --- | --- |
  | `"p"` | número primo (compartilhado) |
  | `"g"` | gerador de Z\_p (compartilhado) |
  | `"priv_key"` | valor DH privado x |
  | `"pub_key"` | valor DH público g^x |
- **`OPENSSL_KEYTYPE_X25519`**,
  **`OPENSSL_KEYTYPE_ED25519`**,
  **`OPENSSL_KEYTYPE_X448`**,
  ou **`OPENSSL_KEYTYPE_ED448`**.
  Uma chave de array adicional chamada
  `"x25519"`,
  `"ed25519"`,
  `"x448"`,
  ou `"ed448"` respectivamente,
  é retornada, contendo os dados da chave.

  | Chave | Descrição |
  | --- | --- |
  | `"priv_key"` | chave privada |
  | `"pub_key"` | chave pública |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionado suporte às chaves baseadas em Curve25519 e Curve448. Especificamente, os campos `x25519`, `ed25519`, `x448` e `ed448` foram introduzidos. |
| 8.0.0 | `key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` era aceito. |

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
