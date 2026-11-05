# Converte texto hebraico lógico para texto visual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hebrev.php

---

# hebrev

(PHP 4, PHP 5, PHP 7, PHP 8)

hebrev — Converte texto hebraico lógico para texto visual

### Descrição

function **hebrev**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$max_chars_per_line` = 0): [string](language.types.string.md)

Converte texto hebraico lógico para texto visual.

A função tenta evitar quebra de palavras.

### Parâmetros

`string`
:   Uma string de entrada em hebraico.

`max_chars_per_line`
:   Este parâmetro opcional indica o número máximo de caracteres por
    linha que serão retornados.

### Valor Retornado

Retorna a string visual.

### Veja também

- [hebrevc()](function.hebrevc.md) - Converte texto hebraico lógico para texto visual com conversão de novas linhas

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
