# Retorna os perfis de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageprofiles.php

---

# Imagick::getImageProfiles

(PECL imagick 2, PECL imagick 3)

Imagick::getImageProfiles — Retorna os perfis de imagem

### Descrição

public function **Imagick::getImageProfiles**([string](language.types.string.md) `$pattern` = "\*", [bool](language.types.boolean.md) `$include_values` = **`true`**): [array](language.types.array.md)

Retorna todos os perfis associados que correspondem ao padrão. Se **`false`** for passado como segundo parâmetro,
apenas os nomes dos perfis são retornados. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`pattern`
:   O padrão para os nomes de perfis.

`include_values`
:   Informa se devem ser retornados apenas os nomes dos perfis. Se for **`false`**, apenas os nomes dos perfis são retornados.

### Valor Retornado

Retorna um array contendo os perfis de imagem ou nomes de perfis.

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
