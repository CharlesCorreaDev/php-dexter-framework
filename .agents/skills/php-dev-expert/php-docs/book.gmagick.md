# Gmagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.gmagick.php

---

# Gmagick

# Introdução

**Aviso**

Esta extensão é
*EXPERIMENTAL*. O comportamento desta extensão, incluindo
os nomes de suas funções e qualquer outra documentação relacionada a esta
extensão, pode mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

Gmagick é uma extensão PHP para criar, modificar e obter metainformações de imagens usando a API GraphicsMagick.

GraphicsMagick orgulha-se de ser o canivete suíço no processamento de imagens. Funciona com 88 principais formatos
incluindo formatos importantes como DPX, GIF, JPEG, JPEG-2000, PNG, PDF, PNM e TIFF.

Gmagick consiste de uma classe principal Gmagick, uma classe GmagickDraw que é na verdade uma varinha de desenho e uma
classe GmagickPixel cujas instâncias representam um único pixel de uma imagem (cor, opacidade).

- [Instalação/Configuração](gmagick.setup.md)
  - [Dependências](gmagick.requirements.md)
  - [Instalação](gmagick.installation.md)
- [Constantes predefinidas](gmagick.constants.md)
- [Examples](gmagick.examples.md)
- [Gmagick](class.gmagick.md) — A classe Gmagick
  - [Gmagick::addimage](gmagick.addimage.md) — Adiciona nova imagem à lista de imagens de objetos Gmagick
  - [Gmagick::addnoiseimage](gmagick.addnoiseimage.md) — Adiciona ruído aleatório à imagem
  - [Gmagick::annotateimage](gmagick.annotateimage.md) — Anota uma imagem com texto
  - [Gmagick::blurimage](gmagick.blurimage.md) — Adiciona filtro de desfoque à imagem
  - [Gmagick::borderimage](gmagick.borderimage.md) — Envolve a imagem com uma borda
  - [Gmagick::charcoalimage](gmagick.charcoalimage.md) — Simula um desenho a carvão
  - [Gmagick::chopimage](gmagick.chopimage.md) — Remove uma região de uma imagem e corta
  - [Gmagick::clear](gmagick.clear.md) — Limpa todos os recursos associados ao objeto Gmagick
  - [Gmagick::commentimage](gmagick.commentimage.md) — Adiciona um comentário à sua imagem
  - [Gmagick::compositeimage](gmagick.compositeimage.md) — Compõe uma imagem em outra
  - [Gmagick::\_\_construct](gmagick.construct.md) — O construtor Gmagick
  - [Gmagick::cropimage](gmagick.cropimage.md) — Extrai uma região da imagem
  - [Gmagick::cropthumbnailimage](gmagick.cropthumbnailimage.md) — Cria uma miniatura de corte
  - [Gmagick::current](gmagick.current.md) — Retorna referência ao objeto Gmagick atual
  - [Gmagick::cyclecolormapimage](gmagick.cyclecolormapimage.md) — Desloca o mapa de cores de uma imagem
  - [Gmagick::deconstructimages](gmagick.deconstructimages.md) — Retorna certas diferenças de pixels entre imagens
  - [Gmagick::despeckleimage](gmagick.despeckleimage.md) — Reduz manchas em uma imagem
  - [Gmagick::destroy](gmagick.destroy.md) — Destrói o objeto Gmagick
  - [Gmagick::drawimage](gmagick.drawimage.md) — Renderiza o objeto GmagickDraw na imagem atual
  - [Gmagick::edgeimage](gmagick.edgeimage.md) — Melhora as bordas da imagem
  - [Gmagick::embossimage](gmagick.embossimage.md) — Retorna uma imagem em tons de cinza com efeito tridimensional
  - [Gmagick::enhanceimage](gmagick.enhanceimage.md) — Melhora a qualidade de uma imagem com ruído
  - [Gmagick::equalizeimage](gmagick.equalizeimage.md) — Equaliza o histograma da imagem
  - [Gmagick::flipimage](gmagick.flipimage.md) — Cria uma imagem espelhada vertical
  - [Gmagick::flopimage](gmagick.flopimage.md) — Cria uma imagem espelhada horizontal
  - [Gmagick::frameimage](gmagick.frameimage.md) — Adiciona uma borda tridimensional simulada
  - [Gmagick::gammaimage](gmagick.gammaimage.md) — Corrige o gama da imagem
  - [Gmagick::getcopyright](gmagick.getcopyright.md) — Retorna os direitos autorais da API GraphicsMagick como uma string
  - [Gmagick::getfilename](gmagick.getfilename.md) — Obtém o nome do arquivo associado a uma sequência de imagens
  - [Gmagick::getimagebackgroundcolor](gmagick.getimagebackgroundcolor.md) — Retorna a cor de fundo da imagem
  - [Gmagick::getimageblueprimary](gmagick.getimageblueprimary.md) — Retorna o ponto primário azul da cromaticidade
  - [Gmagick::getimagebordercolor](gmagick.getimagebordercolor.md) — Retorna a cor da borda da imagem
  - [Gmagick::getimagechanneldepth](gmagick.getimagechanneldepth.md) — Obtém a profundidade de um canal de imagem específico
  - [Gmagick::getimagecolors](gmagick.getimagecolors.md) — Retorna a cor do índice do mapa de cores especificado
  - [Gmagick::getimagecolorspace](gmagick.getimagecolorspace.md) — Obtém o espaço de cores da imagem
  - [Gmagick::getimagecompose](gmagick.getimagecompose.md) — Retorna o operador de composição associado à imagem
  - [Gmagick::getimagedelay](gmagick.getimagedelay.md) — Obtém o atraso da imagem
  - [Gmagick::getimagedepth](gmagick.getimagedepth.md) — Obtém a profundidade da imagem
  - [Gmagick::getimagedispose](gmagick.getimagedispose.md) — Obtém o método de descarte de imagem
  - [Gmagick::getimageextrema](gmagick.getimageextrema.md) — Obtém os extremos da imagem
  - [Gmagick::getimagefilename](gmagick.getimagefilename.md) — Retorna o nome do arquivo de uma imagem específica em uma sequência
  - [Gmagick::getimageformat](gmagick.getimageformat.md) — Retorna o formato de uma imagem específica em uma sequência
  - [Gmagick::getimagegamma](gmagick.getimagegamma.md) — Obtém o gama da imagem
  - [Gmagick::getimagegreenprimary](gmagick.getimagegreenprimary.md) — Retorna o ponto primário verde da cromaticidade
  - [Gmagick::getimageheight](gmagick.getimageheight.md) — Retorna a altura da imagem
  - [Gmagick::getimagehistogram](gmagick.getimagehistogram.md) — Obtém o histograma da imagem
  - [Gmagick::getimageindex](gmagick.getimageindex.md) — Obtém o índice da imagem ativa atual
  - [Gmagick::getimageinterlacescheme](gmagick.getimageinterlacescheme.md) — Obtém o esquema de entrelaçamento da imagem
  - [Gmagick::getimageiterations](gmagick.getimageiterations.md) — Obtém as iterações da imagem
  - [Gmagick::getimagematte](gmagick.getimagematte.md) — Verifique se a imagem possui um canal fosco
  - [Gmagick::getimagemattecolor](gmagick.getimagemattecolor.md) — Retorna a cor fosca da imagem
  - [Gmagick::getimageprofile](gmagick.getimageprofile.md) — Retorna o perfil de imagem nomeado
  - [Gmagick::getimageredprimary](gmagick.getimageredprimary.md) — Retorna o ponto primário vermelho da cromaticidade
  - [Gmagick::getimagerenderingintent](gmagick.getimagerenderingintent.md) — Obtém a intenção de renderização da imagem
  - [Gmagick::getimageresolution](gmagick.getimageresolution.md) — Obtém a resolução X e Y da imagem
  - [Gmagick::getimagescene](gmagick.getimagescene.md) — Obtém a cena da imagem
  - [Gmagick::getimagesignature](gmagick.getimagesignature.md) — Gera um resumo de mensagem SHA-256
  - [Gmagick::getimagetype](gmagick.getimagetype.md) — Obtém o tipo de imagem potencial
  - [Gmagick::getimageunits](gmagick.getimageunits.md) — Obtém as unidades de resolução da imagem
  - [Gmagick::getimagewhitepoint](gmagick.getimagewhitepoint.md) — Retorna o ponto branco da cromaticidade
  - [Gmagick::getimagewidth](gmagick.getimagewidth.md) — Retorna a largura da imagem
  - [Gmagick::getpackagename](gmagick.getpackagename.md) — Retorna o nome do pacote GraphicsMagick
  - [Gmagick::getquantumdepth](gmagick.getquantumdepth.md) — Retorna a profundidade de Quantum do Gmagick como uma string
  - [Gmagick::getreleasedate](gmagick.getreleasedate.md) — Retorna a data de lançamento do GraphicsMagick como uma string
  - [Gmagick::getsamplingfactors](gmagick.getsamplingfactors.md) — Obtém o fator de amostragem horizontal e vertical
  - [Gmagick::getsize](gmagick.getsize.md) — Retorna o tamanho associado ao objeto Gmagick
  - [Gmagick::getversion](gmagick.getversion.md) — Retorna a versão da API GraphicsMagick
  - [Gmagick::hasnextimage](gmagick.hasnextimage.md) — Verifica se o objeto possui mais imagens
  - [Gmagick::haspreviousimage](gmagick.haspreviousimage.md) — Verifica se o objeto possui uma imagem anterior
  - [Gmagick::implodeimage](gmagick.implodeimage.md) — Cria uma nova imagem implodida
  - [Gmagick::labelimage](gmagick.labelimage.md) — Adiciona um rótulo a uma imagem
  - [Gmagick::levelimage](gmagick.levelimage.md) — Ajusta os níveis de uma imagem
  - [Gmagick::magnifyimage](gmagick.magnifyimage.md) — Amplia uma imagem para o dobro de seu tamanho
  - [Gmagick::mapimage](gmagick.mapimage.md) — Substitui as cores de uma imagem pela cor mais próxima de uma imagem de referência
  - [Gmagick::medianfilterimage](gmagick.medianfilterimage.md) — Aplica um filtro digital
  - [Gmagick::minifyimage](gmagick.minifyimage.md) — Reduz uma imagem à metade de seu tamanho
  - [Gmagick::modulateimage](gmagick.modulateimage.md) — Controle brilho, saturação e matiz
  - [Gmagick::motionblurimage](gmagick.motionblurimage.md) — Simula desfoque de movimento
  - [Gmagick::newimage](gmagick.newimage.md) — Cria uma nova imagem
  - [Gmagick::nextimage](gmagick.nextimage.md) — Passa para a próxima imagem
  - [Gmagick::normalizeimage](gmagick.normalizeimage.md) — Melhora o contraste de uma imagem colorida
  - [Gmagick::oilpaintimage](gmagick.oilpaintimage.md) — Simula uma pintura a óleo
  - [Gmagick::previousimage](gmagick.previousimage.md) — Passa para a imagem anterior no objeto
  - [Gmagick::profileimage](gmagick.profileimage.md) — Adiciona ou remove um perfil de uma imagem
  - [Gmagick::quantizeimage](gmagick.quantizeimage.md) — Analisa as cores dentro de uma imagem de referência
  - [Gmagick::quantizeimages](gmagick.quantizeimages.md) — Analisa as cores dentro de imagens de referência
  - [Gmagick::queryfontmetrics](gmagick.queryfontmetrics.md) — Retorna um array representando as métricas da fonte
  - [Gmagick::queryfonts](gmagick.queryfonts.md) — Retorna as fontes configuradas
  - [Gmagick::queryformats](gmagick.queryformats.md) — Retorna formatos suportados pelo Gmagick
  - [Gmagick::radialblurimage](gmagick.radialblurimage.md) — Desfoca uma imagem de forma radial
  - [Gmagick::raiseimage](gmagick.raiseimage.md) — Cria um efeito simulado de botão 3D
  - [Gmagick::read](gmagick.read.md) — Lê imagem a partir de um arquivo
  - [Gmagick::readimage](gmagick.readimage.md) — Lê imagem a partir de um arquivo
  - [Gmagick::readimageblob](gmagick.readimageblob.md) — Lê imagem a partir de uma string binária
  - [Gmagick::readimagefile](gmagick.readimagefile.md) — Lê imagem a partir de um descritor de arquivo
  - [Gmagick::reducenoiseimage](gmagick.reducenoiseimage.md) — Suaviza os contornos de uma imagem
  - [Gmagick::removeimage](gmagick.removeimage.md) — Remove uma imagem da lista de imagens
  - [Gmagick::removeimageprofile](gmagick.removeimageprofile.md) — Remove o perfil de imagem nomeado e o retorna
  - [Gmagick::resampleimage](gmagick.resampleimage.md) — Reamostra imagem para a resolução desejada
  - [Gmagick::resizeimage](gmagick.resizeimage.md) — Dimensiona uma imagem
  - [Gmagick::rollimage](gmagick.rollimage.md) — Desloca uma imagem
  - [Gmagick::rotateimage](gmagick.rotateimage.md) — Rotaciona uma imagem
  - [Gmagick::scaleimage](gmagick.scaleimage.md) — Dimensiona o tamanho de uma imagem
  - [Gmagick::separateimagechannel](gmagick.separateimagechannel.md) — Separa um canal da imagem
  - [Gmagick::setCompressionQuality](gmagick.setcompressionquality.md) — Define a qualidade de compactação padrão do objeto
  - [Gmagick::setfilename](gmagick.setfilename.md) — Define o nome do arquivo antes de ler ou gravar a imagem
  - [Gmagick::setimagebackgroundcolor](gmagick.setimagebackgroundcolor.md) — Define a cor de fundo da imagem
  - [Gmagick::setimageblueprimary](gmagick.setimageblueprimary.md) — Define o ponto primário azul da cromaticidade da imagem
  - [Gmagick::setimagebordercolor](gmagick.setimagebordercolor.md) — Define a cor da borda da imagem
  - [Gmagick::setimagechanneldepth](gmagick.setimagechanneldepth.md) — Define a profundidade de um canal de imagem específico
  - [Gmagick::setimagecolorspace](gmagick.setimagecolorspace.md) — Define o espaço de cores da imagem
  - [Gmagick::setimagecompose](gmagick.setimagecompose.md) — Define o operador de composição da imagem
  - [Gmagick::setimagedelay](gmagick.setimagedelay.md) — Define o atraso da imagem
  - [Gmagick::setimagedepth](gmagick.setimagedepth.md) — Define a profundidade da imagem
  - [Gmagick::setimagedispose](gmagick.setimagedispose.md) — Define o método de descarte de imagem
  - [Gmagick::setimagefilename](gmagick.setimagefilename.md) — Define o nome do arquivo de uma imagem específica em uma sequência
  - [Gmagick::setimageformat](gmagick.setimageformat.md) — Define o formato de uma imagem específica
  - [Gmagick::setimagegamma](gmagick.setimagegamma.md) — Define o gama da imagem
  - [Gmagick::setimagegreenprimary](gmagick.setimagegreenprimary.md) — Define o ponto primário verde da cromaticidade da imagem
  - [Gmagick::setimageindex](gmagick.setimageindex.md) — Defina o iterador para a posição na lista de imagens especificada
  - [Gmagick::setimageinterlacescheme](gmagick.setimageinterlacescheme.md) — Define o esquema de entrelaçamento da imagem
  - [Gmagick::setimageiterations](gmagick.setimageiterations.md) — Define as iterações da imagem
  - [Gmagick::setimageprofile](gmagick.setimageprofile.md) — Adiciona um perfil nomeado ao objeto Gmagick
  - [Gmagick::setimageredprimary](gmagick.setimageredprimary.md) — Define o ponto primário vermelho da cromaticidade da imagem
  - [Gmagick::setimagerenderingintent](gmagick.setimagerenderingintent.md) — Define a intenção de renderização da imagem
  - [Gmagick::setimageresolution](gmagick.setimageresolution.md) — Define a resolução da imagem
  - [Gmagick::setimagescene](gmagick.setimagescene.md) — Define a cena da imagem
  - [Gmagick::setimagetype](gmagick.setimagetype.md) — Define o tipo de imagem
  - [Gmagick::setimageunits](gmagick.setimageunits.md) — Define as unidades de resolução da imagem
  - [Gmagick::setimagewhitepoint](gmagick.setimagewhitepoint.md) — Define o ponto branco da cromaticidade da imagem
  - [Gmagick::setsamplingfactors](gmagick.setsamplingfactors.md) — Define os fatores de amostragem da imagem
  - [Gmagick::setsize](gmagick.setsize.md) — Define o tamanho do objeto Gmagick
  - [Gmagick::shearimage](gmagick.shearimage.md) — Criando um paralelogramo
  - [Gmagick::solarizeimage](gmagick.solarizeimage.md) — Aplica um efeito de solarização à imagem
  - [Gmagick::spreadimage](gmagick.spreadimage.md) — Desloca aleatoriamente cada pixel em um bloco
  - [Gmagick::stripimage](gmagick.stripimage.md) — Remove todos os comentário e perfir de uma imagem
  - [Gmagick::swirlimage](gmagick.swirlimage.md) — Turbilhona os pixels em torno do centro da imagem
  - [Gmagick::thumbnailimage](gmagick.thumbnailimage.md) — Altera o tamanho de uma imagem
  - [Gmagick::trimimage](gmagick.trimimage.md) — Remover bordas da imagem
  - [Gmagick::write](gmagick.write.md) — Sinônimo de Gmagick::writeimage
  - [Gmagick::writeimage](gmagick.writeimage.md) — Grava uma imagem no arquivo especificado
