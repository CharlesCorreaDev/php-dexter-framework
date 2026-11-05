# Analisa dados GET/POST/COOKIE e define variável global

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-parse-str.php

---

# mb\_parse\_str

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_parse\_str — Analisa dados GET/POST/COOKIE e define variável global

### Descrição

function **mb\_parse\_str**([string](language.types.string.md) `$string`, [array](language.types.array.md) `&$result`): [bool](language.types.boolean.md)

Analisa dados GET/POST/COOKIE e
define variáveis globais. Como o PHP não fornece dados brutos POST/COOKIE,
ele só pode ser usado para dados GET por enquanto. Analisa dados codificados em URL,
detecta a codificação, converte a codificação para a codificação interna
e define valores para o `result` [array](language.types.array.md) ou
variáveis globais.

### Parâmetros

`string`
:   Os dados codificados em URL.

`result`
:   Um [array](language.types.array.md) contendo valores decodificados e convertidos de caracteres.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O segundo parâmetro não é mais opcional. |
| 7.2.0 | Chamar **mb\_parse\_str()** sem o segundo parâmetro foi descontinuado. |

### Veja também

- [mb\_detect\_order()](function.mb-detect-order.md) - Define ou obtém a ordem de detecção de codificação de caracteres
- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna

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
