# Verifica se é uma variável é escalar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-scalar.php

---

# is\_scalar

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

is\_scalar — 
Verifica se é uma variável é escalar

### Descrição

function **is\_scalar**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se uma [expressão](language.expressions.md)
é avaliada como um valor escalar.

Consulte [Tipos Escalares](language.types.type-system.md#language.types.type-system.atomic.scalar) para mais informação.

> **Nota**:
>
> **is\_scalar()** não considera valores de recurso do tipo [resource](language.types.resource.md)
> como escalares, porque recursos são tipos de dados abstratos
> que atualmente são baseados em inteiros. Esse detalhe de implementação não
> deve ser levado em consideração pois pode ser modificado futuramente.

> **Nota**:
>
> **is\_scalar()** não considera valores nulos como sendo do tipo escalar.

### Parâmetros

`value`
:   A variável a ser avaliada.

### Valor Retornado

Retorna **`true`** se `value` for uma variável escalar, **`false`**
caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_scalar()****

```
<?php
function show_var($var)
{
    if (is_scalar($var)) {
        echo $var, PHP_EOL;
    } else {
        var_dump($var);
    }
}

$pi = 3.1416;
$proteins = array("hemoglobin", "cytochrome c oxidase", "ferredoxin");

show_var($pi);
show_var($proteins)

?>
```

O exemplo acima produzirá:

```
3.1416
array(3) {
  [0]=>
  string(10) "hemoglobin"
  [1]=>
  string(20) "cytochrome c oxidase"
  [2]=>
  string(10) "ferredoxin"
}
```

### Veja também

- [is\_float()](function.is-float.md) - Verifica se a variável é do tipo float
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_numeric()](function.is-numeric.md) - Verifica se uma variável é um número ou uma string numérica
- [is\_real()](function.is-real.md) - Sinônimo de is\_float
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [is\_object()](function.is-object.md) - Verifica se uma variável é um objeto
- [is\_array()](function.is-array.md) - Verifica se a variável é um array

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
