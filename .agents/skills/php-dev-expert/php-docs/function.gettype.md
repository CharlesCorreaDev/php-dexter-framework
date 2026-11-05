# Obtém o tipo de uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gettype.php

---

# gettype

(PHP 4, PHP 5, PHP 7, PHP 8)

gettype — Obtém o tipo de uma variável

### Descrição

function **gettype**([mixed](language.types.mixed.md) `$value`): [string](language.types.string.md)

Retorna o tipo da variável PHP `value`. Para
checagem de tipo, utilize as funções `is_*`.

### Parâmetros

`value`
:   A variável a ter o tipo verificado.

### Valor Retornado

Os valores possíveis para a string retornada são:

- `"boolean"` - booleano
- `"integer"` - inteiro
- `"double"` - ponto flutuante (por razões históricas, `"double"` é
  retornado no caso de um [float](language.types.float.md), e não simplesmente
  `"float"`)
- `"string"` - cadeia de caracteres
- `"array"`
- `"object"` - objeto
- `"resource"` - recurso
- `"resource (closed)"` a partir do PHP 7.2.0 - recurso (fechado)
- `"NULL"` - nulo
- `"unknown type"` - tipo desconhecido

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Recursos já fechados agora são reportados como `'resource (closed)'`. Anteriormente os valores retornados para recursos fechados eram `'unknown type'`. |

### Examples

**Exemplo #1 Exemplo da função **gettype()****

```
<?php

$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
integer
double
NULL
object
string
```

### Veja também

- [get\_debug\_type()](function.get-debug-type.md) - Obtém o nome do tipo de uma variável de forma adequada a depuração
- [settype()](function.settype.md) - Define o tipo de uma variável
- [get\_class()](function.get-class.md) - Retorna o nome da classe de um objeto
- [is\_array()](function.is-array.md) - Verifica se a variável é um array
- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [is\_callable()](function.is-callable.md) - Verifica se um valor pode ser chamado como uma função a partir do escopo atual
- [is\_float()](function.is-float.md) - Verifica se a variável é do tipo float
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_null()](function.is-null.md) - Verifica se uma variável é null
- [is\_numeric()](function.is-numeric.md) - Verifica se uma variável é um número ou uma string numérica
- [is\_object()](function.is-object.md) - Verifica se uma variável é um objeto
- [is\_resource()](function.is-resource.md) - Verifica se uma variável é um recurso
- [is\_scalar()](function.is-scalar.md) - Verifica se é uma variável é escalar
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida
- [method\_exists()](function.method-exists.md) - Verifica se o método da classe existe

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
