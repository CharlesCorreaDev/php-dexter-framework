# Converte um endereço inteiro longo em uma string no formato padrão com pontos da Internet (IPv4)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.long2ip.php

---

# long2ip

(PHP 4, PHP 5, PHP 7, PHP 8)

long2ip — Converte um endereço inteiro longo em uma string no formato padrão com pontos da Internet (IPv4)

### Descrição

function **long2ip**([int](language.types.integer.md) `$ip`): [string](language.types.string.md)

A função **long2ip()** gera um endereço de Internet em
formato com pontos (ou seja: aaa.bbb.ccc.ddd) a partir da representação
de inteiro longo.

### Parâmetros

`ip`
:   Uma representação de endereço adequada em número inteiro longo.

### Valor Retornado

Retorna o endereço IP da Internet como uma [string](language.types.string.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O tipo do retorno foi alterado de [string](language.types.string.md)|[false](language.types.singleton.md) para [string](language.types.string.md). |
| 7.1.0 | O tipo do parâmetro `ip` foi alterado de [string](language.types.string.md) para [int](language.types.integer.md). |

### Notas

> **Nota**:
>
> Em arquiteturas de 32 bits, converter representações inteiras de endereços IP
> de [string](language.types.string.md) para [int](language.types.integer.md) não fornecerá
> resultados corretos para números que excedam **`PHP_INT_MAX`**.

### Veja também

- [ip2long()](function.ip2long.md) - Converte uma string contendo um endereço com pontos do protocolo da Internet (IPv4) em um número inteiro longo

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
