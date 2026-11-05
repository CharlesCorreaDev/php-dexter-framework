# Implementa a transformada discreta inversa de Fourier (DFT)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.inversefouriertransformimage.php

---

# Imagick::inverseFourierTransformImage

(PECL imagick 3 >= 3.3.0)

Imagick::inverseFourierTransformImage — Implementa a transformada discreta inversa de Fourier (DFT)

### Descrição

public function **Imagick::inverseFourierTransformImage**([Imagick](class.imagick.md) `$complement`, [bool](language.types.boolean.md) `$magnitude`): [bool](language.types.boolean.md)

Implementa a transformada discreta inversa de Fourier (DFT) da imagem como um par de magnitude/fase ou imagem real/imaginária.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`complement`
:   A segunda imagem a ser combinada com esta para formar o par magnitude/fase ou imagem real/imaginária.

`magnitude`
:   Se for igual a true, combina como par magnitude/fase, caso contrário, como par de imagens real/imaginária.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
