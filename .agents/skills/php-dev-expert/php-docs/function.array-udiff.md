# Computa a diferença de arrays usando uma função de callback para comparação dos dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-udiff.php

---

# array\_udiff

(PHP 5, PHP 7, PHP 8)

array\_udiff — Computa a diferença de arrays usando uma função de callback para comparação dos dados

### Descrição

function **array\_udiff**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`, [callable](language.types.callable.md) `$value_compare_func`): [array](language.types.array.md)

Computa a diferença de arrays usando uma função de callback para comparação
dos dados. Esta é contrária a [array\_diff()](function.array-diff.md) que usa uma
função interna para comparar os dados.

### Parâmetros

`array`
:   O primeiro array.

`arrays`
:   Arrays para comparar.

`value_compare_func`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

    **Cuidado**

    A função chamada de ordenação deve lidar com qualquer valor de qualquer array em qualquer ordem,
    independentemente da ordem em que eles foram originalmente fornecidos.
    O motivo é que cada array individual é primeiramente ordenado antes de ser comparado com outros arrays.
    Por exemplo:

    ```
    <?php
    $arrayA = ["string", 1];
    $arrayB = [["value" => 1]];
    // $item1 e $item2 podem ser "string", 1 ou ["value" => 1]
    $compareFunc = static function ($item1, $item2) {
        $value1 = is_string($item1) ? strlen($item1) : (is_array($item1) ? $item1["value"] : $item1);
        $value2 = is_string($item2) ? strlen($item2) : (is_array($item2) ? $item2["value"] : $item2);
        return $value1 <=> $value2;
    };
    ?>
    ```

### Valor Retornado

Retorna um array contendo todos os valores de `array`
que não estão presentes em qualquer dos outros argumentos.

### Examples

**Exemplo #1 Exemplo de **array\_udiff()** usando Objetos stdClass**

```
<?php
// Arrays para comprar
$array1 = array(new stdClass, new stdClass,
                new stdClass, new stdClass,
               );

$array2 = array(
                new stdClass, new stdClass,
               );

// Define algumas propriedades para cada objeto
$array1[0]->largura = 11; $array1[0]->altura = 3;
$array1[1]->largura = 7;  $array1[1]->altura = 1;
$array1[2]->largura = 2;  $array1[2]->altura = 9;
$array1[3]->largura = 5;  $array1[3]->altura = 7;

$array2[0]->largura = 7;  $array2[0]->altura = 5;
$array2[1]->largura = 9;  $array2[1]->altura = 2;

function comparar_por_area($a, $b) {
    $areaA = $a->largura * $a->altura;
    $areaB = $b->largura * $b->altura;

    if ($areaA < $areaB) {
        return -1;
    } elseif ($areaA > $areaB) {
        return 1;
    } else {
        return 0;
    }
}

print_r(array_udiff($array1, $array2, 'comparar_por_area'));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => stdClass Object
        (
            [largura] => 11
            [altura] => 3
        )

    [1] => stdClass Object
        (
            [largura] => 7
            [altura] => 1
        )

)
```

**Exemplo #2 Exemplo de **array\_udiff()** usando Objetos DateTime**

```
<?php
class MeuCalendario {
    public $livres = array();
    public $reservadas = array();

    public function __construct($semana = 'now') {
        $inicio = new DateTime($semana);
        $inicio->modify('Monday this week midnight');
        $fim = clone $inicio;
        $fim->modify('Friday this week midnight');
        $intervalo = new DateInterval('P1D');
        foreach (new DatePeriod($inicio, $intervalo, $fim) as $tempoLivre) {
            $this->livres[] = $tempoLivre;
        }
    }

    public function marcarCompromisso(DateTime $data, $nota) {
        $this->reservadas[] = array('data' => $data->modify('midnight'), 'nota' => $nota);
    }

    public function checarDisponibilidade() {
        return array_udiff($this->livres, $this->reservadas, array($this, 'compararPersonalizado'));
    }

    public function compararPersonalizado($livres, $reservadas) {
        if (is_array($livres)) $a = $livres['data'];
        else $a = $livres;
        if (is_array($reservadas)) $b = $reservadas['data'];
        else $b = $reservadas;
        if ($a == $b) {
            return 0;
        } elseif ($a > $b) {
            return 1;
        } else {
            return -1;
        }
    }
}

// Cria um calendário para compromissos semanais
$meuCalendario = new MeuCalendario;

// Marca alguns compromissos para esta semana
$meuCalendario->marcarCompromisso(new DateTime('Monday this week'), "Limpando apartamento do GoogleGuy.");
$meuCalendario->marcarCompromisso(new DateTime('Wednesday this week'), "Fazendo uma viagem de snowboarding.");
$meuCalendario->marcarCompromisso(new DateTime('Friday this week'), "Corrigindo código bugado.");

// Checar disponibilidade de dias comparando datas $reservadas com datas $livres
echo "Estou disponível nos seguintes dias desta semana...\n\n";
foreach ($meuCalendario->checarDisponibilidade() as $livre) {
    echo $livre->format('l'), "\n";
}
echo "\n\n";
echo "Estou ocupado(a) nos seguintes dias desta semana...\n\n";
foreach ($meuCalendario->reservadas as $reservada) {
    echo $reservada['data']->format('l'), ": ", $reservada['nota'], "\n";
}
?>
```

O exemplo acima produzirá:

```
Estou disponível nos seguintes dias desta semana...

Tuesday
Thursday

Estou ocupado(a) nos seguintes dias desta semana...

Monday: Limpando apartamento do GoogleGuy.
Wednesday: Fazendo uma viagem de snowboarding.
Friday: Corrigindo código bugado.
```

### Notas

> **Nota**:
>
> Observe que esta função verifica somente uma dimensão de um array
> n-dimensional. É claro que dimensões mais profundas podem ser verificadas
> usando `array_udiff($array1[0], $array2[0], "func_compara_dados");`.

### Veja também

- [array\_diff()](function.array-diff.md) - Computa as diferenças entre arrays
- [array\_diff\_assoc()](function.array-diff-assoc.md) - Computa a diferença entre arrays com checagem adicional de índice
- [array\_diff\_uassoc()](function.array-diff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
- [array\_udiff\_assoc()](function.array-udiff-assoc.md) - Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno
- [array\_udiff\_uassoc()](function.array-udiff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
- [array\_uintersect()](function.array-uintersect.md) - Computa a interseção de array, comparando dados com uma função callback
- [array\_uintersect\_assoc()](function.array-uintersect-assoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados utilizando uma função de callback
- [array\_uintersect\_uassoc()](function.array-uintersect-uassoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas

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
