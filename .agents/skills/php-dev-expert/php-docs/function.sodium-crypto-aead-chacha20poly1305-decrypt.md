# Verifica e descriptografa com ChaCha20-Poly1305

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-chacha20poly1305-decrypt.php

---

# sodium\_crypto\_aead\_chacha20poly1305\_decrypt

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_aead\_chacha20poly1305\_decrypt — Verifica e descriptografa com ChaCha20-Poly1305

### Descrição

function **sodium\_crypto\_aead\_chacha20poly1305\_decrypt**(  
    [string](language.types.string.md) `$ciphertext`,  
    [string](language.types.string.md) `$additional_data`,  
    [string](language.types.string.md) `$nonce`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Verifica e descriptografa com ChaCha20-Poly1305.

### Parâmetros

`ciphertext`
:   Precisa estar no formato fornecido por [sodium\_crypto\_aead\_chacha20poly1305\_encrypt()](function.sodium-crypto-aead-chacha20poly1305-encrypt.md)
    (texto cifrado e tag, concatenados).

`additional_data`
:   Dados adicionais e autenticados. São usados ​​na verificação da tag de autenticação
    anexada ao texto cifrado, mas não são criptografados nem armazenados no texto cifrado.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 8 bytes long.

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
