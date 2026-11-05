# Aplica tons de sépia em uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.sepiatoneimage.php

---

# Imagick::sepiaToneImage

(PECL imagick 2, PECL imagick 3)

Imagick::sepiaToneImage — Aplica tons de sépia em uma imagem

### Descrição

public function **Imagick::sepiaToneImage**([float](language.types.float.md) `$threshold`): [bool](language.types.boolean.md)

Aplica um efeito especial à imagem, semelhante ao efeito obtido
em uma câmara escura fotográfica com aplicação de tom de sépia. O limite varia de 0 a
QuantumRange e é uma medida da extensão da tonalidade sépia. Um
limite de 80 é um bom ponto de partida para um tom razoável.

### Parâmetros

`threshold`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::sepiaToneImage()****

```
<?php
function sepiaToneImage($imagePath, $sepia) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->sepiaToneImage($sepia);
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
