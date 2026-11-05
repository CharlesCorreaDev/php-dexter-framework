# Criptografa e autentica uma mensagem com AEGIS-128L

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-aegis128l-encrypt.php

---

# sodium\_crypto\_aead\_aegis128l\_encrypt

(PHP 8 >= 8.4.0)

sodium\_crypto\_aead\_aegis128l\_encrypt — Criptografa e autentica uma mensagem com AEGIS-128L

### Descrição

function **sodium\_crypto\_aead\_aegis128l\_encrypt**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`,  
    [string](language.types.string.md) `$additional_data`,  
    [string](language.types.string.md) `$nonce`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`  
): [string](language.types.string.md)

Criptografa e autentica uma mensagem com AEGIS-128L.

### Parâmetros

`message`
:   A mensagem de texto simples a ser criptografada.

`additional_data`
:   Dados adicionais e autenticados. São usados ​​na verificação da tag de autenticação
    anexada ao texto cifrado, mas não são criptografados nem armazenados no texto cifrado.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem.

`key`
:   Chave de criptografia (128-bit).

### Valor Retornado

Retorna o texto cifrado e a tag de autenticação como uma sequência de bytes binários brutos.

### Veja também

- [sodium\_crypto\_aead\_aegis128l\_decrypt()](function.sodium-crypto-aead-aegis128l-decrypt.md) - Verifica e descriptografa uma mensagem com AEGIS-128L
- [sodium\_crypto\_aead\_aegis128l\_keygen()](function.sodium-crypto-aead-aegis128l-keygen.md) - Gera uma chave AEGIS-128L aleatória

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
