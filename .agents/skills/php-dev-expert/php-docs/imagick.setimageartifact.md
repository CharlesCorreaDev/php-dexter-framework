# Definir artefato de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageartifact.php

---

# Imagick::setImageArtifact

(PECL imagick 3)

Imagick::setImageArtifact — Definir artefato de imagem

### Descrição

public function **Imagick::setImageArtifact**([string](language.types.string.md) `$artifact`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Associa um artefato à imagem. A diferença entre propriedades de imagem e
artefatos de imagem é que as propriedades são públicas e os artefatos são privados.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.5.7 ou superior.

### Parâmetros

`artifact`
:   O nome do artefato

`value`
:   O valor do artefato

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::setImageArtifact()****

```
<?php
function setImageArtifact() {

    $src1 = new \Imagick(realpath("./images/artifact/source1.png"));
    $src2 = new \Imagick(realpath("./images/artifact/source2.png"));

    $src2->setImageVirtualPixelMethod(\Imagick::VIRTUALPIXELMETHOD_TRANSPARENT);
    $src2->setImageArtifact('compose:args', "1,0,-0.5,0.5");
    $src1->compositeImage($src2, Imagick::COMPOSITE_MATHEMATICS, 0, 0);

    $src1->setImageFormat('png');
    header("Content-Type: image/png");
    echo $src1->getImagesBlob();
}

?>
```

### Veja também

- [Imagick::getImageArtifact()](imagick.getimageartifact.md) - Obtém artefato da imagem
- [Imagick::deleteImageArtifact()](imagick.deleteimageartifact.md) - Excluir artefato de imagem

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
