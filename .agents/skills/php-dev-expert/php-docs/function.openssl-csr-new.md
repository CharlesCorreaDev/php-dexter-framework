# Gera um CSR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-csr-new.php

---

# openssl\_csr\_new

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_csr\_new — Gera um CSR

### Descrição

function **openssl\_csr\_new**(  
    [array](language.types.array.md) `$distinguished_names`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) `&$private_key`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$extra_attributes` = **`null`**  
): [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md)|[bool](language.types.boolean.md)

**openssl\_csr\_new()** gera um novo CSR
com base na informação fornecida por `distinguished_names`.

> **Nota**:
>
> É preciso ter um arquivo openssl.cnf válido instalado
> para que esta função funcione corretamente.
> Consulte as notas na [seção de
> instalação](openssl.installation.md) para obter mais informações.

### Parâmetros

`distinguished_names`
:   O Nome Distinto (DN) ou campos de assunto a serem usados no
    certificado. O parâmetro `distinguished_names` é um
    array associativo onde as chaves representam os nomes de atributo dos
    Nomes Distintos e os valores podem ser strings (para valores
    simples) ou arrays (se for necessário definir múltiplos valores).

`private_key`
:   `private_key` deve ser definido par uma chave privada que
    tenha sido gerada anteriormente por [openssl\_pkey\_new()](function.openssl-pkey-new.md) (ou
    de outra forma obtida pelas outras funções da família openssl\_pkey), ou
    uma variável **`null`**. Se o valor for uma variável **`null`**, uma nova chave primária será
    gerada com base no parâmetro `options` fornecido e
    será atribuída à variável informada. A parte pública correspondente da
    chave será usada para assinar o CSR.

`options`
:   Por padrão, a informação no `openssl.conf` do sistema
    é utilizada para inicializar a requisição; uma seção do arquivo de configuração
    pode ser especificada configurando a chave `config_section_section` no parâmetro
    `options`. Um arquivo de configuração Openssl alternativo
    pode ser especificado configurando o valor da chave
    `config` para o caminho do arquivo a ser usado.
    As chaves a seguir, se estiverem presentes em `options`,
    comportam-se como suas equivalentes no `openssl.conf`, como
    listadas na tabela abaixo.

    **Subsituição de configuração**

    | Chave `options` | Tipo | Equivalente no `openssl.conf` | Descrição |
    | --- | --- | --- | --- |
    | digest\_alg | [string](language.types.string.md) | default\_md | Método de resumo ou de hash de assinatura, normalmente um dos métodos informados por [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md) |
    | x509\_extensions | [string](language.types.string.md) | x509\_extensions | Seleciona quais extensões devem ser usadas ao criar um certificado x509 |
    | req\_extensions | [string](language.types.string.md) | req\_extensions | Seleciona quais extensões devem ser usadas ao criar um CSR |
    | private\_key\_bits | [int](language.types.integer.md) | default\_bits | Especifica quantos bits devem ser usados para gerar uma chave privada |
    | private\_key\_type | [int](language.types.integer.md) | none | Especifica o tipo de chave privada a ser criada. Pode ser uma das constantes **`OPENSSL_KEYTYPE_DSA`**, **`OPENSSL_KEYTYPE_DH`**, **`OPENSSL_KEYTYPE_RSA`** ou **`OPENSSL_KEYTYPE_EC`**. O valor padrão é **`OPENSSL_KEYTYPE_RSA`**. |
    | encrypt\_key | [bool](language.types.boolean.md) | encrypt\_key | Uma chave exportada (com senha) deve ser criptografada? |
    | encrypt\_key\_cipher | [int](language.types.integer.md) | none | Uma das [constantes de cifra](openssl.ciphers.md). |
    | curve\_name | [string](language.types.string.md) | none | Um dos nomes de curva informados por [openssl\_get\_curve\_names()](function.openssl-get-curve-names.md). |
    | config | [string](language.types.string.md) | N/A | Caminho para o arquivo alternativo openssl.conf. |

`extra_attributes`
:   `extra_attributes` é usado para especificar atributos
    adicionais para o CSR. É um array associativo
    cujas chaves são convertidas para OIDs e aplicadas como
    atributos CSR.

### Valor Retornado

Retorna o CSR em caso de sucesso, **`true`**
se a criação do CSR for bem sucedida mas a assintura
falhar ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O array associativo do parâmetro `distinguished_names` agora suporta arrays como valores, permitindo que múltiplos sejam especificados para um único atributo. |
| 8.4.0 | O parâmetro `extra_attributes` agora define corretamente os atributos CSR, ao invés de modificar o Nome Distinto do assunto como fazia antes incorretamente. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md); anteriormente, retornava um [resource](language.types.resource.md) do tipo `OpenSSL X.509 CSR`. |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md); anteriormente, aceitava um [resource](language.types.resource.md) do tipo `OpenSSL key`. |
| 7.1.0 | `options` agora também suporta `curve_name`. |

### Examples

**Exemplo #1 Criando um certificado autoassinado**

```
<?php
// para certificados SSL de servidor, o commonName é o domínio a ser protegido
// para certificados de e-mail S/MIME, o commonName é o proprietário do endereço de e-mail
// campos de localização e identificação referem-se ao proprietário do domínio ou do e-mail a serem protegidos
$dn = array(
    "countryName" => "GB",
    "stateOrProvinceName" => "Somerset",
    "localityName" => "Glastonbury",
    "organizationName" => "The Brain Room Limited",
    "organizationalUnitName" => "PHP Documentation Team",
    "commonName" => "Wez Furlong",
    "emailAddress" => "wez@example.com"
);

// Gera um novo par de chaves privadas (e públicas)
$privkey = openssl_pkey_new(array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));

// Gera uma requisição de assinatura de certificado
$csr = openssl_csr_new($dn, $privkey, array('digest_alg' => 'sha256'));

// Gera um certificado autoassinado, válido por 365 dias
$x509 = openssl_csr_sign($csr, null, $privkey, $days=365, array('digest_alg' => 'sha256'));

// Grava a chave privada, o CSR e o certificado autoassinado para uso posterior
openssl_csr_export($csr, $csrout)var_dump($csrout);
openssl_x509_export($x509, $certout) and var_dump($certout);
openssl_pkey_export($privkey, $pkeyout, "mypassword") and var_dump($pkeyout);

// Exibe erros que possam ter ocorrido
while (($e = openssl_error_string()) !== false) {
    echo $e . "\n";
}
?>
```

**Exemplo #2 Criando um certificado ECC autoassinado (a partir do PHP 7.1.0)**

```
<?php
$subject = array(
    "commonName" => "docs.php.net",
);

// Gere um novo par de chaves privadas (e públicas)
$private_key = openssl_pkey_new(array(
    "private_key_type" => OPENSSL_KEYTYPE_EC,
    "curve_name" => 'prime256v1',
));

// Gera uma requisição de assinatura de certificado
$csr = openssl_csr_new($subject, $private_key, array('digest_alg' => 'sha384'));

// Gera um certificado EC autoassinado
$x509 = openssl_csr_sign($csr, null, $private_key, $days=365, array('digest_alg' => 'sha384'));
openssl_x509_export_to_file($x509, 'ecc-cert.pem');
openssl_pkey_export_to_file($private_key, 'ecc-private.key');
?>
```

### Veja também

- [openssl\_csr\_sign()](function.openssl-csr-sign.md) - Assina um CSR com outro certificado (ou ele mesmo) e gera um certificado

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
