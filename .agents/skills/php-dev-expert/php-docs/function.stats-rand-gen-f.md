# Gera um desvio aleatório da distribuição F

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-rand-gen-f.php

---

# stats\_rand\_gen\_f

(PECL stats >= 1.0.0)

stats\_rand\_gen\_f — Gera um desvio aleatório da distribuição F

### Descrição

function **stats\_rand\_gen\_f**([float](language.types.float.md) `$dfn`, [float](language.types.float.md) `$dfd`): [float](language.types.float.md)

Gera um desvio aleatório da distribuição F (razão de variância) com
graus de liberdade "dfn" no numerador e graus de liberdade "dfd"
no denominador. Método: gera diretamente a razão das variáveis ​​qui-quadrado.

### Parâmetros

`dfn`
:   Os graus de liberdade no numerador

`dfd`
:   Os graus de liberdade no denominador

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
