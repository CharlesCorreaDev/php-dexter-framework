# Verifica se um filtro de etiqueta de língua corresponde à localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.filtermatches.php

---

# Locale::filterMatches

# locale\_filter\_matches

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::filterMatches -- locale\_filter\_matches — Verifica se um filtro de etiqueta de língua corresponde à localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::filterMatches**([string](language.types.string.md) `$languageTag`, [string](language.types.string.md) `$locale`, [bool](language.types.boolean.md) `$canonicalize` = **`false`**): [?](language.types.null.md)[bool](language.types.boolean.md)

Estilo procedural

function **locale\_filter\_matches**([string](language.types.string.md) `$languageTag`, [string](language.types.string.md) `$locale`, [bool](language.types.boolean.md) `$canonicalize` = **`false`**): [?](language.types.null.md)[bool](language.types.boolean.md)

Verifica se um filtro `languageTag` corresponde à localidade `locale` de acordo com o
algoritmo básico de filtragem da RFC 4647.

### Parâmetros

`languageTag`
:   A etiqueta de língua a ser verificada

`locale`
:   O intervalo de línguas contra o qual será feita a verificação

`canonicalize`
:   Se verdadeiro, os argumentos serão convertidos à forma canônica antes
    da correspondência.

### Valor Retornado

**`true`** se `locale` corresponder a `languageTag`, **`false`** caso contrário.

Retorna **`null`** quando o comprimento de `locale` excede **`INTL_MAX_LOCALE_LEN`**.

### Examples

**Exemplo #1 Exemplo de **locale\_filter\_matches()****

```
<?php
echo (locale_filter_matches('de-DEVA','de-DE', false)) ? "Corresponde" : "Não corresponde";
echo '; ';
echo (locale_filter_matches('de-DE_1996','de-DE', false)) ? "Corresponde" : "Não corresponde";
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
echo (Locale::filterMatches('de-DEVA','de-DE', false)) ? "Corresponde" : "Não corresponde";
echo '; ';
echo (Locale::filterMatches('de-DE-1996','de-DE', false)) ? "Corresponde" : "Não corresponde";
?>
```

O exemplo acima produzirá:

```
Não corresponde; Corresponde
```

### Veja também

- [locale\_lookup()](locale.lookup.md) - Pesquisa a lista de etiquetas de língua pela melhor correspondência à língua

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
