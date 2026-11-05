# Obtém as variantes para a localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.getallvariants.php

---

# Locale::getAllVariants

# locale\_get\_all\_variants

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::getAllVariants -- locale\_get\_all\_variants — Obtém as variantes para a localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::getAllVariants**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[array](language.types.array.md)

Estilo procedural

function **locale\_get\_all\_variants**([string](language.types.string.md) `$locale`): [?](language.types.null.md)[array](language.types.array.md)

Obtém as variantes para a localidade.

### Parâmetros

`locale`
:   A localidade da qual serão extraídas as variantes.

### Valor Retornado

O [array](language.types.array.md) contendo a lista de todas as sub-etiquetas de variantes para a localidade
ou **`null`** se não houver.

Retorna **`null`** quando o comprimento de `locale` excede **`INTL_MAX_LOCALE_LEN`**.

### Examples

**Exemplo #1 Exemplo de **locale\_get\_all\_variants()****

```
<?php
$arr = locale_get_all_variants('sl_IT_NEDIS_ROJAZ_1901');
var_export( $arr );
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
 $arr = Locale::getAllVariants('sl_IT_NEDIS_ROJAZ_1901');
 var_export( $arr );
?>
```

O exemplo acima produzirá:

```
array (
    0 => 'NEDIS',
    1 => 'ROJAZ',
    2 => '1901',
)
```

### Veja também

- [locale\_get\_primary\_language()](locale.getprimarylanguage.md) - Obtém a língua primária para a localidade
- [locale\_get\_script()](locale.getscript.md) - Obtém o tipo de escrita para a localidade
- [locale\_get\_region()](locale.getregion.md) - Obtém a região para a localidade

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
