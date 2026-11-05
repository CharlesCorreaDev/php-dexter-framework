# Retorna a cor do pixel em um array como valores Quantum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.getcolorquantum.php

---

# ImagickPixel::getColorQuantum

(No version information available, might only be in Git)

ImagickPixel::getColorQuantum — Retorna a cor do pixel em um array como valores Quantum

### Descrição

public function **ImagickPixel::getColorQuantum**(): [array](language.types.array.md)

Retorna a cor do pixel em um array como valores Quantum. Se o ImageMagick foi compilado
como HDRI, eles serão em ponto flutuante, caso contrário, serão inteiros.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com chaves `"r"`, `"g"`,
`"b"` e `"a"`.

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
