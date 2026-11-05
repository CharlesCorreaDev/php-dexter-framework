# Controle brilho, saturação e matiz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.modulateimage.php

---

# Imagick::modulateImage

(PECL imagick 2, PECL imagick 3)

Imagick::modulateImage — Controle brilho, saturação e matiz

### Descrição

public function **Imagick::modulateImage**([float](language.types.float.md) `$brightness`, [float](language.types.float.md) `$saturation`, [float](language.types.float.md) `$hue`): [bool](language.types.boolean.md)

Permite controlar o brilho, a saturação e o matiz de uma imagem. Matiz
é a porcentagem de rotação absoluta da posição atual. Por
exemplo, 50 resulta em uma rotação no sentido anti-horário de 90 graus, 150
resulta em uma rotação no sentido horário de 90 graus, com 0 e 200
resultando em uma rotação de 180 graus.

### Parâmetros

`brightness`

`saturation`

`hue`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::modulateImage()****

```
<?php
function modulateImage($imagePath, $hue, $brightness, $saturation) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->modulateImage($brightness, $saturation, $hue);
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
