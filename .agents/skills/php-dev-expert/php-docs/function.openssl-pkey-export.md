# Obtém uma representação exportável de uma chave em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkey-export.php

---

# openssl\_pkey\_export

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_pkey\_export — Obtém uma representação exportável de uma chave em uma string

### Descrição

function **openssl\_pkey\_export**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$key`,  
    [string](language.types.string.md) `&$output`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$passphrase` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): [bool](language.types.boolean.md)

**openssl\_pkey\_export()** exporta a chave
`key` como uma string codificada em PEM e a armazena na
string `output` (que é passada por referência).

> **Nota**:
>
> É preciso ter um arquivo openssl.cnf válido instalado
> para que esta função funcione corretamente.
> Consulte as notas na [seção de
> instalação](openssl.installation.md) para obter mais informações.

### Parâmetros

`key`

`output`

`passphrase`
:   A chave é opcionalmente protegida por uma senha informada em `passphrase`.

`options`
:   `options` pode ser usado para fazer ajuste fino do processo
    de exportação especificando e/ou substituindo opções para o arquivo de
    configuração do openssl. Consulte [openssl\_csr\_new()](function.openssl-csr-new.md) para obter
    mais informações sobre `options`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

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
