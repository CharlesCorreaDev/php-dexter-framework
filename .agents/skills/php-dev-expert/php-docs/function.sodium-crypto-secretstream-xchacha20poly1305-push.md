# Criptografa um bloco de dados para que ele possa ser descriptografado com segurança em uma API de fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-secretstream-xchacha20poly1305-push.php

---

# sodium\_crypto\_secretstream\_xchacha20poly1305\_push

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_secretstream\_xchacha20poly1305\_push — Criptografa um bloco de dados para que ele possa ser descriptografado com segurança em uma API de fluxo

### Descrição

function **sodium\_crypto\_secretstream\_xchacha20poly1305\_push**(  
    [string](language.types.string.md) `&$state`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$message`,  
    [string](language.types.string.md) `$additional_data` = "",  
    [int](language.types.integer.md) `$tag` = **`SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE`**  
): [string](language.types.string.md)

Criptografa um bloco de dados para que ele possa ser descriptografado com segurança em uma API de fluxo.

### Parâmetros

`state`
:   Veja [sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_pull()](function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.md)
    e [sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_push()](function.sodium-crypto-secretstream-xchacha20poly1305-init-push.md).

`message`

`additional_data`

`tag`
:   Opcional. Pode ser usado para confirmar o comportamento de descriptografia
    (por exemplo, redigitar ou indicar o bloco final em um fluxo).

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

### Valor Retornado

Retorna o texto criptografado.

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
