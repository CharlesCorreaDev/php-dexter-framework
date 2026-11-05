# Retorna um nome apropriadamente localizado para a língua da localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/locale.getdisplaylanguage.php

---

# Locale::getDisplayLanguage

# locale\_get\_display\_language

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Locale::getDisplayLanguage -- locale\_get\_display\_language — Retorna um nome apropriadamente localizado para a língua da localidade

### Descrição

Estilo orientado a objetos

public static function **Locale::getDisplayLanguage**([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **locale\_get\_display\_language**([string](language.types.string.md) `$locale`, [?](language.types.null.md)[string](language.types.string.md) `$displayLocale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna um nome apropriadamente localizado para a língua da
localidade. Se a localidade de entrada for **`null`**, a localidade padrão será usada.

### Parâmetros

`locale`
:   A localidade para a qual será mostrada a língua

`displayLocale`
:   Formato de localidade, opcional, para mostrar o nome da língua

### Valor Retornado

Nome da língua para a localidade `locale` no formato apropriado para
`displayLocale`, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `displayLocale` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **locale\_get\_display\_language()****

```
<?php
echo locale_get_display_language('sl-Latn-IT-nedis', 'en');
echo ";\n";
echo locale_get_display_language('sl-Latn-IT-nedis', 'fr');
echo ";\n";
echo locale_get_display_language('sl-Latn-IT-nedis', 'de');
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
echo Locale::getDisplayLanguage('sl-Latn-IT-nedis', 'en');
echo ";\n";
echo Locale::getDisplayLanguage('sl-Latn-IT-nedis', 'fr');
echo ";\n";
echo Locale::getDisplayLanguage('sl-Latn-IT-nedis', 'de');
?>
```

O exemplo acima produzirá:

```
Slovenian;
slov\xc3\xa8ne;
Slowenisch
```

### Veja também

- [locale\_get\_display\_name()](locale.getdisplayname.md) - Retorna um nome apropriadamente localizado para a localidade
- [locale\_get\_display\_script()](locale.getdisplayscript.md) - Retorna um nome apropriadamente localizado para o tipo de escrita da localidade
- [locale\_get\_display\_region()](locale.getdisplayregion.md) - Retorna um nome apropriadamente localizado para a região da localidade
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
