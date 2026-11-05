# Arco cosseno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.acos.php

---

# acos

(PHP 4, PHP 5, PHP 7, PHP 8)

acos — Arco cosseno

### Descrição

function **acos**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna o arco cosseno de `num` em radianos.
**acos()** é a função inversa de
[cos()](function.cos.md), o que significa que
`$num == cos(acos($num))` para qualquer valor de
`num` que esteja no
domínio de **acos()**.

### Parâmetros

`num`
:   O argumento a processar

### Valor Retornado

O arco cosseno de `num` em radianos.

### Veja também

- [cos()](function.cos.md) - Cosseno
- [acosh()](function.acosh.md) - Arco cosseno hiperbólico
- [asin()](function.asin.md) - Arco seno
- [atan()](function.atan.md) - Arco tangente

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
