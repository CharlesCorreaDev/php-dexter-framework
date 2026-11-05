# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.installation.php

---

## Instalação

Esta extensão [» PECL](https://pecl.php.net/) não é distribuída com o PHP.

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/imagick](https://pecl.php.net/package/imagick).

> **Nota**:
>
> O nome oficial desta extensão é *imagick*.

Os usuários do Windows podem baixar a DLL pré-construída no site [» PECL](https://pecl.php.net/package/imagick).
Esses pacotes já contêm a extensão DLL (php\_imagick.dll)
que precisa ser colocada em [extension\_dir](ini.core.md#ini.extension-dir).
Eles também contêm as DLLs do ImageMagick, que precisam ser colocadas em algum lugar no PATH.
A partir do Imagick 3.6.0, eles também contêm arquivos de configuração XML em config;
para usá-los no lugar dos padrões internos, eles precisam ser colocados em `%USERPROFILE%/.config/ImageMagick` ou,
alternativamente, no caminho fornecido pela variável de ambiente MAGICK\_CONFIGURE\_PATH.
Consulte a [» documentação dos arquivos de configuração do ImageMagick](https://www.imagemagick.org/script/resources.php)
para obter mais detalhes.

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
