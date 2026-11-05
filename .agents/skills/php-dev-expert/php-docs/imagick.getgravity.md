# Obtém a gravidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getgravity.php

---

# Imagick::getGravity

(PECL imagick 2, PECL imagick 3)

Imagick::getGravity — Obtém a gravidade

### Descrição

public function **Imagick::getGravity**(): [int](language.types.integer.md)

Obtám a propriedade de gravidade global para o objeto Imagick.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.0 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a propriedade de gravidade. Consulte a lista de
[constantes de gravidade](imagick.constants.md#imagick.constants.gravity).

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
