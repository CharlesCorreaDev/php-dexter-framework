# Retorna um nome apropriadamente localizado para as variantes da localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.getdisplayvariant.php

---

# Locale::getDisplayVariant

# locale\_get\_display\_variant

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::getDisplayVariant -- locale\_get\_display\_variant — Retorna um nome apropriadamente localizado para as variantes da localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::getDisplayVariant**([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **locale\_get\_display\_variant**([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna um nome apropriadamente localizado para as variantes da
localidade. Se for **`null`**, a localidade padrão será usada.

### Parâmetros

`locale`
:   A localidade para a qual será mostrada a variante

`displayLocale`
:   Localidade de formatação, opcional, usada para mostrar o nome da variante

### Valor Retornado

Nome da variante para a localidade (`locale`) no formato apropriado para
`displayLocale`, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `displayLocale` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **locale\_get\_display\_variant()****

```
<?php
echo locale_get_display_variant('sl-Latn-IT-nedis', 'en');
echo ";\n";
echo locale_get_display_variant('sl-Latn-IT-nedis', 'fr');
echo ";\n";
echo locale_get_display_variant('sl-Latn-IT-nedis', 'de');
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
echo Locale::getDisplayVariant('sl-Latn-IT-nedis', 'en');
echo ";\n";
echo Locale::getDisplayVariant('sl-Latn-IT-nedis', 'fr');
echo ";\n";
echo Locale::getDisplayVariant('sl-Latn-IT-nedis', 'de');
?>
```

O exemplo acima produzirá:

```
Natisone dialect;
dialecte de Natisone;
NEDIS
```

### Veja também

- [locale\_get\_display\_name()](locale.getdisplayname.md) - Retorna um nome apropriadamente localizado para a localidade
- [locale\_get\_display\_language()](locale.getdisplaylanguage.md) - Retorna um nome apropriadamente localizado para a língua da localidade
- [locale\_get\_display\_script()](locale.getdisplayscript.md) - Retorna um nome apropriadamente localizado para o tipo de escrita da localidade
- [locale\_get\_display\_region()](locale.getdisplayregion.md) - Retorna um nome apropriadamente localizado para a região da localidade

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
