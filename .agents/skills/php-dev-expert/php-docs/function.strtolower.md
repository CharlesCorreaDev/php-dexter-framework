# Converte uma string para minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strtolower.php

---

# strtolower

(PHP 4, PHP 5, PHP 7, PHP 8)

strtolower — Converte uma string para minúsculas

### Descrição

function **strtolower**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma `string` com todos os caracteres alfabéticos ASCII
convertidos para minúsculas.

Bytes na faixa `"A"` (0x41) a `"Z"`
(0x5a) serão convertidos para a letra minúscula correspondente pela adição de 32
a cada valor de byte.

Esta função pode ser usada para converter caracteres ASCII em string codificadas com
UTF-8, já que os caracteres multibyte UTF-8 serão ignorados. Para converter caracteres
multibyte não-ASCII, use [mb\_strtolower()](function.mb-strtolower.md).

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a string minúscula.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com [setlocale()](function.setlocale.md). Somente caracteres ASCII serão convertidos. |

### Examples

**Exemplo #1 Exemplo de **strtolower()****

```
<?php
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [strtoupper()](function.strtoupper.md) - Converte uma string em maiúsculas
- [ucfirst()](function.ucfirst.md) - Transforma o primeiro caractere de uma string em maiúsculo
- [ucwords()](function.ucwords.md) - Converte para maiúsculas o primeiro caractere de cada palavra
- [mb\_strtolower()](function.mb-strtolower.md) - Torna uma string minúscula

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
