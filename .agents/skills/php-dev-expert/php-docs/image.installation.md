# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/image.installation.php

---

## Instalação

Para ativar suporte ao GD, configure o PHP com
**--with-gd[=DIR]**, aonde DIR é o
diretório de instalação. Para usar a versão recomendada da biblioteca GD que acompanha o PHP,
use a opção de configuração
**--with-gd**.
Biblioteca GD requer libpng e
libjpeg para compilar.
Desde o PHP 7.4.0, **--with-gd** se torna
**--enable-gd** (para simplesmente
abilitar a extensão) e **--with-external-gd**
(para selecionar uma instalação libgd externa,
diferente da que acompanha o PHP).

No Windows, você irá incluir a DLL do GD php\_gd.dll como
uma extensão no php.ini.
Antes do PHP 8.0.0 a DLL se chamava php\_gd2.dll.

Melhore as capacidades do GD para manipular mais formatos de imagens especificando
a opção `--with-XXXX` na sua
linha de configuração do PHP.

**Formatos de imagens suportados**

| Formato de Imagem | Opção de Configuração |
| --- | --- |
| `avif` | Para habilitar suporte a avif aicione **--with-avif**. Disponível a partir do PHP 8.1.0. |
| `jpeg` | Para ativar suporte a jpeg adicione **--with-jpeg-dir=DIR**. Jpeg 6b, 7 ou 8 são suportados. A partir do PHP 7.4.0, use a opção **--with-jpeg**. |
| `png` | Para ativar suporte para png adicione **--with-png-dir=DIR**. Note que, libpng precisa de [zlib library](zlib.requirements.md), portanto adicione a opção **--with-zlib-dir[=DIR]** na sua linha de configuração. A partir do PHP 7.4.0, **--with-png-dir** e **--with-zlib-dir** foram removidas. libpng e zlib são necessárias. |
| `xpm` | Para ativar suporte a xpm adicione **--with-xpm-dir=DIR**. Se o configure não for capaz de encontrar as bibliotecas necessárias, você deverá adicionar o caminho até as suas bibliotecas X11. A partir do PHP 7.4.0, use a opção **--with-xpm**. |
| `webp` | Para habilitar suporte a webp, adicione **--with-webp-dir=DIR**. A partir do PHP 7.4.0, use a opção **--with-webp**. |

> **Nota**:
>
> Ao compilar o PHP com a libpng, você deve usar a mesma versão que foi
> ligada com a biblioteca GD.

Melhore as capacidades do GD para lidar com fontes diferentes especificando
a opção de configuração `--with-XXXX` na linha de
configuração do PHP.

**Bibliotecas de Fontes Suportadas**

| Biblioteca de Fonte | Opção de Configuração |
| --- | --- |
| `FreeType 2` | Para ativar suporte a FreeType 2 adicione **--with-freetype-dir=DIR**. A partir do PHP 7.4.0, use **--with-freetype**, que usa pkg-config. |
| `Native TrueType string function` | Para ativar suporte a native TrueType string function adicione **--enable-gd-native-ttf**. (Essa opção não tem efeito e foi removida no PHP 7.2.0). |

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
