# Define a profundidade de um canal de imagem específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagechanneldepth.php

---

# Gmagick::setimagechanneldepth

(PECL gmagick >= Unknown)

Gmagick::setimagechanneldepth — Define a profundidade de um canal de imagem específico

### Descrição

public function **Gmagick::setimagechanneldepth**([int](language.types.integer.md) `$channel`, [int](language.types.integer.md) `$depth`): [Gmagick](class.gmagick.md)

Define a profundidade de um canal de imagem específico.

### Parâmetros

`channel`
:   Uma das constantes [Channel](gmagick.constants.md#gmagick.constants.channel)
    (`Gmagick::CHANNEL_*`).

`depth`
:   A profundidade da imagem em bits.

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
