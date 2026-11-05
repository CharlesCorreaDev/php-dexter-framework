# Extrai uma região da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.cropimage.php

---

# Gmagick::cropimage

(PECL gmagick >= Unknown)

Gmagick::cropimage — Extrai uma região da imagem

### Descrição

public function **Gmagick::cropimage**(  
    
[int](language.types.integer.md) `$width`
,  
    
[int](language.types.integer.md) `$height`
,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [Gmagick](class.gmagick.md)

Extrai uma região da imagem.

### Parâmetros

`width`
:   A largura do recorte.

`height`
:   A altura do recorte.

`x`
:   A coordenada X do canto superior esquerdo da região recortada.

`y`
:   A coordenada Y do canto superior esquerdo da região recortada.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) recortado.

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
