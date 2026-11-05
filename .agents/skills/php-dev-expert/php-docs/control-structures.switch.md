# switch

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.switch.php

---

## switch

(PHP 4, PHP 5, PHP 7, PHP 8)

A declaração `switch` é similar a uma série de
declarações `if` na mesma expressão. Em situações onde
é necessário comparar as mesmas variáveis (ou expressões), com
muitos valores diferentes e executar uma parte diferente de código dependendo
de qual valor ela iguala, a declaração `switch` é frequentemente
mais conveniente e mais legível.

> **Nota**:
>
> Note que ao contrário de outras linguagens, a declaração
> [continue](control-structures.continue.md)
> aplica-se ao `switch` e funciona de forma parecida com `break`. Se
> possuir um `switch` dentro de um laço, e deseja continuar na próxima iteração
> do laço externo, utilize `continue 2`.

> **Nota**:
>
> Note que o switch/case faz
> [comparação relaxada](types.comparisons.md#types.comparisions-loose).

No exemplo a seguir, cada bloco de código é equivalente.
Um usa uma série de declarações `if` e
`elseif`, e o outra usa uma
declaração `switch`. A saída é a mesm a em ambos os casos.

**Exemplo #1 Estrutura do `switch`**

```
<?php
$i = 1;

// Esta declaração switch:

switch ($i) {
    case 0:
        echo "i é igual a 0\n";
        break;
    case 1:
        echo "i é igual a 1\n";
        break;
    case 2:
        echo "i é igual a 2\n";
        break;
}

// É equivalente a:
if ($i == 0) {
    echo "i é igual a 0\n";
} elseif ($i == 1) {
    echo "i é igual a 1\n";
} elseif ($i == 2) {
    echo "i é igual a 2\n";
}
```

O exemplo acima produzirá:

```
i é igual a 1
i é igual a 1
```

É importante entender como a declaração `switch`
é executada a fim de evitar enganos. A declaração
`switch` executa linha por linha
(na verdade, declaração por declaração). No início, nenhum código é
executado. Somente quando uma declaração `case` é encontrada,
cuja expressão avalia um valor que corresponde ao valor do
`switch`, o PHP começará a executar a
declaração. O PHP continuará a executar a declaração até o fim do bloco
`switch`, ou até a primeira declaração
`break` encontrada. Se não for escrita uma declaração
`break` ao final da lista de declarações do case,
o PHP continuará executando as declarações dos próximos
cases. Por exemplo:

```
<?php
$i = 1;

switch ($i) {
    case 0:
        echo "i é igual a 0\n";
    case 1:
        echo "i é igual a 1\n";
    case 2:
        echo "i é igual a 2\n";
}
```

O exemplo acima produzirá:

```
i é igual a 1
i é igual a 2
```

Neste exemplo, se a variável $i for igual a 0, o PHP executará todas as
declarações echo! Se a variável $i for igual a 1, o PHP executará as duas
últimas declarações echo. Somente se obterá o comportamento esperado ('i equals 2'
será exibido), se $i for igual a 2. Sendo assim,
é importante não esquecer as declarações `break`
(mesmo quando se quer evitar, de propósito, sua omissão em
certas circunstâncias).

Em uma declaração `switch`, a condição é
avaliada somente uma vez, e o resultado é comparado a cada
declaração `case`. Em uma declaração `elseif`.
a condição é avaliada outra vez. Se a condição for
mais complicada que uma simples comparação e/ou está em um laço pequeno,
a declaração `switch` pode ser mais rápida.

A lista de declarações de um case também pode estar vazia,
passando o controle da lista de declarações para o próximo case.

```
<?php
$i = 1;

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i é menor que 3 mas não é negativo";
        break;
    case 3:
        echo "i é 3";
}
```

O exemplo acima produzirá:

```
i é menor que 3 mas não é negativo
```

Um case especial é o `default`. Este case corresponde
a tudo que não foi correspondido pelos outros cases. Por exemplo:

```
<?php
$i = 4;

switch ($i) {
    case 0:
        echo "i é igual a 0";
        break;
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
    default:
       echo "i não é igual a 0, 1 ou 2";
}
```

O exemplo acima produzirá:

```
i não é igual a 0, 1 ou 2
```

> **Nota**:
>
> Múltiplos casos padrões irão emitir um
> erro **`E_COMPILE_ERROR`**.

> **Nota**:
>
> Tecnicamente o caso `default` pode ser listado
> em qualquer ordem. Ele será usado apenas se nenhum outro caso corresponder.
> No entanto, por conversão, é melhor inseri-lo no fim como a
> última ramificação.

Se nenhuma ramificação `case` corresponder, e não existe nenhuma ramificação
`default`, então nenhum código será executado, assim como se nenhuma declaração `if` fosse verdadeira.

Um valor de caso pode ser dado como uma expressão. No entanto, essa expressão será
avaliada de forma isolada, e então será frouxamente comparada com o valor do switch. Isso significa que
ela não pode ser usada para avaliações complexas do valor do switch. Por exemplo:

```
<?php
$alvo = 1;
$inicio = 3;

switch ($alvo) {
    case $inicio - 1:
        print "A";
        break;
    case $inicio - 2:
        print "B";
        break;
    case $inicio - 3:
        print "C";
        break;
    case $inicio - 4:
        print "D";
        break;
}
```

O exemplo acima produzirá:

```
B
```

Para comparações mais complexas, o valor **`true`** pode ser usado como o valor do switch.
Alternativamente, blocos`if`-`else`
podem ser usado no lugar de `switch`.

```
<?php
$deslocamento = 1;
$inicio = 3;

switch (true) {
    case $inicio - $deslocamento === 1:
        print "A";
        break;
    case $inicio - $deslocamento === 2:
        print "B";
        break;
    case $inicio - $deslocamento === 3:
        print "C";
        break;
    case $inicio - $deslocamento === 4:
        print "D";
        break;
}
```

O exemplo acima produzirá:

```
B
```

A sintaxe alternativa das estruturas de controle é suportada por
switches. Para mais informações, veja [Sintaxe alternativa
para estruturas de controle](control-structures.alternative-syntax.md).

```
<?php
$i = 1;

switch ($i):
    case 0:
        echo "i é igual a 0";
        break;
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
    default:
        echo "i não é igual a 0, 1 ou 2";
endswitch;
```

O exemplo acima produzirá:

```
i é igual a 1
```

É possível utilizar o ponto e vírgula ao invés dos dois pontos depois de um 'case'.
A partir do PHP 8.5.0, esta sintaxe foi descontinuada.

```
<?php
$cerveja = 'guaraná';

switch($cerveja)
{
    case 'heineken';
    case 'budweiser';
    case 'stella';
    case 'artesanal';
        echo 'Boa escolha';
        break;
    default;
        echo 'Por favor faça uma nova seleção...';
        break;
}
```

O exemplo acima produzirá:

```
Deprecated: Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead in script on line 6

Deprecated: Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead in script on line 7

Deprecated: Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead in script on line 8

Deprecated: Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead in script on line 9

Deprecated: Case statements followed by a semicolon (;) are deprecated, use a colon (:) instead in script on line 12
Por favor faça uma nova seleção...
```

**Aviso**

Este recurso foi
*DESCONTINUADO* a partir do PHP 8.5.0. O uso deste recurso
é fortemente desencorajado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | A sintaxe alternativa que usa um ponto-e-vírgula depois de `case` foi descontinuada. |

### Veja também

- [match](control-structures.match.md)

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
