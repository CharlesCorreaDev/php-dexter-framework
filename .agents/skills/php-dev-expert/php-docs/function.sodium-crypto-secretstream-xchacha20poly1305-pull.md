# Descriptografa um pedaço de dados de um fluxo criptografado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-secretstream-xchacha20poly1305-pull.php

---

# sodium\_crypto\_secretstream\_xchacha20poly1305\_pull

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_secretstream\_xchacha20poly1305\_pull — Descriptografa um pedaço de dados de um fluxo criptografado

### Descrição

function **sodium\_crypto\_secretstream\_xchacha20poly1305\_pull**([string](language.types.string.md) `&$state`, [string](language.types.string.md) `$ciphertext`, [string](language.types.string.md) `$additional_data` = ""): [array](language.types.array.md)|[false](language.types.singleton.md)

Descriptografa um bloco de dados de um fluxo criptografado.

### Parâmetros

`state`
:   Veja [sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_pull()](function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.md)
    e [sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_push()](function.sodium-crypto-secretstream-xchacha20poly1305-init-push.md).

`ciphertext`
:   O pedaço de texto cifrado a ser descriptografado.

`additional_data`
:   Dados adicionais opcionais para incluir na tag de autenticação.

### Valor Retornado

Um array com dois valores:

- [string](language.types.string.md); O pedaço decifrado
- [int](language.types.integer.md); Uma tag opcional (se fornecida durante o push). Valores possíveis:
  - **`SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE`**:
    a tag mais comum, que não adiciona nenhuma informação sobre a natureza da mensagem.
  - **`SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL`**:
    indica que a mensagem marca o fim do fluxo e apaga a chave secreta usada para criptografar a sequência anterior.
  - **`SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PUSH`**:
    indica que a mensagem marca o fim de um conjunto de mensagens, mas não o fim do fluxo.
    Por exemplo, uma string JSON enorme enviada em vários blocos pode usar esta tag para indicar ao aplicativo que a
    string está completa e pode ser decodificada. Mas o fluxo em si não está fechado, e mais dados podem ser enviados.
  - **`SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY`**:
    "esquece" a chave usada para criptografar esta mensagem e as anteriores, e deriva uma nova chave secreta.

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
