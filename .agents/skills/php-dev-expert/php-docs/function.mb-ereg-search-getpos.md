# Retorna o ponto de início para a próxima correspondência de expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-search-getpos.php

---

# mb\_ereg\_search\_getpos

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_search\_getpos — Retorna o ponto de início para a próxima correspondência de expressão regular

### Descrição

function **mb\_ereg\_search\_getpos**(): [int](language.types.integer.md)

Retorna o ponto de início para a próxima correspondência de expressão regular.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**mb\_ereg\_search\_getpos()** retorna
o ponto de início da correspondência de expressão regular para
[mb\_ereg\_search()](function.mb-ereg-search.md),
[mb\_ereg\_search\_pos()](function.mb-ereg-search-pos.md),
[mb\_ereg\_search\_regs()](function.mb-ereg-search-regs.md). A posição é
representada em bytes a partir do início da string.

### Notas

> **Nota**:
>
> A codificação interna ou a
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_ereg\_search\_setpos()](function.mb-ereg-search-setpos.md) - Define o ponto de início para a próxima correspondência de expressão regular

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
