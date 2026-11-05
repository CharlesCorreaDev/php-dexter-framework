# Retorna um nome apropriadamente localizado para a região da localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.getdisplayregion.php

---

# Locale::getDisplayRegion

# locale\_get\_display\_region

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::getDisplayRegion -- locale\_get\_display\_region — Retorna um nome apropriadamente localizado para a região da localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::getDisplayRegion**([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **locale\_get\_display\_region**([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna um nome apropriadamente localizado para a região da
localidade. Se a localidade for **`null`**, a padrão é usada.

### Parâmetros

`locale`
:   A localidade para a qual será retornada a região

`displayLocale`
:   Localidade de formatação, opcional, para mostrar o nome da região

### Valor Retornado

O nome da região para a localidade `locale` no formato apropriado para
`displayLocale`, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `displayLocale` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **locale\_get\_display\_region()****

```
<?php
echo locale_get_display_region('sl-Latn-IT-nedis', 'en');
echo ";\n";
echo locale_get_display_region('sl-Latn-IT-nedis', 'fr');
echo ";\n";
echo locale_get_display_region('sl-Latn-IT-nedis', 'de');
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
echo Locale::getDisplayRegion('sl-Latn-IT-nedis', 'en');
echo ";\n";
echo Locale::getDisplayRegion('sl-Latn-IT-nedis', 'fr');
echo ";\n";
echo Locale::getDisplayRegion('sl-Latn-IT-nedis', 'de');
?>
```

O exemplo acima produzirá:

```
Italy;
Italie;
Italien
```

### Veja também

- [locale\_get\_display\_name()](locale.getdisplayname.md) - Retorna um nome apropriadamente localizado para a localidade
- [locale\_get\_display\_language()](locale.getdisplaylanguage.md) - Retorna um nome apropriadamente localizado para a língua da localidade
- [locale\_get\_display\_script()](locale.getdisplayscript.md) - Retorna um nome apropriadamente localizado para o tipo de escrita da localidade
- [locale\_get\_display\_variant()](locale.getdisplayvariant.md) - Retorna um nome apropriadamente localizado para as variantes da localidade

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
