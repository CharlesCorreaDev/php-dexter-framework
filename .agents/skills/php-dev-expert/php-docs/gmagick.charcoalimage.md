# Simula um desenho a carvão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.charcoalimage.php

---

# Gmagick::charcoalimage

(PECL gmagick >= Unknown)

Gmagick::charcoalimage — Simula um desenho a carvão

### Descrição

public function **Gmagick::charcoalimage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`): [Gmagick](class.gmagick.md)

Simula um desenho a carvão.

### Parâmetros

`radius`
:   O raio do gaussiano, em pixels, sem contar o pixel central.

`sigma`
:   O desvio padrão do gaussiano, em pixels.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) com simulação de carvão.

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