- [GmagickDraw](class.gmagickdraw.md) — A classe GmagickDraw
  - [GmagickDraw::annotate](gmagickdraw.annotate.md) — Desenha texto na imagem
  - [GmagickDraw::arc](gmagickdraw.arc.md) — Desenha um arco
  - [GmagickDraw::bezier](gmagickdraw.bezier.md) — Desenha uma curva de Bézier
  - [GmagickDraw::ellipse](gmagickdraw.ellipse.md) — Desenha uma elipse na imagem
  - [GmagickDraw::getfillcolor](gmagickdraw.getfillcolor.md) — Retorna a cor de preenchimento
  - [GmagickDraw::getfillopacity](gmagickdraw.getfillopacity.md) — Retorna a opacidade usada ao desenhar
  - [GmagickDraw::getfont](gmagickdraw.getfont.md) — Retorna a fonte
  - [GmagickDraw::getfontsize](gmagickdraw.getfontsize.md) — Retorna o tamanho da fonte em pontos
  - [GmagickDraw::getfontstyle](gmagickdraw.getfontstyle.md) — Retorna o estilo da fonte
  - [GmagickDraw::getfontweight](gmagickdraw.getfontweight.md) — Retorna o peso da fonte
  - [GmagickDraw::getstrokecolor](gmagickdraw.getstrokecolor.md) — Retorna a cor usada para traçar os contornos dos objetos
  - [GmagickDraw::getstrokeopacity](gmagickdraw.getstrokeopacity.md) — Retorna a opacidade dos contornos dos objetos traçados
  - [GmagickDraw::getstrokewidth](gmagickdraw.getstrokewidth.md) — Retorna a largura do traço usado para desenhar contornos de objetos
  - [GmagickDraw::gettextdecoration](gmagickdraw.gettextdecoration.md) — Retorna a decoração do texto
  - [GmagickDraw::gettextencoding](gmagickdraw.gettextencoding.md) — Retorna o conjunto de caracteres usado para anotações de texto
  - [GmagickDraw::line](gmagickdraw.line.md) — Desenha uma linha
  - [GmagickDraw::point](gmagickdraw.point.md) — Desenha um ponto
  - [GmagickDraw::polygon](gmagickdraw.polygon.md) — Desenha um polígono
  - [GmagickDraw::polyline](gmagickdraw.polyline.md) — Desenha uma polilinha
  - [GmagickDraw::rectangle](gmagickdraw.rectangle.md) — Desenha um retângulo
  - [GmagickDraw::rotate](gmagickdraw.rotate.md) — Aplica a rotação especificada ao espaço de coordenadas atual
  - [GmagickDraw::roundrectangle](gmagickdraw.roundrectangle.md) — Desenha um retângulo arredondado
  - [GmagickDraw::scale](gmagickdraw.scale.md) — Ajusta o fator de escala
  - [GmagickDraw::setfillcolor](gmagickdraw.setfillcolor.md) — Define a cor de preenchimento a ser usada para desenhar objetos preenchidos
  - [GmagickDraw::setfillopacity](gmagickdraw.setfillopacity.md) — Define a opacidade de preenchimento
  - [GmagickDraw::setfont](gmagickdraw.setfont.md) — Define a fonte totalmente especificada a ser usada ao fazer anotações com texto
  - [GmagickDraw::setfontsize](gmagickdraw.setfontsize.md) — Define o tamanho da fonte a ser usado ao fazer anotações com texto
  - [GmagickDraw::setfontstyle](gmagickdraw.setfontstyle.md) — Define o estilo da fonte a ser usado ao fazer anotações com texto
  - [GmagickDraw::setfontweight](gmagickdraw.setfontweight.md) — Define o peso da fonte
  - [GmagickDraw::setstrokecolor](gmagickdraw.setstrokecolor.md) — Define a cor usada para traçar os contornos dos objetos
  - [GmagickDraw::setstrokeopacity](gmagickdraw.setstrokeopacity.md) — Especifica a opacidade dos contornos dos objetos traçados
  - [GmagickDraw::setstrokewidth](gmagickdraw.setstrokewidth.md) — Define a largura do traço usado para desenhar contornos de objetos
  - [GmagickDraw::settextdecoration](gmagickdraw.settextdecoration.md) — Especifica uma decoração
  - [GmagickDraw::settextencoding](gmagickdraw.settextencoding.md) — Especifica a codificação de caracteres de texto
- [GmagickPixel](class.gmagickpixel.md) — A classe GmagickPixel
  - [GmagickPixel::\_\_construct](gmagickpixel.construct.md) — O construtor GmagickPixel
  - [GmagickPixel::getcolor](gmagickpixel.getcolor.md) — Retorna a cor
  - [GmagickPixel::getcolorcount](gmagickpixel.getcolorcount.md) — Retorna a contagem de cores associada a esta cor
  - [GmagickPixel::getcolorvalue](gmagickpixel.getcolorvalue.md) — Obtém o valor normalizado do canal de cores fornecido
  - [GmagickPixel::setcolor](gmagickpixel.setcolor.md) — Define a cor
  - [GmagickPixel::setcolorvalue](gmagickpixel.setcolorvalue.md) — Define o valor normalizado de um dos canais

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
