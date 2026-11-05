# Converte uma string em maiúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strtoupper.php

---

# strtoupper

(PHP 4, PHP 5, PHP 7, PHP 8)

strtoupper — Converte uma string em maiúsculas

### Descrição

function **strtoupper**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna `string` com todos os caracteres ASCII alfabéticos
convertidos em maiúsculas.

Bytes no intervalo `"a"` (0x61) a `"z"`
(0x7a) serão convertidos para a letra maiúscula correspondente pela subtração de
32 de cada valor de byte.

Esta função pode ser usada para converter caracteres ASCII em strings codificadas com
UTF-8, já que caracteres UTF-8 multi-byte serão ignorados. Para converter caracteres multi-byte
não-ASCII, use [mb\_strtoupper()](function.mb-strtoupper.md).

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a string em maiúsculas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com [setlocale()](function.setlocale.md). Somente caracteres ASCII serão convertidos. |

### Examples

**Exemplo #1 Exemplo de **strtoupper()****

```
<?php
$str = "Maria Tinha Um Pequeno Porco e Ela AMAVA-O Tanto!";
$str = strtoupper($str);
echo $str; // Prints MARIA TINHA UM PEQUENO PORCO E ELA AMAVA-O TANTO!
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [strtolower()](function.strtolower.md) - Converte uma string para minúsculas
- [ucfirst()](function.ucfirst.md) - Transforma o primeiro caractere de uma string em maiúsculo
- [ucwords()](function.ucwords.md) - Converte para maiúsculas o primeiro caractere de cada palavra
- [mb\_strtoupper()](function.mb-strtoupper.md) - Faz uma string ficar em maiúsculas

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
