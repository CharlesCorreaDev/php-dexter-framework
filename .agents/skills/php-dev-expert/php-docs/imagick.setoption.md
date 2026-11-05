# Define uma opção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setoption.php

---

# Imagick::setOption

(PECL imagick 2, PECL imagick 3)

Imagick::setOption — Define uma opção

### Descrição

public function **Imagick::setOption**([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Associa uma ou mais opções à varinha.

### Parâmetros

`key`

`value`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Tenta definir o tamanho de '$extent' com **Imagick::setOption()****

```
<?php
    function renderJPG($extent) {
        $imagePath = $this->control->getImagePath();
        $imagick = new \Imagick(realpath($imagePath));
        $imagick->setImageFormat('jpg');
        $imagick->setOption('jpeg:extent', $extent);
        header("Content-Type: image/jpg");
        echo $imagick->getImageBlob();
    }

?>
```

**Exemplo #2 Exemplo de **Imagick::setOption()****

```
<?php
    function renderPNG($imagePath, $format) {

        $imagick = new \Imagick(realpath($imagePath));
        $imagick->setImageFormat('png');
        $imagick->setOption('png:format', $format);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }

    // Grava como PNG de 64 bits.
    renderPNG($imagePath, 'png64');

?>
```

**Exemplo #3 Exemplo de **Imagick::setOption()****

```
<?php
    function renderCustomBitDepthPNG() {
        $imagePath = $this->control->getImagePath();
        $imagick = new \Imagick(realpath($imagePath));
        $imagick->setImageFormat('png');

        $imagick->setOption('png:bit-depth', '16');
        $imagick->setOption('png:color-type', 6);
        header("Content-Type: image/png");
        $crash = true;
        if ($crash) {
            echo $imagick->getImageBlob();
        }
        else {
            $tempFilename = tempnam('./', 'imagick');
            $imagick->writeimage(realpath($tempFilename));
            echo file_get_contents($tempFilename);
        }
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
