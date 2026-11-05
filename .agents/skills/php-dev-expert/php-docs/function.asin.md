# Arco seno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.asin.php

---

# asin

(PHP 4, PHP 5, PHP 7, PHP 8)

asin — Arco seno

### Descrição

function **asin**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna o arco seno de `num` em radianos.
**asin()** é a função inversa da função
[sin()](function.sin.md), o que significa que
`$num == sin(asin($num))` para qualquer valor de
`num` que esteja no
domínio da função **asin()**.

### Parâmetros

`num`
:   O argumento a processar

### Valor Retornado

O arco seno de `num` em radianos

### Veja também

- [sin()](function.sin.md) - Seno
- [asinh()](function.asinh.md) - Arco seno hiperbólico
- [acos()](function.acos.md) - Arco cosseno
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
