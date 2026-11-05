# Obtém o nome do fuso horário adequado para apresentação ao usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intltimezone.getdisplayname.php

---

# IntlTimeZone::getDisplayName

# intltz\_get\_display\_name

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlTimeZone::getDisplayName -- intltz\_get\_display\_name — Obtém o nome do fuso horário adequado para apresentação ao usuário

### Descrição

Estilo orientado a objetos (método):

public function **IntlTimeZone::getDisplayName**([bool](language.types.boolean.md) `$dst` = **`false`**, [int](language.types.integer.md) `$style` = **`IntlTimeZone::DISPLAY_LONG`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural:

function **intltz\_get\_display\_name**(  
    [IntlTimeZone](class.intltimezone.md) `$timezone`,  
    [bool](language.types.boolean.md) `$dst` = **`false`**,  
    [int](language.types.integer.md) `$style` = **`IntlTimeZone::DISPLAY_LONG`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`dst`

`style`

`locale`

### Valor Retornado

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
