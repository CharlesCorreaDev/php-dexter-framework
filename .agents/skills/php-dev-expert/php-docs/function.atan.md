# Arco tangente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.atan.php

---

# atan

(PHP 4, PHP 5, PHP 7, PHP 8)

atan — Arco tangente

### Descrição

function **atan**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna o arco tangente de `num` em radianos.
**atan()** é a função inversa da função
[tan()](function.tan.md), o que significa que
`$num == tan(atan($num))` para qualquer valor de
`num` que esteja no
domínio de **atan()**.

### Parâmetros

`num`
:   O argumento a processar

### Valor Retornado

O arco tangente de `num` em radianos.

### Veja também

- [tan()](function.tan.md) - Tangente
- [atanh()](function.atanh.md) - Arco tangente hiperbólico
- [asin()](function.asin.md) - Arco seno
- [acos()](function.acos.md) - Arco cosseno

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
