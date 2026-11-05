# Desfoca uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.gaussianblurimage.php

---

# Imagick::gaussianBlurImage

(PECL imagick 2, PECL imagick 3)

Imagick::gaussianBlurImage — Desfoca uma imagem

### Descrição

public function **Imagick::gaussianBlurImage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Desfoca uma imagem. A imagem sofre convolulção com um operador gaussiano de
determinado raio e desvio padrão (sigma). Para resultados razoáveis, o
raio deve ser maior que o sigma. Usando um raio de 0, a função selecione um
raio automaticamente.

### Parâmetros

`radius`
:   O raio do gaussiano, em pixels, sem contar o pixel central.

`sigma`
:   O desvio padrão do gaussiano, em pixels.

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::gaussianBlurImage()****

```
<?php
function gaussianBlurImage($imagePath, $radius, $sigma, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->gaussianBlurImage($radius, $sigma, $channel);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
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
