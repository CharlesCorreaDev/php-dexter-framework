# A classe Gmagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gmagick.php

---

# A classe Gmagick

(PECL gmagick >= Unknown)

## Introdução

## Resumo da classe

class **Gmagick**
{

/\* Métodos \*/

public function [\_\_construct](gmagick.construct.md)([string](language.types.string.md) `$filename` = ?)

public function [addimage](gmagick.addimage.md)([Gmagick](class.gmagick.md) `$source`): [Gmagick](class.gmagick.md)

public function [addnoiseimage](gmagick.addnoiseimage.md)([int](language.types.integer.md) `$noise_type`): [Gmagick](class.gmagick.md)

public function [annotateimage](gmagick.annotateimage.md)(  
    [GmagickDraw](class.gmagickdraw.md) `$GmagickDraw`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$angle`,  
    [string](language.types.string.md) `$text`  
): [Gmagick](class.gmagick.md)

public function [blurimage](gmagick.blurimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = ?): [Gmagick](class.gmagick.md)

public function [borderimage](gmagick.borderimage.md)([GmagickPixel](class.gmagickpixel.md) `$color`, [int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`): [Gmagick](class.gmagick.md)

public function [charcoalimage](gmagick.charcoalimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`): [Gmagick](class.gmagick.md)

public function [chopimage](gmagick.chopimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [Gmagick](class.gmagick.md)

public function [clear](gmagick.clear.md)(): [Gmagick](class.gmagick.md)

public function [commentimage](gmagick.commentimage.md)([string](language.types.string.md) `$comment`): [Gmagick](class.gmagick.md)

public function [compositeimage](gmagick.compositeimage.md)(  
    [Gmagick](class.gmagick.md) `$source`,  
    [int](language.types.integer.md) `$COMPOSE`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [Gmagick](class.gmagick.md)

public function [cropimage](gmagick.cropimage.md)(  
    
[int](language.types.integer.md) `$width`
,  
    
[int](language.types.integer.md) `$height`
,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [Gmagick](class.gmagick.md)

public function [cropthumbnailimage](gmagick.cropthumbnailimage.md)([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`): [Gmagick](class.gmagick.md)

public function [current](gmagick.current.md)(): [Gmagick](class.gmagick.md)

public function [cyclecolormapimage](gmagick.cyclecolormapimage.md)([int](language.types.integer.md) `$displace`): [Gmagick](class.gmagick.md)

public function [deconstructimages](gmagick.deconstructimages.md)(): [Gmagick](class.gmagick.md)

public function [despeckleimage](gmagick.despeckleimage.md)(): [Gmagick](class.gmagick.md)

public function [destroy](gmagick.destroy.md)(): [bool](language.types.boolean.md)

public function [drawimage](gmagick.drawimage.md)([GmagickDraw](class.gmagickdraw.md) `$GmagickDraw`): [Gmagick](class.gmagick.md)

public function [edgeimage](gmagick.edgeimage.md)([float](language.types.float.md) `$radius`): [Gmagick](class.gmagick.md)

public function [embossimage](gmagick.embossimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`): [Gmagick](class.gmagick.md)

public function [enhanceimage](gmagick.enhanceimage.md)(): [Gmagick](class.gmagick.md)

public function [equalizeimage](gmagick.equalizeimage.md)(): [Gmagick](class.gmagick.md)

public function [flipimage](gmagick.flipimage.md)(): [Gmagick](class.gmagick.md)

public function [flopimage](gmagick.flopimage.md)(): [Gmagick](class.gmagick.md)

public function [frameimage](gmagick.frameimage.md)(  
    [GmagickPixel](class.gmagickpixel.md) `$color`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$inner_bevel`,  
    [int](language.types.integer.md) `$outer_bevel`  
): [Gmagick](class.gmagick.md)

public function [gammaimage](gmagick.gammaimage.md)([float](language.types.float.md) `$gamma`): [Gmagick](class.gmagick.md)

public function [getcopyright](gmagick.getcopyright.md)(): [string](language.types.string.md)

public function [getfilename](gmagick.getfilename.md)(): [string](language.types.string.md)

public function [getimagebackgroundcolor](gmagick.getimagebackgroundcolor.md)(): [GmagickPixel](class.gmagickpixel.md)

public function [getimageblueprimary](gmagick.getimageblueprimary.md)(): [array](language.types.array.md)

public function [getimagebordercolor](gmagick.getimagebordercolor.md)(): [GmagickPixel](class.gmagickpixel.md)

public function [getimagechanneldepth](gmagick.getimagechanneldepth.md)([int](language.types.integer.md) `$channel_type`): [int](language.types.integer.md)

public function [getimagecolors](gmagick.getimagecolors.md)(): [int](language.types.integer.md)

public function [getimagecolorspace](gmagick.getimagecolorspace.md)(): [int](language.types.integer.md)

public function [getimagecompose](gmagick.getimagecompose.md)(): [int](language.types.integer.md)

public function [getimagedelay](gmagick.getimagedelay.md)(): [int](language.types.integer.md)

public function [getimagedepth](gmagick.getimagedepth.md)(): [int](language.types.integer.md)

public function [getimagedispose](gmagick.getimagedispose.md)(): [int](language.types.integer.md)

public function [getimageextrema](gmagick.getimageextrema.md)(): [array](language.types.array.md)

public function [getimagefilename](gmagick.getimagefilename.md)(): [string](language.types.string.md)

public function [getimageformat](gmagick.getimageformat.md)(): [string](language.types.string.md)

public function [getimagegamma](gmagick.getimagegamma.md)(): [float](language.types.float.md)

public function [getimagegreenprimary](gmagick.getimagegreenprimary.md)(): [array](language.types.array.md)

public function [getimageheight](gmagick.getimageheight.md)(): [int](language.types.integer.md)

public function [getimagehistogram](gmagick.getimagehistogram.md)(): [array](language.types.array.md)

public function [getimageindex](gmagick.getimageindex.md)(): [int](language.types.integer.md)

public function [getimageinterlacescheme](gmagick.getimageinterlacescheme.md)(): [int](language.types.integer.md)

public function [getimageiterations](gmagick.getimageiterations.md)(): [int](language.types.integer.md)

public function [getimagematte](gmagick.getimagematte.md)(): [int](language.types.integer.md)

public function [getimagemattecolor](gmagick.getimagemattecolor.md)(): [GmagickPixel](class.gmagickpixel.md)

public function [getimageprofile](gmagick.getimageprofile.md)([string](language.types.string.md) `$name`): [string](language.types.string.md)

public function [getimageredprimary](gmagick.getimageredprimary.md)(): [array](language.types.array.md)

public function [getimagerenderingintent](gmagick.getimagerenderingintent.md)(): [int](language.types.integer.md)

public function [getimageresolution](gmagick.getimageresolution.md)(): [array](language.types.array.md)

public function [getimagescene](gmagick.getimagescene.md)(): [int](language.types.integer.md)

public function [getimagesignature](gmagick.getimagesignature.md)(): [string](language.types.string.md)

public function [getimagetype](gmagick.getimagetype.md)(): [int](language.types.integer.md)

public function [getimageunits](gmagick.getimageunits.md)(): [int](language.types.integer.md)

public function [getimagewhitepoint](gmagick.getimagewhitepoint.md)(): [array](language.types.array.md)

public function [getimagewidth](gmagick.getimagewidth.md)(): [int](language.types.integer.md)

public function [getpackagename](gmagick.getpackagename.md)(): [string](language.types.string.md)

public function [getquantumdepth](gmagick.getquantumdepth.md)(): [array](language.types.array.md)

public function [getreleasedate](gmagick.getreleasedate.md)(): [string](language.types.string.md)

public function [getsamplingfactors](gmagick.getsamplingfactors.md)(): [array](language.types.array.md)

public function [getsize](gmagick.getsize.md)(): [array](language.types.array.md)

public function [getversion](gmagick.getversion.md)(): [array](language.types.array.md)

public function [hasnextimage](gmagick.hasnextimage.md)(): [mixed](language.types.mixed.md)

public function [haspreviousimage](gmagick.haspreviousimage.md)(): [mixed](language.types.mixed.md)

public function [implodeimage](gmagick.implodeimage.md)([float](language.types.float.md) `$radius`): [mixed](language.types.mixed.md)

public function [labelimage](gmagick.labelimage.md)([string](language.types.string.md) `$label`): [mixed](language.types.mixed.md)

public function [levelimage](gmagick.levelimage.md)(  
    [float](language.types.float.md) `$blackPoint`,  
    [float](language.types.float.md) `$gamma`,  
    [float](language.types.float.md) `$whitePoint`,  
    [int](language.types.integer.md) `$channel` = Gmagick::CHANNEL\_DEFAULT  
): [mixed](language.types.mixed.md)

public function [magnifyimage](gmagick.magnifyimage.md)(): [mixed](language.types.mixed.md)

public function [mapimage](gmagick.mapimage.md)([gmagick](class.gmagick.md) `$gmagick`, [bool](language.types.boolean.md) `$dither`): [Gmagick](class.gmagick.md)

public function [medianfilterimage](gmagick.medianfilterimage.md)([float](language.types.float.md) `$radius`): [void](language.types.void.md)

public function [minifyimage](gmagick.minifyimage.md)(): [Gmagick](class.gmagick.md)

public function [modulateimage](gmagick.modulateimage.md)([float](language.types.float.md) `$brightness`, [float](language.types.float.md) `$saturation`, [float](language.types.float.md) `$hue`): [Gmagick](class.gmagick.md)

public function [motionblurimage](gmagick.motionblurimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [float](language.types.float.md) `$angle`): [Gmagick](class.gmagick.md)

public function [newimage](gmagick.newimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [string](language.types.string.md) `$background`,  
    [string](language.types.string.md) `$format` = ?  
): [Gmagick](class.gmagick.md)

public function [nextimage](gmagick.nextimage.md)(): [bool](language.types.boolean.md)

public function [normalizeimage](gmagick.normalizeimage.md)([int](language.types.integer.md) `$channel` = ?): [Gmagick](class.gmagick.md)

public function [oilpaintimage](gmagick.oilpaintimage.md)(
[float](language.types.float.md) `$radius`
): [Gmagick](class.gmagick.md)

public function [previousimage](gmagick.previousimage.md)(): [bool](language.types.boolean.md)

public function [profileimage](gmagick.profileimage.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$profile`): [Gmagick](class.gmagick.md)

public function [quantizeimage](gmagick.quantizeimage.md)(  
    [int](language.types.integer.md) `$numColors`,  
    [int](language.types.integer.md) `$colorspace`,  
    [int](language.types.integer.md) `$treeDepth`,  
    [bool](language.types.boolean.md) `$dither`,  
    [bool](language.types.boolean.md) `$measureError`  
): [Gmagick](class.gmagick.md)

public function [quantizeimages](gmagick.quantizeimages.md)(  
    [int](language.types.integer.md) `$numColors`,  
    [int](language.types.integer.md) `$colorspace`,  
    [int](language.types.integer.md) `$treeDepth`,  
    [bool](language.types.boolean.md) `$dither`,  
    [bool](language.types.boolean.md) `$measureError`  
): [Gmagick](class.gmagick.md)

public function [queryfontmetrics](gmagick.queryfontmetrics.md)([GmagickDraw](class.gmagickdraw.md) `$draw`, [string](language.types.string.md) `$text`): [array](language.types.array.md)

public function [queryfonts](gmagick.queryfonts.md)([string](language.types.string.md) `$pattern` = "\*"): [array](language.types.array.md)

public function [queryformats](gmagick.queryformats.md)([string](language.types.string.md) `$pattern` = "\*"): [array](language.types.array.md)

public function [radialblurimage](gmagick.radialblurimage.md)([float](language.types.float.md) `$angle`, [int](language.types.integer.md) `$channel` = Gmagick::CHANNEL\_DEFAULT): [Gmagick](class.gmagick.md)

public function [raiseimage](gmagick.raiseimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [bool](language.types.boolean.md) `$raise`  
): [Gmagick](class.gmagick.md)

public function [read](gmagick.read.md)([string](language.types.string.md) `$filename`): [Gmagick](class.gmagick.md)

public function [readimage](gmagick.readimage.md)([string](language.types.string.md) `$filename`): [Gmagick](class.gmagick.md)

public function [readimageblob](gmagick.readimageblob.md)([string](language.types.string.md) `$imageContents`, [string](language.types.string.md) `$filename` = ?): [Gmagick](class.gmagick.md)

public function [readimagefile](gmagick.readimagefile.md)([resource](language.types.resource.md) `$fp`, [string](language.types.string.md) `$filename` = ?): [Gmagick](class.gmagick.md)

public function [reducenoiseimage](gmagick.reducenoiseimage.md)([float](language.types.float.md) `$radius`): [Gmagick](class.gmagick.md)

public function [removeimage](gmagick.removeimage.md)(): [Gmagick](class.gmagick.md)

public function [removeimageprofile](gmagick.removeimageprofile.md)([string](language.types.string.md) `$name`): [string](language.types.string.md)

public function [resampleimage](gmagick.resampleimage.md)(  
    [float](language.types.float.md) `$xResolution`,  
    [float](language.types.float.md) `$yResolution`,  
    [int](language.types.integer.md) `$filter`,  
    [float](language.types.float.md) `$blur`  
): [Gmagick](class.gmagick.md)

public function [resizeimage](gmagick.resizeimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$filter`,  
    [float](language.types.float.md) `$blur`,  
    [bool](language.types.boolean.md) `$fit` = **`false`**  
): [Gmagick](class.gmagick.md)

public function [rollimage](gmagick.rollimage.md)([int](language.types.integer.md) `$x`, [int](language.types.integer.md) `$y`): [Gmagick](class.gmagick.md)

public function [rotateimage](gmagick.rotateimage.md)([mixed](language.types.mixed.md) `$color`, [float](language.types.float.md) `$degrees`): [Gmagick](class.gmagick.md)

public function [scaleimage](gmagick.scaleimage.md)([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`, [bool](language.types.boolean.md) `$fit` = **`false`**): [Gmagick](class.gmagick.md)

public function [separateimagechannel](gmagick.separateimagechannel.md)([int](language.types.integer.md) `$channel`): [Gmagick](class.gmagick.md)

function [setCompressionQuality](gmagick.setcompressionquality.md)(
[int](language.types.integer.md) `$quality`
): [Gmagick](class.gmagick.md)

public function [setfilename](gmagick.setfilename.md)([string](language.types.string.md) `$filename`): [Gmagick](class.gmagick.md)

public function [setimagebackgroundcolor](gmagick.setimagebackgroundcolor.md)([GmagickPixel](class.gmagickpixel.md) `$color`): [Gmagick](class.gmagick.md)

public function [setimageblueprimary](gmagick.setimageblueprimary.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [Gmagick](class.gmagick.md)

public function [setimagebordercolor](gmagick.setimagebordercolor.md)([GmagickPixel](class.gmagickpixel.md) `$color`): [Gmagick](class.gmagick.md)

public function [setimagechanneldepth](gmagick.setimagechanneldepth.md)([int](language.types.integer.md) `$channel`, [int](language.types.integer.md) `$depth`): [Gmagick](class.gmagick.md)

public function [setimagecolorspace](gmagick.setimagecolorspace.md)([int](language.types.integer.md) `$colorspace`): [Gmagick](class.gmagick.md)

public function [setimagecompose](gmagick.setimagecompose.md)([int](language.types.integer.md) `$composite`): [Gmagick](class.gmagick.md)

public function [setimagedelay](gmagick.setimagedelay.md)([int](language.types.integer.md) `$delay`): [Gmagick](class.gmagick.md)

public function [setimagedepth](gmagick.setimagedepth.md)([int](language.types.integer.md) `$depth`): [Gmagick](class.gmagick.md)

public function [setimagedispose](gmagick.setimagedispose.md)([int](language.types.integer.md) `$disposeType`): [Gmagick](class.gmagick.md)

public function [setimagefilename](gmagick.setimagefilename.md)([string](language.types.string.md) `$filename`): [Gmagick](class.gmagick.md)

public function [setimageformat](gmagick.setimageformat.md)([string](language.types.string.md) `$imageFormat`): [Gmagick](class.gmagick.md)

public function [setimagegamma](gmagick.setimagegamma.md)([float](language.types.float.md) `$gamma`): [Gmagick](class.gmagick.md)

public function [setimagegreenprimary](gmagick.setimagegreenprimary.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [Gmagick](class.gmagick.md)

public function [setimageindex](gmagick.setimageindex.md)([int](language.types.integer.md) `$index`): [Gmagick](class.gmagick.md)

public function [setimageinterlacescheme](gmagick.setimageinterlacescheme.md)([int](language.types.integer.md) `$interlace`): [Gmagick](class.gmagick.md)

public function [setimageiterations](gmagick.setimageiterations.md)([int](language.types.integer.md) `$iterations`): [Gmagick](class.gmagick.md)

public function [setimageprofile](gmagick.setimageprofile.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$profile`): [Gmagick](class.gmagick.md)

public function [setimageredprimary](gmagick.setimageredprimary.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [Gmagick](class.gmagick.md)

public function [setimagerenderingintent](gmagick.setimagerenderingintent.md)([int](language.types.integer.md) `$rendering_intent`): [Gmagick](class.gmagick.md)

public function [setimageresolution](gmagick.setimageresolution.md)([float](language.types.float.md) `$xResolution`, [float](language.types.float.md) `$yResolution`): [Gmagick](class.gmagick.md)

public function [setimagescene](gmagick.setimagescene.md)([int](language.types.integer.md) `$scene`): [Gmagick](class.gmagick.md)

public function [setimagetype](gmagick.setimagetype.md)([int](language.types.integer.md) `$imgType`): [Gmagick](class.gmagick.md)

public function [setimageunits](gmagick.setimageunits.md)([int](language.types.integer.md) `$resolution`): [Gmagick](class.gmagick.md)

public function [setimagewhitepoint](gmagick.setimagewhitepoint.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [Gmagick](class.gmagick.md)

public function [setsamplingfactors](gmagick.setsamplingfactors.md)([array](language.types.array.md) `$factors`): [Gmagick](class.gmagick.md)

public function [setsize](gmagick.setsize.md)([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [Gmagick](class.gmagick.md)

public function [shearimage](gmagick.shearimage.md)([mixed](language.types.mixed.md) `$color`, [float](language.types.float.md) `$xShear`, [float](language.types.float.md) `$yShear`): [Gmagick](class.gmagick.md)

public function [solarizeimage](gmagick.solarizeimage.md)([int](language.types.integer.md) `$threshold`): [Gmagick](class.gmagick.md)

public function [spreadimage](gmagick.spreadimage.md)([float](language.types.float.md) `$radius`): [Gmagick](class.gmagick.md)

public function [stripimage](gmagick.stripimage.md)(): [Gmagick](class.gmagick.md)

public function [swirlimage](gmagick.swirlimage.md)([float](language.types.float.md) `$degrees`): [Gmagick](class.gmagick.md)

public function [thumbnailimage](gmagick.thumbnailimage.md)([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`, [bool](language.types.boolean.md) `$fit` = **`false`**): [Gmagick](class.gmagick.md)

public function [trimimage](gmagick.trimimage.md)([float](language.types.float.md) `$fuzz`): [Gmagick](class.gmagick.md)

public function [writeimage](gmagick.writeimage.md)([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$all_frames` = **`false`**): [Gmagick](class.gmagick.md)

}

## Índice

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
