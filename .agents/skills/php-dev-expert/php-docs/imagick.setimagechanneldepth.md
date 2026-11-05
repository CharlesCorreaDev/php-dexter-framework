# Define a profundidade de um canal de imagem específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagechanneldepth.php

---

# Imagick::setImageChannelDepth

(PECL imagick 2, PECL imagick 3)

Imagick::setImageChannelDepth — Define a profundidade de um canal de imagem específico

### Descrição

public function **Imagick::setImageChannelDepth**([int](language.types.integer.md) `$channel`, [int](language.types.integer.md) `$depth`): [bool](language.types.boolean.md)

Define a profundidade de um canal de imagem específico.

### Parâmetros

`channel`

`depth`

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
