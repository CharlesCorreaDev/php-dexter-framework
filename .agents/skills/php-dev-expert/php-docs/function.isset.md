# Determina se uma variável está declarada e é diferente de null

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.isset.php

---

# isset

(PHP 4, PHP 5, PHP 7, PHP 8)

isset — Determina se uma variável está declarada e é diferente de **`null`**

### Descrição

function **isset**([mixed](language.types.mixed.md) `$var`, [mixed](language.types.mixed.md) `...$vars`): [bool](language.types.boolean.md)

Determina se uma variável é considerada definida,
isto é, está declarada e é diferente de **`null`**.

Se a variável tornou-se indefinida com a função [unset()](function.unset.md),
ela não é mais considerada definida.

**isset()** retornará **`false`** ao verificar uma
variável que foi atribuída com o valor **`null`**.
Note também que um caractere nulo (`"\0"`) não é
equivalente à constante **`null`** do PHP.

Se múltiplos parâmetros forem fornecidos então **isset()**
retornará **`true`** apenas se todos os parâmetros forem considerados definidos.
A avaliação ocorre da esquerda para a direira e para assim que uma variável
indefinida for encontrada.

### Parâmetros

`var`
:   A variável a ser verificada.

`vars`
:   Mais variáveis a verificar.

### Valor Retornado

Retorna **`true`** se `var` existe e tem
qualquer valor diferente de **`null`**. **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplos de **isset()****

```
<?php

$var = '';

// Isto será avaliado como VERDADEIRO e por isso o texto será mostrado.
if (isset($var)) {
    echo "Esta variável está definida então vou imprimir.", PHP_EOL;
}

// Nos próximos exemplos, será utilizado var_dump() para mostrar
// o valor de retorno de isset().

$a = "teste";
$b = "outroteste";

var_dump(isset($a));     // VERDADEIRO
var_dump(isset($a, $b)); // VERDADEIRO

unset ($a);

var_dump(isset($a));     // FALSO
var_dump(isset($a, $b)); // FALSO

$foo = NULL;
var_dump(isset($foo));   // FALSO

?>
```

Esta função também funciona para elementos em arrays:

**Exemplo #2 Exemplo de **isset()** com elementos de arrays**

```
<?php

$a = array ('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));

var_dump(isset($a['test']));            // VERDADEIRO
var_dump(isset($a['foo']));             // FALSO
var_dump(isset($a['hello']));           // FALSO

// A chave 'hello' é igual a NULO então é considerada indefinida
// Se deseja-se verificar por chaves de valores NULOS, deve-se tentar:
var_dump(array_key_exists('hello', $a)); // VERDADEIRO

// Verificando valores de array em maior profundidade
var_dump(isset($a['pie']['a']));        // VERDADEIRO
var_dump(isset($a['pie']['b']));        // FALSO
var_dump(isset($a['cake']['a']['b']));  // FALSO

?>
```

**Exemplo #3 **isset()** em Deslocamento de Strings**

```
<?php
$expected_array_got_string = 'somestring';
var_dump(isset($expected_array_got_string['some_key']));
var_dump(isset($expected_array_got_string[0]));
var_dump(isset($expected_array_got_string['0']));
var_dump(isset($expected_array_got_string[0.5]));
var_dump(isset($expected_array_got_string['0.5']));
var_dump(isset($expected_array_got_string['0 Mostel']));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
```

### Notas

**Aviso**

**isset()** somente funciona com variáveis, pois passar qualquer
outra coisa resultará em erro de interpretação. Para verificar se
[constantes](language.constants.md) estão definidas, use a função
[defined()](function.defined.md).

> **Nota**:
>
> Como esta é uma
> construção da linguagem e não uma função, ela não pode ser chamada usando
> [funções variáveis](functions.variable-functions.md)
> ou [argumentos nomeados](functions.arguments.md#functions.named-arguments).

> **Nota**:
>
> Ao usar **isset()** em propriedades inacessíveis de objetos,
> o método de sobrecarga [\_\_isset()](language.oop5.overloading.md#object.isset)
> será chamado, se declarado.

### Veja também

- [empty()](function.empty.md) - Determina se uma variável está vazia
- [\_\_isset()](language.oop5.overloading.md#object.isset)
- [unset()](function.unset.md) - unset remove a definição de uma variável informada
- [defined()](function.defined.md) - Verifica se existe uma constante com o nome informado
- [Tabelas de comparação de tipos](types.comparisons.md)
- [array\_key\_exists()](function.array-key-exists.md) - Verifica se uma chave ou índice existe em um array
- [is\_null()](function.is-null.md) - Verifica se uma variável é null
- Operador [@](language.operators.errorcontrol.md) de controle de erro

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
