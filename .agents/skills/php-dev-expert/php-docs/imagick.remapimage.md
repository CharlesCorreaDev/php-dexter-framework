# Remapeia as cores da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.remapimage.php

---

# Imagick::remapImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::remapImage — Remapeia as cores da imagem

### Descrição

public function **Imagick::remapImage**([Imagick](class.imagick.md) `$replacement`, [int](language.types.integer.md) `$DITHER`): [bool](language.types.boolean.md)

Substitui as cores de uma imagem pelas definidas por `replacement`. As cores
são substituídas pela cor mais próxima possível. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.5 ou superior.

### Parâmetros

`replacement`
:   Um objeto Imagick contendo as cores de substituição

`DITHER`
:   Consulte a lista de [constantes de método de pontilhamento](imagick.constants.md#imagick.constants.dithermethod)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
