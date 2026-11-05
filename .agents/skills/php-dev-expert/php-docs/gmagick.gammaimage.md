# Corrige o gama da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.gammaimage.php

---

# Gmagick::gammaimage

(PECL gmagick >= Unknown)

Gmagick::gammaimage — Corrige o gama da imagem

### Descrição

public function **Gmagick::gammaimage**([float](language.types.float.md) `$gamma`): [Gmagick](class.gmagick.md)

Corrige o gama da imagem. A mesma imagem visualizada em diferentes dispositivos terá diferenças perceptivas na forma como as intensidades da imagem são representadas na tela. Especifique níveis de gama individuais para os canais vermelho, verde e azul ou ajuste todos os três com o parâmetro gama. Os valores normalmente variam de 0.8 a 2.3.

### Parâmetros

`gamma`
:   A quantidade de correção de gama.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) com correção de gama.

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
