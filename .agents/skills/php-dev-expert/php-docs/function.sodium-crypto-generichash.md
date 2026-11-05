# Obtém um hash da mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-generichash.php

---

# sodium\_crypto\_generichash

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_generichash — Obtém um hash da mensagem

### Descrição

function **sodium\_crypto\_generichash**([string](language.types.string.md) `$message`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key` = "", [int](language.types.integer.md) `$length` = **`SODIUM_CRYPTO_GENERICHASH_BYTES`**): [string](language.types.string.md)

Cria hash de uma mensagem com BLAKE2b.

### Parâmetros

`message`
:   A mensagem que está sofrendo hash.

`key`
:   Chave criptográfica (opcional). Ela tem a mesma função de uma chave HMAC, mas é
    utilizada como uma seção reservada do estado interno do BLAKE2.

`length`
:   Tamanho de saída.

### Valor Retornado

O hash criptográfico como bytes brutos. Se uma saída codificada em hexadecimal for desejada,
o resultado pode ser passado para [sodium\_bin2hex()](function.sodium-bin2hex.md).

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
