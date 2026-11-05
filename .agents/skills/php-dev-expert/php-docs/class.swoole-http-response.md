# A classe Swoole\Http\Response

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-http-response.php

---

# A classe Swoole\Http\Response

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Http\Response**
{

/\* Métodos \*/

public function [cookie](swoole-http-response.cookie.md)(  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$value` = ?,  
    [string](language.types.string.md) `$expires` = ?,  
    [string](language.types.string.md) `$path` = ?,  
    [string](language.types.string.md) `$domain` = ?,  
    [string](language.types.string.md) `$secure` = ?,  
    [string](language.types.string.md) `$httponly` = ?  
): [string](language.types.string.md)

public function [\_\_destruct](swoole-http-response.destruct.md)(): [void](language.types.void.md)

public function [end](swoole-http-response.end.md)([string](language.types.string.md) `$content` = ?): [void](language.types.void.md)

public function [gzip](swoole-http-response.gzip.md)([string](language.types.string.md) `$compress_level` = ?): ReturnType

public function [header](swoole-http-response.header.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`, [string](language.types.string.md) `$ucwords` = ?): [void](language.types.void.md)

public function [initHeader](swoole-http-response.initheader.md)(): ReturnType

public function [rawcookie](swoole-http-response.rawcookie.md)(  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$value` = ?,  
    [string](language.types.string.md) `$expires` = ?,  
    [string](language.types.string.md) `$path` = ?,  
    [string](language.types.string.md) `$domain` = ?,  
    [string](language.types.string.md) `$secure` = ?,  
    [string](language.types.string.md) `$httponly` = ?  
): ReturnType

public function [sendfile](swoole-http-response.sendfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$offset` = ?): ReturnType

public function [status](swoole-http-response.status.md)([string](language.types.string.md) `$http_code`): ReturnType

public function [write](swoole-http-response.write.md)([string](language.types.string.md) `$content`): [void](language.types.void.md)

}

## Índice

- [Swoole\Http\Response::cookie](swoole-http-response.cookie.md) — Define os cookies da resposta HTTP.
- [Swoole\Http\Response::\_\_destruct](swoole-http-response.destruct.md) — Destrói a resposta HTTP.
- [Swoole\Http\Response::end](swoole-http-response.end.md) — Envia dados para a solicitação HTTP e finaliza a resposta.
- [Swoole\Http\Response::gzip](swoole-http-response.gzip.md) — Habilita a compressão gzip do conteúdo da resposta.
- [Swoole\Http\Response::header](swoole-http-response.header.md) — Define os cabeçalhos da resposta HTTP.
- [Swoole\Http\Response::initHeader](swoole-http-response.initheader.md) — Inicializa o cabeçalho da resposta HTTP.
- [Swoole\Http\Response::rawcookie](swoole-http-response.rawcookie.md) — Define cookies brutos na resposta HTTP.
- [Swoole\Http\Response::sendfile](swoole-http-response.sendfile.md) — Envia um arquivo através da resposta HTTP.
- [Swoole\Http\Response::status](swoole-http-response.status.md) — Define o código de status da resposta HTTP.
- [Swoole\Http\Response::write](swoole-http-response.write.md) — Acrescenta conteúdo ao corpo da resposta HTTP.

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
