# Cria uma miniatura de recorte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.cropthumbnailimage.php

---

# Imagick::cropThumbnailImage

(PECL imagick 2, PECL imagick 3)

Imagick::cropThumbnailImage — Cria uma miniatura de recorte

### Descrição

public function **Imagick::cropThumbnailImage**([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`, [bool](language.types.boolean.md) `$legacy` = **`false`**): [bool](language.types.boolean.md)

Cria uma miniatura de tamanho fixo primeiro aumentando ou diminuindo a imagem e recortando uma área
especificada a partir do centro.

### Parâmetros

`width`
:   A largura da miniatura

`height`
:   A altura da miniatura

`legacy`
:   Parâmetro [bool](language.types.boolean.md) opcional.
    Se definido como 'true', os cálculos são feitos com a pequena falha de arredondamento
    que existia no Imagick antes da versão 3.4.0. Se definido como 'false', os cálculos
    devem produzir os mesmos resultados que as ferramentas de linha de comando do ImageMagick.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 3.4.0 | Adicionado o parâmetro `legacy`. |

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
