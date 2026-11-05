# Retorna uma imagem em tons de cinza com efeito tridimensional

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.embossimage.php

---

# Imagick::embossImage

(PECL imagick 2, PECL imagick 3)

Imagick::embossImage — Retorna uma imagem em tons de cinza com efeito tridimensional

### Descrição

public function **Imagick::embossImage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`): [bool](language.types.boolean.md)

Retorna uma imagem em tons de cinza com efeito tridimensional. A imagem
sofre uma convolução com um operador gaussiano de determinado raio e desvio
padrão (sigma). Para resultados razoáveis, o raio deve ser maior que
o sigma. Use um raio de 0 e um raio adequado será selecionado automaticamente.

### Parâmetros

`radius`
:   O raio do efeito.

`sigma`
:   O sigma do efeito.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::embossImage()****

```
<?php
function embossImage($imagePath, $radius, $sigma) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->embossImage($radius, $sigma);
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
