# Analisa um armazenamento de certificados PKCS#12 em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkcs12-read.php

---

# openssl\_pkcs12\_read

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

openssl\_pkcs12\_read — Analisa um armazenamento de certificados PKCS#12 em um array

### Descrição

function **openssl\_pkcs12\_read**([string](language.types.string.md) `$pkcs12`, [array](language.types.array.md) `&$certificates`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$passphrase`): [bool](language.types.boolean.md)

**openssl\_pkcs12\_read()** analisa o armazenamento de certificado PKCS#12 informado em
`pkcs12` e insere o resultado em um array nomeado por
`certificates`.

### Parâmetros

`pkcs12`
:   O conteúdo do armazenamento de certificado, e não o nome de um arquivo.

`certificates`
:   Em caso de sucesso, esta variável conterá o array com os dados do armazenamento de certificado.

`passphrase`
:   Senha de criptografia para desbloquear o certificado PKCS#12.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **openssl\_pkcs12\_read()****

```
<?php
if (!$cert_store = file_get_contents("/certs/file.p12")) {
    echo "Erro: não é possível ler o arquivo do certificado\n";
    exit;
}

if (openssl_pkcs12_read($cert_store, $cert_info, "minha_senha_secreta")) {
    echo "Informação do certificado\n";
    print_r($cert_info);
} else {
    echo "Erro: não é possível ler o armazenamento de certificados.\n";
    exit;
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
