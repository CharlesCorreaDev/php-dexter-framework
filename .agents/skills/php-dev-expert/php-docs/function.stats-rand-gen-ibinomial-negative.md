# Gera um desvio aleatório da distribuição binomial negativa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-rand-gen-ibinomial-negative.php

---

# stats\_rand\_gen\_ibinomial\_negative

(PECL stats >= 1.0.0)

stats\_rand\_gen\_ibinomial\_negative — Gera um desvio aleatório da distribuição binomial negativa

### Descrição

function **stats\_rand\_gen\_ibinomial\_negative**([int](language.types.integer.md) `$n`, [float](language.types.float.md) `$p`): [int](language.types.integer.md)

Retorna um desvio aleatório de uma distribuição binomial negativa onde o número de sucessos é
`n` e a taxa de sucesso é `p`.

### Parâmetros

`n`
:   O número do sucessos

`p`
:   A taxa de sucesso

### Valor Retornado

Um desvio aleatório, que é o número de falhas.

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
