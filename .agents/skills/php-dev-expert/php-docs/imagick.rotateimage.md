# Rotaciona uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.rotateimage.php

---

# Imagick::rotateImage

(PECL imagick 2, PECL imagick 3)

Imagick::rotateImage — Rotaciona uma imagem

### Descrição

public function **Imagick::rotateImage**([mixed](language.types.mixed.md) `$background`, [float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

Rotaciona uma imagem no número especificado de graus. Os
triângulos vazios que sobrarem da rotação da imagem são preenchidos
com a cor de fundo.

### Parâmetros

`background`
:   A cor de fundo

`degrees`
:   Ângulo de rotação, em graus. O ângulo de rotação é interpretado como o
    número de graus para rotacionar a imagem no sentido horário.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como primeiro parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

### Examples

**Exemplo #1 Exemplo de **Imagick::rotateImage()****

```
<?php
function rotateImage($imagePath, $angle, $color) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->rotateimage($color, $angle);
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
