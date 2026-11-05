# Define a cor fosca da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagemattecolor.php

---

# Imagick::setImageMatteColor

(PECL imagick 2, PECL imagick 3)

Imagick::setImageMatteColor — Define a cor fosca da imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::setImageMatteColor**([mixed](language.types.mixed.md) `$matte`): [bool](language.types.boolean.md)

Define a cor fosca da imagem.

### Parâmetros

`matte`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

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
