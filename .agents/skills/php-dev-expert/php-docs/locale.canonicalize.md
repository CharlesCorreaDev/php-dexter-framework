# Canoniza a string de localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.canonicalize.php

---

# Locale::canonicalize

# locale\_canonicalize

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::canonicalize -- locale\_canonicalize — Canoniza a string de localidade

### Descrição

public static function **Locale::canonicalize**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

Canonicaliza a string de localidade informada para o formato ICU.

Isso não indica ou retorna necessariamente uma localidade válida. É apenas uma
versão da entrada que foi canonicalizada de acordo com as regras da ICU.

O comportamento desta função depende da versão do ICU que o PHP está utilizando
(**`INTL_ICU_VERSION`**).

### Parâmetros

`locale`
:   String de localidade original.

### Valor Retornado

A string de localidade canonizada.

Retorna **`null`** quando o comprimento de `locale` excede **`INTL_MAX_LOCALE_LEN`**.

### Examples

**Exemplo #1 Exemplo de **locale\_canonicalize()****

```
echo Locale::canonicalize('en-US.utf8') . "\n";
echo Locale::canonicalize('totally-not-valid') . "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
en_US
totally_NOT_VALID
```

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
