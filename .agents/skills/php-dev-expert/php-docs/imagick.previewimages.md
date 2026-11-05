# Identifica rapidamente os parâmetros apropriados para processamento de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.previewimages.php

---

# Imagick::previewImages

(PECL imagick 2, PECL imagick 3)

Imagick::previewImages — Identifica rapidamente os parâmetros apropriados para processamento de imagem

### Descrição

public function **Imagick::previewImages**([int](language.types.integer.md) `$preview`): [bool](language.types.boolean.md)

Coloca 9 miniaturas da imagem especificada lado a lado com uma operação
de processamento de imagem aplicada em intensidades variadas. Isto é útil para identificar
rapidamente um parâmetro apropriado para uma operação de processamento de imagem.

### Parâmetros

`preview`
:   Tipo de pré-visualização. Consulte as [constantes de tipo de pré-visualização](imagick.constants.md#imagick.constants.preview)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
