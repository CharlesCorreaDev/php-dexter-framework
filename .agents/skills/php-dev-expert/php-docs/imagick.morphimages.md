# Transforma um conjunto de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.morphimages.php

---

# Imagick::morphImages

(PECL imagick 2, PECL imagick 3)

Imagick::morphImages — Transforma um conjunto de imagens

### Descrição

public function **Imagick::morphImages**([int](language.types.integer.md) `$number_frames`): [Imagick](class.imagick.md)

Transforma um conjunto de imagens. Tanto os pixels quanto o tamanho
da imagem são interpolados linearmente para dar a aparência de uma
metamorfose de uma imagem para outra.

### Parâmetros

`number_frames`
:   O número de imagens intermediárias a serem geradas.

### Valor Retornado

Este método retorna um novo objeto Imagick em caso de sucesso.
Lança uma exceção
[ImagickException](class.imagickexception.md) em caso de erro.

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
