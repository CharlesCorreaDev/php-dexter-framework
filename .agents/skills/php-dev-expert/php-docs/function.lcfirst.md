# Torna minúsculo o primeiro caractere de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.lcfirst.php

---

# lcfirst

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

lcfirst — Torna minúsculo o primeiro caractere de uma string

### Descrição

function **lcfirst**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma string com o primeiro caractere de
`string` em letra minúscula se o caractere
for um ASCII na faixa de `"A"` (0x41) a
`"Z"` (0x5a).

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a string resultante.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com [setlocale()](function.setlocale.md). Somente caracteres ASCII serão convertidos. |

### Examples

**Exemplo #1 Exemplo de **lcfirst()****

```
<?php
$foo = 'OlaMundo';
echo lcfirst($foo), PHP_EOL;      // olaMundo

$bar = 'OLA MUNDO!';
echo lcfirst($bar);               // oLA MUNDO!
echo lcfirst(strtoupper($bar));   // oLA MUNDO!
?>
```

### Veja também

- [ucfirst()](function.ucfirst.md) - Transforma o primeiro caractere de uma string em maiúsculo
- [strtolower()](function.strtolower.md) - Converte uma string para minúsculas
- [strtoupper()](function.strtoupper.md) - Converte uma string em maiúsculas
- [ucwords()](function.ucwords.md) - Converte para maiúsculas o primeiro caractere de cada palavra

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
