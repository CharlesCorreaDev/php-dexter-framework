# Verifica uma assinatura CMS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-cms-verify.php

---

# openssl\_cms\_verify

(PHP 8)

openssl\_cms\_verify — Verifica uma assinatura CMS

### Descrição

function **openssl\_cms\_verify**(  
    [string](language.types.string.md) `$input_filename`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$certificates` = **`null`**,  
    [array](language.types.array.md) `$ca_info` = [],  
    [?](language.types.null.md)[string](language.types.string.md) `$untrusted_certificates_filename` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$pk7` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$sigfile` = **`null`**,  
    [int](language.types.integer.md) `$encoding` = **`OPENSSL_ENCODING_SMIME`**  
): [bool](language.types.boolean.md)

Esta função verifica uma assinatura CMS, anexada ou não, com a codificação especificada.

### Parâmetros

`input_filename`
:   O arquivo de entrada.

`flags`
:   Opções a serem passadas a **cms\_verify()**.

`certificates`
:   Um arquivo com o certificado do signatário e opcionalmente certificados intermediários.

`ca_info`
:   Um array contendo certificados de autoridades certificadoras autoassinados.

`untrusted_certificates_filename`
:   Um arquivo contendo certificados intermediários adicionais.

`content`
:   Um arquivo apontando para o conteúdo quando as assinaturas não estão anexadas.

`pk7`

`sigfile`
:   Um arquivo onde a assinatura será gravada.

`encoding`
:   A codificação do arquivo de entrada. Uma das constantes **`OPENSSL_ENCODING_SMIME`**,
    **`OPENSSL_ENCODING_DER`** ou **`OPENSSL_ENCODING_PEM`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
