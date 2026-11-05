# Torna uma imagem mais nítida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.sharpenimage.php

---

# Imagick::sharpenImage

(PECL imagick 2, PECL imagick 3)

Imagick::sharpenImage — Torna uma imagem mais nítida

### Descrição

public function **Imagick::sharpenImage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Torna uma imagem mais nítida. A imagem sofre convolução com um operador gaussiano
de determinado raio e desvio padrão (sigma). Para resultados
razoáveis, o raio deve ser maior que o sigma. Se um raio de
0 for usado, **Imagick::sharpenImage()** seleciona um raio adequado
automaticamente.

### Parâmetros

`radius`

`sigma`

`channel`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::sharpenImage()****

```
<?php
function sharpenImage($imagePath, $radius, $sigma, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->sharpenimage($radius, $sigma, $channel);
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
