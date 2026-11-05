# Obtém a região para a localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.getregion.php

---

# Locale::getRegion

# locale\_get\_region

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::getRegion -- locale\_get\_region — Obtém a região para a localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::getRegion**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

Estilo procedural

function **locale\_get\_region**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

Obtém a região para a localidade.

### Parâmetros

`locale`
:   A localidade da qual a região será extraída.

### Valor Retornado

A sub-etiqueta da região para a localidade ou **`null`** se não existir.

Retorna **`null`** quando o comprimento de `locale` excede **`INTL_MAX_LOCALE_LEN`**.

### Examples

**Exemplo #1 Exemplo de **locale\_get\_region()****

```
<?php
echo locale_get_region('de-CH-1901');
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
echo Locale::getRegion('de-CH-1901');
?>
```

O exemplo acima produzirá:

```
CH
```

### Veja também

- [locale\_get\_primary\_language()](locale.getprimarylanguage.md) - Obtém a língua primária para a localidade
- [locale\_get\_script()](locale.getscript.md) - Obtém o tipo de escrita para a localidade
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
