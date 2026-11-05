# Verifica e descriptografa uma mensagem com AES-256-GCM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-aes256gcm-decrypt.php

---

# sodium\_crypto\_aead\_aes256gcm\_decrypt

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_aead\_aes256gcm\_decrypt — Verifica e descriptografa uma mensagem com AES-256-GCM

### Descrição

function **sodium\_crypto\_aead\_aes256gcm\_decrypt**(  
    [string](language.types.string.md) `$ciphertext`,  
    [string](language.types.string.md) `$additional_data`,  
    [string](language.types.string.md) `$nonce`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Verifica e descriptografa uma mensagem com AES-256-GCM.
Disponível somente se [sodium\_crypto\_aead\_aes256gcm\_is\_available()](function.sodium-crypto-aead-aes256gcm-is-available.md) retornar **`true`**.

### Parâmetros

`ciphertext`
:   Precisa estar no formato fornecido por [sodium\_crypto\_aead\_aes256gcm\_encrypt()](function.sodium-crypto-aead-aes256gcm-encrypt.md)
    (texto cifrado e texto, concatenados).

`additional_data`
:   Dados adicionais e autenticados. São usados ​​na verificação da tag de autenticação
    anexada ao texto cifrado, mas não são criptografados nem armazenados no texto cifrado.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 12 bytes long.

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

Retorna o texto simples em caso de sucesso, ou **`false`** em caso de falha.

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
