# Gera um desvio aleatório da distribuição F não centralizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-rand-gen-noncentral-f.php

---

# stats\_rand\_gen\_noncentral\_f

(PECL stats >= 1.0.0)

stats\_rand\_gen\_noncentral\_f — Gera um desvio aleatório da distribuição F não centralizada

### Descrição

function **stats\_rand\_gen\_noncentral\_f**([float](language.types.float.md) `$dfn`, [float](language.types.float.md) `$dfd`, [float](language.types.float.md) `$xnonc`): [float](language.types.float.md)

Retorna um desvio aleatório da distribuição F não central, onde os graus de liberdade são
`dfn` (numerador) e `dfd` (denominador), e o parâmetro de não centralidade
é `xnonc`.

### Parâmetros

`dfn`
:   Os graus de liberdade do numerador

`dfd`
:   Os graus de liberdade do denominador

`xnonc`
:   O parâmetro de não centralidade

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
