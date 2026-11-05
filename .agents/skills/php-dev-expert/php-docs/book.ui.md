# UI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.ui.php

---

# UI

# Introdução

**Aviso**

Esta extensão é
*EXPERIMENTAL*. O comportamento desta extensão, incluindo
os nomes de suas funções e qualquer outra documentação relacionada a esta
extensão, pode mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

Esta extensão encapsula a biblioteca [» libui](https://github.com/andlabs/libui)
para fornecer uma API orientada a objetos para o desenvolvimento multi-plataforma
de interfaces de usuário com sensação e visual nativos.

- [Instalação/Configuração](ui.setup.md)
  - [Dependências](ui.requirements.md)
  - [Instalação](ui.installation.md)
- [UI\Point](class.ui-point.md) — Representa uma posição (x,y)
  - [UI\Point::at](ui-point.at.md) — Coerção de dimensão
  - [UI\Point::\_\_construct](ui-point.construct.md) — Constrói um novo ponto
  - [UI\Point::getX](ui-point.getx.md) — Recupera X
  - [UI\Point::getY](ui-point.gety.md) — Recupera Y
  - [UI\Point::setX](ui-point.setx.md) — Define X
  - [UI\Point::setY](ui-point.sety.md) — Define Y
- [UI\Size](class.ui-size.md) — Representa dimensões (largura, altura)
  - [UI\Size::\_\_construct](ui-size.construct.md) — Constrói uma nova dimensão
  - [UI\Size::getHeight](ui-size.getheight.md) — Recupera altura
  - [UI\Size::getWidth](ui-size.getwidth.md) — Recupera largura
  - [UI\Size::of](ui-size.of.md) — Coerção de ponto
  - [UI\Size::setHeight](ui-size.setheight.md) — Define altura
  - [UI\Size::setWidth](ui-size.setwidth.md) — Define largura
- [UI\Window](class.ui-window.md) — Janela
  - [UI\Window::add](ui-window.add.md) — Adiciona um controle
  - [UI\Window::\_\_construct](ui-window.construct.md) — Constrói uma nova janela
  - [UI\Window::error](ui-window.error.md) — Mostra caixa de erro
  - [UI\Window::getSize](ui-window.getsize.md) — Obtém dimensão de janela
  - [UI\Window::getTitle](ui-window.gettitle.md) — Obtém título
  - [UI\Window::hasBorders](ui-window.hasborders.md) — Detecção de borda
  - [UI\Window::hasMargin](ui-window.hasmargin.md) — Detecção de margem
  - [UI\Window::isFullScreen](ui-window.isfullscreen.md) — Detecção de tela cheia
  - [UI\Window::msg](ui-window.msg.md) — Mostra caixa de mensagem
  - [UI\Window::onClosing](ui-window.onclosing.md) — Função de retorno de fechamento
  - [UI\Window::open](ui-window.open.md) — Caixa de diálogo de abertura
  - [UI\Window::save](ui-window.save.md) — Caixa de diálogo de salvamento
  - [UI\Window::setBorders](ui-window.setborders.md) — Uso de bordas
  - [UI\Window::setFullScreen](ui-window.setfullscreen.md) — Uso de tela cheia
  - [UI\Window::setMargin](ui-window.setmargin.md) — Uso de margem
  - [UI\Window::setSize](ui-window.setsize.md) — Define dimensão
  - [UI\Window::setTitle](ui-window.settitle.md) — Título da janela
- [UI\Control](class.ui-control.md) — Controle
  - [UI\Control::destroy](ui-control.destroy.md) — Destrói o controle
  - [UI\Control::disable](ui-control.disable.md) — Desabilita o controle
  - [UI\Control::enable](ui-control.enable.md) — Habilita o controle
  - [UI\Control::getParent](ui-control.getparent.md) — Obtém o controle pai
  - [UI\Control::getTopLevel](ui-control.gettoplevel.md) — Obtém o nível mais alto
  - [UI\Control::hide](ui-control.hide.md) — Oculta o controle
  - [UI\Control::isEnabled](ui-control.isenabled.md) — Determina se o controle está habilitado
  - [UI\Control::isVisible](ui-control.isvisible.md) — Determina se o controle está visível
  - [UI\Control::setParent](ui-control.setparent.md) — Define o controle pai
  - [UI\Control::show](ui-control.show.md) — Exibe o controle
- [UI\Menu](class.ui-menu.md) — Menu
  - [UI\Menu::append](ui-menu.append.md) — Anexa um item de menu
  - [UI\Menu::appendAbout](ui-menu.appendabout.md) — Anexa um item de menu "About"
  - [UI\Menu::appendCheck](ui-menu.appendcheck.md) — Anexa um item de menu marcável
  - [UI\Menu::appendPreferences](ui-menu.appendpreferences.md) — Anexa um item de menu de preferências
  - [UI\Menu::appendQuit](ui-menu.appendquit.md) — Anexa item de menu de saída
  - [UI\Menu::appendSeparator](ui-menu.appendseparator.md) — Anexa um item separador no menu
  - [UI\Menu::\_\_construct](ui-menu.construct.md) — Constrói um novo menu
- [UI\MenuItem](class.ui-menuitem.md) — Item de menu
  - [UI\MenuItem::disable](ui-menuitem.disable.md) — Desabilita item de menu
  - [UI\MenuItem::enable](ui-menuitem.enable.md) — Habilita item de menu
  - [UI\MenuItem::isChecked](ui-menuitem.ischecked.md) — Detecta marcação
  - [UI\MenuItem::onClick](ui-menuitem.onclick.md) — Função de retorno de clique
  - [UI\MenuItem::setChecked](ui-menuitem.setchecked.md) — Define marcação
- [UI\Area](class.ui-area.md) — Área
  - [UI\Area::onDraw](ui-area.ondraw.md) — Função de retorno de desenho
  - [UI\Area::onKey](ui-area.onkey.md) — Função de retorno de tecla
  - [UI\Area::onMouse](ui-area.onmouse.md) — Função de retorno de mouse
  - [UI\Area::redraw](ui-area.redraw.md) — Redesenha área
  - [UI\Area::scrollTo](ui-area.scrollto.md) — Rolagem da áre
  - [UI\Area::setSize](ui-area.setsize.md) — Define a dimensão da área
- [UI\Executor](class.ui-executor.md) — Agendador de execução
  - [UI\Executor::\_\_construct](ui-executor.construct.md) — Constrói um novo executor
  - [UI\Executor::kill](ui-executor.kill.md) — Interrompe o executor
  - [UI\Executor::onExecute](ui-executor.onexecute.md) — Função de retorno de execução
  - [UI\Executor::setInterval](ui-executor.setinterval.md) — Manipulação de intervalo
- [UI\Controls\Tab](class.ui-controls-tab.md) — Controle de guia
  - [UI\Controls\Tab::append](ui-controls-tab.append.md) — Anexa página
  - [UI\Controls\Tab::delete](ui-controls-tab.delete.md) — Remove página
  - [UI\Controls\Tab::hasMargin](ui-controls-tab.hasmargin.md) — Detecção de margem
  - [UI\Controls\Tab::insertAt](ui-controls-tab.insertat.md) — Insere página
  - [UI\Controls\Tab::pages](ui-controls-tab.pages.md) — Contagem de páginas
  - [UI\Controls\Tab::setMargin](ui-controls-tab.setmargin.md) — Define margem
- [UI\Controls\Check](class.ui-controls-check.md) — Controle de caixa de verificação
  - [UI\Controls\Check::\_\_construct](ui-controls-check.construct.md) — Constrói uma nova caixa de verificação
  - [UI\Controls\Check::getText](ui-controls-check.gettext.md) — Obtém texto
  - [UI\Controls\Check::isChecked](ui-controls-check.ischecked.md) — Detecção de caixa marcada
  - [UI\Controls\Check::onToggle](ui-controls-check.ontoggle.md) — Função de retorno de marcação de caixa de verificação
  - [UI\Controls\Check::setChecked](ui-controls-check.setchecked.md) — Muda o status da caixa de verificação
  - [UI\Controls\Check::setText](ui-controls-check.settext.md) — Define o texto
- [UI\Controls\Button](class.ui-controls-button.md) — Controle de Botão
  - [UI\Controls\Button::\_\_construct](ui-controls-button.construct.md) — Constrói um novo botão
  - [UI\Controls\Button::getText](ui-controls-button.gettext.md) — Obtém texto
  - [UI\Controls\Button::onClick](ui-controls-button.onclick.md) — Manipulador de clique
  - [UI\Controls\Button::setText](ui-controls-button.settext.md) — Define o texto
- [UI\Controls\ColorButton](class.ui-controls-colorbutton.md) — Controle de Botão de Cores
  - [UI\Controls\ColorButton::getColor](ui-controls-colorbutton.getcolor.md) — Obtém a cor
  - [UI\Controls\ColorButton::onChange](ui-controls-colorbutton.onchange.md) — Manipulador de alteração
  - [UI\Controls\ColorButton::setColor](ui-controls-colorbutton.setcolor.md) — Define a cor
- [UI\Controls\Label](class.ui-controls-label.md) — Controle de Rótulo
  - [UI\Controls\Label::\_\_construct](ui-controls-label.construct.md) — Constrói um novo rótulo
  - [UI\Controls\Label::getText](ui-controls-label.gettext.md) — Obtém texto
  - [UI\Controls\Label::setText](ui-controls-label.settext.md) — Define texto
- [UI\Controls\Entry](class.ui-controls-entry.md) — Controle de entrada
  - [UI\Controls\Entry::\_\_construct](ui-controls-entry.construct.md) — Constrói uma nova entrada
  - [UI\Controls\Entry::getText](ui-controls-entry.gettext.md) — Obtém texto
  - [UI\Controls\Entry::isReadOnly](ui-controls-entry.isreadonly.md) — Detecta somente leitura
  - [UI\Controls\Entry::onChange](ui-controls-entry.onchange.md) — Manipulador de alteração
  - [UI\Controls\Entry::setReadOnly](ui-controls-entry.setreadonly.md) — Define como somente leitura
  - [UI\Controls\Entry::setText](ui-controls-entry.settext.md) — Define texto
- [UI\Controls\MultilineEntry](class.ui-controls-multilineentry.md) — Controle de entrada multi-linhas
  - [UI\Controls\MultilineEntry::append](ui-controls-multilineentry.append.md) — Anexa texto
  - [UI\Controls\MultilineEntry::\_\_construct](ui-controls-multilineentry.construct.md) — Constrói uma nova entrada multilinhas
  - [UI\Controls\MultilineEntry::getText](ui-controls-multilineentry.gettext.md) — Obtém texto
  - [UI\Controls\MultilineEntry::isReadOnly](ui-controls-multilineentry.isreadonly.md) — Deteção de somente leitura
  - [UI\Controls\MultilineEntry::onChange](ui-controls-multilineentry.onchange.md) — Manipulador de alteração
  - [UI\Controls\MultilineEntry::setReadOnly](ui-controls-multilineentry.setreadonly.md) — Define como somente leitura
  - [UI\Controls\MultilineEntry::setText](ui-controls-multilineentry.settext.md) — Define texto
- [UI\Controls\Spin](class.ui-controls-spin.md) — Controle de caixa de giro
  - [UI\Controls\Spin::\_\_construct](ui-controls-spin.construct.md) — Constrói uma nova caixa de giro
  - [UI\Controls\Spin::getValue](ui-controls-spin.getvalue.md) — Obtém valor
  - [UI\Controls\Spin::onChange](ui-controls-spin.onchange.md) — Manipulador de alteração
  - [UI\Controls\Spin::setValue](ui-controls-spin.setvalue.md) — Define valor
- [UI\Controls\Slider](class.ui-controls-slider.md) — Controle deslizante
  - [UI\Controls\Slider::\_\_construct](ui-controls-slider.construct.md) — Constrói um novo controle deslizante
  - [UI\Controls\Slider::getValue](ui-controls-slider.getvalue.md) — Obtém valor
  - [UI\Controls\Slider::onChange](ui-controls-slider.onchange.md) — Manipulador de alteração
  - [UI\Controls\Slider::setValue](ui-controls-slider.setvalue.md) — Define valor
- [UI\Controls\Progress](class.ui-controls-progress.md) — Controle de progresso
  - [UI\Controls\Progress::getValue](ui-controls-progress.getvalue.md) — Obtém valor
  - [UI\Controls\Progress::setValue](ui-controls-progress.setvalue.md) — Define valor
- [UI\Controls\Separator](class.ui-controls-separator.md) — Controle de separador
  - [UI\Controls\Separator::\_\_construct](ui-controls-separator.construct.md) — Constrói um novo separador
- [UI\Controls\Combo](class.ui-controls-combo.md) — Controle de caixa combinada
  - [UI\Controls\Combo::append](ui-controls-combo.append.md) — Anexa opção
  - [UI\Controls\Combo::getSelected](ui-controls-combo.getselected.md) — Obtém a opção selecionada
  - [UI\Controls\Combo::onSelected](ui-controls-combo.onselected.md) — Manipulador de seleção
  - [UI\Controls\Combo::setSelected](ui-controls-combo.setselected.md) — Define opção selecionada
- [UI\Controls\EditableCombo](class.ui-controls-editablecombo.md) — Controle de caixa combinada editável
  - [UI\Controls\EditableCombo::append](ui-controls-editablecombo.append.md) — Anexa opção
  - [UI\Controls\EditableCombo::getText](ui-controls-editablecombo.gettext.md) — Obtém texto
  - [UI\Controls\EditableCombo::onChange](ui-controls-editablecombo.onchange.md) — Manipulador de alteração
  - [UI\Controls\EditableCombo::setText](ui-controls-editablecombo.settext.md) — Define texto
- [UI\Controls\Radio](class.ui-controls-radio.md) — Controle de rádio
  - [UI\Controls\Radio::append](ui-controls-radio.append.md) — Anexa opção
  - [UI\Controls\Radio::getSelected](ui-controls-radio.getselected.md) — Obtém opção selecionada
  - [UI\Controls\Radio::onSelected](ui-controls-radio.onselected.md) — Manipulador de seleção
  - [UI\Controls\Radio::setSelected](ui-controls-radio.setselected.md) — Define opção selecionada
- [UI\Controls\Picker](class.ui-controls-picker.md) — Controle seletor
  - [UI\Controls\Picker::\_\_construct](ui-controls-picker.construct.md) — Constrói um novo selecionador de data/horário
- [UI\Controls\Form](class.ui-controls-form.md) — Controle de formulário (arranjo)
  - [UI\Controls\Form::append](ui-controls-form.append.md) — Anexa controle
  - [UI\Controls\Form::delete](ui-controls-form.delete.md) — Remove controle
  - [UI\Controls\Form::isPadded](ui-controls-form.ispadded.md) — Detecção de preenchimento
  - [UI\Controls\Form::setPadded](ui-controls-form.setpadded.md) — Define preenchimento
- [UI\Controls\Grid](class.ui-controls-grid.md) — Controle de grade (arranjo)
  - [UI\Controls\Grid::append](ui-controls-grid.append.md) — Anexa controle
  - [UI\Controls\Grid::isPadded](ui-controls-grid.ispadded.md) — Detecção de preenchimento
  - [UI\Controls\Grid::setPadded](ui-controls-grid.setpadded.md) — Define preenchimento
- [UI\Controls\Group](class.ui-controls-group.md) — Controle de grupo (arranjo)
  - [UI\Controls\Group::append](ui-controls-group.append.md) — Anexa controle
  - [UI\Controls\Group::\_\_construct](ui-controls-group.construct.md) — Constrói um novo grupo
  - [UI\Controls\Group::getTitle](ui-controls-group.gettitle.md) — Obtém título
  - [UI\Controls\Group::hasMargin](ui-controls-group.hasmargin.md) — Detecção de margem
  - [UI\Controls\Group::setMargin](ui-controls-group.setmargin.md) — Define margem
  - [UI\Controls\Group::setTitle](ui-controls-group.settitle.md) — Define título
- [UI\Controls\Box](class.ui-controls-box.md) — Caixa de Controle (arranjo)
  - [UI\Controls\Box::append](ui-controls-box.append.md) — Anexa o controle
  - [UI\Controls\Box::\_\_construct](ui-controls-box.construct.md) — Constrói uma nova caixa
  - [UI\Controls\Box::delete](ui-controls-box.delete.md) — Remove o controle
  - [UI\Controls\Box::getOrientation](ui-controls-box.getorientation.md) — Obtém orientação
  - [UI\Controls\Box::isPadded](ui-controls-box.ispadded.md) — Detecção de preenchimento
  - [UI\Controls\Box::setPadded](ui-controls-box.setpadded.md) — Define o preenchimento
- [UI\Draw\Pen](class.ui-draw-pen.md) — Caneta de desenho
  - [UI\Draw\Pen::clip](ui-draw-pen.clip.md) — Recorta um caminho
  - [UI\Draw\Pen::fill](ui-draw-pen.fill.md) — Preenche um caminho
  - [UI\Draw\Pen::restore](ui-draw-pen.restore.md) — Restaura
  - [UI\Draw\Pen::save](ui-draw-pen.save.md) — Salva
  - [UI\Draw\Pen::stroke](ui-draw-pen.stroke.md) — Traça um caminho
  - [UI\Draw\Pen::transform](ui-draw-pen.transform.md) — Transforma matriz
  - [UI\Draw\Pen::write](ui-draw-pen.write.md) — Desenha texto em um ponto
- [UI\Draw\Path](class.ui-draw-path.md) — Caminho de desenho
  - [UI\Draw\Path::addRectangle](ui-draw-path.addrectangle.md) — Desenha um retângulo
  - [UI\Draw\Path::arcTo](ui-draw-path.arcto.md) — Desenha um arco
  - [UI\Draw\Path::bezierTo](ui-draw-path.bezierto.md) — Desenha um curva de Bézier
  - [UI\Draw\Path::closeFigure](ui-draw-path.closefigure.md) — Fecha figura
  - [UI\Draw\Path::\_\_construct](ui-draw-path.construct.md) — Constrói um novo caminho
  - [UI\Draw\Path::end](ui-draw-path.end.md) — Finaliza caminho
  - [UI\Draw\Path::lineTo](ui-draw-path.lineto.md) — Desenha uma linha
  - [UI\Draw\Path::newFigure](ui-draw-path.newfigure.md) — Desenha figura
  - [UI\Draw\Path::newFigureWithArc](ui-draw-path.newfigurewitharc.md) — Desenha figura com arco
- [UI\Draw\Matrix](class.ui-draw-matrix.md) — Matriz de desenho
  - [UI\Draw\Matrix::invert](ui-draw-matrix.invert.md) — Inverte matriz
  - [UI\Draw\Matrix::isInvertible](ui-draw-matrix.isinvertible.md) — Detecção de invertibilidade
  - [UI\Draw\Matrix::multiply](ui-draw-matrix.multiply.md) — Multiplica matriz
  - [UI\Draw\Matrix::rotate](ui-draw-matrix.rotate.md) — Rotaciona matriz
  - [UI\Draw\Matrix::scale](ui-draw-matrix.scale.md) — Escala matriz
  - [UI\Draw\Matrix::skew](ui-draw-matrix.skew.md) — Inclina matriz
  - [UI\Draw\Matrix::translate](ui-draw-matrix.translate.md) — Traslada matriz
- [UI\Draw\Color](class.ui-draw-color.md) — Representação de cores
  - [UI\Draw\Color::\_\_construct](ui-draw-color.construct.md) — Constrói uma cor
  - [UI\Draw\Color::getChannel](ui-draw-color.getchannel.md) — Obtém canal
  - [UI\Draw\Color::setChannel](ui-draw-color.setchannel.md) — Define canal
- [UI\Draw\Stroke](class.ui-draw-stroke.md) — Traço de desenho
  - [UI\Draw\Stroke::\_\_construct](ui-draw-stroke.construct.md) — Constrói um traço
  - [UI\Draw\Stroke::getCap](ui-draw-stroke.getcap.md) — Obtém extremidade de linha
  - [UI\Draw\Stroke::getJoin](ui-draw-stroke.getjoin.md) — Obtém junção de linha
  - [UI\Draw\Stroke::getMiterLimit](ui-draw-stroke.getmiterlimit.md) — Obtém limite de junção aguda
  - [UI\Draw\Stroke::getThickness](ui-draw-stroke.getthickness.md) — Obtém espessura
  - [UI\Draw\Stroke::setCap](ui-draw-stroke.setcap.md) — Define extremidade de linha
  - [UI\Draw\Stroke::setJoin](ui-draw-stroke.setjoin.md) — Define junção de linha
  - [UI\Draw\Stroke::setMiterLimit](ui-draw-stroke.setmiterlimit.md) — Define limite de junção aguda
  - [UI\Draw\Stroke::setThickness](ui-draw-stroke.setthickness.md) — Define espessura
- [UI\Draw\Brush](class.ui-draw-brush.md) — Pincéis
  - [UI\Draw\Brush::\_\_construct](ui-draw-brush.construct.md) — Constrói um novo pincel
  - [UI\Draw\Brush::getColor](ui-draw-brush.getcolor.md) — Obtém cor
  - [UI\Draw\Brush::setColor](ui-draw-brush.setcolor.md) — Define cor
- [UI\Draw\Brush\Gradient](class.ui-draw-brush-gradient.md) — Pincéis de gradientes
  - [UI\Draw\Brush\Gradient::addStop](ui-draw-brush-gradient.addstop.md) — Adiciona parada
  - [UI\Draw\Brush\Gradient::delStop](ui-draw-brush-gradient.delstop.md) — Remove parada
  - [UI\Draw\Brush\Gradient::setStop](ui-draw-brush-gradient.setstop.md) — Define parada
- [UI\Draw\Brush\LinearGradient](class.ui-draw-brush-lineargradient.md) — Gradiente linear
  - [UI\Draw\Brush\LinearGradient::\_\_construct](ui-draw-brush-lineargradient.construct.md) — Constrói um gradiente linear
- [UI\Draw\Brush\RadialGradient](class.ui-draw-brush-radialgradient.md) — Gradiente radial
  - [UI\Draw\Brush\RadialGradient::\_\_construct](ui-draw-brush-radialgradient.construct.md) — Constrói um gradiente radial
- [UI\Draw\Text\Layout](class.ui-draw-text-layout.md) — Representa um leiaute de texto
  - [UI\Draw\Text\Layout::\_\_construct](ui-draw-text-layout.construct.md) — Constrói um novo leiaute de texto
  - [UI\Draw\Text\Layout::setColor](ui-draw-text-layout.setcolor.md) — Define cor
  - [UI\Draw\Text\Layout::setWidth](ui-draw-text-layout.setwidth.md) — Define largura
- [UI\Draw\Text\Font](class.ui-draw-text-font.md) — Representa uma fonte
  - [UI\Draw\Text\Font::\_\_construct](ui-draw-text-font.construct.md) — Constrói uma nova fonte
  - [UI\Draw\Text\Font::getAscent](ui-draw-text-font.getascent.md) — Medidas de fonte
  - [UI\Draw\Text\Font::getDescent](ui-draw-text-font.getdescent.md) — Medidas de fonte
  - [UI\Draw\Text\Font::getLeading](ui-draw-text-font.getleading.md) — Medidas de fonte
  - [UI\Draw\Text\Font::getUnderlinePosition](ui-draw-text-font.getunderlineposition.md) — Medidas de fonte
  - [UI\Draw\Text\Font::getUnderlineThickness](ui-draw-text-font.getunderlinethickness.md) — Medidas de fonte
- [UI\Draw\Text\Font\Descriptor](class.ui-draw-text-font-descriptor.md) — Descritor de fonte
  - [UI\Draw\Text\Font\Descriptor::\_\_construct](ui-draw-text-font-descriptor.construct.md) — Constrói um novo descritor de fonte
  - [UI\Draw\Text\Font\Descriptor::getFamily](ui-draw-text-font-descriptor.getfamily.md) — Obtém família de fonte
  - [UI\Draw\Text\Font\Descriptor::getItalic](ui-draw-text-font-descriptor.getitalic.md) — Detecção de estilo
  - [UI\Draw\Text\Font\Descriptor::getSize](ui-draw-text-font-descriptor.getsize.md) — Detecção de dimensão
  - [UI\Draw\Text\Font\Descriptor::getStretch](ui-draw-text-font-descriptor.getstretch.md) — Detecção de estilo
  - [UI\Draw\Text\Font\Descriptor::getWeight](ui-draw-text-font-descriptor.getweight.md) — Detecção de peso
- [Funções de UI](ref.ui.md)
  - [UI\Draw\Text\Font\fontFamilies](function.ui-draw-text-font-fontfamilies.md) — Recupera Famílias de Fontes
  - [UI\quit](function.ui-quit.md) — Sai de um Laço UI
  - [UI\run](function.ui-run.md) — Entra no Laço UI
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
