# Calcula a chave pública a partir de uma chave secreta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-scalarmult-ristretto255-base.php

---

# sodium\_crypto\_scalarmult\_ristretto255\_base

(PHP 8 >= 8.1.1)

sodium\_crypto\_scalarmult\_ristretto255\_base — Calcula a chave pública a partir de uma chave secreta

### Descrição

function **sodium\_crypto\_scalarmult\_ristretto255\_base**([string](language.types.string.md) `$n`): [string](language.types.string.md)

Dada uma chave secreta, calcula a chave pública correspondente.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`n`
:   Uma chave secreta.

### Valor Retornado

Retorna uma [string](language.types.string.md) de 32 bytes aleatória.

### Veja também

- [sodium\_crypto\_scalarmult\_ristretto255()](function.sodium-crypto-scalarmult-ristretto255.md) - Calcula um segredo compartilhado

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
