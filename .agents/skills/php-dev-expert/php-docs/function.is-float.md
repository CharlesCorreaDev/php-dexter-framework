# Verifica se a variável é do tipo float

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-float.php

---

# is\_float

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_float — Verifica se a variável é do tipo float

### Descrição

function **is\_float**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se a variável informada é do tipo ponto flutuante.

> **Nota**:
>
> Para verificar se a variável é um número ou uma string numérica (como as entradas
> de formulário, que são sempre strings), deve ser usada a função
> [is\_numeric()](function.is-numeric.md).

### Parâmetros

`value`
:   A variável a ser avaliada.

### Valor Retornado

Retorna **`true`** se `value` for um [float](language.types.float.md),
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_float()****

```
<?php

var_dump(is_float(27.25));
var_dump(is_float('abc'));
var_dump(is_float(23));
var_dump(is_float(23.5));
var_dump(is_float(1e7));  // Notação científica
var_dump(is_float(true));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(false)
bool(true)
bool(true)
bool(false)
```

### Veja também

- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_numeric()](function.is-numeric.md) - Verifica se uma variável é um número ou uma string numérica
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
- [is\_array()](function.is-array.md) - Verifica se a variável é um array
- [is\_object()](function.is-object.md) - Verifica se uma variável é um objeto

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
