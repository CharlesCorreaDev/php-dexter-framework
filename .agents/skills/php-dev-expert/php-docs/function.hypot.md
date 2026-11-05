# Calcula o comprimento da hipotenusa de triângulo retângulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hypot.php

---

# hypot

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

hypot — 
Calcula o comprimento da hipotenusa de triângulo retângulo

### Descrição

function **hypot**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [float](language.types.float.md)

**hypot()** retorna o comprimento da hipotenusa de um
triângulo retângulo com lados de tamanho `x` e
`y`, ou a distância do ponto
(`x`, `y`) a partir da origem.
É o equivalente a `sqrt($x*$x + $y*$y)`.

### Parâmetros

`x`
:   Comprimento do primeiro lado

`y`
:   Comprimento do segundo lado

### Valor Retornado

Comprimento calculado da hipotenusa

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
