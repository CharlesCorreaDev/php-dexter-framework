# Retorna o ponto primário vermelho da cromaticidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageredprimary.php

---

# Imagick::getImageRedPrimary

(PECL imagick 2, PECL imagick 3)

Imagick::getImageRedPrimary — Retorna o ponto primário vermelho da cromaticidade

### Descrição

public function **Imagick::getImageRedPrimary**(): [array](language.types.array.md)

Retorna o ponto primário vermelho de cromaticidade como um array com as chaves "x" e "y".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ponto primário vermelho de cromaticidade como um array com as chaves "x"
e "y".
Lança uma exceção
[ImagickException](class.imagickexception.md) em caso de erro.

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
