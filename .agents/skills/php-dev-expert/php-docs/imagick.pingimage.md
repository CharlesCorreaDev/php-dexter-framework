# Busca atributos básicos sobre a imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.pingimage.php

---

# Imagick::pingImage

(PECL imagick 2, PECL imagick 3)

Imagick::pingImage — Busca atributos básicos sobre a imagem

### Descrição

public function **Imagick::pingImage**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Este método pode ser usado para consultar a largura, altura, tamanho e
formato da imagem sem ler a imagem inteira na memória.

### Parâmetros

`filename`
:   O nome do arquivo do qual as informações serão lidas.

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
