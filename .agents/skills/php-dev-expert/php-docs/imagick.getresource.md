# Retorna o uso de memória do recurso especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getresource.php

---

# Imagick::getResource

(PECL imagick 2, PECL imagick 3)

Imagick::getResource — Retorna o uso de memória do recurso especificado

### Descrição

public static function **Imagick::getResource**([int](language.types.integer.md) `$type`): [int](language.types.integer.md)

Retorna o uso de memória do recurso especificado em megabytes.

### Parâmetros

`type`
:   Consulte a lista de [constantes de tipo de recurso](imagick.constants.md#imagick.constants.resourcetypes).

### Valor Retornado

Retorna o uso de memória do recurso especificado em megabytes.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
