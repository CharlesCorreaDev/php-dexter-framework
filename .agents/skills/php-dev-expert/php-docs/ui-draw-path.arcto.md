# Desenha um arco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-path.arcto.php

---

# UI\Draw\Path::arcTo

(UI 0.9.9)

UI\Draw\Path::arcTo — Desenha um arco

### Descrição

public function **UI\Draw\Path::arcTo**(  
    [UI\Point](class.ui-point.md) `$point`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$angle`,  
    [float](language.types.float.md) `$sweep`,  
    [float](language.types.float.md) `$negative`  
)

Mapeia o caminho para um arco.

### Parâmetros

`point`
:   O ponto para iniciar o mapeamento.

`radius`
:   O raio do arco.

`angle`
:   O ângulo do arco.

`sweep`
:   A varredura do arco.

`negative`

### Valor Retornado

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
