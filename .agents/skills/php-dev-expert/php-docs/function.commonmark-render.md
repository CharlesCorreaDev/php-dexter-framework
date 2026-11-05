# Renderização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.commonmark-render.php

---

# CommonMark\Render

(cmark >= 1.0.0)

CommonMark\Render — Renderização

### Descrição

function **CommonMark\Render**([CommonMark\Node](class.commonmark-node.md) `$node`, [int](language.types.integer.md) `$options` = ?, [int](language.types.integer.md) `$width` = ?): [string](language.types.string.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`node`

`options`
:   Uma máscara de bits de:

    **`CommonMark\Render\Normal`** ([int](language.types.integer.md))

    **`CommonMark\Render\SourcePos`** ([int](language.types.integer.md))

    **`CommonMark\Render\HardBreaks`** ([int](language.types.integer.md))

    **`CommonMark\Render\Safe`** ([int](language.types.integer.md))

    **`CommonMark\Render\NoBreaks`** ([int](language.types.integer.md))

`width`

### Valor Retornado

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
