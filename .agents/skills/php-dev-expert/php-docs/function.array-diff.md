# Computa as diferenças entre arrays

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-diff.php

---

# array\_diff

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

array\_diff — Computa as diferenças entre arrays

### Descrição

function **array\_diff**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`): [array](language.types.array.md)

Compara `array` com um ou mais arrays e
retorna os valores no `array` que não estão presentes em
nenhum dos outros arrays.

### Parâmetros

`array`
:   O array a ser comparado

`arrays`
:   Arrays para comparar

### Valor Retornado

Retorna um [array](language.types.array.md) contendo todas as entradas de
`array` que não estão presentes em nenhum dos outros arrays.
Chaves no array `array` são preservadas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |

### Examples

**Exemplo #1 Exemplo da função **array\_diff()****

```
<?php
$array1 = array("a" => "verde", "vermelho", "azul", "vermelho");
$array2 = array("b" => "verde", "amarelo", "vermelho");
$result = array_diff($array1, $array2);

print_r($result);
?>
```

Multiplas ocorrências de $array1 são todas tratadas da mesma maneira.
Isto irá mostrar:

```
Array
(
  [1] => azul
)
```

Dois elementos são considerados iguais se e somente se
`(string) $elem1 === (string) $elem2`. Isto é,
quando a [representação em string](language.types.string.md#language.types.string.casting) é a mesma.

**Exemplo #2 Exemplo de **array\_diff()** com tipos não correspondentes**

```
<?php
// Isto irá gerar uma Notícia de que um array não pode ser convertido em uma string.
$fonte = [1, 2, 3, 4];
$filtro = [3, 4, [5], 6];
$resultado = array_diff($fonte, $filtro);

// Enquanto isto não é um problema, uma vez que o objeto pode ser convertido em string.
class S {
  private $v;

  public function __construct(string $v) {
    $this->v = $v;
  }

  public function __toString() {
    return $this->v;
  }
}

$fonte = [new S('a'), new S('b'), new S('c')];
$filtro = [new S('b'), new S('c'), new S('d')];

$resultado = array_diff($fonte, $filtro);

// $resultado agora contém uma instância de S('a');
var_dump($resultado);
?>
```

Para usar uma função de comparação alternativa, veja [array\_udiff()](function.array-udiff.md).

### Notas

> **Nota**:
>
> Esta função verifica somente uma dimensão de um array n-dimensional. É claro
> que as dimensões mais profundas podem ser verificadas usando
> `array_diff($array1[0], $array2[0]);`.

### Veja também

- [array\_diff\_assoc()](function.array-diff-assoc.md) - Computa a diferença entre arrays com checagem adicional de índice
- [array\_udiff()](function.array-udiff.md) - Computa a diferença de arrays usando uma função de callback para comparação dos dados
- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice

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
