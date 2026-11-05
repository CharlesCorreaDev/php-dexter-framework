# Define o limite para um recurso específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setresourcelimit.php

---

# Imagick::setResourceLimit

(PECL imagick 2, PECL imagick 3)

Imagick::setResourceLimit — Define o limite para um recurso específico

### Descrição

public static function **Imagick::setResourceLimit**([int](language.types.integer.md) `$type`, [int](language.types.integer.md) `$limit`): [bool](language.types.boolean.md)

Este método é usado para modificar os limites de recursos da biblioteca ImageMagick
subjacente.

### Parâmetros

`type`
:   Consulte a lista de [constantes de tipo de recurso](imagick.constants.md#imagick.constants.resourcetypes).

`limit`
:   Uma das [constantes de tipo de recurso](imagick.constants.md#imagick.constants.resourcetypes).
    A unidade depende do tipo de recurso que está sendo limitado.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Veja também

- [Imagick::getResourceLimit()](imagick.getresourcelimit.md) - Retorna o limite de recursos especificado

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
