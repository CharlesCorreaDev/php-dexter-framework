# Obtém as palavras-chave para a localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.getkeywords.php

---

# Locale::getKeywords

# locale\_get\_keywords

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::getKeywords -- locale\_get\_keywords — Obtém as palavras-chave para a localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::getKeywords**([string](language.types.string.md) `$locale`): [array](language.types.array.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Estilo procedural

function **locale\_get\_keywords**([string](language.types.string.md) `$locale`): [array](language.types.array.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Obtém as palavras-chave para a localidade.

### Parâmetros

`locale`
:   A localidade da qual as palavras-chave serão extraídas

### Valor Retornado

[array](language.types.array.md) associativo contendo pares chave-valor para a localidade.

Retorna **`null`** quando o comprimento de `locale` excede **`INTL_MAX_LOCALE_LEN`**.

### Examples

**Exemplo #1 Exemplo de **locale\_get\_keywords()****

```
<?php
$keywords_arr = locale_get_keywords('de_DE@currency=EUR;collation=PHONEBOOK');
if ($keywords_arr) {
    foreach ($keywords_arr as $key => $value) {
        echo "$key = $value\n";
    }
}
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$keywords_arr = Locale::getKeywords('de_DE@currency=EUR;collation=PHONEBOOK');
if ($keywords_arr) {
    foreach ($keywords_arr as $key => $value) {
        echo "$key = $value\n";
    }
}
?>
```

O exemplo acima produzirá:

```
collation = PHONEBOOK
currency = EUR
```

### Veja também

- [locale\_get\_all\_variants()](locale.getallvariants.md) - Obtém as variantes para a localidade

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
