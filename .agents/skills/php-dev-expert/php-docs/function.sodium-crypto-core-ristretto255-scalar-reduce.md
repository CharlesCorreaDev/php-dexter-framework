# Reduz um valor escalar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-core-ristretto255-scalar-reduce.php

---

# sodium\_crypto\_core\_ristretto255\_scalar\_reduce

(PHP 8 >= 8.1.0)

sodium\_crypto\_core\_ristretto255\_scalar\_reduce — Reduz um valor escalar

### Descrição

function **sodium\_crypto\_core\_ristretto255\_scalar\_reduce**([string](language.types.string.md) `$s`): [string](language.types.string.md)

Reduz um valor escalar.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`s`
:   Valor escalar.

### Valor Retornado

Retorna uma [string](language.types.string.md) de 32 bytes aleatória.

### Veja também

- [sodium\_crypto\_core\_ristretto255\_scalar\_random()](function.sodium-crypto-core-ristretto255-scalar-random.md) - Gera uma chave aleatória

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
