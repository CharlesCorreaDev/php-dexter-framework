# Obtém a profundidade de um canal de imagem específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagechanneldepth.php

---

# Imagick::getImageChannelDepth

(PECL imagick 2, PECL imagick 3)

Imagick::getImageChannelDepth — Obtém a profundidade de um canal de imagem específico

### Descrição

public function **Imagick::getImageChannelDepth**([int](language.types.integer.md) `$channel`): [int](language.types.integer.md)

Obtém a profundidade de um canal de imagem específico.

### Parâmetros

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

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
