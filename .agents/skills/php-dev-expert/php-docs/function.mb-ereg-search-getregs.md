# Recupera o resultado da última correspondência de expressão regular multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-search-getregs.php

---

# mb\_ereg\_search\_getregs

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_search\_getregs — Recupera o resultado da última correspondência de expressão regular multibyte

### Descrição

function **mb\_ereg\_search\_getregs**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera o resultado da última correspondência de expressão regular multibyte

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md)
incluindo a sub-string da parte correspondente pela última
[mb\_ereg\_search()](function.mb-ereg-search.md),
[mb\_ereg\_search\_pos()](function.mb-ereg-search-pos.md),
[mb\_ereg\_search\_regs()](function.mb-ereg-search-regs.md). Se houver algumas
correspondências, o primeiro elemento terá a sub-string correspondente, o
segundo elemento terá a primeira parte agrupada com colchetes,
o terceiro elemento terá a segunda parte agrupada com
colchetes, e assim por diante. Retorna **`false`** em caso de erro.

### Notas

> **Nota**:
>
> A codificação interna ou a
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_ereg\_search\_init()](function.mb-ereg-search-init.md) - Configura a string e a expressão regular para uma correspondência de expressão regular multibyte

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
