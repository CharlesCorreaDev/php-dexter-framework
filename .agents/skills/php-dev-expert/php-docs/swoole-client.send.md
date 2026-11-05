# Envia dados para o socket TCP remoto.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-client.send.php

---

# Swoole\Client::send

(PECL swoole >= 1.9.0)

Swoole\Client::send — Envia dados para o socket TCP remoto.

### Descrição

public function **Swoole\Client::send**([string](language.types.string.md) `$data`, [string](language.types.string.md) `$flag` = ?): [int](language.types.integer.md)

### Parâmetros

`data`
:   Os dados a serem enviados, que podem ser string ou binários.

`flag`

### Valor Retornado

Se o cliente enviar os dados com sucesso, ele retorna o comprimento dos dados enviados.
Caso contrário, retorna false e define $swoole\_client->errCode. Para cliente sincronizado,
não há limite para os dados a serem enviados. Para cliente assíncrono, o limite
para os dados a serem enviados é socket\_buffer\_size.

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
