# Retorna um objeto bucket da brigada para se operar sobre ele

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-bucket-make-writeable.php

---

# stream\_bucket\_make\_writeable

(PHP 5, PHP 7, PHP 8)

stream\_bucket\_make\_writeable — 
Retorna um objeto bucket da brigada para se operar sobre ele

### Descrição

function **stream\_bucket\_make\_writeable**([resource](language.types.resource.md) `$brigade`): [?](language.types.null.md)[StreamBucket](class.streambucket.md)

Esta função é chamada sempre que existir a necessidade de acessar e operar no conteúdo de uma brigada. É
tipicamente chamada por [php\_user\_filter::filter()](php-user-filter.filter.md).

### Parâmetros

`brigade`
:   A brigada da qual se retornará o objeto bucket.

### Valor Retornado

Retorna um objeto bucket ou **`null`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Esta função agora retorna uma instância de [StreamBucket](class.streambucket.md); anteriormente, retornava um [stdClass](class.stdclass.md). |

### Veja também

- [stream\_bucket\_append()](function.stream-bucket-append.md) - Anexa o bucket à brigada
- [stream\_bucket\_prepend()](function.stream-bucket-prepend.md) - Adiciona um bucket ao início da brigada

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
