# Funções de GD e Image

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.image.php

---

# Funções de GD e Image

## Índice

- [gd\_info](function.gd-info.md) — Obtém informações sobre a biblioteca GD instalada atualmente
- [getimagesize](function.getimagesize.md) — Obtém o tamanho de uma imagem
- [getimagesizefromstring](function.getimagesizefromstring.md) — Obtém o tamanho de uma imagem a partir de uma string
- [image\_type\_to\_extension](function.image-type-to-extension.md) — Obtém a extensão de arquivo para o tipo da imagem
- [image\_type\_to\_mime\_type](function.image-type-to-mime-type.md) — Obtém o Mime-Type para o tipo de imagem retornado por getimagesize,
  exif\_read\_data, exif\_thumbnail e exif\_imagetype
- [image2wbmp](function.image2wbmp.md) — Envia a imagem para o navegador ou para um arquivo
- [imageaffine](function.imageaffine.md) — Retorna uma imagem contendo a imagem fonte com transformação afim, usando uma área de recorte opcional
- [imageaffinematrixconcat](function.imageaffinematrixconcat.md) — Concatena duas matrizes de transformação afim
- [imageaffinematrixget](function.imageaffinematrixget.md) — Obtém uma matriz de transformação afim
- [imagealphablending](function.imagealphablending.md) — Define o modo de combinação para uma imagem
- [imageantialias](function.imageantialias.md) — Define se as funções de suavização de serrilhado devem ser usadas ou não
- [imagearc](function.imagearc.md) — Desenha um arco
- [imageavif](function.imageavif.md) — Envia a imagem para o navegador ou para um arquivo
- [imagebmp](function.imagebmp.md) — Mostra ou grava uma imagem BMP
- [imagechar](function.imagechar.md) — Desenha um caractere horizontalmente
- [imagecharup](function.imagecharup.md) — Desenha um caractere verticalmente
- [imagecolorallocate](function.imagecolorallocate.md) — Aloca uma cor para uma imagem
- [imagecolorallocatealpha](function.imagecolorallocatealpha.md) — Aloca uma cor para uma imagem
- [imagecolorat](function.imagecolorat.md) — Obtém o índica da cor de um pixel
- [imagecolorclosest](function.imagecolorclosest.md) — Obtém o índice da cor mais próxima à especificada
- [imagecolorclosestalpha](function.imagecolorclosestalpha.md) — Obtém o índice da cor mais próxima à especificada (incluindo alfa)
- [imagecolorclosesthwb](function.imagecolorclosesthwb.md) — Obtém o índice da cor que tem a matiz, brancura e negritude mais próximas de uma cor informada
- [imagecolordeallocate](function.imagecolordeallocate.md) — Desaloca uma cor de uma imagem
- [imagecolorexact](function.imagecolorexact.md) — Obtém o índice da cor especificada
- [imagecolorexactalpha](function.imagecolorexactalpha.md) — Obtém o índice da cor e alfa especificados
- [imagecolormatch](function.imagecolormatch.md) — Faz com que as cores da versão em paleta da imagem fiquem mais próximas da versão em cores verdadeiras
- [imagecolorresolve](function.imagecolorresolve.md) — Obtém o índice da cor especificada ou a alternativa mais próxima
- [imagecolorresolvealpha](function.imagecolorresolvealpha.md) — Obtém o índice da cor + alfa especificados ou a alternativa mais próxima
- [imagecolorset](function.imagecolorset.md) — Define a cor para o índice da paleta especificado
- [imagecolorsforindex](function.imagecolorsforindex.md) — Obtém as cores para um índice
- [imagecolorstotal](function.imagecolorstotal.md) — Obtém o número de cores em uma paleta de imagem
- [imagecolortransparent](function.imagecolortransparent.md) — Define uma cor como transparente
- [imageconvolution](function.imageconvolution.md) — Aplica uma matriz de convolução 3x3, usando coeficiente e deslocamento
- [imagecopy](function.imagecopy.md) — Copia uma parte de uma imagem
- [imagecopymerge](function.imagecopymerge.md) — Copia e funde parte de uma imagem
- [imagecopymergegray](function.imagecopymergegray.md) — Copia e funde parte de uma imagem com escala de cinza
- [imagecopyresampled](function.imagecopyresampled.md) — Copia e redimensiona parte de uma imagem com reamostragem
- [imagecopyresized](function.imagecopyresized.md) — Copia e redimensiona parte de uma imagem
- [imagecreate](function.imagecreate.md) — Crie uma nova imagem baseada em paleta
- [imagecreatefromavif](function.imagecreatefromavif.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefrombmp](function.imagecreatefrombmp.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefromgd](function.imagecreatefromgd.md) — Cria uma nova imagem a partir de um arquivo GD ou URL
- [imagecreatefromgd2](function.imagecreatefromgd2.md) — Cria uma nova imagem a partir de um arquivo GD2 ou URL
- [imagecreatefromgd2part](function.imagecreatefromgd2part.md) — Cria uma nova imagem a partir de uma parte de um arquivo GD2 ou URL
- [imagecreatefromgif](function.imagecreatefromgif.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefromjpeg](function.imagecreatefromjpeg.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefrompng](function.imagecreatefrompng.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefromstring](function.imagecreatefromstring.md) — Cria uma nova imagem a partir de um fluxo de imagem na string
- [imagecreatefromtga](function.imagecreatefromtga.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefromwbmp](function.imagecreatefromwbmp.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefromwebp](function.imagecreatefromwebp.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefromxbm](function.imagecreatefromxbm.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefromxpm](function.imagecreatefromxpm.md) — Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatetruecolor](function.imagecreatetruecolor.md) — Cria uma nova imagem em cores verdadeiras
- [imagecrop](function.imagecrop.md) — Recorta uma imagem no retângulo informado
- [imagecropauto](function.imagecropauto.md) — Recorta uma imagem automaticamente usando um dos modos disponíveis
- [imagedashedline](function.imagedashedline.md) — Desenha uma linha tracejada
- [imagedestroy](function.imagedestroy.md) — Destrói uma imagem
- [imageellipse](function.imageellipse.md) — Desenha uma elipse
- [imagefill](function.imagefill.md) — Preenchimento
- [imagefilledarc](function.imagefilledarc.md) — Desenha um arco parcial preenchido
- [imagefilledellipse](function.imagefilledellipse.md) — Desenha uma elipse preenchida
- [imagefilledpolygon](function.imagefilledpolygon.md) — Desenha um polígono preenchido
- [imagefilledrectangle](function.imagefilledrectangle.md) — Desenha um retângulo preenchido
- [imagefilltoborder](function.imagefilltoborder.md) — Preenche até encontrar uma cor especificada
- [imagefilter](function.imagefilter.md) — Aplica um filtro a uma imagem
- [imageflip](function.imageflip.md) — Vira uma imagem usando um modo especificado
- [imagefontheight](function.imagefontheight.md) — Obtém a altura da fonte
- [imagefontwidth](function.imagefontwidth.md) — Obtém a largura da fonte
- [imageftbbox](function.imageftbbox.md) — Fornece a caixa limite de um texto usando fontes via freetype2
- [imagefttext](function.imagefttext.md) — Escreve texto em uma imagem usando fontes FreeType 2
- [imagegammacorrect](function.imagegammacorrect.md) — Aplica uma correção de gama a uma imagem GD
- [imagegd](function.imagegd.md) — Envia uma imagem GD para o navegador ou para um arquivo
- [imagegd2](function.imagegd2.md) — Envia uma imagem GD2 ao navegador ou a um arquivo
- [imagegetclip](function.imagegetclip.md) — Obtém o retângulo de recorte
- [imagegetinterpolation](function.imagegetinterpolation.md) — Obtém o método de interpolação
- [imagegif](function.imagegif.md) — Envia a imagem para o navegador ou para um arquivo
- [imagegrabscreen](function.imagegrabscreen.md) — Captura toda a tela
- [imagegrabwindow](function.imagegrabwindow.md) — Captura uma janela
- [imageinterlace](function.imageinterlace.md) — Habilita ou desabilita entrelace
- [imageistruecolor](function.imageistruecolor.md) — Descobre se uma imagem está em cores verdadeiras
- [imagejpeg](function.imagejpeg.md) — Envia a imagem para o navegador ou para um arquivo
- [imagelayereffect](function.imagelayereffect.md) — Define a opção de mesclagem alfa para usar efeitos de camada
- [imageline](function.imageline.md) — Desenha uma linha
- [imageloadfont](function.imageloadfont.md) — Carrega uma nova fonte
- [imageopenpolygon](function.imageopenpolygon.md) — Desenha um polígono aberto
- [imagepalettecopy](function.imagepalettecopy.md) — Copia a paleta de uma imagem para outra
- [imagepalettetotruecolor](function.imagepalettetotruecolor.md) — Converte uma imagem baseada em paleta para cores verdadeiras
- [imagepng](function.imagepng.md) — Envia uma imagem PNG para o navegador ou arquivo
- [imagepolygon](function.imagepolygon.md) — Desenha um polígono
- [imagerectangle](function.imagerectangle.md) — Desenha um retângulo
- [imageresolution](function.imageresolution.md) — Obtém ou define a resolução da imagem
- [imagerotate](function.imagerotate.md) — Rotaciona uma imagem em um ângulo informado
- [imagesavealpha](function.imagesavealpha.md) — Informa se a informação de canal alfa deve ser retida ao gravar imagens
- [imagescale](function.imagescale.md) — Muda a escala de uma imagem usando largura e altura informadas
- [imagesetbrush](function.imagesetbrush.md) — Define o tipo de pincel para desenho de linhas
- [imagesetclip](function.imagesetclip.md) — Define o retângulo de recorte
- [imagesetinterpolation](function.imagesetinterpolation.md) — Define o método de interpolação
- [imagesetpixel](function.imagesetpixel.md) — Desenha um pixel
- [imagesetstyle](function.imagesetstyle.md) — Define o estilo para desenho de linhas
- [imagesetthickness](function.imagesetthickness.md) — Define a espessura para desenho de linhas
- [imagesettile](function.imagesettile.md) — Define a imagem de ladrilho para preenchimento
- [imagestring](function.imagestring.md) — Desenha uma string na horizontal
- [imagestringup](function.imagestringup.md) — Desenha uma string na vertical
- [imagesx](function.imagesx.md) — Obtém a largura da imagem
- [imagesy](function.imagesy.md) — Obtém a altura da imagem
- [imagetruecolortopalette](function.imagetruecolortopalette.md) — Converte uma imagem em cores verdadeiras em uma imagem de paleta
- [imagettfbbox](function.imagettfbbox.md) — Fornece a os limites retangulares de um texto usando fontes TrueType
- [imagettftext](function.imagettftext.md) — Escreve texto na imagem usando fontes TrueType
- [imagetypes](function.imagetypes.md) — Retorna os tipos de imagens suportados pela instalação do PHP
- [imagewbmp](function.imagewbmp.md) — Envia a imagem para o navegador ou para um arquivo
- [imagewebp](function.imagewebp.md) — Mostra uma imagem WebP no navegador ou grava em arquivo
- [imagexbm](function.imagexbm.md) — Mostra uma imagem XBM em um navegador ou grava em arquivo
- [iptcembed](function.iptcembed.md) — Incorpora dados binários IPTC em uma imagem JPEG
- [iptcparse](function.iptcparse.md) — Interpreta um bloco IPTC binário em etiquetas simples
- [jpeg2wbmp](function.jpeg2wbmp.md) — Converte arquivo de imagem JPEG para WBMP
- [png2wbmp](function.png2wbmp.md) — Converte arquivo de imagem PNG em WBMP

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
