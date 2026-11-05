# Deriva deterministicamente o par de chaves de uma única chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign-seed-keypair.php

---

# sodium\_crypto\_sign\_seed\_keypair

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign\_seed\_keypair — Deriva deterministicamente o par de chaves de uma única chave

### Descrição

function **sodium\_crypto\_sign\_seed\_keypair**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$seed`): [string](language.types.string.md)

Fixa a semente para formar uma chave secreta, deriva a chave pública e retorna as duas como um par de chaves.

As funções `*_seed_keypair` são ideais para gerar um par de chaves a partir de uma
senha e um salt. Use o resultado como uma `seed` para gerar as chaves desejadas.

### Parâmetros

`seed`
:   Alguma entrada criptográfica. Deve ter 32 bytes.

### Valor Retornado

Par de chaves (chave secreta e chave pública)

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
