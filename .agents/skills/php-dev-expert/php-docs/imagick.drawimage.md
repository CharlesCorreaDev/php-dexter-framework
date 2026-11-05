# Renderiza o objeto ImagickDraw na imagem atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.drawimage.php

---

# Imagick::drawImage

(PECL imagick 2, PECL imagick 3)

Imagick::drawImage — Renderiza o objeto ImagickDraw na imagem atual

### Descrição

public function **Imagick::drawImage**([ImagickDraw](class.imagickdraw.md) `$draw`): [bool](language.types.boolean.md)

Renderiza o objeto ImagickDraw na imagem atual.

### Parâmetros

`draw`
:   As operações de desenho a serem renderizadas na imagem.

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
