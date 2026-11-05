# Obtém todos os cabeçalhos da requisição HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-request-headers.php

---

# apache\_request\_headers

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

apache\_request\_headers — Obtém todos os cabeçalhos da requisição HTTP

### Descrição

function **apache\_request\_headers**(): [array](language.types.array.md)

Obtém todos os cabeçalhos HTTP da requisição atual. Funciona nos
servidores Apache, LiteSpeed, FastCGI, CLI e FPM.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array associativo de todos os cabeçalhos HTTP da requisição atual.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | Esta função tornou-se disponível na SAPI FPM. |

### Examples

**Exemplo #1 Exemplo da função **apache\_request\_headers()****

```
<?php
$headers = apache_request_headers();

foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Accept: */*
Accept-Language: en-us
Accept-Encoding: gzip, deflate
User-Agent: Mozilla/4.0
Host: www.example.com
Connection: Keep-Alive
```

### Notas

> **Nota**:
>
> Pode-se também obter o valor das variáveis CGI comuns
> lendo-as do ambiente, o que funciona independentemente
> do PHP estar sendo usado como um módulo do Apache ou não.
> A função [phpinfo()](function.phpinfo.md) pode ser usada para obter uma lista de todas as
> [variáveis de ambiente](language.variables.predefined.md) disponíveis.

### Veja também

- [apache\_response\_headers()](function.apache-response-headers.md) - Obtém todos os cabeçalhos da resposta HTTP

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
