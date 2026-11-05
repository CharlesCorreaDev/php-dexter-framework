# Calcula um segredo compartilhado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-scalarmult-ristretto255.php

---

# sodium\_crypto\_scalarmult\_ristretto255

(PHP 8 >= 8.1.1)

sodium\_crypto\_scalarmult\_ristretto255 — Calcula um segredo compartilhado

### Descrição

function **sodium\_crypto\_scalarmult\_ristretto255**([string](language.types.string.md) `$n`, [string](language.types.string.md) `$p`): [string](language.types.string.md)

Calcula o escalar `n` vezes o ponto `p`.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`n`
:   Um escalar, que normalmente é uma chave secreta.

`p`
:   Um ponto (coordenada x), que normalmente é uma chave pública.

### Valor Retornado

Retorna uma [string](language.types.string.md) de 32 bytes aleatória.

### Veja também

- [sodium\_crypto\_scalarmult\_ristretto255\_base()](function.sodium-crypto-scalarmult-ristretto255-base.md) - Calcula a chave pública a partir de uma chave secreta

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
