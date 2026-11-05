# (Preferido) Criptografa e autentica com XChaCha20-Poly1305

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-xchacha20poly1305-ietf-encrypt.php

---

# sodium\_crypto\_aead\_xchacha20poly1305\_ietf\_encrypt

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_aead\_xchacha20poly1305\_ietf\_encrypt — (Preferido) Criptografa e autentica com XChaCha20-Poly1305

### Descrição

function **sodium\_crypto\_aead\_xchacha20poly1305\_ietf\_encrypt**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`,  
    [string](language.types.string.md) `$additional_data`,  
    [string](language.types.string.md) `$nonce`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`  
): [string](language.types.string.md)

Criptografa e autentica com XChaCha20-Poly1305 (variante eXtended-nonce).

Geralmente, o XChaCha20-Poly1305 é o melhor dos modos AEAD fornecidos para uso.

### Parâmetros

`message`
:   A mensagem de texto simples a ser criptografada.

`additional_data`
:   Dados adicionais e autenticados. São usados ​​na verificação da tag de autenticação
    anexada ao texto cifrado, mas não são criptografados nem armazenados no texto cifrado.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 24 bytes de comprimento.
    Este é um limite grande o suficiente para ser gerado aleatoriamente (por exemplo, [random\_bytes()](function.random-bytes.md)).

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

Retorna o texto cifrado e etiqueta de autenticação como uma string ou bytes binários brutos.

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
