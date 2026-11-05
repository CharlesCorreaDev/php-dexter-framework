# Simula um esboço a lápis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.sketchimage.php

---

# Imagick::sketchImage

(PECL imagick 2, PECL imagick 3)

Imagick::sketchImage — Simula um esboço a lápis

### Descrição

public function **Imagick::sketchImage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [float](language.types.float.md) `$angle`): [bool](language.types.boolean.md)

Simula um esboço a lápis. A imagem sofre convolução com um operador gaussiano
de determinado raio e desvio padrão (sigma). Para resultados
razoáveis, o raio deve ser maior que o sigma. Usando um raio de 0,
Imagick::sketchImage() seleciona um raio adequado automaticamente. O parâmetro 'angle' fornece o
ângulo do movimento de desfoque.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`radius`
:   O raio do gaussiano, em pixels, sem contar o pixel central.

`sigma`
:   O desvio padrão do gaussiano, em pixels.

`angle`
:   Ângulo ao longo do qual o efeito será aplicado.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::sketchImage()****

```
<?php
function sketchImage($imagePath, $radius, $sigma, $angle) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->sketchimage($radius, $sigma, $angle);
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
