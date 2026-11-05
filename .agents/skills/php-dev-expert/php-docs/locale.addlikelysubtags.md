# Add likely subtags to a locale

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.addlikelysubtags.php

---

# Locale::addLikelySubtags

# locale\_add\_likely\_subtags

(No version information available, might only be in Git)

Locale::addLikelySubtags -- locale\_add\_likely\_subtags — Add likely subtags to a locale

### Descrição

Estilo orientado a objetos

public static function **Locale::addLikelySubtags**([string](language.types.string.md) `$locale`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **locale\_add\_likely\_subtags**([string](language.types.string.md) `$locale`): [string](language.types.string.md)|[false](language.types.singleton.md)

Expands a locale tag by adding likely subtags based on the ICU locale data.
For example, `en` becomes `en_Latn_US`.

### Parâmetros

`locale`
:   The locale to expand.

### Valor Retornado

Returns the locale with likely subtags added, or **`false`** on failure.

### Erros/Exceções

Throws a [ValueError](class.valueerror.md) when the `locale`
argument contains null bytes.

### Veja também

- [Locale::minimizeSubtags()](locale.minimizesubtags.md) - Remove likely subtags from a locale
- [Locale::canonicalize()](locale.canonicalize.md) - Canoniza a string de localidade

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
