# Assina um CSR com outro certificado (ou ele mesmo) e gera um certificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-csr-sign.php

---

# openssl\_csr\_sign

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_csr\_sign — Assina um CSR com outro certificado (ou ele mesmo) e gera um certificado

### Descrição

function **openssl\_csr\_sign**(  
    [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md)|[string](language.types.string.md) `$csr`,  
    [OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md)|[null](language.types.null.md) `$ca_certificate`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    [int](language.types.integer.md) `$days`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**,  
    [int](language.types.integer.md) `$serial` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$serial_hex` = **`null`**  
): [OpenSSLCertificate](class.opensslcertificate.md)|[false](language.types.singleton.md)

**openssl\_csr\_sign()** gera um certificado x509 a partir do CSR fornecido.

> **Nota**:
>
> É preciso ter um arquivo openssl.cnf válido instalado
> para que esta função funcione corretamente.
> Consulte as notas na [seção de
> instalação](openssl.installation.md) para obter mais informações.

### Parâmetros

`csr`
:   Um CSR gerado anteriormente por [openssl\_csr\_new()](function.openssl-csr-new.md).
    Também pode ser o caminho para um CSR codificado em PEM quando especificado como
    file://caminho/para/csr ou uma string exportada gerada por
    [openssl\_csr\_export()](function.openssl-csr-export.md).

`ca_certificate`
:   O certificado gerado será assinado por `ca_certificate`.
    Se `ca_certificate` for **`null`**, o certificado gerado
    será um certificado autoassinado.

`private_key`
:   `private_key` é a chave privada que corresponde a
    `ca_certificate`.

`days`
:   `days` especifica o período de validade
    do certificado gerado, em dias.

`options`
:   A assinatura do CSR pode ter um ajuste fino usando `options`.
    Consulte [openssl\_csr\_new()](function.openssl-csr-new.md) para mais informação sobre
    `options`.

`serial`
:   Um número de série opcional do certificado emitido. Se não for especificado,
    o padrão será 0.

`serial_hex`
:   Uma string hexadecimal opcional representando o número serial do
    certificado emitido. Se definido, tome precedência sobre o valor do
    parâmetro `serial`. Se não especificado ou se definido como
    **`null`**, o valor do parâmetro `serial` é usado no
    lugar.

### Valor Retornado

Retorna um [OpenSSLCertificate](class.opensslcertificate.md) em caso de sucesso, **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O parâmetro `serial_hex` foi adicionado. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, retornava um [resource](language.types.resource.md) do tipo `OpenSSL X.509`. |
| 8.0.0 | `csr` aceita uma instância [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md) agora; anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509 CSR` era aceito. |
| 8.0.0 | `ca_certificate` agora aceita uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509` era aceito. |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou do tipo `OpenSSL X.509` era aceito. |

### Examples

**Exemplo #1 Exemplo de **openssl\_csr\_sign()** - assinando um
CSR (como implementar sua própria CA)**

```
<?php
// Vamos supor que este script esteja configurado para receber
// um CSR que foi colado em uma área de texto de outra página
$csrdata = $_POST["CSR"];

// Assinaremos a solicitação usando nosso próprio certificado de "autoridade
// de certificação". Pode ser usado qualquer certificado para assinar outro, mas
// o processo é inútil, a menos que o certificado de assinatura seja confiável
// para o software/usuários que lidarão com o certificado recém-assinado

// Precisamos do nosso certificado CA e de sua chave privada
$cacert = "file://caminho/para/ca.crt";
$privkey = array("file://caminho/para/ca.key", "sua_senha_da_chave_CA");

$usercert = openssl_csr_sign($csrdata, $cacert, $privkey, 365, array('digest_alg'=>'sha256') );

// Agora o certificado gerado é exibido para que o usuário possa
// copiá-lo e colá-lo em sua configuração local (como um arquivo
// para armazenar o certificado para o servidor SSL)
openssl_x509_export($usercert, $certout);
echo $certout;

// Mostra todos os erros que ocorreram aqui
while (($e = openssl_error_string()) !== false) {
    echo $e . "\n";
}
?>
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
