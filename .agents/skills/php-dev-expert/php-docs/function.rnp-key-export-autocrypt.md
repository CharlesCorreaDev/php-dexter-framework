# Exporte o mínimo de chaves para o recurso de criptografia automática (apenas 5 pacotes: chave, uid, assinatura,
   subchave de criptografia, assinatura)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-key-export-autocrypt.php

---

# rnp\_key\_export\_autocrypt

(PECL rnp >= 0.1.1)

rnp\_key\_export\_autocrypt — 
Exporte o mínimo de chaves para o recurso de criptografia automática (apenas 5 pacotes: chave, uid, assinatura,
subchave de criptografia, assinatura)

### Descrição

function **rnp\_key\_export\_autocrypt**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$key_fp`,  
    [string](language.types.string.md) `$subkey_fp`,  
    [string](language.types.string.md) `$uid`,  
    [int](language.types.integer.md) `$flags`  
): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`key_fp`
:   Impressão digital da chave primária.

`subkey_fp`
:   Subchave para exportar. Pode ser uma string vazia
    para selecionar a primeira subchave adequada.

`uid`
:   ID do usuário a ser exportado. Pode ser uma string vazia
    se a chave exportada tiver apenas um uid.

`flags`
:   Apenas **`RNP_KEY_EXPORT_BASE64`** é suportada atualmente. Ativá-la
    exportaria dados de chave codificados em base64 em vez de binários.

### Valor Retornado

Pacotes OpenPGP de chave exportada em caso de sucesso ou **`false`** em caso de falha.

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
