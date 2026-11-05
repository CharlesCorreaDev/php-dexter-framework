# Obtenha a curtose e a assimetria de um canal específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagechannelkurtosis.php

---

# Imagick::getImageChannelKurtosis

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::getImageChannelKurtosis — Obtenha a curtose e a assimetria de um canal específico

### Descrição

public function **Imagick::getImageChannelKurtosis**([int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [array](language.types.array.md)

Obtenha a curtose e a assimetria de um canal específico. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.9 ou superior.

### Parâmetros

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna um array com os membros `kurtosis` (curtose) e `skewness`
(assimetria).

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
