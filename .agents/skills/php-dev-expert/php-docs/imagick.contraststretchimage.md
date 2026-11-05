# Melhora o contraste de uma imagem colorida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.contraststretchimage.php

---

# Imagick::contrastStretchImage

(PECL imagick 2, PECL imagick 3)

Imagick::contrastStretchImage — Melhora o contraste de uma imagem colorida

### Descrição

public function **Imagick::contrastStretchImage**([float](language.types.float.md) `$black_point`, [float](language.types.float.md) `$white_point`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Melhora o contraste de uma imagem colorida ajustando a cor dos
pixels para abranger toda a gama de cores disponíveis. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`black_point`
:   O ponto preto.

`white_point`
:   O ponto branco.

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit (ex.: **`Imagick::CHANNEL_ALL`**). Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

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
