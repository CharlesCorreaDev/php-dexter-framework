# Envia dados para o endereço remoto UDP.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-client.sendto.php

---

# Swoole\Client::sendto

(PECL swoole >= 1.9.0)

Swoole\Client::sendto — Envia dados para o endereço remoto UDP.

### Descrição

public function **Swoole\Client::sendto**([string](language.types.string.md) `$ip`, [int](language.types.integer.md) `$port`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

O cliente swoole deve ser do tipo SWOOLE\_SOCK\_UDP ou SWOOLE\_SOCK\_UDP6.

### Parâmetros

`ip`
:   O endereço IP do host remoto, IPv4 ou IPv6.

`port`
:   O número da porta do host remoto.

`data`
:   Os dados a serem enviados, que devem ter menos de 64KB.

### Valor Retornado

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
