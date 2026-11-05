# Criptografa uma mensagem sem autenticação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-stream-xor.php

---

# sodium\_crypto\_stream\_xor

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_stream\_xor — Criptografa uma mensagem sem autenticação

### Descrição

function **sodium\_crypto\_stream\_xor**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`, [string](language.types.string.md) `$nonce`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)

Esta função criptografa uma mensagem com XSalsa20, mas não fornece nenhuma garantia
de texto cifrado sobre o texto simples.

### Parâmetros

`message`
:   A mensagem para criptografar

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 24 bytes de comprimento.
    Este é um limite grande o suficiente para ser gerado aleatoriamente (por exemplo, [random\_bytes()](function.random-bytes.md)).

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

Mensagem criptografada.

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
