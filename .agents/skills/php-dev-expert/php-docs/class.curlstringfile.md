# A classe CURLStringFile

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.curlstringfile.php

---

# A classe CURLStringFile

(PHP 8 >= 8.1.0)

## Introdução

**CURLStringFile** torna possível enviar um arquivo diretamente de uma variável.
Isto é semelhante a [CURLFile](class.curlfile.md), mas funciona com o conteúdo do arquivo, não com o nome do arquivo.
Esta classe ou [CURLFile](class.curlfile.md) deve ser usada para enviar o conteúdo do arquivo com **`CURLOPT_POSTFIELDS`**.

## Resumo da classe

class ****CURLStringFile****
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$data](class.curlstringfile.md#curlstringfile.props.data);

public
[string](language.types.string.md)
[$postname](class.curlstringfile.md#curlstringfile.props.postname);

public
[string](language.types.string.md)
[$mime](class.curlstringfile.md#curlstringfile.props.mime);

/\* Métodos \*/

public function [\_\_construct](curlstringfile.construct.md)([string](language.types.string.md) `$data`, [string](language.types.string.md) `$postname`, [string](language.types.string.md) `$mime` = "application/octet-stream")

}

## Propriedades

data
:   O conteúdo a ser enviado.

postname
:   O nome do arquivo a ser usado nos dados de envio.

mime
:   Tipo de mídia do arquivo (o padrão é `application/octet-stream`).

## Veja também

- [curl\_setopt()](function.curl-setopt.md)
- [CURLFile](class.curlfile.md)

## Índice

- [CURLStringFile::\_\_construct](curlstringfile.construct.md) — Cria um objeto CURLStringFile

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
