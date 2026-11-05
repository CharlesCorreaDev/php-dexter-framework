# Separa um canal da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.separateimagechannel.php

---

# Gmagick::separateimagechannel

(PECL gmagick >= Unknown)

Gmagick::separateimagechannel — Separa um canal da imagem

### Descrição

public function **Gmagick::separateimagechannel**([int](language.types.integer.md) `$channel`): [Gmagick](class.gmagick.md)

Separa um canal da imagem e retorna uma imagem em tons de cinza. Um canal é um componente de cor específico de cada pixel da imagem.

### Parâmetros

`channel`
:   Uma das constantes [Channel](gmagick.constants.md#gmagick.constants.channel)
    (`Gmagick::CHANNEL_*`).

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
