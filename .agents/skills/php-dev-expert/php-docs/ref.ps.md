# Funções de PS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.ps.php

---

# Funções de PS

## Informações de contato

Se você tiver comentários, correções de bugs ou melhorias para esta extensão ou
pslib, envie-me um e-mail
[» steinm@php.net](mailto:steinm@php.net). Qualquer ajuda é muito
bem vinda.

## Índice

- [ps\_add\_bookmark](function.ps-add-bookmark.md) — Adiciona marcador à página atual
- [ps\_add\_launchlink](function.ps-add-launchlink.md) — Adiciona hiperlink que inicia o arquivo
- [ps\_add\_locallink](function.ps-add-locallink.md) — Adiciona link para uma página no mesmo documento
- [ps\_add\_note](function.ps-add-note.md) — Adiciona nota à página atual
- [ps\_add\_pdflink](function.ps-add-pdflink.md) — Adiciona link para uma página em um segundo documento PDF
- [ps\_add\_weblink](function.ps-add-weblink.md) — Adiciona link para um local da web
- [ps\_arc](function.ps-arc.md) — Desenha um arco no sentido anti-horário
- [ps\_arcn](function.ps-arcn.md) — Desenha um arco no sentido horário
- [ps\_begin\_page](function.ps-begin-page.md) — Inicia uma nova página
- [ps\_begin\_pattern](function.ps-begin-pattern.md) — Inicia um novo padrão
- [ps\_begin\_template](function.ps-begin-template.md) — Inicia um novo modelo
- [ps\_circle](function.ps-circle.md) — Desenha um círculo
- [ps\_clip](function.ps-clip.md) — Recorta o desenho no caminho atual
- [ps\_close](function.ps-close.md) — Fecha um documento PostScript
- [ps\_close\_image](function.ps-close-image.md) — Fecha a imagem e libera memória
- [ps\_closepath](function.ps-closepath.md) — Fecha caminho
- [ps\_closepath\_stroke](function.ps-closepath-stroke.md) — Fecha e traça o caminho
- [ps\_continue\_text](function.ps-continue-text.md) — Continua o texto na próxima linha
- [ps\_curveto](function.ps-curveto.md) — Desenha uma curva
- [ps\_delete](function.ps-delete.md) — Exclui todos os recursos de um documento PostScript
- [ps\_end\_page](function.ps-end-page.md) — Termina uma página
- [ps\_end\_pattern](function.ps-end-pattern.md) — Termina um padrão
- [ps\_end\_template](function.ps-end-template.md) — Termina um modelo
- [ps\_fill](function.ps-fill.md) — Preenche o caminho atual
- [ps\_fill\_stroke](function.ps-fill-stroke.md) — Preenche e traça o caminho atual
- [ps\_findfont](function.ps-findfont.md) — Carrega uma fonte
- [ps\_get\_buffer](function.ps-get-buffer.md) — Busca o buffer completo contendo os dados PS gerados
- [ps\_get\_parameter](function.ps-get-parameter.md) — Obtém certos parâmetros
- [ps\_get\_value](function.ps-get-value.md) — Obtém determinados valores
- [ps\_hyphenate](function.ps-hyphenate.md) — Hifeniza uma palavra
- [ps\_include\_file](function.ps-include-file.md) — Lê um arquivo externo com código PostScript bruto
- [ps\_lineto](function.ps-lineto.md) — Desenha uma linha
- [ps\_makespotcolor](function.ps-makespotcolor.md) — Cria cor especial
- [ps\_moveto](function.ps-moveto.md) — Define o ponto atual
- [ps\_new](function.ps-new.md) — Cria um novo objeto de documento PostScript
- [ps\_open\_file](function.ps-open-file.md) — Abre um arquivo para saída
- [ps\_open\_image](function.ps-open-image.md) — Lê uma imagem para posicionamento posterior
- [ps\_open\_image\_file](function.ps-open-image-file.md) — Abre a imagem do arquivo
- [ps\_open\_memory\_image](function.ps-open-memory-image.md) — Pega uma imagem GD e retorna uma imagem para posicionamento em um documento PS
- [ps\_place\_image](function.ps-place-image.md) — Coloca a imagem na página
- [ps\_rect](function.ps-rect.md) — Desenha um retângulo
- [ps\_restore](function.ps-restore.md) — Restaura o contexto salvo anteriormente
- [ps\_rotate](function.ps-rotate.md) — Define o fator de rotação
- [ps\_save](function.ps-save.md) — Salva o contexto atual
- [ps\_scale](function.ps-scale.md) — Define o fator de escala
- [ps\_set\_border\_color](function.ps-set-border-color.md) — Define a cor da borda para anotações
- [ps\_set\_border\_dash](function.ps-set-border-dash.md) — Define o comprimento dos traços para a borda das anotações
- [ps\_set\_border\_style](function.ps-set-border-style.md) — Define o estilo de borda das anotações
- [ps\_set\_info](function.ps-set-info.md) — Define campos de informação do documento
- [ps\_set\_parameter](function.ps-set-parameter.md) — Define certos parâmetros
- [ps\_set\_text\_pos](function.ps-set-text-pos.md) — Define a posição para saída de texto
- [ps\_set\_value](function.ps-set-value.md) — Define certos valores
- [ps\_setcolor](function.ps-setcolor.md) — Define a cor atual
- [ps\_setdash](function.ps-setdash.md) — Define a aparência de uma linha tracejada
- [ps\_setflat](function.ps-setflat.md) — Define planicidade
- [ps\_setfont](function.ps-setfont.md) — Define a fonte a ser usada na saída seguinte
- [ps\_setgray](function.ps-setgray.md) — Define o valor de cinza
- [ps\_setlinecap](function.ps-setlinecap.md) — Define a aparência das extremidades da linha
- [ps\_setlinejoin](function.ps-setlinejoin.md) — Define como as linhas conectadas são unidas
- [ps\_setlinewidth](function.ps-setlinewidth.md) — Define a largura de uma linha
- [ps\_setmiterlimit](function.ps-setmiterlimit.md) — Define o limite de esquadria
- [ps\_setoverprintmode](function.ps-setoverprintmode.md) — Define o modo de sobreimpressão
- [ps\_setpolydash](function.ps-setpolydash.md) — Define a aparência de uma linha tracejada
- [ps\_shading](function.ps-shading.md) — Cria um sombreamento para uso posterior
- [ps\_shading\_pattern](function.ps-shading-pattern.md) — Cria um padrão com base em um sombreamento
- [ps\_shfill](function.ps-shfill.md) — Preenche uma área com um sombreamento
- [ps\_show](function.ps-show.md) — Exibe texto
- [ps\_show\_boxed](function.ps-show-boxed.md) — Gera texto em uma caixa
- [ps\_show\_xy](function.ps-show-xy.md) — Exibe texto na posição fornecida
- [ps\_show\_xy2](function.ps-show-xy2.md) — Exibe texto na posição
- [ps\_show2](function.ps-show2.md) — Gera um texto na posição atual
- [ps\_string\_geometry](function.ps-string-geometry.md) — Obtém a geometria de uma string
- [ps\_stringwidth](function.ps-stringwidth.md) — Obtém a largura de uma string
- [ps\_stroke](function.ps-stroke.md) — Desenha o caminho atual
- [ps\_symbol](function.ps-symbol.md) — Gera um glifo
- [ps\_symbol\_name](function.ps-symbol-name.md) — Obtém o nome de um glifo
- [ps\_symbol\_width](function.ps-symbol-width.md) — Obtém a largura de um glifo
- [ps\_translate](function.ps-translate.md) — Defina o ponto de translação

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
