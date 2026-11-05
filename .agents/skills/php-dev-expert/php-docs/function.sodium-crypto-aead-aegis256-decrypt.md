# Verifica e descriptografa uma mensagem com AEGIS-256

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-aead-aegis256-decrypt.php

---

# sodium\_crypto\_aead\_aegis256\_decrypt

(PHP 8 >= 8.4.0)

sodium\_crypto\_aead\_aegis256\_decrypt — Verifica e descriptografa uma mensagem com AEGIS-256

### Descrição

function **sodium\_crypto\_aead\_aegis256\_decrypt**(  
    [string](language.types.string.md) `$ciphertext`,  
    [string](language.types.string.md) `$additional_data`,  
    [string](language.types.string.md) `$nonce`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Verifica e descriptografa uma mensagem com AEGIS-256.

### Parâmetros

`ciphertext`
:   Precisa estar no formato informado por [sodium\_crypto\_aead\_aegis256\_encrypt()](function.sodium-crypto-aead-aegis256-encrypt.md).

`additional_data`
:   Dados adicionais e autenticados. São usados ​​na verificação da tag de autenticação
    anexada ao texto cifrado, mas não são criptografados nem armazenados no texto cifrado.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem.

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

Retorna o texto simples em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [sodium\_crypto\_aead\_aegis256\_encrypt()](function.sodium-crypto-aead-aegis256-encrypt.md) - Criptografa e autentica uma mensagem com AEGIS-256
- [sodium\_crypto\_aead\_aegis256\_keygen()](function.sodium-crypto-aead-aegis256-keygen.md) - Gera uma chave AEGIS-256 aleatória

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
