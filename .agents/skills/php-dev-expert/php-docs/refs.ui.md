# Extensões GUI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.ui.php

---

# Extensões GUI

- [UI](book.ui.md)
  - [Instalação/Configuração](ui.setup.md)
  - [UI\Point](class.ui-point.md) — Representa uma posição (x,y)
  - [UI\Size](class.ui-size.md) — Representa dimensões (largura, altura)
  - [UI\Window](class.ui-window.md) — Janela
  - [UI\Control](class.ui-control.md) — Controle
  - [UI\Menu](class.ui-menu.md) — Menu
  - [UI\MenuItem](class.ui-menuitem.md) — Item de menu
  - [UI\Area](class.ui-area.md) — Área
  - [UI\Executor](class.ui-executor.md) — Agendador de execução
  - [UI\Controls\Tab](class.ui-controls-tab.md) — Controle de guia
  - [UI\Controls\Check](class.ui-controls-check.md) — Controle de caixa de verificação
  - [UI\Controls\Button](class.ui-controls-button.md) — Controle de Botão
  - [UI\Controls\ColorButton](class.ui-controls-colorbutton.md) — Controle de Botão de Cores
  - [UI\Controls\Label](class.ui-controls-label.md) — Controle de Rótulo
  - [UI\Controls\Entry](class.ui-controls-entry.md) — Controle de entrada
  - [UI\Controls\MultilineEntry](class.ui-controls-multilineentry.md) — Controle de entrada multi-linhas
  - [UI\Controls\Spin](class.ui-controls-spin.md) — Controle de caixa de giro
  - [UI\Controls\Slider](class.ui-controls-slider.md) — Controle deslizante
  - [UI\Controls\Progress](class.ui-controls-progress.md) — Controle de progresso
  - [UI\Controls\Separator](class.ui-controls-separator.md) — Controle de separador
  - [UI\Controls\Combo](class.ui-controls-combo.md) — Controle de caixa combinada
  - [UI\Controls\EditableCombo](class.ui-controls-editablecombo.md) — Controle de caixa combinada editável
  - [UI\Controls\Radio](class.ui-controls-radio.md) — Controle de rádio
  - [UI\Controls\Picker](class.ui-controls-picker.md) — Controle seletor
  - [UI\Controls\Form](class.ui-controls-form.md) — Controle de formulário (arranjo)
  - [UI\Controls\Grid](class.ui-controls-grid.md) — Controle de grade (arranjo)
  - [UI\Controls\Group](class.ui-controls-group.md) — Controle de grupo (arranjo)
  - [UI\Controls\Box](class.ui-controls-box.md) — Caixa de Controle (arranjo)
  - [UI\Draw\Pen](class.ui-draw-pen.md) — Caneta de desenho
  - [UI\Draw\Path](class.ui-draw-path.md) — Caminho de desenho
  - [UI\Draw\Matrix](class.ui-draw-matrix.md) — Matriz de desenho
  - [UI\Draw\Color](class.ui-draw-color.md) — Representação de cores
  - [UI\Draw\Stroke](class.ui-draw-stroke.md) — Traço de desenho
  - [UI\Draw\Brush](class.ui-draw-brush.md) — Pincéis
  - [UI\Draw\Brush\Gradient](class.ui-draw-brush-gradient.md) — Pincéis de gradientes
  - [UI\Draw\Brush\LinearGradient](class.ui-draw-brush-lineargradient.md) — Gradiente linear
  - [UI\Draw\Brush\RadialGradient](class.ui-draw-brush-radialgradient.md) — Gradiente radial
  - [UI\Draw\Text\Layout](class.ui-draw-text-layout.md) — Representa um leiaute de texto
  - [UI\Draw\Text\Font](class.ui-draw-text-font.md) — Representa uma fonte
  - [UI\Draw\Text\Font\Descriptor](class.ui-draw-text-font-descriptor.md) — Descritor de fonte
  - [Funções de UI](ref.ui.md)
  - [UI\Draw\Text\Font\Weight](class.ui-draw-text-font-weight.md) — Configurações de peso de fonte
  - [UI\Draw\Text\Font\Italic](class.ui-draw-text-font-italic.md) — Configurações de fonte itálica
  - [UI\Draw\Text\Font\Stretch](class.ui-draw-text-font-stretch.md) — Configurações de esticamento de fonte
  - [UI\Draw\Line\Cap](class.ui-draw-line-cap.md) — Configurações de extremidade de linha
  - [UI\Draw\Line\Join](class.ui-draw-line-join.md) — Configurações de junção de linha
  - [UI\Key](class.ui-key.md) — Identificadores de tecla
  - [UI\Exception\InvalidArgumentException](class.ui-exception-invalidargumentexception.md) — InvalidArgumentException
  - [UI\Exception\RuntimeException](class.ui-exception-runtimeexception.md) — RuntimeException

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
