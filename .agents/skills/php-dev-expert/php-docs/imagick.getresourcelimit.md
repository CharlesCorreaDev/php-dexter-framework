# Retorna o limite de recursos especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getresourcelimit.php

---

# Imagick::getResourceLimit

(PECL imagick 2, PECL imagick 3)

Imagick::getResourceLimit — Retorna o limite de recursos especificado

### Descrição

public static function **Imagick::getResourceLimit**([int](language.types.integer.md) `$type`): [int](language.types.integer.md)

Retorna o limite de recursos especificado.

### Parâmetros

`type`
:   Uma das [constantes de tipo de recurso](imagick.constants.md#imagick.constants.resourcetypes).

### Valor Retornado

Retorna o limite de recursos especificado.
A unidade depende do tipo de recurso que está sendo limitado.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Veja também

- [Imagick::setResourceLimit()](imagick.setresourcelimit.md) - Define o limite para um recurso específico

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
