# Gera um desvio aleatório da distribuição gama

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-rand-gen-gamma.php

---

# stats\_rand\_gen\_gamma

(PECL stats >= 1.0.0)

stats\_rand\_gen\_gamma — Gera um desvio aleatório da distribuição gama

### Descrição

function **stats\_rand\_gen\_gamma**([float](language.types.float.md) `$a`, [float](language.types.float.md) `$r`): [float](language.types.float.md)

Gera um desvio aleatório da distribuição gama cuja densidade é
(A\*\*R)/Gama(R) \* X\*\*(R-1) \* Exp(-A\*X).

### Parâmetros

`a`
:   Parâmetro de localização da distribuição gama (`a`
    > 0).

`r`
:   Parâmetro de forma da distribuição gama (`r` >
    0).

### Valor Retornado

Um desvio aleatório

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
