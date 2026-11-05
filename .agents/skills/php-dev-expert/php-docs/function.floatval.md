# Obtém o valor em ponto flutuante da variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.floatval.php

---

# floatval

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

floatval — Obtém o valor em ponto flutuante da variável

### Descrição

function **floatval**([mixed](language.types.mixed.md) `$value`): [float](language.types.float.md)

Obtém o valor [float](language.types.float.md) de `value`.

### Parâmetros

`value`
:   Pode ser qualquer tipo escalar. **floatval()** não deve ser utilizada
    em objetos, pois isso ocasionará emissão de um erro de nível **`E_WARNING`**
    e retornará 1.

### Valor Retornado

O valor em ponto flutuante da variável informada. Arrays vazios retornam 0, arrays
com valores retoram 1.

Strings provavelmente retornarão 0, embora esse comportamento dependa
dos caracteres à esquerda da string. A regra geral de
[conversão para ponto flutuante](language.types.float.md#language.types.float.casting)
é aplicada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O nível de erro ao converter um objeto mudou de **`E_NOTICE`** para **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplo da função **floatval()****

```
<?php
$var = '122.34343The';
$float_value_of_var = floatval($var);
echo $float_value_of_var; // 122.34343
?>
```

**Exemplo #2 Exemplo da função **floatval()** em string com caracteres não numéricos à esquerda**

```
<?php
$var = 'The122.34343';
$float_value_of_var = floatval($var);
echo $float_value_of_var; // 0
?>
```

### Veja também

- [boolval()](function.boolval.md) - Obtém o valor booleano de uma variável
- [intval()](function.intval.md) - Obtém o valor em número inteiro de uma variável
- [strval()](function.strval.md) - Retorna o valor string de uma variável
- [settype()](function.settype.md) - Define o tipo de uma variável
- [Manipulação de Tipos](language.types.type-juggling.md)

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
