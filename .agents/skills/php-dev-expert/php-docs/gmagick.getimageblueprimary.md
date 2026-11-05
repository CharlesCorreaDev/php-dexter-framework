# Retorna o ponto primário azul da cromaticidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.getimageblueprimary.php

---

# Gmagick::getimageblueprimary

(PECL gmagick >= Unknown)

Gmagick::getimageblueprimary — Retorna o ponto primário azul da cromaticidade

### Descrição

public function **Gmagick::getimageblueprimary**(): [array](language.types.array.md)

Retorna o ponto primário azul da cromaticidade para a imagem.

### Parâmetros

`x`
:   O ponto x do primário azul da cromaticidade.

`y`
:   O ponto y do primário azul da cromaticidade.

### Valor Retornado

Array que consiste nas coordenadas "x" e "y" do ponto.

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
