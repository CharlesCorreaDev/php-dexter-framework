# Descriptografia de chave pública autenticada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-box-open.php

---

# sodium\_crypto\_box\_open

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_box\_open — Descriptografia de chave pública autenticada

### Descrição

function **sodium\_crypto\_box\_open**([string](language.types.string.md) `$ciphertext`, [string](language.types.string.md) `$nonce`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key_pair`): [string](language.types.string.md)|[false](language.types.singleton.md)

Descriptografa uma mensagem usando criptografia assimétrica (chave pública).

### Parâmetros

`ciphertext`
:   A mensagem criptografada para tentar descriptografar.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 24 bytes de comprimento.
    Este é um limite grande o suficiente para ser gerado aleatoriamente (por exemplo, [random\_bytes()](function.random-bytes.md)).

`key_pair`
:   Veja [sodium\_crypto\_box\_keypair\_from\_secretkey\_and\_publickey()](function.sodium-crypto-box-keypair-from-secretkey-and-publickey.md).
    Este parâmetro deve incluir a chave pública do remetente e a chave secreta do destinatário.

### Valor Retornado

Retorna a mensagem de texto simples em caso de sucesso, ou **`false`** em caso de falha.

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
