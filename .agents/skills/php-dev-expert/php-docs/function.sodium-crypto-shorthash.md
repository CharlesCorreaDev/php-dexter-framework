# Calcula um hash curto de uma mensagem e chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-shorthash.php

---

# sodium\_crypto\_shorthash

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_shorthash — Calcula um hash curto de uma mensagem e chave

### Descrição

function **sodium\_crypto\_shorthash**([string](language.types.string.md) `$message`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)

**sodium\_crypto\_shorthash()** envolve uma função hash chamada
SipHash-2-4, que é ideal para implementar tabelas hash que não são suscetíveis
a ataques de negação de serviço por colisão de hash (Hash-DoS).

SipHash-2-4 não é uma função de hash criptográfica de uso geral.

### Parâmetros

`message`
:   A mensagem para hash.

`key`
:   A chave de hash.

### Valor Retornado

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
