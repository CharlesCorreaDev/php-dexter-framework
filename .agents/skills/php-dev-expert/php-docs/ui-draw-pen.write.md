# Desenha texto em um ponto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-pen.write.php

---

# UI\Draw\Pen::write

(UI 0.9.9)

UI\Draw\Pen::write — Desenha texto em um ponto

### Descrição

public function **UI\Draw\Pen::write**([UI\Point](class.ui-point.md) `$point`, [UI\Draw\Text\Layout](class.ui-draw-text-layout.md) `$layout`)

Desenha o leiaute de texto informado no ponto especificado.

### Parâmetros

`point`
:   O ponto onde o desenho será feito.

`layout`
:   O leiaute de texto a ser desenhado.

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
