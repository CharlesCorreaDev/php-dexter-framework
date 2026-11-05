# Verifica a assinatura de uma mensagem assinada por S/MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkcs7-verify.php

---

# openssl\_pkcs7\_verify

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_pkcs7\_verify — Verifica a assinatura de uma mensagem assinada por S/MIME

### Descrição

function **openssl\_pkcs7\_verify**(  
    [string](language.types.string.md) `$input_filename`,  
    [int](language.types.integer.md) `$flags`,  
    [?](language.types.null.md)[string](language.types.string.md) `$signers_certificates_filename` = **`null`**,  
    [array](language.types.array.md) `$ca_info` = [],  
    [?](language.types.null.md)[string](language.types.string.md) `$untrusted_certificates_filename` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$content` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$output_filename` = **`null`**  
): [bool](language.types.boolean.md)|[int](language.types.integer.md)

**openssl\_pkcs7\_verify()** lê a mensagem S/MIME contida
no arquivo fornecido e examina a assinatura digital.

### Parâmetros

`input_filename`
:   Caminho para a o arquivo com a mensagem.

`flags`
:   `flags` contém opções que podem ser usadas ​​para afetar como a assinatura é
    verificada - consulte [constantes PKCS7](openssl.pkcs7.flags.md)
    para obter mais informações.

`signers_certificates_filename`
:   Se o `signers_certificates_filename` for especificado, deverá ser uma
    string contendo o nome de um arquivo no qual os certificados das
    pessoas que assinaram as mensagens serão armazenados no formato PEM.

`ca_info`
:   Se `ca_info` for especificado, ele deverá conter
    informações sobre os certificados de CA confiáveis ​​a serem usados ​​no processo de
    verificação - consulte [verificação
    de certificado](openssl.cert.verification.md) para obter mais informações informações sobre este parâmetro.

`untrusted_certificates_filename`
:   Se `untrusted_certificates_filename` for especificado, é o nome de
    um arquivo que contém vários certificados para usar como CAs não confiáveis.

`content`
:   Pode ser especificado um nome de arquivo com `content` que será
    preenchido com os dados verificados, mas sem as informações
    da assinatura.

`output_filename`

### Valor Retornado

Retorna **`true`** se a assinatura for verificada, **`false`** se não estiver correto
(a mensagem foi adulterada ou o certificado de assinatura é inválido)
ou -1 em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `signers_certificates_filename`, `untrusted_certificates_filename`, `content` e `output_filename` agora podem ser nulos. |
| 7.2.0 | O parâmetro `output_filename` foi adicionado. |

### Notas

> **Nota**:
>
> Como especificado na RFC 2045, as linhas não podem ser mais longas que 76 caracteres
> no arquivo informado em `input_filename`.

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
