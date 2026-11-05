# Define a intenção de renderização da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagerenderingintent.php

---

# Imagick::setImageRenderingIntent

(PECL imagick 2, PECL imagick 3)

Imagick::setImageRenderingIntent — Define a intenção de renderização da imagem

### Descrição

public function **Imagick::setImageRenderingIntent**([int](language.types.integer.md) `$rendering_intent`): [bool](language.types.boolean.md)

Define a intenção de renderização da imagem.

### Parâmetros

`rendering_intent`

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
