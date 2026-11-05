# Define o canal fosco da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagematte.php

---

# Imagick::setImageMatte

(PECL imagick 2, PECL imagick 3)

Imagick::setImageMatte — Define o canal fosco da imagem

### Descrição

public function **Imagick::setImageMatte**([bool](language.types.boolean.md) `$matte`): [bool](language.types.boolean.md)

Define o canal fosco da imagem.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`matte`
:   True ativa o canal fosco e false o desativa.

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
