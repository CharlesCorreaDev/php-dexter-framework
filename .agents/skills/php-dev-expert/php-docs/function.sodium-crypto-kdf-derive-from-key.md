# Deriva uma subchave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-kdf-derive-from-key.php

---

# sodium\_crypto\_kdf\_derive\_from\_key

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_kdf\_derive\_from\_key — Deriva uma subchave

### Descrição

function **sodium\_crypto\_kdf\_derive\_from\_key**(  
    [int](language.types.integer.md) `$subkey_length`,  
    [int](language.types.integer.md) `$subkey_id`,  
    [string](language.types.string.md) `$context`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`  
): [string](language.types.string.md)

Deriva uma subchave de uma chave raiz e contexto adicional.

Similar a [hash\_hkdf()](function.hash-hkdf.md).

### Parâmetros

`subkey_length`
:   Comprimento da chave a ser retornada (em bytes)

`subkey_id`
:   Retorna a enésima subchave de uma determinada chave raiz. Útil para busca.

`context`
:   Contexto específico da aplicação.

`key`
:   A chave raiz da qual a subchave é derivada.

### Valor Retornado

Uma sequência de bytes pseudoaleatórios (binários brutos).

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
