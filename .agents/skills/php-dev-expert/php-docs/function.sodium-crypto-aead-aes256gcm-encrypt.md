# Criptografa e autentica com AES-256-GCM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-aes256gcm-encrypt.php

---

# sodium\_crypto\_aead\_aes256gcm\_encrypt

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_aead\_aes256gcm\_encrypt — Criptografa e autentica com AES-256-GCM

### Descrição

function **sodium\_crypto\_aead\_aes256gcm\_encrypt**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`,  
    [string](language.types.string.md) `$additional_data`,  
    [string](language.types.string.md) `$nonce`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`  
): [string](language.types.string.md)

Criptografa e autentica com AES-256-GCM.
Disponível somente se [sodium\_crypto\_aead\_aes256gcm\_is\_available()](function.sodium-crypto-aead-aes256gcm-is-available.md) retornar **`true`**.

### Parâmetros

`message`
:   A mensagem de texto simples a ser criptografada.

`additional_data`
:   Dados adicionais e autenticados. São usados ​​na verificação da tag de autenticação
    anexada ao texto cifrado, mas não são criptografados nem armazenados no texto cifrado.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 12 bytes long.

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

Retorna o texto cifrado e a tag de autenticação como uma sequência de bytes binários brutos. (Formato: texto cifrado e depois tag.)

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
