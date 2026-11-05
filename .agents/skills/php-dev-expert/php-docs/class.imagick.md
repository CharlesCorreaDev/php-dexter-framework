# A classe Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.imagick.php

---

# A classe [Imagick](class.imagick.md)

(PECL imagick 2, PECL imagick 3)

## Resumo da classe

class **Imagick**
implements
[Iterator](class.iterator.md) {

public function [\_\_construct](imagick.construct.md)([mixed](language.types.mixed.md) `$files` = ?)

public function [adaptiveBlurImage](imagick.adaptiveblurimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [adaptiveResizeImage](imagick.adaptiveresizeimage.md)(  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`,  
    [bool](language.types.boolean.md) `$bestfit` = **`false`**,  
    [bool](language.types.boolean.md) `$legacy` = **`false`**  
): [bool](language.types.boolean.md)

public function [adaptiveSharpenImage](imagick.adaptivesharpenimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [adaptiveThresholdImage](imagick.adaptivethresholdimage.md)([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`, [int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

public function [addImage](imagick.addimage.md)([Imagick](class.imagick.md) `$source`): [bool](language.types.boolean.md)

public function [addNoiseImage](imagick.addnoiseimage.md)([int](language.types.integer.md) `$noise_type`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [affineTransformImage](imagick.affinetransformimage.md)([ImagickDraw](class.imagickdraw.md) `$matrix`): [bool](language.types.boolean.md)

public function [animateImages](imagick.animateimages.md)([string](language.types.string.md) `$x_server`): [bool](language.types.boolean.md)

public function [annotateImage](imagick.annotateimage.md)(  
    [ImagickDraw](class.imagickdraw.md) `$draw_settings`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$angle`,  
    [string](language.types.string.md) `$text`  
): [bool](language.types.boolean.md)

public function [appendImages](imagick.appendimages.md)([bool](language.types.boolean.md) `$stack`): [Imagick](class.imagick.md)

public function [autoLevelImage](imagick.autolevelimage.md)([int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [averageImages](imagick.averageimages.md)(): [Imagick](class.imagick.md)

public function [blackThresholdImage](imagick.blackthresholdimage.md)([mixed](language.types.mixed.md) `$threshold`): [bool](language.types.boolean.md)

public function [blueShiftImage](imagick.blueshiftimage.md)([float](language.types.float.md) `$factor` = 1.5): [bool](language.types.boolean.md)

public function [blurImage](imagick.blurimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = ?): [bool](language.types.boolean.md)

public function [borderImage](imagick.borderimage.md)([mixed](language.types.mixed.md) `$bordercolor`, [int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`): [bool](language.types.boolean.md)

public function [brightnessContrastImage](imagick.brightnesscontrastimage.md)([float](language.types.float.md) `$brightness`, [float](language.types.float.md) `$contrast`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [charcoalImage](imagick.charcoalimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`): [bool](language.types.boolean.md)

public function [chopImage](imagick.chopimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [clampImage](imagick.clampimage.md)([int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [clear](imagick.clear.md)(): [bool](language.types.boolean.md)

public function [clipImage](imagick.clipimage.md)(): [bool](language.types.boolean.md)

public function [clipImagePath](imagick.clipimagepath.md)([string](language.types.string.md) `$pathname`, [string](language.types.string.md) `$inside`): [void](language.types.void.md)

public function [clipPathImage](imagick.clippathimage.md)([string](language.types.string.md) `$pathname`, [bool](language.types.boolean.md) `$inside`): [bool](language.types.boolean.md)

public function [clone](imagick.clone.md)(): [Imagick](class.imagick.md)

public function [clutImage](imagick.clutimage.md)([Imagick](class.imagick.md) `$lookup_table`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [coalesceImages](imagick.coalesceimages.md)(): [Imagick](class.imagick.md)

public function [colorFloodfillImage](imagick.colorfloodfillimage.md)(  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [mixed](language.types.mixed.md) `$bordercolor`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [colorizeImage](imagick.colorizeimage.md)([mixed](language.types.mixed.md) `$colorize`, [mixed](language.types.mixed.md) `$opacity`, [bool](language.types.boolean.md) `$legacy` = **`false`**): [bool](language.types.boolean.md)

public function [colorMatrixImage](imagick.colormatriximage.md)([array](language.types.array.md) `$color_matrix`): [bool](language.types.boolean.md)

public function [combineImages](imagick.combineimages.md)([int](language.types.integer.md) `$channelType`): [Imagick](class.imagick.md)

public function [commentImage](imagick.commentimage.md)([string](language.types.string.md) `$comment`): [bool](language.types.boolean.md)

public function [compareImageChannels](imagick.compareimagechannels.md)([Imagick](class.imagick.md) `$image`, [int](language.types.integer.md) `$channelType`, [int](language.types.integer.md) `$metricType`): [array](language.types.array.md)

public function [compareImageLayers](imagick.compareimagelayers.md)([int](language.types.integer.md) `$method`): [Imagick](class.imagick.md)

public function [compareImages](imagick.compareimages.md)([Imagick](class.imagick.md) `$compare`, [int](language.types.integer.md) `$metric`): [array](language.types.array.md)

public function [compositeImage](imagick.compositeimage.md)(  
    [Imagick](class.imagick.md) `$composite_object`,  
    [int](language.types.integer.md) `$composite`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [contrastImage](imagick.contrastimage.md)([bool](language.types.boolean.md) `$sharpen`): [bool](language.types.boolean.md)

public function [contrastStretchImage](imagick.contraststretchimage.md)([float](language.types.float.md) `$black_point`, [float](language.types.float.md) `$white_point`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [convolveImage](imagick.convolveimage.md)([array](language.types.array.md) `$kernel`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [count](imagick.count.md)([int](language.types.integer.md) `$mode` = 0): [int](language.types.integer.md)

public function [cropImage](imagick.cropimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [cropThumbnailImage](imagick.cropthumbnailimage.md)([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`, [bool](language.types.boolean.md) `$legacy` = **`false`**): [bool](language.types.boolean.md)

public function [current](imagick.current.md)(): [Imagick](class.imagick.md)

public function [cycleColormapImage](imagick.cyclecolormapimage.md)([int](language.types.integer.md) `$displace`): [bool](language.types.boolean.md)

public function [decipherImage](imagick.decipherimage.md)([string](language.types.string.md) `$passphrase`): [bool](language.types.boolean.md)

public function [deconstructImages](imagick.deconstructimages.md)(): [Imagick](class.imagick.md)

public function [deleteImageArtifact](imagick.deleteimageartifact.md)([string](language.types.string.md) `$artifact`): [bool](language.types.boolean.md)

public function [deleteImageProperty](imagick.deleteimageproperty.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [deskewImage](imagick.deskewimage.md)([float](language.types.float.md) `$threshold`): [bool](language.types.boolean.md)

public function [despeckleImage](imagick.despeckleimage.md)(): [bool](language.types.boolean.md)

public function [destroy](imagick.destroy.md)(): [bool](language.types.boolean.md)

public function [displayImage](imagick.displayimage.md)([string](language.types.string.md) `$servername`): [bool](language.types.boolean.md)

public function [displayImages](imagick.displayimages.md)([string](language.types.string.md) `$servername`): [bool](language.types.boolean.md)

public function [distortImage](imagick.distortimage.md)([int](language.types.integer.md) `$method`, [array](language.types.array.md) `$arguments`, [bool](language.types.boolean.md) `$bestfit`): [bool](language.types.boolean.md)

public function [drawImage](imagick.drawimage.md)([ImagickDraw](class.imagickdraw.md) `$draw`): [bool](language.types.boolean.md)

public function [edgeImage](imagick.edgeimage.md)([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

public function [embossImage](imagick.embossimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`): [bool](language.types.boolean.md)

public function [encipherImage](imagick.encipherimage.md)([string](language.types.string.md) `$passphrase`): [bool](language.types.boolean.md)

public function [enhanceImage](imagick.enhanceimage.md)(): [bool](language.types.boolean.md)

public function [equalizeImage](imagick.equalizeimage.md)(): [bool](language.types.boolean.md)

public function [evaluateImage](imagick.evaluateimage.md)([int](language.types.integer.md) `$op`, [float](language.types.float.md) `$constant`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [exportImagePixels](imagick.exportimagepixels.md)(  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [string](language.types.string.md) `$map`,  
    [int](language.types.integer.md) `$STORAGE`  
): [array](language.types.array.md)

public function [extentImage](imagick.extentimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [filter](imagick.filter.md)([ImagickKernel](class.imagickkernel.md) `$ImagickKernel`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_UNDEFINED): [bool](language.types.boolean.md)

public function [flattenImages](imagick.flattenimages.md)(): [Imagick](class.imagick.md)

public function [flipImage](imagick.flipimage.md)(): [bool](language.types.boolean.md)

public function [floodFillPaintImage](imagick.floodfillpaintimage.md)(  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [mixed](language.types.mixed.md) `$target`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [bool](language.types.boolean.md) `$invert`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [flopImage](imagick.flopimage.md)(): [bool](language.types.boolean.md)

public function [forwardFourierTransformimage](imagick.forwardfouriertransformimage.md)([bool](language.types.boolean.md) `$magnitude`): [bool](language.types.boolean.md)

public function [frameImage](imagick.frameimage.md)(  
    [mixed](language.types.mixed.md) `$matte_color`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$inner_bevel`,  
    [int](language.types.integer.md) `$outer_bevel`  
): [bool](language.types.boolean.md)

public function [functionImage](imagick.functionimage.md)([int](language.types.integer.md) `$function`, [array](language.types.array.md) `$arguments`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [fxImage](imagick.fximage.md)([string](language.types.string.md) `$expression`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [Imagick](class.imagick.md)

public function [gammaImage](imagick.gammaimage.md)([float](language.types.float.md) `$gamma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [gaussianBlurImage](imagick.gaussianblurimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [getColorspace](imagick.getcolorspace.md)(): [int](language.types.integer.md)

public function [getCompression](imagick.getcompression.md)(): [int](language.types.integer.md)

public function [getCompressionQuality](imagick.getcompressionquality.md)(): [int](language.types.integer.md)

public static function [getCopyright](imagick.getcopyright.md)(): [string](language.types.string.md)

public function [getFilename](imagick.getfilename.md)(): [string](language.types.string.md)

public function [getFont](imagick.getfont.md)(): [string](language.types.string.md)

public function [getFormat](imagick.getformat.md)(): [string](language.types.string.md)

public function [getGravity](imagick.getgravity.md)(): [int](language.types.integer.md)

public static function [getHomeURL](imagick.gethomeurl.md)(): [string](language.types.string.md)

public function [getImage](imagick.getimage.md)(): [Imagick](class.imagick.md)

public function [getImageAlphaChannel](imagick.getimagealphachannel.md)(): [bool](language.types.boolean.md)

public function [getImageArtifact](imagick.getimageartifact.md)([string](language.types.string.md) `$artifact`): [string](language.types.string.md)

public function [getImageAttribute](imagick.getimageattribute.md)([string](language.types.string.md) `$key`): [string](language.types.string.md)

public function [getImageBackgroundColor](imagick.getimagebackgroundcolor.md)(): [ImagickPixel](class.imagickpixel.md)

public function [getImageBlob](imagick.getimageblob.md)(): [string](language.types.string.md)

public function [getImageBluePrimary](imagick.getimageblueprimary.md)(): [array](language.types.array.md)

public function [getImageBorderColor](imagick.getimagebordercolor.md)(): [ImagickPixel](class.imagickpixel.md)

public function [getImageChannelDepth](imagick.getimagechanneldepth.md)([int](language.types.integer.md) `$channel`): [int](language.types.integer.md)

public function [getImageChannelDistortion](imagick.getimagechanneldistortion.md)([Imagick](class.imagick.md) `$reference`, [int](language.types.integer.md) `$channel`, [int](language.types.integer.md) `$metric`): [float](language.types.float.md)

public function [getImageChannelDistortions](imagick.getimagechanneldistortions.md)([Imagick](class.imagick.md) `$reference`, [int](language.types.integer.md) `$metric`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [float](language.types.float.md)

public function [getImageChannelExtrema](imagick.getimagechannelextrema.md)([int](language.types.integer.md) `$channel`): [array](language.types.array.md)

public function [getImageChannelKurtosis](imagick.getimagechannelkurtosis.md)([int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [array](language.types.array.md)

public function [getImageChannelMean](imagick.getimagechannelmean.md)([int](language.types.integer.md) `$channel`): [array](language.types.array.md)

public function [getImageChannelRange](imagick.getimagechannelrange.md)([int](language.types.integer.md) `$channel`): [array](language.types.array.md)

public function [getImageChannelStatistics](imagick.getimagechannelstatistics.md)(): [array](language.types.array.md)

public function [getImageClipMask](imagick.getimageclipmask.md)(): [Imagick](class.imagick.md)

public function [getImageColormapColor](imagick.getimagecolormapcolor.md)([int](language.types.integer.md) `$index`): [ImagickPixel](class.imagickpixel.md)

public function [getImageColors](imagick.getimagecolors.md)(): [int](language.types.integer.md)

public function [getImageColorspace](imagick.getimagecolorspace.md)(): [int](language.types.integer.md)

public function [getImageCompose](imagick.getimagecompose.md)(): [int](language.types.integer.md)

public function [getImageCompression](imagick.getimagecompression.md)(): [int](language.types.integer.md)

public function [getImageCompressionQuality](imagick.getimagecompressionquality.md)(): [int](language.types.integer.md)

public function [getImageDelay](imagick.getimagedelay.md)(): [int](language.types.integer.md)

public function [getImageDepth](imagick.getimagedepth.md)(): [int](language.types.integer.md)

public function [getImageDispose](imagick.getimagedispose.md)(): [int](language.types.integer.md)

public function [getImageDistortion](imagick.getimagedistortion.md)(MagickWand `$reference`, [int](language.types.integer.md) `$metric`): [float](language.types.float.md)

public function [getImageExtrema](imagick.getimageextrema.md)(): [array](language.types.array.md)

public function [getImageFilename](imagick.getimagefilename.md)(): [string](language.types.string.md)

public function [getImageFormat](imagick.getimageformat.md)(): [string](language.types.string.md)

public function [getImageGamma](imagick.getimagegamma.md)(): [float](language.types.float.md)

public function [getImageGeometry](imagick.getimagegeometry.md)(): [array](language.types.array.md)

public function [getImageGravity](imagick.getimagegravity.md)(): [int](language.types.integer.md)

public function [getImageGreenPrimary](imagick.getimagegreenprimary.md)(): [array](language.types.array.md)

public function [getImageHeight](imagick.getimageheight.md)(): [int](language.types.integer.md)

public function [getImageHistogram](imagick.getimagehistogram.md)(): [array](language.types.array.md)

public function [getImageIndex](imagick.getimageindex.md)(): [int](language.types.integer.md)

public function [getImageInterlaceScheme](imagick.getimageinterlacescheme.md)(): [int](language.types.integer.md)

public function [getImageInterpolateMethod](imagick.getimageinterpolatemethod.md)(): [int](language.types.integer.md)

public function [getImageIterations](imagick.getimageiterations.md)(): [int](language.types.integer.md)

public function [getImageLength](imagick.getimagelength.md)(): [int](language.types.integer.md)

public function [getImageMatte](imagick.getimagematte.md)(): [bool](language.types.boolean.md)

public function [getImageMatteColor](imagick.getimagemattecolor.md)(): [ImagickPixel](class.imagickpixel.md)

public function [getImageMimeType](imagick.getimagemimetype.md)(): [string](language.types.string.md)

public function [getImageOrientation](imagick.getimageorientation.md)(): [int](language.types.integer.md)

public function [getImagePage](imagick.getimagepage.md)(): [array](language.types.array.md)

public function [getImagePixelColor](imagick.getimagepixelcolor.md)([int](language.types.integer.md) `$x`, [int](language.types.integer.md) `$y`): [ImagickPixel](class.imagickpixel.md)

public function [getImageProfile](imagick.getimageprofile.md)([string](language.types.string.md) `$name`): [string](language.types.string.md)

public function [getImageProfiles](imagick.getimageprofiles.md)([string](language.types.string.md) `$pattern` = "\*", [bool](language.types.boolean.md) `$include_values` = **`true`**): [array](language.types.array.md)

public function [getImageProperties](imagick.getimageproperties.md)([string](language.types.string.md) `$pattern` = "\*", [bool](language.types.boolean.md) `$include_values` = **`true`**): [array](language.types.array.md)

public function [getImageProperty](imagick.getimageproperty.md)([string](language.types.string.md) `$name`): [string](language.types.string.md)

public function [getImageRedPrimary](imagick.getimageredprimary.md)(): [array](language.types.array.md)

public function [getImageRegion](imagick.getimageregion.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [Imagick](class.imagick.md)

public function [getImageRenderingIntent](imagick.getimagerenderingintent.md)(): [int](language.types.integer.md)

public function [getImageResolution](imagick.getimageresolution.md)(): [array](language.types.array.md)

public function [getImagesBlob](imagick.getimagesblob.md)(): [string](language.types.string.md)

public function [getImageScene](imagick.getimagescene.md)(): [int](language.types.integer.md)

public function [getImageSignature](imagick.getimagesignature.md)(): [string](language.types.string.md)

public function [getImageSize](imagick.getimagesize.md)(): [int](language.types.integer.md)

public function [getImageTicksPerSecond](imagick.getimagetickspersecond.md)(): [int](language.types.integer.md)

public function [getImageTotalInkDensity](imagick.getimagetotalinkdensity.md)(): [float](language.types.float.md)

public function [getImageType](imagick.getimagetype.md)(): [int](language.types.integer.md)

public function [getImageUnits](imagick.getimageunits.md)(): [int](language.types.integer.md)

public function [getImageVirtualPixelMethod](imagick.getimagevirtualpixelmethod.md)(): [int](language.types.integer.md)

public function [getImageWhitePoint](imagick.getimagewhitepoint.md)(): [array](language.types.array.md)

public function [getImageWidth](imagick.getimagewidth.md)(): [int](language.types.integer.md)

public function [getInterlaceScheme](imagick.getinterlacescheme.md)(): [int](language.types.integer.md)

public function [getIteratorIndex](imagick.getiteratorindex.md)(): [int](language.types.integer.md)

public function [getNumberImages](imagick.getnumberimages.md)(): [int](language.types.integer.md)

public function [getOption](imagick.getoption.md)([string](language.types.string.md) `$key`): [string](language.types.string.md)

public static function [getPackageName](imagick.getpackagename.md)(): [string](language.types.string.md)

public function [getPage](imagick.getpage.md)(): [array](language.types.array.md)

public function [getPixelIterator](imagick.getpixeliterator.md)(): [ImagickPixelIterator](class.imagickpixeliterator.md)

public function [getPixelRegionIterator](imagick.getpixelregioniterator.md)(  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`  
): [ImagickPixelIterator](class.imagickpixeliterator.md)

public function [getPointSize](imagick.getpointsize.md)(): [float](language.types.float.md)

public static function [getQuantum](imagick.getquantum.md)(): [int](language.types.integer.md)

public static function [getQuantumDepth](imagick.getquantumdepth.md)(): [array](language.types.array.md)

public static function [getQuantumRange](imagick.getquantumrange.md)(): [array](language.types.array.md)

public static function [getRegistry](imagick.getregistry.md)([string](language.types.string.md) `$key`): [string](language.types.string.md)

public static function [getReleaseDate](imagick.getreleasedate.md)(): [string](language.types.string.md)

public static function [getResource](imagick.getresource.md)([int](language.types.integer.md) `$type`): [int](language.types.integer.md)

public static function [getResourceLimit](imagick.getresourcelimit.md)([int](language.types.integer.md) `$type`): [int](language.types.integer.md)

public function [getSamplingFactors](imagick.getsamplingfactors.md)(): [array](language.types.array.md)

public function [getSize](imagick.getsize.md)(): [array](language.types.array.md)

public function [getSizeOffset](imagick.getsizeoffset.md)(): [int](language.types.integer.md)

public static function [getVersion](imagick.getversion.md)(): [array](language.types.array.md)

public function [haldClutImage](imagick.haldclutimage.md)([Imagick](class.imagick.md) `$clut`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [hasNextImage](imagick.hasnextimage.md)(): [bool](language.types.boolean.md)

public function [hasPreviousImage](imagick.haspreviousimage.md)(): [bool](language.types.boolean.md)

public function [identifyFormat](imagick.identifyformat.md)([string](language.types.string.md) `$embedText`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [identifyImage](imagick.identifyimage.md)([bool](language.types.boolean.md) `$appendRawOutput` = **`false`**): [array](language.types.array.md)

public function [implodeImage](imagick.implodeimage.md)([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

public function [importImagePixels](imagick.importimagepixels.md)(  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [string](language.types.string.md) `$map`,  
    [int](language.types.integer.md) `$storage`,  
    [array](language.types.array.md) `$pixels`  
): [bool](language.types.boolean.md)

public function [inverseFourierTransformImage](imagick.inversefouriertransformimage.md)([Imagick](class.imagick.md) `$complement`, [bool](language.types.boolean.md) `$magnitude`): [bool](language.types.boolean.md)

public function [labelImage](imagick.labelimage.md)([string](language.types.string.md) `$label`): [bool](language.types.boolean.md)

public function [levelImage](imagick.levelimage.md)(  
    [float](language.types.float.md) `$blackPoint`,  
    [float](language.types.float.md) `$gamma`,  
    [float](language.types.float.md) `$whitePoint`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [linearStretchImage](imagick.linearstretchimage.md)([float](language.types.float.md) `$blackPoint`, [float](language.types.float.md) `$whitePoint`): [bool](language.types.boolean.md)

public function [liquidRescaleImage](imagick.liquidrescaleimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [float](language.types.float.md) `$delta_x`,  
    [float](language.types.float.md) `$rigidity`  
): [bool](language.types.boolean.md)

public static function [listRegistry](imagick.listregistry.md)(): [array](language.types.array.md)

public function [magnifyImage](imagick.magnifyimage.md)(): [bool](language.types.boolean.md)

public function [mapImage](imagick.mapimage.md)([Imagick](class.imagick.md) `$map`, [bool](language.types.boolean.md) `$dither`): [bool](language.types.boolean.md)

public function [matteFloodfillImage](imagick.mattefloodfillimage.md)(  
    [float](language.types.float.md) `$alpha`,  
    [float](language.types.float.md) `$fuzz`,  
    [mixed](language.types.mixed.md) `$bordercolor`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [medianFilterImage](imagick.medianfilterimage.md)([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

public function [mergeImageLayers](imagick.mergeimagelayers.md)([int](language.types.integer.md) `$layer_method`): [Imagick](class.imagick.md)

public function [minifyImage](imagick.minifyimage.md)(): [bool](language.types.boolean.md)

public function [modulateImage](imagick.modulateimage.md)([float](language.types.float.md) `$brightness`, [float](language.types.float.md) `$saturation`, [float](language.types.float.md) `$hue`): [bool](language.types.boolean.md)

public function [montageImage](imagick.montageimage.md)(  
    [ImagickDraw](class.imagickdraw.md) `$draw`,  
    [string](language.types.string.md) `$tile_geometry`,  
    [string](language.types.string.md) `$thumbnail_geometry`,  
    [int](language.types.integer.md) `$mode`,  
    [string](language.types.string.md) `$frame`  
): [Imagick](class.imagick.md)

public function [morphImages](imagick.morphimages.md)([int](language.types.integer.md) `$number_frames`): [Imagick](class.imagick.md)

public function [morphology](imagick.morphology.md)(  
    [int](language.types.integer.md) `$morphologyMethod`,  
    [int](language.types.integer.md) `$iterations`,  
    [ImagickKernel](class.imagickkernel.md) `$ImagickKernel`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [mosaicImages](imagick.mosaicimages.md)(): [Imagick](class.imagick.md)

public function [motionBlurImage](imagick.motionblurimage.md)(  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$sigma`,  
    [float](language.types.float.md) `$angle`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [negateImage](imagick.negateimage.md)([bool](language.types.boolean.md) `$gray`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [newImage](imagick.newimage.md)(  
    [int](language.types.integer.md) `$cols`,  
    [int](language.types.integer.md) `$rows`,  
    [mixed](language.types.mixed.md) `$background`,  
    [string](language.types.string.md) `$format` = ?  
): [bool](language.types.boolean.md)

public function [newPseudoImage](imagick.newpseudoimage.md)([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`, [string](language.types.string.md) `$pseudoString`): [bool](language.types.boolean.md)

public function [nextImage](imagick.nextimage.md)(): [bool](language.types.boolean.md)

public function [normalizeImage](imagick.normalizeimage.md)([int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [oilPaintImage](imagick.oilpaintimage.md)([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

public function [opaquePaintImage](imagick.opaquepaintimage.md)(  
    [mixed](language.types.mixed.md) `$target`,  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [bool](language.types.boolean.md) `$invert`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [optimizeImageLayers](imagick.optimizeimagelayers.md)(): [bool](language.types.boolean.md)

public function [orderedPosterizeImage](imagick.orderedposterizeimage.md)([string](language.types.string.md) `$threshold_map`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [paintFloodfillImage](imagick.paintfloodfillimage.md)(  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [mixed](language.types.mixed.md) `$bordercolor`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [paintOpaqueImage](imagick.paintopaqueimage.md)(  
    [mixed](language.types.mixed.md) `$target`,  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [paintTransparentImage](imagick.painttransparentimage.md)([mixed](language.types.mixed.md) `$target`, [float](language.types.float.md) `$alpha`, [float](language.types.float.md) `$fuzz`): [bool](language.types.boolean.md)

public function [pingImage](imagick.pingimage.md)([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public function [pingImageBlob](imagick.pingimageblob.md)([string](language.types.string.md) `$image`): [bool](language.types.boolean.md)

public function [pingImageFile](imagick.pingimagefile.md)([resource](language.types.resource.md) `$filehandle`, [string](language.types.string.md) `$fileName` = ?): [bool](language.types.boolean.md)

public function [polaroidImage](imagick.polaroidimage.md)([ImagickDraw](class.imagickdraw.md) `$properties`, [float](language.types.float.md) `$angle`): [bool](language.types.boolean.md)

public function [posterizeImage](imagick.posterizeimage.md)([int](language.types.integer.md) `$levels`, [bool](language.types.boolean.md) `$dither`): [bool](language.types.boolean.md)

public function [previewImages](imagick.previewimages.md)([int](language.types.integer.md) `$preview`): [bool](language.types.boolean.md)

public function [previousImage](imagick.previousimage.md)(): [bool](language.types.boolean.md)

public function [profileImage](imagick.profileimage.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$profile` = ?): [bool](language.types.boolean.md)

public function [quantizeImage](imagick.quantizeimage.md)(  
    [int](language.types.integer.md) `$numberColors`,  
    [int](language.types.integer.md) `$colorspace`,  
    [int](language.types.integer.md) `$treedepth`,  
    [bool](language.types.boolean.md) `$dither`,  
    [bool](language.types.boolean.md) `$measureError`  
): [bool](language.types.boolean.md)

public function [quantizeImages](imagick.quantizeimages.md)(  
    [int](language.types.integer.md) `$numberColors`,  
    [int](language.types.integer.md) `$colorspace`,  
    [int](language.types.integer.md) `$treedepth`,  
    [bool](language.types.boolean.md) `$dither`,  
    [bool](language.types.boolean.md) `$measureError`  
): [bool](language.types.boolean.md)

public function [queryFontMetrics](imagick.queryfontmetrics.md)([ImagickDraw](class.imagickdraw.md) `$properties`, [string](language.types.string.md) `$text`, [bool](language.types.boolean.md) `$multiline` = ?): [array](language.types.array.md)

public static function [queryFonts](imagick.queryfonts.md)([string](language.types.string.md) `$pattern` = "\*"): [array](language.types.array.md)

public static function [queryFormats](imagick.queryformats.md)([string](language.types.string.md) `$pattern` = "\*"): [array](language.types.array.md)

public function [radialBlurImage](imagick.radialblurimage.md)([float](language.types.float.md) `$angle`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [raiseImage](imagick.raiseimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [bool](language.types.boolean.md) `$raise`  
): [bool](language.types.boolean.md)

public function [randomThresholdImage](imagick.randomthresholdimage.md)([float](language.types.float.md) `$low`, [float](language.types.float.md) `$high`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [readImage](imagick.readimage.md)([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public function [readImageBlob](imagick.readimageblob.md)([string](language.types.string.md) `$image`, [string](language.types.string.md) `$filename` = ?): [bool](language.types.boolean.md)

public function [readImageFile](imagick.readimagefile.md)([resource](language.types.resource.md) `$filehandle`, [string](language.types.string.md) `$fileName` = **`null`**): [bool](language.types.boolean.md)

public function [readImages](imagick.readimages.md)([array](language.types.array.md) `$filenames`): [bool](language.types.boolean.md)

public function [recolorImage](imagick.recolorimage.md)([array](language.types.array.md) `$matrix`): [bool](language.types.boolean.md)

public function [reduceNoiseImage](imagick.reducenoiseimage.md)([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

public function [remapImage](imagick.remapimage.md)([Imagick](class.imagick.md) `$replacement`, [int](language.types.integer.md) `$DITHER`): [bool](language.types.boolean.md)

public function [removeImage](imagick.removeimage.md)(): [bool](language.types.boolean.md)

public function [removeImageProfile](imagick.removeimageprofile.md)([string](language.types.string.md) `$name`): [string](language.types.string.md)

public function [render](imagick.render.md)(): [bool](language.types.boolean.md)

public function [resampleImage](imagick.resampleimage.md)(  
    [float](language.types.float.md) `$x_resolution`,  
    [float](language.types.float.md) `$y_resolution`,  
    [int](language.types.integer.md) `$filter`,  
    [float](language.types.float.md) `$blur`  
): [bool](language.types.boolean.md)

public function [resetImagePage](imagick.resetimagepage.md)([string](language.types.string.md) `$page`): [bool](language.types.boolean.md)

public function [resizeImage](imagick.resizeimage.md)(  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`,  
    [int](language.types.integer.md) `$filter`,  
    [float](language.types.float.md) `$blur`,  
    [bool](language.types.boolean.md) `$bestfit` = **`false`**,  
    [bool](language.types.boolean.md) `$legacy` = **`false`**  
): [bool](language.types.boolean.md)

public function [rollImage](imagick.rollimage.md)([int](language.types.integer.md) `$x`, [int](language.types.integer.md) `$y`): [bool](language.types.boolean.md)

public function [rotateImage](imagick.rotateimage.md)([mixed](language.types.mixed.md) `$background`, [float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

public function [rotationalBlurImage](imagick.rotationalblurimage.md)([float](language.types.float.md) `$angle`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [roundCorners](imagick.roundcorners.md)(  
    [float](language.types.float.md) `$x_rounding`,  
    [float](language.types.float.md) `$y_rounding`,  
    [float](language.types.float.md) `$stroke_width` = 10,  
    [float](language.types.float.md) `$displace` = 5,  
    [float](language.types.float.md) `$size_correction` = -6  
): [bool](language.types.boolean.md)

public function [sampleImage](imagick.sampleimage.md)([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

public function [scaleImage](imagick.scaleimage.md)(  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`,  
    [bool](language.types.boolean.md) `$bestfit` = **`false`**,  
    [bool](language.types.boolean.md) `$legacy` = **`false`**  
): [bool](language.types.boolean.md)

public function [segmentImage](imagick.segmentimage.md)(  
    [int](language.types.integer.md) `$COLORSPACE`,  
    [float](language.types.float.md) `$cluster_threshold`,  
    [float](language.types.float.md) `$smooth_threshold`,  
    [bool](language.types.boolean.md) `$verbose` = **`false`**  
): [bool](language.types.boolean.md)

public function [selectiveBlurImage](imagick.selectiveblurimage.md)(  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$sigma`,  
    [float](language.types.float.md) `$threshold`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [separateImageChannel](imagick.separateimagechannel.md)([int](language.types.integer.md) `$channel`): [bool](language.types.boolean.md)

public function [sepiaToneImage](imagick.sepiatoneimage.md)([float](language.types.float.md) `$threshold`): [bool](language.types.boolean.md)

public function [setBackgroundColor](imagick.setbackgroundcolor.md)([mixed](language.types.mixed.md) `$background`): [bool](language.types.boolean.md)

public function [setColorspace](imagick.setcolorspace.md)([int](language.types.integer.md) `$COLORSPACE`): [bool](language.types.boolean.md)

public function [setCompression](imagick.setcompression.md)([int](language.types.integer.md) `$compression`): [bool](language.types.boolean.md)

public function [setCompressionQuality](imagick.setcompressionquality.md)([int](language.types.integer.md) `$quality`): [bool](language.types.boolean.md)

public function [setFilename](imagick.setfilename.md)([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public function [setFirstIterator](imagick.setfirstiterator.md)(): [bool](language.types.boolean.md)

public function [setFont](imagick.setfont.md)([string](language.types.string.md) `$font`): [bool](language.types.boolean.md)

public function [setFormat](imagick.setformat.md)([string](language.types.string.md) `$format`): [bool](language.types.boolean.md)

public function [setGravity](imagick.setgravity.md)([int](language.types.integer.md) `$gravity`): [bool](language.types.boolean.md)

public function [setImage](imagick.setimage.md)([Imagick](class.imagick.md) `$replace`): [bool](language.types.boolean.md)

public function [setImageAlphaChannel](imagick.setimagealphachannel.md)([int](language.types.integer.md) `$mode`): [bool](language.types.boolean.md)

public function [setImageArtifact](imagick.setimageartifact.md)([string](language.types.string.md) `$artifact`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [setImageAttribute](imagick.setimageattribute.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [setImageBackgroundColor](imagick.setimagebackgroundcolor.md)([mixed](language.types.mixed.md) `$background`): [bool](language.types.boolean.md)

public function [setImageBias](imagick.setimagebias.md)([float](language.types.float.md) `$bias`): [bool](language.types.boolean.md)

public function [setImageBiasQuantum](imagick.setimagebiasquantum.md)([float](language.types.float.md) `$bias`): [void](language.types.void.md)

public function [setImageBluePrimary](imagick.setimageblueprimary.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [setImageBorderColor](imagick.setimagebordercolor.md)([mixed](language.types.mixed.md) `$border`): [bool](language.types.boolean.md)

public function [setImageChannelDepth](imagick.setimagechanneldepth.md)([int](language.types.integer.md) `$channel`, [int](language.types.integer.md) `$depth`): [bool](language.types.boolean.md)

public function [setImageClipMask](imagick.setimageclipmask.md)([Imagick](class.imagick.md) `$clip_mask`): [bool](language.types.boolean.md)

public function [setImageColormapColor](imagick.setimagecolormapcolor.md)([int](language.types.integer.md) `$index`, [ImagickPixel](class.imagickpixel.md) `$color`): [bool](language.types.boolean.md)

public function [setImageColorspace](imagick.setimagecolorspace.md)([int](language.types.integer.md) `$colorspace`): [bool](language.types.boolean.md)

public function [setImageCompose](imagick.setimagecompose.md)([int](language.types.integer.md) `$compose`): [bool](language.types.boolean.md)

public function [setImageCompression](imagick.setimagecompression.md)([int](language.types.integer.md) `$compression`): [bool](language.types.boolean.md)

public function [setImageCompressionQuality](imagick.setimagecompressionquality.md)([int](language.types.integer.md) `$quality`): [bool](language.types.boolean.md)

public function [setImageDelay](imagick.setimagedelay.md)([int](language.types.integer.md) `$delay`): [bool](language.types.boolean.md)

public function [setImageDepth](imagick.setimagedepth.md)([int](language.types.integer.md) `$depth`): [bool](language.types.boolean.md)

public function [setImageDispose](imagick.setimagedispose.md)([int](language.types.integer.md) `$dispose`): [bool](language.types.boolean.md)

public function [setImageExtent](imagick.setimageextent.md)([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

public function [setImageFilename](imagick.setimagefilename.md)([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public function [setImageFormat](imagick.setimageformat.md)([string](language.types.string.md) `$format`): [bool](language.types.boolean.md)

public function [setImageGamma](imagick.setimagegamma.md)([float](language.types.float.md) `$gamma`): [bool](language.types.boolean.md)

public function [setImageGravity](imagick.setimagegravity.md)([int](language.types.integer.md) `$gravity`): [bool](language.types.boolean.md)

public function [setImageGreenPrimary](imagick.setimagegreenprimary.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [setImageIndex](imagick.setimageindex.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [setImageInterlaceScheme](imagick.setimageinterlacescheme.md)([int](language.types.integer.md) `$interlace_scheme`): [bool](language.types.boolean.md)

public function [setImageInterpolateMethod](imagick.setimageinterpolatemethod.md)([int](language.types.integer.md) `$method`): [bool](language.types.boolean.md)

public function [setImageIterations](imagick.setimageiterations.md)([int](language.types.integer.md) `$iterations`): [bool](language.types.boolean.md)

public function [setImageMatte](imagick.setimagematte.md)([bool](language.types.boolean.md) `$matte`): [bool](language.types.boolean.md)

public function [setImageMatteColor](imagick.setimagemattecolor.md)([mixed](language.types.mixed.md) `$matte`): [bool](language.types.boolean.md)

public function [setImageOpacity](imagick.setimageopacity.md)([float](language.types.float.md) `$opacity`): [bool](language.types.boolean.md)

public function [setImageOrientation](imagick.setimageorientation.md)([int](language.types.integer.md) `$orientation`): [bool](language.types.boolean.md)

public function [setImagePage](imagick.setimagepage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [setImageProfile](imagick.setimageprofile.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$profile`): [bool](language.types.boolean.md)

public function [setImageProperty](imagick.setimageproperty.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [setImageRedPrimary](imagick.setimageredprimary.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [setImageRenderingIntent](imagick.setimagerenderingintent.md)([int](language.types.integer.md) `$rendering_intent`): [bool](language.types.boolean.md)

public function [setImageResolution](imagick.setimageresolution.md)([float](language.types.float.md) `$x_resolution`, [float](language.types.float.md) `$y_resolution`): [bool](language.types.boolean.md)

public function [setImageScene](imagick.setimagescene.md)([int](language.types.integer.md) `$scene`): [bool](language.types.boolean.md)

public function [setImageTicksPerSecond](imagick.setimagetickspersecond.md)([int](language.types.integer.md) `$ticks_per_second`): [bool](language.types.boolean.md)

public function [setImageType](imagick.setimagetype.md)([int](language.types.integer.md) `$image_type`): [bool](language.types.boolean.md)

public function [setImageUnits](imagick.setimageunits.md)([int](language.types.integer.md) `$units`): [bool](language.types.boolean.md)

public function [setImageVirtualPixelMethod](imagick.setimagevirtualpixelmethod.md)([int](language.types.integer.md) `$method`): [bool](language.types.boolean.md)

public function [setImageWhitePoint](imagick.setimagewhitepoint.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [setInterlaceScheme](imagick.setinterlacescheme.md)([int](language.types.integer.md) `$interlace_scheme`): [bool](language.types.boolean.md)

public function [setIteratorIndex](imagick.setiteratorindex.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [setLastIterator](imagick.setlastiterator.md)(): [bool](language.types.boolean.md)

public function [setOption](imagick.setoption.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [setPage](imagick.setpage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [setPointSize](imagick.setpointsize.md)([float](language.types.float.md) `$point_size`): [bool](language.types.boolean.md)

public function [setProgressMonitor](imagick.setprogressmonitor.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public static function [setRegistry](imagick.setregistry.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [setResolution](imagick.setresolution.md)([float](language.types.float.md) `$x_resolution`, [float](language.types.float.md) `$y_resolution`): [bool](language.types.boolean.md)

public static function [setResourceLimit](imagick.setresourcelimit.md)([int](language.types.integer.md) `$type`, [int](language.types.integer.md) `$limit`): [bool](language.types.boolean.md)

public function [setSamplingFactors](imagick.setsamplingfactors.md)([array](language.types.array.md) `$factors`): [bool](language.types.boolean.md)

public function [setSize](imagick.setsize.md)([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

public function [setSizeOffset](imagick.setsizeoffset.md)([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`, [int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

public function [setType](imagick.settype.md)([int](language.types.integer.md) `$image_type`): [bool](language.types.boolean.md)

public function [shadeImage](imagick.shadeimage.md)([bool](language.types.boolean.md) `$gray`, [float](language.types.float.md) `$azimuth`, [float](language.types.float.md) `$elevation`): [bool](language.types.boolean.md)

public function [shadowImage](imagick.shadowimage.md)(  
    [float](language.types.float.md) `$opacity`,  
    [float](language.types.float.md) `$sigma`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [sharpenImage](imagick.sharpenimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [shaveImage](imagick.shaveimage.md)([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

public function [shearImage](imagick.shearimage.md)([mixed](language.types.mixed.md) `$background`, [float](language.types.float.md) `$x_shear`, [float](language.types.float.md) `$y_shear`): [bool](language.types.boolean.md)

public function [sigmoidalContrastImage](imagick.sigmoidalcontrastimage.md)(  
    [bool](language.types.boolean.md) `$sharpen`,  
    [float](language.types.float.md) `$alpha`,  
    [float](language.types.float.md) `$beta`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [sketchImage](imagick.sketchimage.md)([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [float](language.types.float.md) `$angle`): [bool](language.types.boolean.md)

public function [smushImages](imagick.smushimages.md)([bool](language.types.boolean.md) `$stack`, [int](language.types.integer.md) `$offset`): [Imagick](class.imagick.md)

public function [solarizeImage](imagick.solarizeimage.md)([int](language.types.integer.md) `$threshold`): [bool](language.types.boolean.md)

public function [sparseColorImage](imagick.sparsecolorimage.md)([int](language.types.integer.md) `$SPARSE_METHOD`, [array](language.types.array.md) `$arguments`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [spliceImage](imagick.spliceimage.md)(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [spreadImage](imagick.spreadimage.md)([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

public function [statisticImage](imagick.statisticimage.md)(  
    [int](language.types.integer.md) `$type`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [steganoImage](imagick.steganoimage.md)([Imagick](class.imagick.md) `$watermark_wand`, [int](language.types.integer.md) `$offset`): [Imagick](class.imagick.md)

public function [stereoImage](imagick.stereoimage.md)([Imagick](class.imagick.md) `$offset_wand`): [bool](language.types.boolean.md)

public function [stripImage](imagick.stripimage.md)(): [bool](language.types.boolean.md)

public function [subImageMatch](imagick.subimagematch.md)([Imagick](class.imagick.md) `$Imagick`, [array](language.types.array.md) `&$offset` = ?, [float](language.types.float.md) `&$similarity` = ?): [Imagick](class.imagick.md)

function [swirlImage](imagick.swirlimage.md)([float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

function [textureImage](imagick.textureimage.md)([Imagick](class.imagick.md) `$texture_wand`): [Imagick](class.imagick.md)

public function [thresholdImage](imagick.thresholdimage.md)([float](language.types.float.md) `$threshold`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

public function [thumbnailImage](imagick.thumbnailimage.md)(  
    [int](language.types.integer.md) `$columns`,  
    [int](language.types.integer.md) `$rows`,  
    [bool](language.types.boolean.md) `$bestfit` = **`false`**,  
    [bool](language.types.boolean.md) `$fill` = **`false`**,  
    [bool](language.types.boolean.md) `$legacy` = **`false`**  
): [bool](language.types.boolean.md)

public function [tintImage](imagick.tintimage.md)([mixed](language.types.mixed.md) `$tint`, [mixed](language.types.mixed.md) `$opacity`, [bool](language.types.boolean.md) `$legacy` = **`false`**): [bool](language.types.boolean.md)

public function [\_\_toString](imagick.tostring.md)(): [string](language.types.string.md)

public function [transformImage](imagick.transformimage.md)([string](language.types.string.md) `$crop`, [string](language.types.string.md) `$geometry`): [Imagick](class.imagick.md)

public function [transformImageColorspace](imagick.transformimagecolorspace.md)([int](language.types.integer.md) `$colorspace`): [bool](language.types.boolean.md)

public function [transparentPaintImage](imagick.transparentpaintimage.md)(  
    [mixed](language.types.mixed.md) `$target`,  
    [float](language.types.float.md) `$alpha`,  
    [float](language.types.float.md) `$fuzz`,  
    [bool](language.types.boolean.md) `$invert`  
): [bool](language.types.boolean.md)

public function [transposeImage](imagick.transposeimage.md)(): [bool](language.types.boolean.md)

public function [transverseImage](imagick.transverseimage.md)(): [bool](language.types.boolean.md)

public function [trimImage](imagick.trimimage.md)([float](language.types.float.md) `$fuzz`): [bool](language.types.boolean.md)

public function [uniqueImageColors](imagick.uniqueimagecolors.md)(): [bool](language.types.boolean.md)

public function [unsharpMaskImage](imagick.unsharpmaskimage.md)(  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$sigma`,  
    [float](language.types.float.md) `$amount`,  
    [float](language.types.float.md) `$threshold`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

public function [valid](imagick.valid.md)(): [bool](language.types.boolean.md)

public function [vignetteImage](imagick.vignetteimage.md)(  
    [float](language.types.float.md) `$blackPoint`,  
    [float](language.types.float.md) `$whitePoint`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

public function [waveImage](imagick.waveimage.md)([float](language.types.float.md) `$amplitude`, [float](language.types.float.md) `$length`): [bool](language.types.boolean.md)

public function [whiteThresholdImage](imagick.whitethresholdimage.md)([mixed](language.types.mixed.md) `$threshold`): [bool](language.types.boolean.md)

public function [writeImage](imagick.writeimage.md)([string](language.types.string.md) `$filename` = NULL): [bool](language.types.boolean.md)

public function [writeImageFile](imagick.writeimagefile.md)([resource](language.types.resource.md) `$filehandle`, [string](language.types.string.md) `$format` = ?): [bool](language.types.boolean.md)

public function [writeImages](imagick.writeimages.md)([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$adjoin`): [bool](language.types.boolean.md)

public function [writeImagesFile](imagick.writeimagesfile.md)([resource](language.types.resource.md) `$filehandle`, [string](language.types.string.md) `$format` = ?): [bool](language.types.boolean.md)

}

## Métodos de imagem e métodos globais

A classe Imagick tem a capacidade de armazenar e operar em múltiplas
imagens simultaneamente. Isto é conseguido através de uma pilha interna. Sempre
existe um ponteiro interno que aponta para a imagem atual. Algumas
funções operam em todas as imagens da classe Imagick, mas a maioria opera
apenas na imagem atual da pilha interna. Por convenção, os nomes
dos métodos podem conter a palavra Image para indicar que afetam apenas a imagem
atual na pilha.

## Métodos da classe

Como existem muitos métodos, aqui está uma lista útil de métodos,
reduzida para propósito geral:

**Métodos da classe por propósito**

| Efeitos de imagem | Métodos de obtenção | Métodos de definição | Ler/gravar imagens | Outros |
| --- | --- | --- | --- | --- |
| [Imagick::adaptiveBlurImage()](imagick.adaptiveblurimage.md) | [Imagick::getCompression()](imagick.getcompression.md) | [Imagick::setBackgroundColor()](imagick.setbackgroundcolor.md) | [Imagick::\_\_construct()](imagick.construct.md) | [Imagick::clear()](imagick.clear.md) |
| [Imagick::adaptiveResizeImage()](imagick.adaptiveresizeimage.md) | [Imagick::getFilename()](imagick.getfilename.md) | [Imagick::setCompressionQuality()](imagick.setcompressionquality.md) | [Imagick::addImage()](imagick.addimage.md) | [Imagick::clone()](imagick.clone.md) |
| [Imagick::adaptiveSharpenImage()](imagick.adaptivesharpenimage.md) | [Imagick::getFormat()](imagick.getformat.md) | [Imagick::setCompression()](imagick.setcompression.md) | [Imagick::appendImages()](imagick.appendimages.md) | [Imagick::current()](imagick.current.md) |
| [Imagick::adaptiveThresholdImage()](imagick.adaptivethresholdimage.md) | [Imagick::getImageBackgroundColor()](imagick.getimagebackgroundcolor.md) | [Imagick::setFilename()](imagick.setfilename.md) | [Imagick::getFilename()](imagick.getfilename.md) | [Imagick::destroy()](imagick.destroy.md) |
| [Imagick::addNoiseImage()](imagick.addnoiseimage.md) | [Imagick::getImageBlob()](imagick.getimageblob.md) | [Imagick::getImagesBlob()](imagick.getimagesblob.md) | [Imagick::setFormat()](imagick.setformat.md) | [Imagick::getFormat()](imagick.getformat.md) |
| [Imagick::affinetransformimage()](imagick.affinetransformimage.md) | [Imagick::getImageBluePrimary()](imagick.getimageblueprimary.md) | [Imagick::setImageBackgroundColor()](imagick.setimagebackgroundcolor.md) | [Imagick::getImageFilename()](imagick.getimagefilename.md) | [Imagick::getHomeURL()](imagick.gethomeurl.md) |
| [Imagick::annotateImage()](imagick.annotateimage.md) | [Imagick::getImageBorderColor()](imagick.getimagebordercolor.md) | [Imagick::setFirstIterator()](imagick.setfirstiterator.md) | [Imagick::getImageFormat()](imagick.getimageformat.md) | [Imagick::commentImage()](imagick.commentimage.md) |
| [Imagick::averageImages()](imagick.averageimages.md) | [Imagick::getImageChannelDepth()](imagick.getimagechanneldepth.md) | [Imagick::setImageBias()](imagick.setimagebias.md) | [Imagick::getImage()](imagick.getimage.md) | [Imagick::getNumberImages()](imagick.getnumberimages.md) |
| [Imagick::blackThresholdImage()](imagick.blackthresholdimage.md) | [Imagick::getImageChannelDistortion()](imagick.getimagechanneldistortion.md) | [Imagick::setImageBluePrimary()](imagick.setimageblueprimary.md) | [Imagick::setImageFilename()](imagick.setimagefilename.md) | [Imagick::getReleaseDate()](imagick.getreleasedate.md) |
| [Imagick::blurImage()](imagick.blurimage.md) | [Imagick::getImageChannelExtrema()](imagick.getimagechannelextrema.md) | [Imagick::setImageBorderColor()](imagick.setimagebordercolor.md) | [Imagick::setImageFormat()](imagick.setimageformat.md) | [Imagick::getVersion()](imagick.getversion.md) |
| [Imagick::borderImage()](imagick.borderimage.md) | [Imagick::getImageChannelMean()](imagick.getimagechannelmean.md) | [Imagick::setImageChannelDepth()](imagick.setimagechanneldepth.md) | [Imagick::readImageFile()](imagick.readimagefile.md) | [Imagick::hasNextImage()](imagick.hasnextimage.md) |
| [Imagick::charcoalImage()](imagick.charcoalimage.md) | [Imagick::getImageChannelStatistics()](imagick.getimagechannelstatistics.md) | [Imagick::setImageColormapColor()](imagick.setimagecolormapcolor.md) | [Imagick::readImage()](imagick.readimage.md) | [Imagick::hasPreviousImage()](imagick.haspreviousimage.md) |
| [Imagick::chopImage()](imagick.chopimage.md) | [Imagick::getImageColormapColor()](imagick.getimagecolormapcolor.md) | [Imagick::setImageColorSpace()](imagick.setimagecolorspace.md) | [Imagick::writeImages()](imagick.writeimages.md) | [Imagick::labelImage()](imagick.labelimage.md) |
| [Imagick::clipImage()](imagick.clipimage.md) | [Imagick::getImageColorspace()](imagick.getimagecolorspace.md) | [Imagick::setImageCompose()](imagick.setimagecompose.md) | [Imagick::writeImage()](imagick.writeimage.md) | [Imagick::newImage()](imagick.newimage.md) |
| [Imagick::clipPathImage()](imagick.clippathimage.md) | [Imagick::getImageColors()](imagick.getimagecolors.md) | [Imagick::setImageCompression()](imagick.setimagecompression.md) |  | [Imagick::newPseudoImage()](imagick.newpseudoimage.md) |
| [Imagick::coalesceImages()](imagick.coalesceimages.md) | [Imagick::getImageCompose()](imagick.getimagecompose.md) | [Imagick::setImageDelay()](imagick.setimagedelay.md) |  | [Imagick::nextImage()](imagick.nextimage.md) |
| [Imagick::colorFloodFillImage()](imagick.colorfloodfillimage.md) | [Imagick::getImageDelay()](imagick.getimagedelay.md) | [Imagick::setImageDepth()](imagick.setimagedepth.md) |  | [Imagick::pingImageBlob()](imagick.pingimageblob.md) |
| [Imagick::colorizeImage()](imagick.colorizeimage.md) | [Imagick::getImageDepth()](imagick.getimagedepth.md) | [Imagick::setImageDispose()](imagick.setimagedispose.md) |  | [Imagick::pingImageFile()](imagick.pingimagefile.md) |
| [Imagick::combineImages()](imagick.combineimages.md) | [Imagick::getImageDispose()](imagick.getimagedispose.md) | [Imagick::setImageDispose()](imagick.setimagedispose.md) |  | [Imagick::pingImage()](imagick.pingimage.md) |
| [Imagick::compareImageChannels()](imagick.compareimagechannels.md) | [Imagick::getImageDistortion()](imagick.getimagedistortion.md) | [Imagick::setImageExtent()](imagick.setimageextent.md) |  | [Imagick::previousImage()](imagick.previousimage.md) |
| [Imagick::compareImageLayers()](imagick.compareimagelayers.md) | [Imagick::getImageExtrema()](imagick.getimageextrema.md) | [Imagick::setImageFilename()](imagick.setimagefilename.md) |  | [Imagick::profileImage()](imagick.profileimage.md) |
| [Imagick::compositeImage()](imagick.compositeimage.md) | [Imagick::getImageFilename()](imagick.getimagefilename.md) | [Imagick::setImageFormat()](imagick.setimageformat.md) |  | [Imagick::queryFormats()](imagick.queryformats.md) |
| [Imagick::contrastImage()](imagick.contrastimage.md) | [Imagick::getImageFormat()](imagick.getimageformat.md) | [Imagick::setImageGamma()](imagick.setimagegamma.md) |  | [Imagick::removeImageProfile()](imagick.removeimageprofile.md) |
| [Imagick::contrastStretchImage()](imagick.contraststretchimage.md) | [Imagick::getImageGamma()](imagick.getimagegamma.md) | [Imagick::setImageGreenPrimary()](imagick.setimagegreenprimary.md) |  | [Imagick::removeImage()](imagick.removeimage.md) |
| [Imagick::convolveImage()](imagick.convolveimage.md) | [Imagick::getImageGeometry()](imagick.getimagegeometry.md) | [Imagick::setImageIndex()](imagick.setimageindex.md) |  | [Imagick::setFirstIterator()](imagick.setfirstiterator.md) |
| [Imagick::cropImage()](imagick.cropimage.md) | [Imagick::getImageGreenPrimary()](imagick.getimagegreenprimary.md) | [Imagick::setImageInterpolateMethod()](imagick.setimageinterpolatemethod.md) |  | [Imagick::setImageIndex()](imagick.setimageindex.md) |
| [Imagick::cycleColormapImage()](imagick.cyclecolormapimage.md) | [Imagick::getImageHeight()](imagick.getimageheight.md) | [Imagick::setImageIterations()](imagick.setimageiterations.md) |  | [Imagick::valid()](imagick.valid.md) |
| [Imagick::deconstructImages()](imagick.deconstructimages.md) | [Imagick::getImageHistogram()](imagick.getimagehistogram.md) | [Imagick::setImageMatteColor()](imagick.setimagemattecolor.md) |  | [Imagick::getCopyright()](imagick.getcopyright.md) |
| [Imagick::drawImage()](imagick.drawimage.md) | [Imagick::getImageIndex()](imagick.getimageindex.md) | [Imagick::setImageMatte()](imagick.setimagematte.md) |  |  |
| [Imagick::edgeImage()](imagick.edgeimage.md) | [Imagick::getImageInterlaceScheme()](imagick.getimageinterlacescheme.md) | [Imagick::setImagePage()](imagick.setimagepage.md) |  |  |
| [Imagick::embossImage()](imagick.embossimage.md) | [Imagick::getImageInterpolateMethod()](imagick.getimageinterpolatemethod.md) | [Imagick::setImageProfile()](imagick.setimageprofile.md) |  |  |
| [Imagick::enhanceImage()](imagick.enhanceimage.md) | [Imagick::getImageIterations()](imagick.getimageiterations.md) | [Imagick::setImageProperty()](imagick.setimageproperty.md) |  |  |
| [Imagick::equalizeImage()](imagick.equalizeimage.md) | [Imagick::getImageMatteColor()](imagick.getimagemattecolor.md) | [Imagick::setImageRedPrimary()](imagick.setimageredprimary.md) |  |  |
| [Imagick::evaluateImage()](imagick.evaluateimage.md) | [Imagick::getImageMatte()](imagick.getimagematte.md) | [Imagick::setImageRenderingIntent()](imagick.setimagerenderingintent.md) |  |  |
| [Imagick::flattenImages()](imagick.flattenimages.md) | [Imagick::getImagePage()](imagick.getimagepage.md) | [Imagick::setImageResolution()](imagick.setimageresolution.md) |  |  |
| [Imagick::flipImage()](imagick.flipimage.md) | [Imagick::getImagePixelColor()](imagick.getimagepixelcolor.md) | [Imagick::setImageScene()](imagick.setimagescene.md) |  |  |
| [Imagick::flopImage()](imagick.flopimage.md) | [Imagick::getImageProfile()](imagick.getimageprofile.md) | [Imagick::setImageTicksPerSecond()](imagick.setimagetickspersecond.md) |  |  |
|  | [Imagick::getImageProperty()](imagick.getimageproperty.md) | [Imagick::setImageType()](imagick.setimagetype.md) |  |  |
| [Imagick::fxImage()](imagick.fximage.md) | [Imagick::getImageRedPrimary()](imagick.getimageredprimary.md) | [Imagick::setImageUnits()](imagick.setimageunits.md) |  |  |
| [Imagick::gammaImage()](imagick.gammaimage.md) | [Imagick::getImageRegion()](imagick.getimageregion.md) | [Imagick::setImageVirtualPixelMethod()](imagick.setimagevirtualpixelmethod.md) |  |  |
| [Imagick::gaussianBlurImage()](imagick.gaussianblurimage.md) | [Imagick::getImageRenderingIntent()](imagick.getimagerenderingintent.md) | [Imagick::setImageWhitepoint()](imagick.setimagewhitepoint.md) |  |  |
| [Imagick::implodeImage()](imagick.implodeimage.md) | [Imagick::getImageResolution()](imagick.getimageresolution.md) | [Imagick::setInterlaceScheme()](imagick.setinterlacescheme.md) |  |  |
| [Imagick::levelImage()](imagick.levelimage.md) | [Imagick::getImageScene()](imagick.getimagescene.md) | [Imagick::setOption()](imagick.setoption.md) |  |  |
| [Imagick::linearStretchImage()](imagick.linearstretchimage.md) | [Imagick::getImageSignature()](imagick.getimagesignature.md) | [Imagick::setPage()](imagick.setpage.md) |  |  |
| [Imagick::magnifyImage()](imagick.magnifyimage.md) | [Imagick::getImageTicksPerSecond()](imagick.getimagetickspersecond.md) | [Imagick::setResolution()](imagick.setresolution.md) |  |  |
| [Imagick::matteFloodFillImage()](imagick.mattefloodfillimage.md) | [Imagick::getImageTotalInkDensity()](imagick.getimagetotalinkdensity.md) | [Imagick::setResourceLimit()](imagick.setresourcelimit.md) |  |  |
| [Imagick::medianFilterImage()](imagick.medianfilterimage.md) | [Imagick::getImageType()](imagick.getimagetype.md) | [Imagick::setSamplingFactors()](imagick.setsamplingfactors.md) |  |  |
| [Imagick::minifyImage()](imagick.minifyimage.md) | [Imagick::getImageUnits()](imagick.getimageunits.md) | [Imagick::setSizeOffset()](imagick.setsizeoffset.md) |  |  |
| [Imagick::modulateImage()](imagick.modulateimage.md) | [Imagick::getImageVirtualPixelMethod()](imagick.getimagevirtualpixelmethod.md) | [Imagick::setSize()](imagick.setsize.md) |  |  |
| [Imagick::montageImage()](imagick.montageimage.md) | [Imagick::getImageWhitepoint()](imagick.getimagewhitepoint.md) | [Imagick::setType()](imagick.settype.md) |  |  |
| [Imagick::morphImages()](imagick.morphimages.md) | [Imagick::getImageWidth()](imagick.getimagewidth.md) |  |  |  |
| [Imagick::mosaicImages()](imagick.mosaicimages.md) | [Imagick::getImage()](imagick.getimage.md) |  |  |  |
| [Imagick::motionBlurImage()](imagick.motionblurimage.md) | [Imagick::getInterlaceScheme()](imagick.getinterlacescheme.md) |  |  |  |
| [Imagick::negateImage()](imagick.negateimage.md) | [Imagick::getNumberImages()](imagick.getnumberimages.md) |  |  |  |
| [Imagick::normalizeImage()](imagick.normalizeimage.md) | [Imagick::getOption()](imagick.getoption.md) |  |  |  |
| [Imagick::oilPaintImage()](imagick.oilpaintimage.md) | [Imagick::getPackageName()](imagick.getpackagename.md) |  |  |  |
| [Imagick::optimizeImageLayers()](imagick.optimizeimagelayers.md) | [Imagick::getPage()](imagick.getpage.md) |  |  |  |
| [Imagick::paintOpaqueImage()](imagick.paintopaqueimage.md) | [Imagick::getPixelIterator()](imagick.getpixeliterator.md) |  |  |  |
| [Imagick::paintTransparentImage()](imagick.painttransparentimage.md) | [Imagick::getPixelRegionIterator()](imagick.getpixelregioniterator.md) |  |  |  |
| [Imagick::posterizeImage()](imagick.posterizeimage.md) | [Imagick::getQuantumDepth()](imagick.getquantumdepth.md) |  |  |  |
| [Imagick::radialBlurImage()](imagick.radialblurimage.md) | [Imagick::getQuantumRange()](imagick.getquantumrange.md) |  |  |  |
| [Imagick::raiseImage()](imagick.raiseimage.md) | [Imagick::getResourceLimit()](imagick.getresourcelimit.md) |  |  |  |
| [Imagick::randomThresholdImage()](imagick.randomthresholdimage.md) | [Imagick::getResource()](imagick.getresource.md) |  |  |  |
| [Imagick::reduceNoiseImage()](imagick.reducenoiseimage.md) | [Imagick::getSamplingFactors()](imagick.getsamplingfactors.md) |  |  |  |
| [Imagick::render()](imagick.render.md) | [Imagick::getSizeOffset()](imagick.getsizeoffset.md) |  |  |  |
| [Imagick::resampleImage()](imagick.resampleimage.md) | [Imagick::getSize()](imagick.getsize.md) |  |  |  |
| [Imagick::resizeImage()](imagick.resizeimage.md) | [Imagick::identifyImage()](imagick.identifyimage.md) |  |  |  |
| [Imagick::rollImage()](imagick.rollimage.md) | [Imagick::getImageSize()](imagick.getimagesize.md) |  |  |  |
| [Imagick::rotateImage()](imagick.rotateimage.md) |  |  |  |  |
| [Imagick::sampleImage()](imagick.sampleimage.md) |  |  |  |  |
| [Imagick::scaleImage()](imagick.scaleimage.md) |  |  |  |  |
| [Imagick::separateImageChannel()](imagick.separateimagechannel.md) |  |  |  |  |
| [Imagick::sepiaToneImage()](imagick.sepiatoneimage.md) |  |  |  |  |
| [Imagick::shadeImage()](imagick.shadeimage.md) |  |  |  |  |
| [Imagick::shadowImage()](imagick.shadowimage.md) |  |  |  |  |
| [Imagick::sharpenImage()](imagick.sharpenimage.md) |  |  |  |  |
| [Imagick::shaveImage()](imagick.shaveimage.md) |  |  |  |  |
| [Imagick::shearImage()](imagick.shearimage.md) |  |  |  |  |
| [Imagick::sigmoidalContrastImage()](imagick.sigmoidalcontrastimage.md) |  |  |  |  |
| [Imagick::sketchImage()](imagick.sketchimage.md) |  |  |  |  |
| [Imagick::solarizeImage()](imagick.solarizeimage.md) |  |  |  |  |
| [Imagick::spliceImage()](imagick.spliceimage.md) |  |  |  |  |
| [Imagick::spreadImage()](imagick.spreadimage.md) |  |  |  |  |
| [Imagick::steganoImage()](imagick.steganoimage.md) |  |  |  |  |
| [Imagick::stereoImage()](imagick.stereoimage.md) |  |  |  |  |
| [Imagick::stripImage()](imagick.stripimage.md) |  |  |  |  |
| [Imagick::swirlImage()](imagick.swirlimage.md) |  |  |  |  |
| [Imagick::textureImage()](imagick.textureimage.md) |  |  |  |  |
| [Imagick::thresholdImage()](imagick.thresholdimage.md) |  |  |  |  |
| [Imagick::thumbnailImage()](imagick.thumbnailimage.md) |  |  |  |  |
| [Imagick::tintImage()](imagick.tintimage.md) |  |  |  |  |
| [Imagick::transverseImage()](imagick.transverseimage.md) |  |  |  |  |
| [Imagick::trimImage()](imagick.trimimage.md) |  |  |  |  |
| [Imagick::uniqueImageColors()](imagick.uniqueimagecolors.md) |  |  |  |  |
| [Imagick::unsharpMaskImage()](imagick.unsharpmaskimage.md) |  |  |  |  |
| [Imagick::vignetteImage()](imagick.vignetteimage.md) |  |  |  |  |
| [Imagick::waveImage()](imagick.waveimage.md) |  |  |  |  |
| [Imagick::whiteThresholdImage()](imagick.whitethresholdimage.md) |  |  |  |  |

## Índice

- [Imagick::adaptiveBlurImage](imagick.adaptiveblurimage.md) — Adiciona filtro de desfoque adaptável à imagem
- [Imagick::adaptiveResizeImage](imagick.adaptiveresizeimage.md) — Redimensiona imagem de forma adaptativa com triangulação dependente de dados
- [Imagick::adaptiveSharpenImage](imagick.adaptivesharpenimage.md) — Aumenta a nitidez da imagem de forma adaptativa
- [Imagick::adaptiveThresholdImage](imagick.adaptivethresholdimage.md) — Seleciona um limite para cada pixel com base em uma faixa de intensidade
- [Imagick::addImage](imagick.addimage.md) — Adiciona nova imagem à lista de imagens de objetos Imagick
- [Imagick::addNoiseImage](imagick.addnoiseimage.md) — Adiciona ruído aleatório à imagem
- [Imagick::affineTransformImage](imagick.affinetransformimage.md) — Transforma uma imagem
- [Imagick::animateImages](imagick.animateimages.md) — Anima uma imagem ou imagens
- [Imagick::annotateImage](imagick.annotateimage.md) — Cria anotação em uma imagem com texto
- [Imagick::appendImages](imagick.appendimages.md) — Anexa um conjunto de imagens
- [Imagick::autoLevelImage](imagick.autolevelimage.md) — Ajusta os níveis de um canal de imagem específico
- [Imagick::averageImages](imagick.averageimages.md) — Tira a média de um conjunto de imagens
- [Imagick::blackThresholdImage](imagick.blackthresholdimage.md) — Força todos os pixels abaixo do limite para preto
- [Imagick::blueShiftImage](imagick.blueshiftimage.md) — Silencia as cores da imagem
- [Imagick::blurImage](imagick.blurimage.md) — Adiciona filtro de desfoque à imagem
- [Imagick::borderImage](imagick.borderimage.md) — Envolve a imagem com uma borda
- [Imagick::brightnessContrastImage](imagick.brightnesscontrastimage.md) — Altera o brilho e/ou contraste de uma imagem
- [Imagick::charcoalImage](imagick.charcoalimage.md) — Simula um desenho a carvão
- [Imagick::chopImage](imagick.chopimage.md) — Remove uma região de uma imagem e corta
- [Imagick::clampImage](imagick.clampimage.md) — Restringe a faixa de cores de 0 à profundidade do Quantum
- [Imagick::clear](imagick.clear.md) — Limpa todos os recursos associados ao objeto Imagick
- [Imagick::clipImage](imagick.clipimage.md) — Recorta ao longo do primeiro caminho do perfil 8BIM
- [Imagick::clipImagePath](imagick.clipimagepath.md) — Recorta ao longo dos caminhos nomeados do perfil 8BIM, se presente
- [Imagick::clipPathImage](imagick.clippathimage.md) — Recorta ao longo dos caminhos nomeados do perfil 8BIM
- [Imagick::clone](imagick.clone.md) — Faz uma cópia exata do objeto Imagick
- [Imagick::clutImage](imagick.clutimage.md) — Substitui cores na imagem
- [Imagick::coalesceImages](imagick.coalesceimages.md) — Compõe um conjunto de imagens
- [Imagick::colorFloodfillImage](imagick.colorfloodfillimage.md) — Altera o valor da cor de qualquer pixel que corresponda ao alvo
- [Imagick::colorizeImage](imagick.colorizeimage.md) — Mescla a cor de preenchimento com a imagem
- [Imagick::colorMatrixImage](imagick.colormatriximage.md) — Aplica transformação de cores a uma imagem
- [Imagick::combineImages](imagick.combineimages.md) — Combina uma ou mais imagens em uma única imagem
- [Imagick::commentImage](imagick.commentimage.md) — Adiciona um comentário à sua imagem
- [Imagick::compareImageChannels](imagick.compareimagechannels.md) — Retorna a diferença em uma ou mais imagens
- [Imagick::compareImageLayers](imagick.compareimagelayers.md) — Retorna a região delimitadora máxima entre imagens
- [Imagick::compareImages](imagick.compareimages.md) — Compara uma imagem com uma imagem reconstruída
- [Imagick::compositeImage](imagick.compositeimage.md) — Compor uma imagem em outra
- [Imagick::\_\_construct](imagick.construct.md) — O construtor Imagick
- [Imagick::contrastImage](imagick.contrastimage.md) — Altera o contraste da imagem
- [Imagick::contrastStretchImage](imagick.contraststretchimage.md) — Melhora o contraste de uma imagem colorida
- [Imagick::convolveImage](imagick.convolveimage.md) — Aplica um kernel de convolução personalizado à imagem
- [Imagick::count](imagick.count.md) — Obtém o número de imagens
- [Imagick::cropImage](imagick.cropimage.md) — Extrai uma região da imagem
- [Imagick::cropThumbnailImage](imagick.cropthumbnailimage.md) — Cria uma miniatura de recorte
- [Imagick::current](imagick.current.md) — Retorna uma referência ao objeto Imagick atual
- [Imagick::cycleColormapImage](imagick.cyclecolormapimage.md) — Desloca o mapa de cores de uma imagem
- [Imagick::decipherImage](imagick.decipherimage.md) — Decifra uma imagem
- [Imagick::deconstructImages](imagick.deconstructimages.md) — Retorna certas diferenças de pixels entre imagens
- [Imagick::deleteImageArtifact](imagick.deleteimageartifact.md) — Excluir artefato de imagem
- [Imagick::deleteImageProperty](imagick.deleteimageproperty.md) — Exclui uma propriedade de imagem
- [Imagick::deskewImage](imagick.deskewimage.md) — Remove distorção da imagem
- [Imagick::despeckleImage](imagick.despeckleimage.md) — Reduz o ruído pontilhado em uma imagem
- [Imagick::destroy](imagick.destroy.md) — Destrói o objeto Imagick
- [Imagick::displayImage](imagick.displayimage.md) — Exibe uma imagem
- [Imagick::displayImages](imagick.displayimages.md) — Exibe uma imagem ou sequência de imagens
- [Imagick::distortImage](imagick.distortimage.md) — Distorce uma imagem usando vários métodos de distorção
- [Imagick::drawImage](imagick.drawimage.md) — Renderiza o objeto ImagickDraw na imagem atual
- [Imagick::edgeImage](imagick.edgeimage.md) — Melhora as bordas da imagem
- [Imagick::embossImage](imagick.embossimage.md) — Retorna uma imagem em tons de cinza com efeito tridimensional
- [Imagick::encipherImage](imagick.encipherimage.md) — Cifra uma imagem
- [Imagick::enhanceImage](imagick.enhanceimage.md) — Melhora a qualidade de uma imagem com ruído
- [Imagick::equalizeImage](imagick.equalizeimage.md) — Equaliza o histograma da imagem
- [Imagick::evaluateImage](imagick.evaluateimage.md) — Aplica uma expressão a uma imagem
- [Imagick::exportImagePixels](imagick.exportimagepixels.md) — Exporta os pixels da imagem não processada
- [Imagick::extentImage](imagick.extentimage.md) — Define tamanho da imagem
- [Imagick::filter](imagick.filter.md) — Aplica um kernel de convolução personalizado à imagem
- [Imagick::flattenImages](imagick.flattenimages.md) — Mescla uma sequência de imagens
- [Imagick::flipImage](imagick.flipimage.md) — Cria uma imagem espelhada vertical
- [Imagick::floodFillPaintImage](imagick.floodfillpaintimage.md) — Altera o valor da cor de qualquer pixel que corresponda ao alvo
- [Imagick::flopImage](imagick.flopimage.md) — Cria uma imagem espelhada horizontal
- [Imagick::forwardFourierTransformImage](imagick.forwardfouriertransformimage.md) — Implementa a transformada discreta de Fourier (DFT)
- [Imagick::frameImage](imagick.frameimage.md) — Adiciona uma borda tridimensional simulada
- [Imagick::functionImage](imagick.functionimage.md) — Aplica uma função na imagem
- [Imagick::fxImage](imagick.fximage.md) — Avalia uma expressão para cada pixel da imagem
- [Imagick::gammaImage](imagick.gammaimage.md) — Corrige o gama de uma imagem
- [Imagick::gaussianBlurImage](imagick.gaussianblurimage.md) — Desfoca uma imagem
- [Imagick::getColorspace](imagick.getcolorspace.md) — Obtém o espaço de cores
- [Imagick::getCompression](imagick.getcompression.md) — Obtém o tipo de compactação do objeto
- [Imagick::getCompressionQuality](imagick.getcompressionquality.md) — Obtém a qualidade de compactação do objeto
- [Imagick::getCopyright](imagick.getcopyright.md) — Retorna os direitos autorais da API ImageMagick como uma string
- [Imagick::getFilename](imagick.getfilename.md) — Obtém o nome do arquivo associado a uma sequência de imagens
- [Imagick::getFont](imagick.getfont.md) — Obtem a fonte
- [Imagick::getFormat](imagick.getformat.md) — Retorna o formato do objeto Imagick
- [Imagick::getGravity](imagick.getgravity.md) — Obtém a gravidade
- [Imagick::getHomeURL](imagick.gethomeurl.md) — Retorna o URL da página do ImageMagick
- [Imagick::getImage](imagick.getimage.md) — Retorna um novo objeto Imagick
- [Imagick::getImageAlphaChannel](imagick.getimagealphachannel.md) — Verifica se a imagem tem um canal alfa
- [Imagick::getImageArtifact](imagick.getimageartifact.md) — Obtém artefato da imagem
- [Imagick::getImageAttribute](imagick.getimageattribute.md) — Retorna um atributo nomeado
- [Imagick::getImageBackgroundColor](imagick.getimagebackgroundcolor.md) — Retorna a cor de fundo a imagem
- [Imagick::getImageBlob](imagick.getimageblob.md) — Retorna a sequência de imagem como um BLOB
- [Imagick::getImageBluePrimary](imagick.getimageblueprimary.md) — Retorna o ponto primário azul da cromaticidade
- [Imagick::getImageBorderColor](imagick.getimagebordercolor.md) — Retorna a cor da borda da imagem
- [Imagick::getImageChannelDepth](imagick.getimagechanneldepth.md) — Obtém a profundidade de um canal de imagem específico
- [Imagick::getImageChannelDistortion](imagick.getimagechanneldistortion.md) — Compara canais de uma imagem com uma imagem reconstruída
- [Imagick::getImageChannelDistortions](imagick.getimagechanneldistortions.md) — Obtém distorções de canal
- [Imagick::getImageChannelExtrema](imagick.getimagechannelextrema.md) — Obtém os extremos de um ou mais canais de imagem
- [Imagick::getImageChannelKurtosis](imagick.getimagechannelkurtosis.md) — Obtenha a curtose e a assimetria de um canal específico
- [Imagick::getImageChannelMean](imagick.getimagechannelmean.md) — Obtém a média e o desvio padrão
- [Imagick::getImageChannelRange](imagick.getimagechannelrange.md) — Obtém o intervalo do canal
- [Imagick::getImageChannelStatistics](imagick.getimagechannelstatistics.md) — Retorna estatísticas para cada canal na imagem
- [Imagick::getImageClipMask](imagick.getimageclipmask.md) — Obtém a máscara de recorte da imagem
- [Imagick::getImageColormapColor](imagick.getimagecolormapcolor.md) — Retorna a cor do índice especificado do mapa de cores
- [Imagick::getImageColors](imagick.getimagecolors.md) — Obtém o número de cores únicas na imagem
- [Imagick::getImageColorspace](imagick.getimagecolorspace.md) — Obtém o espaço de cores da imagem
- [Imagick::getImageCompose](imagick.getimagecompose.md) — Retorna o operador de composição associado à imagem
- [Imagick::getImageCompression](imagick.getimagecompression.md) — Obtém o tipo de compactação da imagem atual
- [Imagick::getImageCompressionQuality](imagick.getimagecompressionquality.md) — Obtém a qualidade de compressão da imagem atual
- [Imagick::getImageDelay](imagick.getimagedelay.md) — Obtém o atraso da imagem
- [Imagick::getImageDepth](imagick.getimagedepth.md) — Obtém a profundidade da imagem
- [Imagick::getImageDispose](imagick.getimagedispose.md) — Obtém o método de descarte de imagem
- [Imagick::getImageDistortion](imagick.getimagedistortion.md) — Compara uma imagem com uma imagem reconstruída
- [Imagick::getImageExtrema](imagick.getimageextrema.md) — Obtém os extremos da imagem
- [Imagick::getImageFilename](imagick.getimagefilename.md) — Retorna o nome do arquivo de uma imagem específica em uma sequência
- [Imagick::getImageFormat](imagick.getimageformat.md) — Retorna o formato de uma imagem específica em uma sequência
- [Imagick::getImageGamma](imagick.getimagegamma.md) — Obtém o gama da imagem
- [Imagick::getImageGeometry](imagick.getimagegeometry.md) — Obtém a largura e a altura como um array associativo
- [Imagick::getImageGravity](imagick.getimagegravity.md) — Obtém a gravidade da imagem
- [Imagick::getImageGreenPrimary](imagick.getimagegreenprimary.md) — Retorna o ponto primário verde da cromaticidade
- [Imagick::getImageHeight](imagick.getimageheight.md) — Retorna a altura da imagem
- [Imagick::getImageHistogram](imagick.getimagehistogram.md) — Obtém o histograma da imagem
- [Imagick::getImageIndex](imagick.getimageindex.md) — Obtém o índice da imagem ativa atual
- [Imagick::getImageInterlaceScheme](imagick.getimageinterlacescheme.md) — Obtém o esquema de entrelaçamento da imagem
- [Imagick::getImageInterpolateMethod](imagick.getimageinterpolatemethod.md) — Retorna o método de interpolação
- [Imagick::getImageIterations](imagick.getimageiterations.md) — Obtém as iterações da imagem
- [Imagick::getImageLength](imagick.getimagelength.md) — Retorna o comprimento da imagem em bytes
- [Imagick::getImageMatte](imagick.getimagematte.md) — Informa se a imagem tem um canal fosco
- [Imagick::getImageMatteColor](imagick.getimagemattecolor.md) — Retorna a cor fosca da imagem
- [Imagick::getImageMimeType](imagick.getimagemimetype.md) — Retorna o tipo de mídia da imagem
- [Imagick::getImageOrientation](imagick.getimageorientation.md) — Obtém a orientação da imagem
- [Imagick::getImagePage](imagick.getimagepage.md) — Retorna a geometria da página
- [Imagick::getImagePixelColor](imagick.getimagepixelcolor.md) — Retorna a cor do pixel especificado
- [Imagick::getImageProfile](imagick.getimageprofile.md) — Retorna o perfil nomeado de imagem
- [Imagick::getImageProfiles](imagick.getimageprofiles.md) — Retorna os perfis de imagem
- [Imagick::getImageProperties](imagick.getimageproperties.md) — Retorna as propriedades da imagem
- [Imagick::getImageProperty](imagick.getimageproperty.md) — Retorna a propriedade nomeada da imagem
- [Imagick::getImageRedPrimary](imagick.getimageredprimary.md) — Retorna o ponto primário vermelho da cromaticidade
- [Imagick::getImageRegion](imagick.getimageregion.md) — Extrai uma região da imagem
- [Imagick::getImageRenderingIntent](imagick.getimagerenderingintent.md) — Obtém a intenção de renderização da imagem
- [Imagick::getImageResolution](imagick.getimageresolution.md) — Obtém a resolução X e Y da imagem
- [Imagick::getImagesBlob](imagick.getimagesblob.md) — Retorna todas as sequências de imagens como um BLOB
- [Imagick::getImageScene](imagick.getimagescene.md) — Obtém a cena da imagem
- [Imagick::getImageSignature](imagick.getimagesignature.md) — Gera um resumo da mensagem SHA-256
- [Imagick::getImageSize](imagick.getimagesize.md) — Retorna o comprimento da imagem em bytes
- [Imagick::getImageTicksPerSecond](imagick.getimagetickspersecond.md) — Obtém os tiques por segundo da imagem
- [Imagick::getImageTotalInkDensity](imagick.getimagetotalinkdensity.md) — Obtém a densidade total de tinta da imagem
- [Imagick::getImageType](imagick.getimagetype.md) — Obtém o tipo potencial da imagem
- [Imagick::getImageUnits](imagick.getimageunits.md) — Obtém as unidades de resolução da imagem
- [Imagick::getImageVirtualPixelMethod](imagick.getimagevirtualpixelmethod.md) — Retorna o método do pixel virtual
- [Imagick::getImageWhitePoint](imagick.getimagewhitepoint.md) — Retorna o ponto branco da cromaticidade
- [Imagick::getImageWidth](imagick.getimagewidth.md) — Retorna a largura da imagem
- [Imagick::getInterlaceScheme](imagick.getinterlacescheme.md) — Obtém o esquema de entrelaçamento do objeto
- [Imagick::getIteratorIndex](imagick.getiteratorindex.md) — Obtém o índice da imagem ativa atual
- [Imagick::getNumberImages](imagick.getnumberimages.md) — Retorna o número de imagens no objeto
- [Imagick::getOption](imagick.getoption.md) — Retorna um valor associado à chave especificada
- [Imagick::getPackageName](imagick.getpackagename.md) — Retorna o nome do pacote ImageMagick
- [Imagick::getPage](imagick.getpage.md) — Retorna a geometria da página
- [Imagick::getPixelIterator](imagick.getpixeliterator.md) — Retorna um MagickPixelIterator
- [Imagick::getPixelRegionIterator](imagick.getpixelregioniterator.md) — Obtém um ImagickPixelIterator para uma seção de imagem
- [Imagick::getPointSize](imagick.getpointsize.md) — Obtém o tamanho do ponto
- [Imagick::getQuantum](imagick.getquantum.md) — Retorna o intervalo Quantum do Imagick
- [Imagick::getQuantumDepth](imagick.getquantumdepth.md) — Obtém a profundidade Quantum
- [Imagick::getQuantumRange](imagick.getquantumrange.md) — Retorna o intervalo Quantum do Imagick
- [Imagick::getRegistry](imagick.getregistry.md) — Obtém uma entrada StringRegistry
- [Imagick::getReleaseDate](imagick.getreleasedate.md) — Retorna a data da versão do ImageMagick
- [Imagick::getResource](imagick.getresource.md) — Retorna o uso de memória do recurso especificado
- [Imagick::getResourceLimit](imagick.getresourcelimit.md) — Retorna o limite de recursos especificado
- [Imagick::getSamplingFactors](imagick.getsamplingfactors.md) — Obtém o fator de amostragem horizontal e vertical
- [Imagick::getSize](imagick.getsize.md) — Retorna o tamanho associado ao objeto Imagick
- [Imagick::getSizeOffset](imagick.getsizeoffset.md) — Retorna o deslocamento de tamanho
- [Imagick::getVersion](imagick.getversion.md) — Retorna a versão da API ImageMagick
- [Imagick::haldClutImage](imagick.haldclutimage.md) — Substitui cores na imagem
- [Imagick::hasNextImage](imagick.hasnextimage.md) — Verifica se o objeto possui mais imagens
- [Imagick::hasPreviousImage](imagick.haspreviousimage.md) — Verifica se o objeto possui uma imagem anterior
- [Imagick::identifyFormat](imagick.identifyformat.md) — Formata uma string com detalhes da imagem
- [Imagick::identifyImage](imagick.identifyimage.md) — Identifica uma imagem e busca atributos
- [Imagick::implodeImage](imagick.implodeimage.md) — Cria uma nova imagem como cópia
- [Imagick::importImagePixels](imagick.importimagepixels.md) — Importa pixels de imagem
- [Imagick::inverseFourierTransformImage](imagick.inversefouriertransformimage.md) — Implementa a transformada discreta inversa de Fourier (DFT)
- [Imagick::labelImage](imagick.labelimage.md) — Adiciona um rótulo a uma imagem
- [Imagick::levelImage](imagick.levelimage.md) — Ajusta os níveis de uma imagem
- [Imagick::linearStretchImage](imagick.linearstretchimage.md) — Estica com saturação a intensidade da imagem
- [Imagick::liquidRescaleImage](imagick.liquidrescaleimage.md) — Anima uma imagem ou imagens
- [Imagick::listRegistry](imagick.listregistry.md) — Lista todas as configurações do registro
- [Imagick::magnifyImage](imagick.magnifyimage.md) — Dimensiona uma imagem proporcionalmente 2x
- [Imagick::mapImage](imagick.mapimage.md) — Substitui as cores de uma imagem pela cor mais próxima de uma imagem de referência
- [Imagick::matteFloodfillImage](imagick.mattefloodfillimage.md) — Altera o valor de transparência de uma cor
- [Imagick::medianFilterImage](imagick.medianfilterimage.md) — Aplica um filtro digital
- [Imagick::mergeImageLayers](imagick.mergeimagelayers.md) — Mescla camadas de imagem
- [Imagick::minifyImage](imagick.minifyimage.md) — Dimensiona uma imagem proporcionalmente à metade do seu tamanho
- [Imagick::modulateImage](imagick.modulateimage.md) — Controle brilho, saturação e matiz
- [Imagick::montageImage](imagick.montageimage.md) — Cria uma imagem composta
- [Imagick::morphImages](imagick.morphimages.md) — Transforma um conjunto de imagens
- [Imagick::morphology](imagick.morphology.md) — Aplica um kernel fornecido pelo usuário à imagem de acordo com o método de morfologia fornecido
- [Imagick::mosaicImages](imagick.mosaicimages.md) — Forma um mosaico a partir de imagens
- [Imagick::motionBlurImage](imagick.motionblurimage.md) — Simula desfoque de movimento
- [Imagick::negateImage](imagick.negateimage.md) — Negativa as cores na imagem de referência
- [Imagick::newImage](imagick.newimage.md) — Cria uma nova imagem
- [Imagick::newPseudoImage](imagick.newpseudoimage.md) — Cria uma nova imagem
- [Imagick::nextImage](imagick.nextimage.md) — Passa para a próxima imagem
- [Imagick::normalizeImage](imagick.normalizeimage.md) — Melhora o contraste de uma imagem colorida
- [Imagick::oilPaintImage](imagick.oilpaintimage.md) — Simula uma pintura a óleo
- [Imagick::opaquePaintImage](imagick.opaquepaintimage.md) — Altera o valor da cor de qualquer pixel que corresponda ao alvo
- [Imagick::optimizeImageLayers](imagick.optimizeimagelayers.md) — Remove partes repetidas de imagens para otimizar
- [Imagick::orderedPosterizeImage](imagick.orderedposterizeimage.md) — Executa um pontilhamento ordenado
- [Imagick::paintFloodfillImage](imagick.paintfloodfillimage.md) — Altera o valor da cor de qualquer pixel que corresponda ao alvo
- [Imagick::paintOpaqueImage](imagick.paintopaqueimage.md) — Altera qualquer pixel que corresponda à cor
- [Imagick::paintTransparentImage](imagick.painttransparentimage.md) — Altera qualquer pixel que corresponda à cor definida pelo preenchimento
- [Imagick::pingImage](imagick.pingimage.md) — Busca atributos básicos sobre a imagem
- [Imagick::pingImageBlob](imagick.pingimageblob.md) — Busca atributos rapidamente
- [Imagick::pingImageFile](imagick.pingimagefile.md) — Obtém atributos básicos de imagem de maneira leve
- [Imagick::polaroidImage](imagick.polaroidimage.md) — Simula uma imagem Polaroid
- [Imagick::posterizeImage](imagick.posterizeimage.md) — Reduz a imagem a um número limitado de níveis de cor
- [Imagick::previewImages](imagick.previewimages.md) — Identifica rapidamente os parâmetros apropriados para processamento de imagem
- [Imagick::previousImage](imagick.previousimage.md) — Passa para a imagem anterior no objeto
- [Imagick::profileImage](imagick.profileimage.md) — Adiciona ou remove um perfil de uma imagem
- [Imagick::quantizeImage](imagick.quantizeimage.md) — Analisa as cores dentro de uma imagem de referência
- [Imagick::quantizeImages](imagick.quantizeimages.md) — Analisa as cores dentro de uma sequência de imagens
- [Imagick::queryFontMetrics](imagick.queryfontmetrics.md) — Retorna um array representando as métricas da fonte
- [Imagick::queryFonts](imagick.queryfonts.md) — Retorna as fontes configuradas
- [Imagick::queryFormats](imagick.queryformats.md) — Retorna formatos suportados pelo Imagick
- [Imagick::radialBlurImage](imagick.radialblurimage.md) — Desfoca uma imagem de forma radial
- [Imagick::raiseImage](imagick.raiseimage.md) — Cria um efeito simulado de botão 3D
- [Imagick::randomThresholdImage](imagick.randomthresholdimage.md) — Cria uma imagem de alto contraste e duas cores
- [Imagick::readImage](imagick.readimage.md) — Lê imagem de um arquivo
- [Imagick::readImageBlob](imagick.readimageblob.md) — Lê imagem de uma string binária
- [Imagick::readImageFile](imagick.readimagefile.md) — Lê imagem a partir de um descritor de arquivo
- [Imagick::readimages](imagick.readimages.md) — Lê imagens de um array de arquivos
- [Imagick::recolorImage](imagick.recolorimage.md) — Recolore imagem
- [Imagick::reduceNoiseImage](imagick.reducenoiseimage.md) — Suaviza os contornos de uma imagem
- [Imagick::remapImage](imagick.remapimage.md) — Remapeia as cores da imagem
- [Imagick::removeImage](imagick.removeimage.md) — Remove uma imagem da lista de imagens
- [Imagick::removeImageProfile](imagick.removeimageprofile.md) — Remove o perfil de imagem nomeado e o retorna
- [Imagick::render](imagick.render.md) — Renderiza todos os comandos de desenho anteriores
- [Imagick::resampleImage](imagick.resampleimage.md) — Reamostra imagem para a resolução desejada
- [Imagick::resetImagePage](imagick.resetimagepage.md) — Redefine página de imagem
- [Imagick::resizeImage](imagick.resizeimage.md) — Dimensiona uma imagem
- [Imagick::rollImage](imagick.rollimage.md) — Desloca uma imagem
- [Imagick::rotateImage](imagick.rotateimage.md) — Rotaciona uma imagem
- [Imagick::rotationalBlurImage](imagick.rotationalblurimage.md) — Desfoca uma imagem de forma rotacional
- [Imagick::roundCorners](imagick.roundcorners.md) — Arredonda os cantos da imagem
- [Imagick::sampleImage](imagick.sampleimage.md) — Dimensiona uma imagem com amostragem de pixels
- [Imagick::scaleImage](imagick.scaleimage.md) — Dimensiona o tamanho de uma imagem
- [Imagick::segmentImage](imagick.segmentimage.md) — Segmenta uma imagem
- [Imagick::selectiveBlurImage](imagick.selectiveblurimage.md) — Desfocar seletivamente uma imagem dentro de um limite de contraste
- [Imagick::separateImageChannel](imagick.separateimagechannel.md) — Separa um canal da imagem
- [Imagick::sepiaToneImage](imagick.sepiatoneimage.md) — Aplica tons de sépia em uma imagem
- [Imagick::setBackgroundColor](imagick.setbackgroundcolor.md) — Define a cor de fundo padrão do objeto
- [Imagick::setColorspace](imagick.setcolorspace.md) — Define espaço de cores
- [Imagick::setCompression](imagick.setcompression.md) — Define o tipo de compactação padrão do objeto
- [Imagick::setCompressionQuality](imagick.setcompressionquality.md) — Define a qualidade de compactação padrão do objeto
- [Imagick::setFilename](imagick.setfilename.md) — Define o nome do arquivo antes de ler ou gravar a imagem
- [Imagick::setFirstIterator](imagick.setfirstiterator.md) — Define o iterador Imagick para a primeira imagem
- [Imagick::setFont](imagick.setfont.md) — Define a fonte
- [Imagick::setFormat](imagick.setformat.md) — Define o formato do objeto Imagick
- [Imagick::setGravity](imagick.setgravity.md) — Define a gravidade
- [Imagick::setImage](imagick.setimage.md) — Substitui imagem no objeto
- [Imagick::setImageAlphaChannel](imagick.setimagealphachannel.md) — Define o canal alfa da imagem
- [Imagick::setImageArtifact](imagick.setimageartifact.md) — Definir artefato de imagem
- [Imagick::setImageAttribute](imagick.setimageattribute.md) — Define um atributo de imagem
- [Imagick::setImageBackgroundColor](imagick.setimagebackgroundcolor.md) — Define a cor de fundo da imagem
- [Imagick::setImageBias](imagick.setimagebias.md) — Define o ajuste (bias) da imagem para qualquer método que faça convolução em uma imagem
- [Imagick::setImageBiasQuantum](imagick.setimagebiasquantum.md) — Define o ajuste (bias) da imagem
- [Imagick::setImageBluePrimary](imagick.setimageblueprimary.md) — Define o ponto primário azul da cromaticidade da imagem
- [Imagick::setImageBorderColor](imagick.setimagebordercolor.md) — Define a cor da borda da imagem
- [Imagick::setImageChannelDepth](imagick.setimagechanneldepth.md) — Define a profundidade de um canal de imagem específico
- [Imagick::setImageClipMask](imagick.setimageclipmask.md) — Define a máscara de recorte da imagem
- [Imagick::setImageColormapColor](imagick.setimagecolormapcolor.md) — Define a cor do índice do mapa de cores especificado
- [Imagick::setImageColorspace](imagick.setimagecolorspace.md) — Define o espaço de cores da imagem
- [Imagick::setImageCompose](imagick.setimagecompose.md) — Define o operador de composição de imagem
- [Imagick::setImageCompression](imagick.setimagecompression.md) — Define a compactação da imagem
- [Imagick::setImageCompressionQuality](imagick.setimagecompressionquality.md) — Define a qualidade de compactação da imagem
- [Imagick::setImageDelay](imagick.setimagedelay.md) — Define o atraso da imagem
- [Imagick::setImageDepth](imagick.setimagedepth.md) — Define a profundidade da imagem
- [Imagick::setImageDispose](imagick.setimagedispose.md) — Define o método de descarte de imagem
- [Imagick::setImageExtent](imagick.setimageextent.md) — Define o tamanho da imagem
- [Imagick::setImageFilename](imagick.setimagefilename.md) — Define o nome do arquivo de uma imagem específica
- [Imagick::setImageFormat](imagick.setimageformat.md) — Define o formato de uma imagem específica
- [Imagick::setImageGamma](imagick.setimagegamma.md) — Define o gama da imagem
- [Imagick::setImageGravity](imagick.setimagegravity.md) — Define a gravidade da imagem
- [Imagick::setImageGreenPrimary](imagick.setimagegreenprimary.md) — Define o ponto primário verde da cromaticidade da imagem
- [Imagick::setImageIndex](imagick.setimageindex.md) — Define a posição do iterador
- [Imagick::setImageInterlaceScheme](imagick.setimageinterlacescheme.md) — Define a compactação da imagem
- [Imagick::setImageInterpolateMethod](imagick.setimageinterpolatemethod.md) — Define o método de interpolação de pixel da imagem.
- [Imagick::setImageIterations](imagick.setimageiterations.md) — Define as iterações da imagem
- [Imagick::setImageMatte](imagick.setimagematte.md) — Define o canal fosco da imagem
- [Imagick::setImageMatteColor](imagick.setimagemattecolor.md) — Define a cor fosca da imagem
- [Imagick::setImageOpacity](imagick.setimageopacity.md) — Define o nível de opacidade da imagem
- [Imagick::setImageOrientation](imagick.setimageorientation.md) — Define a orientação da imagem
- [Imagick::setImagePage](imagick.setimagepage.md) — Define a geometria da página da imagem
- [Imagick::setImageProfile](imagick.setimageprofile.md) — Adiciona um perfil nomeado ao objeto Imagick
- [Imagick::setImageProperty](imagick.setimageproperty.md) — Define uma propriedade de imagem
- [Imagick::setImageRedPrimary](imagick.setimageredprimary.md) — Define o ponto primário vermelho da cromaticidade da imagem
- [Imagick::setImageRenderingIntent](imagick.setimagerenderingintent.md) — Define a intenção de renderização da imagem
- [Imagick::setImageResolution](imagick.setimageresolution.md) — Define a resolução da imagem
- [Imagick::setImageScene](imagick.setimagescene.md) — Define a cena da imagem
- [Imagick::setImageTicksPerSecond](imagick.setimagetickspersecond.md) — Define os tiques por segundo da imagem
- [Imagick::setImageType](imagick.setimagetype.md) — Define o tipo de imagem
- [Imagick::setImageUnits](imagick.setimageunits.md) — Define as unidades de resolução da imagem
- [Imagick::setImageVirtualPixelMethod](imagick.setimagevirtualpixelmethod.md) — Define o método de pixel virtual da imagem
- [Imagick::setImageWhitePoint](imagick.setimagewhitepoint.md) — Define o ponto branco da cromaticidade da imagem
- [Imagick::setInterlaceScheme](imagick.setinterlacescheme.md) — Define o esquema de entrelaçamento da imagem
- [Imagick::setIteratorIndex](imagick.setiteratorindex.md) — Define a posição do iterador
- [Imagick::setLastIterator](imagick.setlastiterator.md) — Define o iterador Imagick para a última imagem
- [Imagick::setOption](imagick.setoption.md) — Define uma opção
- [Imagick::setPage](imagick.setpage.md) — Define a geometria da página do objeto Imagick
- [Imagick::setPointSize](imagick.setpointsize.md) — Define o tamanho em pontos
- [Imagick::setProgressMonitor](imagick.setprogressmonitor.md) — Define uma função de retorno a ser chamada durante o processamento
- [Imagick::setRegistry](imagick.setregistry.md) — Define a chave nomeada do registro do ImageMagick para um valor
- [Imagick::setResolution](imagick.setresolution.md) — Define a resolução da imagem
- [Imagick::setResourceLimit](imagick.setresourcelimit.md) — Define o limite para um recurso específico
- [Imagick::setSamplingFactors](imagick.setsamplingfactors.md) — Define os fatores de amostragem da imagem
- [Imagick::setSize](imagick.setsize.md) — Define o tamanho do objeto Imagick
- [Imagick::setSizeOffset](imagick.setsizeoffset.md) — Define o tamanho e o deslocamento do objeto Imagick
- [Imagick::setType](imagick.settype.md) — Define o atributo de tipo de imagem
- [Imagick::shadeImage](imagick.shadeimage.md) — Cria um efeito 3D
- [Imagick::shadowImage](imagick.shadowimage.md) — Simula uma sombra de imagem
- [Imagick::sharpenImage](imagick.sharpenimage.md) — Torna uma imagem mais nítida
- [Imagick::shaveImage](imagick.shaveimage.md) — Raspa pixels das bordas da imagem
- [Imagick::shearImage](imagick.shearimage.md) — Cria um paralelogramo
- [Imagick::sigmoidalContrastImage](imagick.sigmoidalcontrastimage.md) — Ajusta o contraste de uma imagem
- [Imagick::sketchImage](imagick.sketchimage.md) — Simula um esboço a lápis
- [Imagick::smushImages](imagick.smushimages.md) — Agrupa todas as imagens do ponteiro da imagem atual até o final da lista de imagens
- [Imagick::solarizeImage](imagick.solarizeimage.md) — Aplica um efeito solarizante à imagem
- [Imagick::sparseColorImage](imagick.sparsecolorimage.md) — Interpola cores
- [Imagick::spliceImage](imagick.spliceimage.md) — Une uma cor sólida na imagem
- [Imagick::spreadImage](imagick.spreadimage.md) — Desloca aleatoriamente cada pixel em um bloco
- [Imagick::statisticImage](imagick.statisticimage.md) — Modifica a imagem usando uma função estatística
- [Imagick::steganoImage](imagick.steganoimage.md) — Oculta uma marca d'água digital na imagem
- [Imagick::stereoImage](imagick.stereoimage.md) — Compõe duas imagens
- [Imagick::stripImage](imagick.stripimage.md) — Remove todos os perfis e comentários de uma imagem
- [Imagick::subImageMatch](imagick.subimagematch.md) — Procura uma subimagem na imagem atual e retorna uma imagem semelhante
- [Imagick::swirlImage](imagick.swirlimage.md) — Gira os pixels em torno do centro da imagem
- [Imagick::textureImage](imagick.textureimage.md) — Ladrilha repetidamente a imagem da textura
- [Imagick::thresholdImage](imagick.thresholdimage.md) — Altera o valor de pixels individuais com base em um limite
- [Imagick::thumbnailImage](imagick.thumbnailimage.md) — Altera o tamanho de uma imagem
- [Imagick::tintImage](imagick.tintimage.md) — Aplica um vetor de cores a cada pixel da imagem
- [Imagick::\_\_toString](imagick.tostring.md) — Retorna a imagem como uma string
- [Imagick::transformImage](imagick.transformimage.md) — Método conveniente para definir o tamanho do corte e a geometria da imagem
- [Imagick::transformImageColorspace](imagick.transformimagecolorspace.md) — Transforma uma imagem em um novo espaço de cores
- [Imagick::transparentPaintImage](imagick.transparentpaintimage.md) — Pinta pixels com a cor transparente
- [Imagick::transposeImage](imagick.transposeimage.md) — Cria uma imagem espelhada vertical
- [Imagick::transverseImage](imagick.transverseimage.md) — Cria uma imagem espelhada horizontal
- [Imagick::trimImage](imagick.trimimage.md) — Apara as bordas da imagem
- [Imagick::uniqueImageColors](imagick.uniqueimagecolors.md) — Descarta todas, exceto uma, de qualquer cor de pixel
- [Imagick::unsharpMaskImage](imagick.unsharpmaskimage.md) — Torna uma imagem mais nítida
- [Imagick::valid](imagick.valid.md) — Verifica se o item atual é válido
- [Imagick::vignetteImage](imagick.vignetteimage.md) — Adiciona filtro de vinheta à imagem
- [Imagick::waveImage](imagick.waveimage.md) — Aplica filtro de onda à imagem
- [Imagick::whiteThresholdImage](imagick.whitethresholdimage.md) — Força todos os pixels acima de um limite para branco
- [Imagick::writeImage](imagick.writeimage.md) — Grava uma imagem no nome de arquivo especificado
- [Imagick::writeImageFile](imagick.writeimagefile.md) — Grava uma imagem em um descritor de arquivo
- [Imagick::writeImages](imagick.writeimages.md) — Grava uma imagem ou sequência de imagens
- [Imagick::writeImagesFile](imagick.writeimagesfile.md) — Grava quadros em um descritor de arquivo

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
