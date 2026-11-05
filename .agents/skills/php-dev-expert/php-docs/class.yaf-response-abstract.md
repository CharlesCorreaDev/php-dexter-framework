# A classe Yaf_Response_Abstract

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-response-abstract.php

---

# A classe Yaf\_Response\_Abstract

(Yaf >=1.0.0)

## Introdução

## Resumo da classe

class **Yaf\_Response\_Abstract**
{

/\* Constantes \*/

const
[string](language.types.string.md)
DEFAULT\_BODY = "content";

/\* Propriedades \*/

protected
[$\_header](class.yaf-response-abstract.md#yaf-response-abstract.props.header);

protected
[$\_body](class.yaf-response-abstract.md#yaf-response-abstract.props.body);

protected
[$\_sendheader](class.yaf-response-abstract.md#yaf-response-abstract.props.sendheader);

/\* Métodos \*/

public function [\_\_construct](yaf-response-abstract.construct.md)()

public function [appendBody](yaf-response-abstract.appendbody.md)([string](language.types.string.md) `$content`, [string](language.types.string.md) `$key` = ?): [bool](language.types.boolean.md)

public function [clearBody](yaf-response-abstract.clearbody.md)([string](language.types.string.md) `$key` = ?): [bool](language.types.boolean.md)

public function [clearHeaders](yaf-response-abstract.clearheaders.md)(): [void](language.types.void.md)

public function [getBody](yaf-response-abstract.getbody.md)([string](language.types.string.md) `$key` = ?): [mixed](language.types.mixed.md)

public function [getHeader](yaf-response-abstract.getheader.md)(): [void](language.types.void.md)

public function [prependBody](yaf-response-abstract.prependbody.md)([string](language.types.string.md) `$content`, [string](language.types.string.md) `$key` = ?): [bool](language.types.boolean.md)

public function [response](yaf-response-abstract.response.md)(): [void](language.types.void.md)

protected function [setAllHeaders](yaf-response-abstract.setallheaders.md)(): [void](language.types.void.md)

public function [setBody](yaf-response-abstract.setbody.md)([string](language.types.string.md) `$content`, [string](language.types.string.md) `$key` = ?): [bool](language.types.boolean.md)

public function [setHeader](yaf-response-abstract.setheader.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`, [bool](language.types.boolean.md) `$replace` = ?): [bool](language.types.boolean.md)

public function [setRedirect](yaf-response-abstract.setredirect.md)([string](language.types.string.md) `$url`): [bool](language.types.boolean.md)

private function [\_\_toString](yaf-response-abstract.tostring.md)(): [string](language.types.string.md)

public function [\_\_destruct](yaf-response-abstract.destruct.md)()

}

## Propriedades

\_header

\_body

\_sendheader

## Índice

- [Yaf\_Response\_Abstract::appendBody](yaf-response-abstract.appendbody.md) — Acrescenta ao corpo da resposta
- [Yaf\_Response\_Abstract::clearBody](yaf-response-abstract.clearbody.md) — Descarta todo o corpo de resposta existente
- [Yaf\_Response\_Abstract::clearHeaders](yaf-response-abstract.clearheaders.md) — Descarta todos os cabeçalhos definidos
- [Yaf\_Response\_Abstract::\_\_construct](yaf-response-abstract.construct.md) — \_\_construct
- [Yaf\_Response\_Abstract::\_\_destruct](yaf-response-abstract.destruct.md) — \_\_destruct
- [Yaf\_Response\_Abstract::getBody](yaf-response-abstract.getbody.md) — Recupera um conteúdo existente
- [Yaf\_Response\_Abstract::getHeader](yaf-response-abstract.getheader.md) — getHeader
- [Yaf\_Response\_Abstract::prependBody](yaf-response-abstract.prependbody.md) — prependBody
- [Yaf\_Response\_Abstract::response](yaf-response-abstract.response.md) — Envia resposta
- [Yaf\_Response\_Abstract::setAllHeaders](yaf-response-abstract.setallheaders.md) — setAllHeaders
- [Yaf\_Response\_Abstract::setBody](yaf-response-abstract.setbody.md) — Define o conteúdo da resposta
- [Yaf\_Response\_Abstract::setHeader](yaf-response-abstract.setheader.md) — Define o cabeçalho da resposta
- [Yaf\_Response\_Abstract::setRedirect](yaf-response-abstract.setredirect.md) — setRedirect
- [Yaf\_Response\_Abstract::\_\_toString](yaf-response-abstract.tostring.md) — Obtém todo o corpo como um string

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
