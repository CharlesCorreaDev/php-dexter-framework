# Simula uma pintura a óleo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.oilpaintimage.php

---

# Gmagick::oilpaintimage

(PECL gmagick >= Unknown)

Gmagick::oilpaintimage — Simula uma pintura a óleo

### Descrição

public function **Gmagick::oilpaintimage**(
[float](language.types.float.md) `$radius`
): [Gmagick](class.gmagick.md)

Aplica um filtro de efeito especial que simula uma pintura a óleo. Cada pixel é substituído pela cor mais frequente que ocorre em uma região circular definida pelo raio.

### Parâmetros

`radius`
:   O raio da vizinhança circular.

### Valor Retornado

O objeto Gmagick em caso de sucesso.

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
