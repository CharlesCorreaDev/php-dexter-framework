# A classe VarnishAdmin

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.varnishadmin.php

---

# A classe VarnishAdmin

(PECL varnish >= 0.3)

## Introdução

## Resumo da classe

class **VarnishAdmin**
{

/\* Métodos \*/

public function [auth](varnishadmin.auth.md)(): [bool](language.types.boolean.md)

public function [ban](varnishadmin.ban.md)([string](language.types.string.md) `$vcl_regex`): [int](language.types.integer.md)

public function [banUrl](varnishadmin.banurl.md)([string](language.types.string.md) `$vcl_regex`): [int](language.types.integer.md)

public function [clearPanic](varnishadmin.clearpanic.md)(): [int](language.types.integer.md)

public function [connect](varnishadmin.connect.md)(): [bool](language.types.boolean.md)

public function [\_\_construct](varnishadmin.construct.md)([array](language.types.array.md) `$args` = ?)

public function [disconnect](varnishadmin.disconnect.md)(): [bool](language.types.boolean.md)

public function [getPanic](varnishadmin.getpanic.md)(): [string](language.types.string.md)

public function [getParams](varnishadmin.getparams.md)(): [array](language.types.array.md)

public function [isRunning](varnishadmin.isrunning.md)(): [bool](language.types.boolean.md)

public function [setCompat](varnishadmin.setcompat.md)([int](language.types.integer.md) `$compat`): [void](language.types.void.md)

public function [setHost](varnishadmin.sethost.md)([string](language.types.string.md) `$host`): [void](language.types.void.md)

public function [setIdent](varnishadmin.setident.md)([string](language.types.string.md) `$ident`): [void](language.types.void.md)

public function [setParam](varnishadmin.setparam.md)([string](language.types.string.md) `$name`, [string](language.types.string.md)|[int](language.types.integer.md) `$value`): [int](language.types.integer.md)

public function [setPort](varnishadmin.setport.md)([int](language.types.integer.md) `$port`): [void](language.types.void.md)

public function [setSecret](varnishadmin.setsecret.md)([string](language.types.string.md) `$secret`): [void](language.types.void.md)

public function [setTimeout](varnishadmin.settimeout.md)([int](language.types.integer.md) `$timeout`): [void](language.types.void.md)

public function [start](varnishadmin.start.md)(): [int](language.types.integer.md)

public function [stop](varnishadmin.stop.md)(): [int](language.types.integer.md)

}

## Índice

- [VarnishAdmin::auth](varnishadmin.auth.md) — Autentica em uma instância do Varnish
- [VarnishAdmin::ban](varnishadmin.ban.md) — Bane URLs usando uma expressão VCL
- [VarnishAdmin::banUrl](varnishadmin.banurl.md) — Bane uma URL usando uma expressão VCL
- [VarnishAdmin::clearPanic](varnishadmin.clearpanic.md) — Limpa mensagens de pânico da instância do Varnish
- [VarnishAdmin::connect](varnishadmin.connect.md) — Conecta-se a uma interface de administração de instância do Varnish
- [VarnishAdmin::\_\_construct](varnishadmin.construct.md) — Construtor de VarnishAdmin
- [VarnishAdmin::disconnect](varnishadmin.disconnect.md) — Desconecta de uma interface de administração de instância do Varnish
- [VarnishAdmin::getPanic](varnishadmin.getpanic.md) — Obtém a última mensagem de pânico em uma instância do Varnish
- [VarnishAdmin::getParams](varnishadmin.getparams.md) — Busca parâmetros de configuração da instância atual do Varnish
- [VarnishAdmin::isRunning](varnishadmin.isrunning.md) — Verifica se o processo escravo do Varnish está em execução no momento
- [VarnishAdmin::setCompat](varnishadmin.setcompat.md) — Define o parâmetro de configuração de compatibilidade de classe
- [VarnishAdmin::setHost](varnishadmin.sethost.md) — Define o parâmetro de configuração do host da classe
- [VarnishAdmin::setIdent](varnishadmin.setident.md) — Define o parâmetro de configuração da identificação de conexão da classe
- [VarnishAdmin::setParam](varnishadmin.setparam.md) — Define os parâmetros de configuração na instância atual do Varnish
- [VarnishAdmin::setPort](varnishadmin.setport.md) — Define o parâmetro de configuração da porta
- [VarnishAdmin::setSecret](varnishadmin.setsecret.md) — Define o parâmetro de configuração do segredo
- [VarnishAdmin::setTimeout](varnishadmin.settimeout.md) — Define o parâmetro de configuração de tempo limite
- [VarnishAdmin::start](varnishadmin.start.md) — Inicia o processo do trabalhador Varnish
- [VarnishAdmin::stop](varnishadmin.stop.md) — Inicia o processo do trabalhador Varnish

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
