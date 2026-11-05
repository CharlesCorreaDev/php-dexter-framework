# A classe CURLFile

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.curlfile.php

---

# A classe CURLFile

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

Esta classe ou [CURLStringFile](class.curlstringfile.md) deve ser utilizada para fazer o envio de arquivos com
**`CURLOPT_POSTFIELDS`**.

A desserialização de instâncias **CURLFile** não é permitida.
A partir do PHP 7.4.0, é explicitamente proibida.

## Resumo da classe

class ****CURLFile****
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$name](class.curlfile.md#curlfile.props.name) = "";

public
[string](language.types.string.md)
[$mime](class.curlfile.md#curlfile.props.mime) = "";

public
[string](language.types.string.md)
[$postname](class.curlfile.md#curlfile.props.postname) = "";

/\* Métodos \*/

public function [\_\_construct](curlfile.construct.md)([string](language.types.string.md) `$filename`, [?](language.types.null.md)[string](language.types.string.md) `$mime_type` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$posted_filename` = **`null`**)

public function [getFilename](curlfile.getfilename.md)(): [string](language.types.string.md)

public function [getMimeType](curlfile.getmimetype.md)(): [string](language.types.string.md)

public function [getPostFilename](curlfile.getpostfilename.md)(): [string](language.types.string.md)

public function [setMimeType](curlfile.setmimetype.md)([string](language.types.string.md) `$mime_type`): [void](language.types.void.md)

public function [setPostFilename](curlfile.setpostfilename.md)([string](language.types.string.md) `$posted_filename`): [void](language.types.void.md)

}

## Propriedades

name
:   Nome do arquivo a ser feito o upload.

mime
:   MIME type do arquivo (o padrão é `application/octet-stream`).

postname
:   O nome do arquivo no campo de upload (o valor padrão é a propriedade name).

## Veja também

- [curl\_setopt()](function.curl-setopt.md)
- [CURLStringFile](class.curlstringfile.md)

## Índice

- [CURLFile::\_\_construct](curlfile.construct.md) — Cria um objeto CURLFile
- [CURLFile::getFilename](curlfile.getfilename.md) — Obtém o nome do arquivo
- [CURLFile::getMimeType](curlfile.getmimetype.md) — Obtém o tipo de mídia
- [CURLFile::getPostFilename](curlfile.getpostfilename.md) — Obtém o nome do arquivo para requisição POST
- [CURLFile::setMimeType](curlfile.setmimetype.md) — Define o tipo de mídia
- [CURLFile::setPostFilename](curlfile.setpostfilename.md) — Define o nome do arquivo para a requisição POST

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
