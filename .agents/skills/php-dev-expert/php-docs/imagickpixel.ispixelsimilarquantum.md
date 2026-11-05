# Retorna se duas cores diferem em menos que a distância especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.ispixelsimilarquantum.php

---

# ImagickPixel::isPixelSimilarQuantum

(PECL imagick 3 >= 3.3.0)

ImagickPixel::isPixelSimilarQuantum — Retorna se duas cores diferem em menos que a distância especificada

### Descrição

public function **ImagickPixel::isPixelSimilarQuantum**([string](language.types.string.md) `$color`, [string](language.types.string.md) `$fuzz` = ?): [bool](language.types.boolean.md)

Retornará TRUE se a distância entre duas cores for menor que a distância especificada.
O valor fuzz deve estar no intervalo 0-QuantumRange.
O valor máximo representa a maior distância possível no espaço de cores.
Por exemplo, de RGB(0, 0, 0) a RGB(255, 255, 255) para o espaço de cores RGB.

### Parâmetros

`color`

`fuzz`

### Valor Retornado

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
