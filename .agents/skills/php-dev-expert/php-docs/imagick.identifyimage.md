# Identifica uma imagem e busca atributos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.identifyimage.php

---

# Imagick::identifyImage

(PECL imagick 2, PECL imagick 3)

Imagick::identifyImage — Identifica uma imagem e busca atributos

### Descrição

public function **Imagick::identifyImage**([bool](language.types.boolean.md) `$appendRawOutput` = **`false`**): [array](language.types.array.md)

Identifica uma imagem e retorna os atributos. Os atributos incluem
largura, altura, tamanho da imagem e outros.

### Parâmetros

`appendRawOutput`
:   Se **`true`** então a saída bruta é anexada ao array.

### Valor Retornado

Identifica uma imagem e retorna os atributos. Os atributos incluem
largura, altura, tamanho da imagem e outros.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de Formato de Resultado**

```
Array
(
    [imageName] => /some/path/image.jpg
    [format] => JPEG (Joint Photographic Experts Group JFIF format)
    [geometry] => Array
        (
            [width] => 90
            [height] => 90
        )

    [type] => TrueColor
    [colorSpace] => RGB
    [resolution] => Array
        (
            [x] => 300
            [y] => 300
        )

    [units] => PixelsPerInch
    [fileSize] => 1.88672kb
    [compression] => JPEG
    [signature] => 9a6dc8f604f97d0d691c0286176ddf992e188f0bebba98494b2146ee2d7118da
)
```

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
