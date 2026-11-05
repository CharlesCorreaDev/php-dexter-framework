# Informa à readline que o cursor se moveu para uma nova linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-on-new-line.php

---

# readline\_on\_new\_line

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

readline\_on\_new\_line — Informa à readline que o cursor se moveu para uma nova linha

### Descrição

function **readline\_on\_new\_line**(): [void](language.types.void.md)

Informa à readline que o cursor se moveu para uma nova linha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Notas

> **Nota**:
>
> Esta função somente está disponível se suportada pela biblioteca readline subjacente.
> Não é suportada no Windows.

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
