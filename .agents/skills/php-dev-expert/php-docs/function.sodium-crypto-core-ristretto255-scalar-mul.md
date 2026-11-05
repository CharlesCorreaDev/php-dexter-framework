# Multiplica um valor escalar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-core-ristretto255-scalar-mul.php

---

# sodium\_crypto\_core\_ristretto255\_scalar\_mul

(PHP 8 >= 8.1.0)

sodium\_crypto\_core\_ristretto255\_scalar\_mul — Multiplica um valor escalar

### Descrição

function **sodium\_crypto\_core\_ristretto255\_scalar\_mul**([string](language.types.string.md) `$x`, [string](language.types.string.md) `$y`): [string](language.types.string.md)

Multiplica um valor escalar.
Disponível a partir do libsodium 1.0.18.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`x`
:   Escalar, representando a coordenada X.

`y`
:   Escalar, representando a coordenada Y.

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
