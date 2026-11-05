# Obtém artefato da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageartifact.php

---

# Imagick::getImageArtifact

(PECL imagick 3)

Imagick::getImageArtifact — Obtém artefato da imagem

### Descrição

public function **Imagick::getImageArtifact**([string](language.types.string.md) `$artifact`): [string](language.types.string.md)

Obtém um artefato associado com a imagem. A diferença entre propriedades da imagem e
artefatos da imagem é que as propriedades são públicas e os artefatos são privados.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.5.7 ou superior.

### Parâmetros

`artifact`
:   O nome do artefato.

### Valor Retornado

Retorna o valor do artefato em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Veja também

- [Imagick::setImageArtifact()](imagick.setimageartifact.md) - Definir artefato de imagem
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
