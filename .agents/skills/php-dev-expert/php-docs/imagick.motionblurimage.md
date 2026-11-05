# Simula desfoque de movimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.motionblurimage.php

---

# Imagick::motionBlurImage

(PECL imagick 2, PECL imagick 3)

Imagick::motionBlurImage — Simula desfoque de movimento

### Descrição

public function **Imagick::motionBlurImage**(  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$sigma`,  
    [float](language.types.float.md) `$angle`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Simula desfoque de movimento. A imagem sofre convolução com um operador
gaussiano de determinado raio e desvio padrão (sigma).
Para resultados razoáveis, o raio deve ser maior que o sigma.
Use um raio de 0 e MotionBlurImage() seleciona um raio
adequado automaticamente. O parâmetro 'angle' fornece o ângulo do movimento de desfoque.

### Parâmetros

`radius`
:   O raio do gaussiano, em pixels, sem contar o pixel central.

`sigma`
:   O desvio padrão do gaussiano, em pixels.

`angle`
:   O efeito será aplicado ao longo deste ângulo.

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).
    Este parâmetro terá efeito apenas se o Imagick for compilado no ImageMagick versão
    6.4.4 ou superior.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::motionBlurImage()****

```
<?php
function motionBlurImage($imagePath, $radius, $sigma, $angle, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->motionBlurImage($radius, $sigma, $angle, $channel);
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
