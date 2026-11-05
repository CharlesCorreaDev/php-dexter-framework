# Transforma o primeiro caractere de uma string em maiúsculo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ucfirst.php

---

# ucfirst

(PHP 4, PHP 5, PHP 7, PHP 8)

ucfirst — Transforma o primeiro caractere de uma string em maiúsculo

### Descrição

function **ucfirst**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma string com o primeiro caractere de
`string` maiúsculo, se esse caractere for
ASCII no intervalo de `"a"` (0x61) a
`"z"` (0x7a).

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

**Exemplo #1 Exemplo de **ucfirst()****

```
<?php
$foo = 'olá, mundo!';
echo ucfirst($foo), PHP_EOL;             // Olá, mundo!

$bar = 'OLÁ MUNDO!';
echo ucfirst($bar), PHP_EOL;             // OLÁ, MUNDO!
echo ucfirst(strtolower($bar)), PHP_EOL; // Olá, mundo!
?>
```

### Veja também

- [lcfirst()](function.lcfirst.md) - Torna minúsculo o primeiro caractere de uma string
- [strtolower()](function.strtolower.md) - Converte uma string para minúsculas
- [strtoupper()](function.strtoupper.md) - Converte uma string em maiúsculas
- [ucwords()](function.ucwords.md) - Converte para maiúsculas o primeiro caractere de cada palavra
- [mb\_convert\_case()](function.mb-convert-case.md) - Realiza a conversão de caixa em uma string

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
