# Obtém o intervalo do canal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagechannelrange.php

---

# Imagick::getImageChannelRange

(PECL imagick 2 >= 2.2.1, PECL imagick 3)

Imagick::getImageChannelRange — Obtém o intervalo do canal

### Descrição

public function **Imagick::getImageChannelRange**([int](language.types.integer.md) `$channel`): [array](language.types.array.md)

Obtém o intervalo de um ou mais canais de imagem.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.0 ou superior.

### Parâmetros

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna um array contendo valores mínimos e máximos do(s) canal(is).

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
