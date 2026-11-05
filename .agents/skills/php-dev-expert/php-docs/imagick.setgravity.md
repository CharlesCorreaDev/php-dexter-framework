# Define a gravidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setgravity.php

---

# Imagick::setGravity

(PECL imagick 2 >= 2.2.0, PECL imagick 3)

Imagick::setGravity — Define a gravidade

### Descrição

public function **Imagick::setGravity**([int](language.types.integer.md) `$gravity`): [bool](language.types.boolean.md)

Define a propriedade de gravidade global para o objeto Imagick.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.0 ou superior.

### Parâmetros

`gravity`
:   A propriedade da gravidade. Consulte a lista de
    [constantes de gravidade](imagick.constants.md#imagick.constants.gravity).

### Valor Retornado

Nenhum valor é retornado.

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
