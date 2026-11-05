# OpenSSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.openssl.php

---

# OpenSSL

# Introdução

Esta extensão vincula funções da biblioteca [» OpenSSL](https://www.openssl.org/) para criptografia e descriptografia
simétrica e assimétrica, PBKDF2, PKCS7, PKCS12, X509 e outras
operações de criptografia. Além disso, fornece implementação de fluxos
TLS.

O OpenSSL oferece muitos recursos que este módulo não suporta atualmente.
Alguns deles podem ser adicionados no futuro.

- [Instalação/Configuração](openssl.setup.md)
  - [Dependências](openssl.requirements.md)
  - [Instalação](openssl.installation.md)
  - [Configurações de Execução](openssl.configuration.md)
  - [Tipos de Recurso](openssl.resources.md)
- [Constantes predefinidas](openssl.constants.md)
  - [Opções de verificação de propósito](openssl.purpose-check.md)
  - [Opções de preenchimento para criptografia assimétrica](openssl.padding.md)
  - [Tipos de chave](openssl.key-types.md)
  - [Opções/Constantes PKCS7](openssl.pkcs7.flags.md)
  - [Opções/Constantes CMS](openssl.cms.flags.md)
  - [Algoritmos de Assinatura](openssl.signature-algos.md)
  - [Cifras (Ciphers)](openssl.ciphers.md)
  - [Constantes de versão](openssl.constversion.md)
  - [Constantes de indicação de nome do servidor](openssl.constsni.md)
  - [Outras constantes](openssl.constants.other.md)
- [Parâmetros de chave/certificado](openssl.certparams.md)
- [Verificação de Certificado](openssl.cert.verification.md)
- [Funções de OpenSSL](ref.openssl.md)
  - [openssl\_cipher\_iv\_length](function.openssl-cipher-iv-length.md) — Obtém o comprimento do vetor de inicialização da cifra
  - [openssl\_cipher\_key\_length](function.openssl-cipher-key-length.md) — Obtém o comprimento da chave da cifra
  - [openssl\_cms\_decrypt](function.openssl-cms-decrypt.md) — Descriptografa uma mensagem CMS
  - [openssl\_cms\_encrypt](function.openssl-cms-encrypt.md) — Criptografa uma mensagem CMS
  - [openssl\_cms\_read](function.openssl-cms-read.md) — Exporta o arquivo CMS para um array de certificados PEM
  - [openssl\_cms\_sign](function.openssl-cms-sign.md) — Assina um arquivo
  - [openssl\_cms\_verify](function.openssl-cms-verify.md) — Verifica uma assinatura CMS
  - [openssl\_csr\_export](function.openssl-csr-export.md) — Exporta um CSR como uma string
  - [openssl\_csr\_export\_to\_file](function.openssl-csr-export-to-file.md) — Exporta um CSR para um arquivo
  - [openssl\_csr\_get\_public\_key](function.openssl-csr-get-public-key.md) — Retorna a chave pública de um CSR
  - [openssl\_csr\_get\_subject](function.openssl-csr-get-subject.md) — Retorna o assunto de um CSR
  - [openssl\_csr\_new](function.openssl-csr-new.md) — Gera um CSR
  - [openssl\_csr\_sign](function.openssl-csr-sign.md) — Assina um CSR com outro certificado (ou ele mesmo) e gera um certificado
  - [openssl\_decrypt](function.openssl-decrypt.md) — Descritografa dados
  - [openssl\_dh\_compute\_key](function.openssl-dh-compute-key.md) — Calcula o segredo compartilhado para o valor público da chave pública DH remota e da chave DH local
  - [openssl\_digest](function.openssl-digest.md) — Computa um resumo
  - [openssl\_encrypt](function.openssl-encrypt.md) — Criptografa dados
  - [openssl\_error\_string](function.openssl-error-string.md) — Retorna mensagem de erro do openSSL
  - [openssl\_free\_key](function.openssl-free-key.md) — Libera recurso de chave
  - [openssl\_get\_cert\_locations](function.openssl-get-cert-locations.md) — Recupera os locais de certificados disponíveis
  - [openssl\_get\_cipher\_methods](function.openssl-get-cipher-methods.md) — Obtém métodos de criptografia disponíveis
  - [openssl\_get\_curve\_names](function.openssl-get-curve-names.md) — Obtém lista de nomes de curvas disponíveis para ECC
  - [openssl\_get\_md\_methods](function.openssl-get-md-methods.md) — Obtém métodos de resumo disponíveis
  - [openssl\_get\_privatekey](function.openssl-get-privatekey.md) — Sinônimo de openssl\_pkey\_get\_private
  - [openssl\_get\_publickey](function.openssl-get-publickey.md) — Sinônimo de openssl\_pkey\_get\_public
  - [openssl\_open](function.openssl-open.md) — Abre dados lacrados
  - [openssl\_password\_hash](function.openssl-password-hash.md) — Cria um hash de senha usando a implementação Argon2 do OpenSSL
  - [openssl\_password\_verify](function.openssl-password-verify.md) — Verifica uma senha em relação a um hash usando a implementação Argon2 do OpenSSL
  - [openssl\_pbkdf2](function.openssl-pbkdf2.md) — Gera uma string PKCS5 v2 PBKDF2
  - [openssl\_pkcs12\_export](function.openssl-pkcs12-export.md) — Exporta um arquivo de armazenamento de certificados compatível com PKCS#12 para uma variável
  - [openssl\_pkcs12\_export\_to\_file](function.openssl-pkcs12-export-to-file.md) — Exporta um arquivo de armazenamento de certificados compatível com PKCS#12
  - [openssl\_pkcs12\_read](function.openssl-pkcs12-read.md) — Analisa um armazenamento de certificados PKCS#12 em um array
  - [openssl\_pkcs7\_decrypt](function.openssl-pkcs7-decrypt.md) — Descriptografa uma mensagem criptografada S/MIME
  - [openssl\_pkcs7\_encrypt](function.openssl-pkcs7-encrypt.md) — Criptografa uma mensagem S/MIME
  - [openssl\_pkcs7\_read](function.openssl-pkcs7-read.md) — Exporta o arquivo PKCS7 para um array de certificados PEM
  - [openssl\_pkcs7\_sign](function.openssl-pkcs7-sign.md) — Assina uma mensagem S/MIME
  - [openssl\_pkcs7\_verify](function.openssl-pkcs7-verify.md) — Verifica a assinatura de uma mensagem assinada por S/MIME
  - [openssl\_pkey\_derive](function.openssl-pkey-derive.md) — Calcula o segredo compartilhado para o valor público da chave DH ou ECDH remota e local
  - [openssl\_pkey\_export](function.openssl-pkey-export.md) — Obtém uma representação exportável de uma chave em uma string
  - [openssl\_pkey\_export\_to\_file](function.openssl-pkey-export-to-file.md) — Obtém uma representação exportável de uma chave em um arquivo
  - [openssl\_pkey\_free](function.openssl-pkey-free.md) — Libera uma chave privada
  - [openssl\_pkey\_get\_details](function.openssl-pkey-get-details.md) — Retorna um array com os detalhes da chave
  - [openssl\_pkey\_get\_private](function.openssl-pkey-get-private.md) — Obtém uma chave privada
  - [openssl\_pkey\_get\_public](function.openssl-pkey-get-public.md) — Extrai a chave pública do certificado e prepara-a para uso
  - [openssl\_pkey\_new](function.openssl-pkey-new.md) — Gera uma nova chave privada
  - [openssl\_private\_decrypt](function.openssl-private-decrypt.md) — Descriptografa dados com chave privada
  - [openssl\_private\_encrypt](function.openssl-private-encrypt.md) — Criptografa dados com chave privada
  - [openssl\_public\_decrypt](function.openssl-public-decrypt.md) — Descriptografa dados com chave pública
  - [openssl\_public\_encrypt](function.openssl-public-encrypt.md) — Criptografa dados com chave pública
  - [openssl\_random\_pseudo\_bytes](function.openssl-random-pseudo-bytes.md) — Gera uma sequência pseudo-aleatória de bytes
  - [openssl\_seal](function.openssl-seal.md) — Sela (criptografa) dados
  - [openssl\_sign](function.openssl-sign.md) — Gera assinatura
  - [openssl\_spki\_export](function.openssl-spki-export.md) — Exporta uma chave pública assinada válida e formatada em PEM e um desafio
  - [openssl\_spki\_export\_challenge](function.openssl-spki-export-challenge.md) — Exporta o desafio associado a uma chave pública assinada e a um desafio
  - [openssl\_spki\_new](function.openssl-spki-new.md) — Gera uma nova chave pública assinada e um desafio
  - [openssl\_spki\_verify](function.openssl-spki-verify.md) — Verifica uma chave pública assinada e um desafio
  - [openssl\_verify](function.openssl-verify.md) — Verifica assinatura
  - [openssl\_x509\_check\_private\_key](function.openssl-x509-check-private-key.md) — Verifica se uma chave privada corresponde a um certificado
  - [openssl\_x509\_checkpurpose](function.openssl-x509-checkpurpose.md) — Verifica se um certificado pode ser usado para uma finalidade específica
  - [openssl\_x509\_export](function.openssl-x509-export.md) — Exporta um certificado como uma string
  - [openssl\_x509\_export\_to\_file](function.openssl-x509-export-to-file.md) — Exporta um certificado para arquivo
  - [openssl\_x509\_fingerprint](function.openssl-x509-fingerprint.md) — Calcula a impressão digital, ou resumo, de um determinado certificado X.509
  - [openssl\_x509\_free](function.openssl-x509-free.md) — Libera recurso de certificado
  - [openssl\_x509\_parse](function.openssl-x509-parse.md) — Analisa um certificado X509 e retorna as informações como um array
  - [openssl\_x509\_read](function.openssl-x509-read.md) — Analisa um certificado X.509 e retorna um objeto para
    ele
  - [openssl\_x509\_verify](function.openssl-x509-verify.md) — Verifica a assinatura digital do certificado x509 em relação a uma chave pública
- [OpenSSLCertificate](class.opensslcertificate.md) — A classe OpenSSLCertificate
- [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md) — A classe OpenSSLCertificateSigningRequest
- [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) — A classe OpenSSLAsymmetricKey

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
