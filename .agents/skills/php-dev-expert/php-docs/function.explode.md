# Divide uma string com base em outra string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.explode.php

---

# explode

(PHP 4, PHP 5, PHP 7, PHP 8)

explode — Divide uma string com base em outra string

### Descrição

function **explode**([string](language.types.string.md) `$separator`, [string](language.types.string.md) `$string`, [int](language.types.integer.md) `$limit` = **`PHP_INT_MAX`**): [array](language.types.array.md)

Retorna um array de strings, sendo que cada uma é uma sub-string da
`string`, formado pela separação dela nos
limites formados pela string informada em `separator`.

### Parâmetros

`separator`
:   A string que define o separador.

`string`
:   A string de entrada.

`limit`
:   Se `limit` estiver definido e for positivo, o array retornado conterá
    um máximo de `limit` elementos com o último
    elemento contendo todo o restante da `string`.

    Se `limit` for negativo, todos os componentes
    exceto os (último - `limit`) são retornados.

    Se `limit` for zero, é tratado como 1.

> **Nota**:
>
> Antes do PHP 8.0, [implode()](function.implode.md) aceitava seus dois primeiros parâmetros em qualquer ordem.
> A função **explode()** nunca suportou isto: deve-se garantir que
> o parâmetro `separator` vem antes do
> parâmetro `string`.

### Valor Retornado

Retorna um [array](language.types.array.md) de [string](language.types.string.md)s
criado pela separação da `string` nos limites
formados pelo parâmetro `separator`.

Se `separator` for uma [string](language.types.string.md) vazia (""),
**explode()** lança um [ValueError](class.valueerror.md).
Se `separator` contiver um valor não
contido em `string` e um valor negativo
for usado em `limit`, um [array](language.types.array.md) vazio será
retornado, caso contrário um [array](language.types.array.md) contendo
`string` será retornado. Se valores de `separator`
aparecerem no início ou no final da `string`, said values
elementos de [array](language.types.array.md) vazios serão adicionados na posição inicial ou
final do [array](language.types.array.md) retornado, respectivamente.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **explode()** agora lança um [ValueError](class.valueerror.md) quando `separator` é informado com uma string vazia (`""`). Anteriormente, **explode()** retornava **`false`** nesse caso. |

### Examples

**Exemplo #1 Exemplos de **explode()****

```
<?php
// Exemplo 1
$pizza  = "fatia1 fatia2 fatia3 fatia4 fatia5 fatia6";
$fatias = explode(" ", $pizza);
echo $fatias[0], PHP_EOL; // fatia1
echo $fatias[1], PHP_EOL; // fatia2

// Exemplo 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user, PHP_EOL; // foo
echo $pass, PHP_EOL; // *
?>
```

**Exemplo #2 Exemplo de retorno de **explode()****

```
<?php
/*
   Uma string que não contém o separador simplesmente
   irá retornar um array de 1 elemento com a string original.
*/
$input1 = "olá";
$input2 = "olá,mundo";
$input3 = ',';
var_dump( explode( ',', $input1 ) );
var_dump( explode( ',', $input2 ) );
var_dump( explode( ',', $input3 ) );

?>
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  string(5) "hello"
}
array(2) {
  [0]=>
  string(5) "hello"
  [1]=>
  string(5) "there"
}
array(2) {
  [0]=>
  string(0) ""
  [1]=>
  string(0) ""
}
```

**Exemplo #3 Exemplos do parâmetro `limit`**

```
<?php
$str = 'um|dois|três|quatro';

// limite positivo
print_r(explode('|', $str, 2));

// limite negativo
print_r(explode('|', $str, -1));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => um
    [1] => dois|três|quatro
)
Array
(
    [0] => um
    [1] => dois
    [2] => três
)
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [preg\_split()](function.preg-split.md) - Divide uma string com base em expressão regular
- [str\_split()](function.str-split.md) - Converte uma string em um array
- [mb\_split()](function.mb-split.md) - Divide uma string multibyte usando expressão regular
- [str\_word\_count()](function.str-word-count.md) - Retorna informação sobre palavras usadas em uma string
- [strtok()](function.strtok.md) - Divide uma string em tokens
- [implode()](function.implode.md) - Aglutina elementos de um array com uma string

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
