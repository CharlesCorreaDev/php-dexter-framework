# Gera um desvio aleatório da distribuição beta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-rand-gen-beta.php

---

# stats\_rand\_gen\_beta

(PECL stats >= 1.0.0)

stats\_rand\_gen\_beta — Gera um desvio aleatório da distribuição beta

### Descrição

function **stats\_rand\_gen\_beta**([float](language.types.float.md) `$a`, [float](language.types.float.md) `$b`): [float](language.types.float.md)

Retorna um desvio aleatório da distribuição beta com os parâmetros A e
B. A densidade de beta é x^(a-1) \* (1-x)^(b-1) / B(a,b) para 0 < x
< 1. Método por R. C. H. Cheng.

### Parâmetros

`a`
:   O parâmetro de forma da distribuição beta

`b`
:   O parâmetro de forma da distribuição beta

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
