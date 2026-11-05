# Converte texto hebraico lógico para texto visual com conversão de novas linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hebrevc.php

---

# hebrevc

(PHP 4, PHP 5, PHP 7)

hebrevc — Converte texto hebraico lógico para texto visual com conversão de novas linhas

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **hebrevc**([string](language.types.string.md) `$hebrew_text`, [int](language.types.integer.md) `$max_chars_per_line` = 0): [string](language.types.string.md)

Esta função é similar a [hebrev()](function.hebrev.md) com a
diferença que ela converte novas linhas (\n) para "<br>\n".

A função tenta evitar quebra de palavras.

### Parâmetros

`hebrew_text`
:   Ums string de entrada em hebraico.

`max_chars_per_line`
:   Este parâmetro opcional indica o número máximo de caracteres por
    linha que serão retornados.

### Valor Retornado

Retorna a string visual.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Veja também

- [hebrev()](function.hebrev.md) - Converte texto hebraico lógico para texto visual

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
