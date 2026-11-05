# Torna uma imagem mais nítida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.unsharpmaskimage.php

---

# Imagick::unsharpMaskImage

(PECL imagick 2, PECL imagick 3)

Imagick::unsharpMaskImage — Torna uma imagem mais nítida

### Descrição

public function **Imagick::unsharpMaskImage**(  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$sigma`,  
    [float](language.types.float.md) `$amount`,  
    [float](language.types.float.md) `$threshold`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Torna uma imagem mais nítida. A imagem sofre convolução com um operador gaussiano de determinado
raio e desvio padrão (sigma). Para resultados razoáveis, o raio deve ser
maior que o sigma. Usando um raio de 0, Imagick::UnsharpMaskImage() seleciona um
raio adequado automaticamente.

### Parâmetros

`radius`

`sigma`

`amount`

`threshold`

`channel`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::unsharpMaskImage()****

```
<?php
function unsharpMaskImage($imagePath, $radius, $sigma, $amount, $unsharpThreshold) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->unsharpMaskImage($radius, $sigma, $amount, $unsharpThreshold);
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
