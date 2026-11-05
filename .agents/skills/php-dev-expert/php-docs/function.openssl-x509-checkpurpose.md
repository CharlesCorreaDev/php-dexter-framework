# Verifica se um certificado pode ser usado para uma finalidade específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-x509-checkpurpose.php

---

# openssl\_x509\_checkpurpose

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_x509\_checkpurpose — Verifica se um certificado pode ser usado para uma finalidade específica

### Descrição

function **openssl\_x509\_checkpurpose**(  
    [OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`,  
    [int](language.types.integer.md) `$purpose`,  
    [array](language.types.array.md) `$ca_info` = [],  
    [?](language.types.null.md)[string](language.types.string.md) `$untrusted_certificates_file` = **`null`**  
): [bool](language.types.boolean.md)|[int](language.types.integer.md)

**openssl\_x509\_checkpurpose()** examina um certificado para
ver se pode ser usado para o a finalidade especificada em `purpose`.

### Parâmetros

`certificate`
:   O certificado examinado.

`purpose`
:   ****openssl\_x509\_checkpurpose()** purposes**

    | Constante | Descrição |
    | --- | --- |
    | X509\_PURPOSE\_SSL\_CLIENT | O certificado pode ser usado no lado do cliente de uma conexão SSL? |
    | X509\_PURPOSE\_SSL\_SERVER | O certificado pode ser usado no lado do servidor de uma conexão SSL? |
    | X509\_PURPOSE\_NS\_SSL\_SERVER | O certificado pode ser usado para o servidor Netscape SSL? |
    | X509\_PURPOSE\_SMIME\_SIGN | O certificado pode ser usado para assinar e-mail S/MIME? |
    | X509\_PURPOSE\_SMIME\_ENCRYPT | O certificado pode ser usado para criptografar e-mails S/MIME? |
    | X509\_PURPOSE\_CRL\_SIGN | O certificado pode ser usado para assinar uma lista de certificados revogados (CRL)? |
    | X509\_PURPOSE\_ANY | O certificado pode ser usado para qualquer/todos os fins? |

    Estas opções não são campos de bits - somente uma pode ser especificada!

`ca_info`
:   `ca_info` deve ser um array de arquivos/diretórios CA confiáveis
    como descrito em [Verificação de
    Certificados](openssl.cert.verification.md).

`untrusted_certificates_file`
:   Se especificado, este deve ser o nome de um arquivo codificado em PEM contendo
    certificados que podem ser usados ​​para ajudar a verificar o certificado, embora
    nenhuma confiança seja colocada nos certificados provenientes desse arquivo.

### Valor Retornado

Retorna **`true`** se o certificado puder ser usado para a finalidade pretendida,
**`false`** se não puder, ou -1 em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `certificate` agora aceita uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509` era aceito. |
| 8.0.0 | `untrusted_certificates_file` agora pode ser nulo. |

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
