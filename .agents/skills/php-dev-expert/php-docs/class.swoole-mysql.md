# A classe Swoole\MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-mysql.php

---

# A classe Swoole\MySQL

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\MySQL**
{

/\* Métodos \*/

public function [close](swoole-mysql.close.md)(): [void](language.types.void.md)

public function [connect](swoole-mysql.connect.md)([array](language.types.array.md) `$server_config`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [\_\_destruct](swoole-mysql.destruct.md)(): [void](language.types.void.md)

public function [getBuffer](swoole-mysql.getbuffer.md)(): ReturnType

public function [on](swoole-mysql.on.md)([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [query](swoole-mysql.query.md)([string](language.types.string.md) `$sql`, [callable](language.types.callable.md) `$callback`): ReturnType

}

## Índice

- [Swoole\MySQL::close](swoole-mysql.close.md) — Fecha a conexão assíncrona do MySQL.
- [Swoole\MySQL::connect](swoole-mysql.connect.md) — Conecta-se ao servidor MySQL remoto.
- [Swoole\MySQL::\_\_construct](swoole-mysql.construct.md) — Constrói um cliente assíncrono do MySQL.
- [Swoole\MySQL::\_\_destruct](swoole-mysql.destruct.md) — Destrói o cliente assíncrono do MySQL.
- [Swoole\MySQL::getBuffer](swoole-mysql.getbuffer.md) — Descrição
- [Swoole\MySQL::on](swoole-mysql.on.md) — Registra uma função de retorno de chamada com base no nome do evento.
- [Swoole\MySQL::query](swoole-mysql.query.md) — Executa a consulta SQL.

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
