# Exibe informação legível sobre uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.print-r.php

---

# print\_r

(PHP 4, PHP 5, PHP 7, PHP 8)

print\_r — 
Exibe informação legível sobre uma variável

### Descrição

function **print\_r**([mixed](language.types.mixed.md) `$value`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)|[true](language.types.singleton.md)

**print\_r()** exibe informação sobre uma variável
de uma forma legível para humanos.

**print\_r()**, [var\_dump()](function.var-dump.md) e
[var\_export()](function.var-export.md) mostrarão
também propriedades protegidas e privadas de objetos.
Membros de classes estáticas não serão mostrados.

### Parâmetros

`value`
:   A expressão a ser exibida.

`return`
:   Se for desejado capturar a saída de **print\_r()**,
    utilize o parâmetro `return`. Quando esse parâmetro for definido
    para **`true`**, **print\_r()** retornará a informação, ao invés de exibi-la.

### Valor Retornado

Se for fornecido uma [string](language.types.string.md), um [int](language.types.integer.md) ou um [float](language.types.float.md),
o próprio valor será impresso. Se for fornecido um [array](language.types.array.md), valores
serão apresentados em um formato que mostra chaves e elementos. Notação
similar é utilizada para objetos ([object](language.types.object.md)s).

Quando o parâmetro `return` for **`true`**, esta função
retornará uma [string](language.types.string.md). Caso contrário, o valor retornado será **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O tipo de retorno foi alterado de [string](language.types.string.md)|[bool](language.types.boolean.md) para [string](language.types.string.md)|[true](language.types.singleton.md). |

### Examples

**Exemplo #1 Exemplo de **print\_r()****

```
<pre>
<?php
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r($a);
?>
</pre>
```

O exemplo acima produzirá:

```
<pre>
Array
(
    [a] => apple
    [b] => banana
    [c] => Array
        (
            [0] => x
            [1] => y
            [2] => z
        )
)
</pre>
```

**Exemplo #2 Exemplo do parâmetro `return`**

```
<?php
$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results agora contém a saída de print_r

print_r($results);
?>
```

### Notas

> **Nota**:
>
> Quando o parâmetro `return`
> é usado, esta função usa um buffer de saída interno antes do PHP 7.1.0, portanto não pode ser usada em uma função
> callback da função [ob\_start()](function.ob-start.md).

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [var\_dump()](function.var-dump.md) - Despeja na saída informações sobre uma variável
- [var\_export()](function.var-export.md) - Mostra ou retorna uma representação string analisável de uma variável

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
