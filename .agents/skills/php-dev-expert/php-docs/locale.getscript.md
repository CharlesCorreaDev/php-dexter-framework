# Obtém o tipo de escrita para a localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.getscript.php

---

# Locale::getScript

# locale\_get\_script

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::getScript -- locale\_get\_script — Obtém o tipo de escrita para a localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::getScript**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

Estilo procedural

function **locale\_get\_script**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[string](language.types.string.md)

Obtém o tipo de escrita para a localidade.

### Parâmetros

`locale`
:   A localidade da qual o tipo de escrita será extraído

### Valor Retornado

A sub-etiqueta de tipo de escrita para a localidade ou **`null`** se não estiver presente.

### Examples

**Exemplo #1 Exemplo de **locale\_get\_script()****

```
<?php
echo locale_get_script('sr-Cyrl');
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
echo Locale::getScript('sr-Cyrl');
?>
```

O exemplo acima produzirá:

```
Cyrl
```

### Veja também

- [locale\_get\_primary\_language()](locale.getprimarylanguage.md) - Obtém a língua primária para a localidade
- [locale\_get\_region()](locale.getregion.md) - Obtém a região para a localidade
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
