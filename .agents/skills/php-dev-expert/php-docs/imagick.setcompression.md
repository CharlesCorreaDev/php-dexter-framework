# Define o tipo de compactação padrão do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setcompression.php

---

# Imagick::setCompression

(PECL imagick 2, PECL imagick 3)

Imagick::setCompression — Define o tipo de compactação padrão do objeto

### Descrição

public function **Imagick::setCompression**([int](language.types.integer.md) `$compression`): [bool](language.types.boolean.md)

Define o tipo de compactação padrão do objeto.

### Parâmetros

`compression`
:   O tipo de comactação. Consulte as constantes [Imagick::COMPRESSION\_\*](imagick.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
