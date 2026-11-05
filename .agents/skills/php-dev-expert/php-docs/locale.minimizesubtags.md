# Remove likely subtags from a locale

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.minimizesubtags.php

---

# Locale::minimizeSubtags

# locale\_minimize\_subtags

(No version information available, might only be in Git)

Locale::minimizeSubtags -- locale\_minimize\_subtags — Remove likely subtags from a locale

### Descrição

Estilo orientado a objetos

public static function **Locale::minimizeSubtags**([string](language.types.string.md) `$locale`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **locale\_minimize\_subtags**([string](language.types.string.md) `$locale`): [string](language.types.string.md)|[false](language.types.singleton.md)

Minimizes a locale tag by removing subtags that can be inferred using the
ICU likely subtag data. For example, `en_Latn_US` becomes
`en`.

### Parâmetros

`locale`
:   The locale to minimize.

### Valor Retornado

Returns the locale with likely subtags removed, or **`false`** on failure.

### Erros/Exceções

Throws a [ValueError](class.valueerror.md) when the `locale`
argument contains null bytes.

### Veja também

- [Locale::addLikelySubtags()](locale.addlikelysubtags.md) - Add likely subtags to a locale
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
