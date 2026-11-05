# Excluir artefato de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.deleteimageartifact.php

---

# Imagick::deleteImageArtifact

(PECL imagick 3)

Imagick::deleteImageArtifact — Excluir artefato de imagem

### Descrição

public function **Imagick::deleteImageArtifact**([string](language.types.string.md) `$artifact`): [bool](language.types.boolean.md)

Exclui um artefato associado à imagem. A diferença entre propriedades de imagem e
artefatos de imagem é que as propriedades são públicas e os artefatos são privados.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.5.7 ou superior.

### Parâmetros

`artifact`
:   O nome do artefato a ser excluído

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Veja também

- [Imagick::setImageArtifact()](imagick.setimageartifact.md) - Definir artefato de imagem
- [Imagick::getImageArtifact()](imagick.getimageartifact.md) - Obtém artefato da imagem

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
