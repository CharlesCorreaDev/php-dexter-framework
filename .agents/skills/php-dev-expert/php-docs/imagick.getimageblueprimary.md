# Retorna o ponto primário azul da cromaticidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageblueprimary.php

---

# Imagick::getImageBluePrimary

(PECL imagick 2, PECL imagick 3)

Imagick::getImageBluePrimary — Retorna o ponto primário azul da cromaticidade

### Descrição

public function **Imagick::getImageBluePrimary**(): [array](language.types.array.md)

Retorna o ponto primário azul de cromaticidade da imagem.

### Parâmetros

`x`
:   O ponto x primário azul da cromaticidade.

`y`
:   O ponto y primário azul da cromaticidade.

### Valor Retornado

Array que consiste nas coordenadas "x" e "y" do ponto.

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
