# Obtém o deslocamento UTC padrão e o deslocamento com horário de verão para um determinado timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intltimezone.getoffset.php

---

# IntlTimeZone::getOffset

# intltz\_get\_offset

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlTimeZone::getOffset -- intltz\_get\_offset — Obtém o deslocamento UTC padrão e o deslocamento com horário de verão para um determinado timestamp Unix

### Descrição

Estilo orientado a objetos (método):

public function **IntlTimeZone::getOffset**(  
    [float](language.types.float.md) `$timestamp`,  
    [bool](language.types.boolean.md) `$local`,  
    [int](language.types.integer.md) `&$rawOffset`,  
    [int](language.types.integer.md) `&$dstOffset`  
): [bool](language.types.boolean.md)

Estilo procedural:

function **intltz\_get\_offset**(  
    [IntlTimeZone](class.intltimezone.md) `$timezone`,  
    [float](language.types.float.md) `$timestamp`,  
    [bool](language.types.boolean.md) `$local`,  
    [int](language.types.integer.md) `&$rawOffset`,  
    [int](language.types.integer.md) `&$dstOffset`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`timestamp`

`local`

`rawOffset`

`dstOffset`

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
