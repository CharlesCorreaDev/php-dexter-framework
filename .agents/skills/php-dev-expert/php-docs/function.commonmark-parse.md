# Análise

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.commonmark-parse.php

---

# CommonMark\Parse

(cmark >= 1.0.0)

CommonMark\Parse — Análise

### Descrição

function **CommonMark\Parse**([string](language.types.string.md) `$content`, [int](language.types.integer.md) `$options` = ?): [CommonMark\Node](class.commonmark-node.md)

Analisa o conteúdo definido por `content`.

### Parâmetros

`content`
:   String de marcação

`options`
:   Uma máscara de bits de:

    **`CommonMark\Parser\Normal`** ([int](language.types.integer.md))

    **`CommonMark\Parser\Normalize`** ([int](language.types.integer.md))

    **`CommonMark\Parser\ValidateUTF8`** ([int](language.types.integer.md))

    **`CommonMark\Parser\Smart`** ([int](language.types.integer.md))

### Valor Retornado

Retorna um CommonMark\Node raiz.

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
