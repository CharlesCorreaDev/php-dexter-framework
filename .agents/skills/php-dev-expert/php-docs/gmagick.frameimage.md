# Adiciona uma borda tridimensional simulada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.frameimage.php

---

# Gmagick::frameimage

(PECL gmagick >= Unknown)

Gmagick::frameimage — Adiciona uma borda tridimensional simulada

### Descrição

public function **Gmagick::frameimage**(  
    [GmagickPixel](class.gmagickpixel.md) `$color`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$inner_bevel`,  
    [int](language.types.integer.md) `$outer_bevel`  
): [Gmagick](class.gmagick.md)

Adiciona uma borda tridimensional simulada ao redor da imagem. A largura e a altura especificam a largura da borda dos lados vertical e horizontal do quadro. Os chanfros internos e externos indicam a largura das sombras internas e externas do quadro.

### Parâmetros

`color`
:   Objeto [GmagickPixel](class.gmagickpixel.md) ou um ponto flutuante representando a cor fosca.

`width`
:   A largura da borda.

`height`
:   A altura da borda.

`inner_bevel`
:   A largura do chanfro interno.

`outer_bevel`
:   A largura do chanfro externo.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) emoldurado.

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
