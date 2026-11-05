# Operadores Binários

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.bitwise.php

---

## Operadores Binários

Operadores binários permitem a avaliação e modificação de bits
específicos em um tipo inteiro.

**Operadores binários**

| Exemplo | Nome | Resultado |
| --- | --- | --- |
| **`$a & $b`** | E (AND) | Os bits que estão ativos tanto em $a quanto em $b são ativados. |
| **`$a | $b`** | OU (OR inclusivo) | Os bits que estão ativos em $a ou em $b são ativados. |
| **`$a ^ $b`** | XOR (OR exclusivo) | Os bits que estão ativos em $a ou em $b, mas não em ambos, são ativados. |
| **`~ $a`** | NÃO (NOT) | Os bits que estão ativos em $a não são ativados, e vice-versa. |
| **`$a << $b`** | Deslocamento à esquerda | Desloca os bits de $a em $b passos para a esquerda (cada passo significa "multiplica por dois") |
| **`$a >> $b`** | Deslocamento à direita | Desloca os bits de $a em $b passos para a direita (cada passo significa "divide por dois") |

O deslocamento de bits no PHP é aritmético.
Bits deslocados no lado final são descartados.
Deslocamentos à esquerda tem zeros inseridos à direita e o bit
de sinal é perdido, e assim o sinal do operando
não é preservado.
Deslocamentos à direita têm cópias do bit de sinal à esquerda,
e assim o sinal do operando é preservado.

Utilize parênteses para garantir a
[precedência](language.operators.precedence.md) desejada.
Por exemplo `$a & $b == true` avalia primeiro
a equivalência e depois a operação de bits, enquanto que
`($a & $b) == true` avalia primeiro a operação de bits e
só depois a equivalência.

Se ambos os operandos de `&`, `|` e
`^` forem strings então a operação será
realizada nos valores ASCII dos caracteres das strings, e o
resultado final será uma string. Em todos os outros casos ambos os operandos serão
[convertidos para inteiros](language.types.integer.md#language.types.integer.casting)
e o resultado será um inteiro.

Se o operando de `~` for uma string então a
operação será realizada nos valores ASCII dos caracteres da
string, e o resultado será uma string. Nos demais casos o operando e o
resultado serão tratados como inteiros.

Ambos os operandos e o resultado para `<<` e
`>>` sempre são tratados como inteiros.

A configuração error\_reporting ini utiliza valores posicionados em bits,
fornecendo um exemplo real de ligar ou desligar
bits. Para mostrar todos os erros mas não os alertas
coloque no php.ini:
**`E_ALL & ~E_NOTICE`**

```
     Isto funciona pois começa com E_ALL:
     00000000000000000111011111111111
     Depois pegando o valor de E_NOTICE...
     00000000000000000000000000001000
     ... que invertido através de ~:
     11111111111111111111111111110111
     ... é finalmente mesclado via E (&) e assim o valor final
     se torna:
     00000000000000000111011111110111
```

Outra forma de conseguir esse efeito seria através do XOR (`^`)
para encontrar os bits que estão ativos em apenas um ou no outro:
**`E_ALL ^ E_NOTICE`**

O error\_reporting pode também ser utilizado para demonstrar a ativação de bits.
Para mostrar apenas erros e erros recuperáveis:
**`E_ERROR | E_RECOVERABLE_ERROR`**

```
     Este processo combina E_ERROR
     00000000000000000000000000000001
     e
     00000000000000000001000000000000
     utilizando OU (|)
     para pegar os bits ativos de ambos os valores:
     00000000000000000001000000000001
```

**Exemplo #1 Operações bitwise AND, OR e XOR em inteiros**

```
<?php
/*
 * Ignore essa primeira parte,
 * que é apenas para deixar a impressão mais limpa.
 */

$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";

echo <<<EOH
 ---------     ---------  -- ---------
 resultado     valor      op teste
 ---------     ---------  -- ---------
EOH;

/*
 * Agora os exemplos
 */

$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

echo "\n Operador de bit E \n";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}

echo "\n Operador de bit OU inclusivo \n";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}

echo "\n Operador de bit OU Exclusivo (XOR) \n";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}
?>
```

O exemplo acima produzirá:

```
 ---------     ---------  -- ---------
 resultado     valor      op teste
 ---------     ---------  -- ---------
 Operador de bit E
( 0 = 0000) = ( 0 = 0000) & ( 5 = 0101)
( 1 = 0001) = ( 1 = 0001) & ( 5 = 0101)
( 0 = 0000) = ( 2 = 0010) & ( 5 = 0101)
( 4 = 0100) = ( 4 = 0100) & ( 5 = 0101)
( 0 = 0000) = ( 8 = 1000) & ( 5 = 0101)

 Operador de bit OU inclusivo
( 5 = 0101) = ( 0 = 0000) | ( 5 = 0101)
( 5 = 0101) = ( 1 = 0001) | ( 5 = 0101)
( 7 = 0111) = ( 2 = 0010) | ( 5 = 0101)
( 5 = 0101) = ( 4 = 0100) | ( 5 = 0101)
(13 = 1101) = ( 8 = 1000) | ( 5 = 0101)

 Operador de bit OU exclusivo (XOR)
( 5 = 0101) = ( 0 = 0000) ^ ( 5 = 0101)
( 4 = 0100) = ( 1 = 0001) ^ ( 5 = 0101)
( 7 = 0111) = ( 2 = 0010) ^ ( 5 = 0101)
( 1 = 0001) = ( 4 = 0100) ^ ( 5 = 0101)
(13 = 1101) = ( 8 = 1000) ^ ( 5 = 0101)
```

**Exemplo #2 Operações de bit XOR em strings**

```
<?php
echo 12 ^ 9, PHP_EOL; // Exibe '5'

echo "12" ^ "9", PHP_EOL; // Exibe caractere backspace (ASCII 8)
                          // ('1' (ASCII 49)) ^ ('9' (ASCII 57)) = #8

echo "hallo" ^ "hello";, PHP_EOL // Exibe os valores ASCII #0 #4 #0 #0 #0
                                 // 'a' ^ 'e' = #4

echo 2 ^ "3", PHP_EOL; // Exibe 1
                       // 2 ^ ((int) "3") == 1

echo "2" ^ 3, PHP_EOL; // Exibe 1
                       // ((int) "2") ^ 3 == 1
?>
```

**Exemplo #3 Deslocamento de bits em inteiros**

```
<?php
/*
 * Aqui estão os exemplos.
 */

echo "\n--- MOVENDO BITS A DIREITA EM INTEIROS POSITIVOS ---\n";

$val = 4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'cópia do bit de sinal trocada para a esquerda');

$val = 4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places);

$val = 4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'move os bits para fora da direita');

$val = 4;
$places = 4;
$res = $val >> $places;
p($res, $val, '>>', $places, 'mesmo resultado que acima; não se pode mover além do 0');

echo "\n--- MOVENDO BITS A DIREITA EM INTEIROS NEGATIVOS ---\n";

$val = -4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'cópia do bit de sinal trocada para a esquerda');

$val = -4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places, 'move os bits para fora da direita');

$val = -4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'mesmo resultado que acima; não se pode mover além do -1');

echo "\n--- MOVENDO BITS A ESQUERDA EM INTEIROS POSITIVOS ---\n";

$val = 4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'preenche com zeros o lado direito');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 4;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = 4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places, 'bit de sinal movido para fora');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bits movidos para fora da esquerda');

echo "\n--- MOVENDO BITS A ESQUERDA EM INTEIROS NEGATIVOS ---\n";

$val = -4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'preenche com zeros o lado direito');

$val = -4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = -4;
$places = (PHP_INT_SIZE * 8) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bits movidos para fora pela esquerda, incluindo o bit de sinal');

/*
 * Ignore essa seção abaixo,
 * é apenas para formatar a saída e deixar mais clara a apresentação.
 */

function p($res, $val, $op, $places, $note = '') {
    $format = '%0' . (PHP_INT_SIZE * 8) . "b\n";

    printf("Expressão: %d = %d %s %d\n", $res, $val, $op, $places);

    echo " Decimal:\n";
    printf("  val=%d\n", $val);
    printf("  res=%d\n", $res);

    echo " Binário:\n";
    printf('  val=' . $format, $val);
    printf('  res=' . $format, $res);

    if ($note) {
        echo " NOTA: $note\n";
    }

    echo "\n\n";
}
?>
```

Saída do exemplo acima em máquinas de 32 bits:

```
--- MOVENDO BITS A DIREITA EM INTEIROS POSITIVOS ---
Expressão: 2 = 4 >> 1
 Decimal:
  val=4
  res=2
 Binário:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000010
 NOTA: cópia do bit de sinal trocada para a esquerda

Expressão: 1 = 4 >> 2
 Decimal:
  val=4
  res=1
 Binário:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000001

Expressão: 0 = 4 >> 3
 Decimal:
  val=4
  res=0
 Binário:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000000
 NOTA: move os bits para fora da direita

Expressão: 0 = 4 >> 4
 Decimal:
  val=4
  res=0
 Binário:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000000
 NOTA: mesmo resultado que acima; não se pode mover além do 0

--- MOVENDO BITS A DIREITA EM INTEIROS NEGATIVOS ---
Expressão: -2 = -4 >> 1
 Decimal:
  val=-4
  res=-2
 Binário:
  val=11111111111111111111111111111100
  res=11111111111111111111111111111110
 NOTA: cópia do bit de sinal trocada para a esquerda

Expressão: -1 = -4 >> 2
 Decimal:
  val=-4
  res=-1
 Binário:
  val=11111111111111111111111111111100
  res=11111111111111111111111111111111
 NOTA: move os bits para fora da direita

Expressão: -1 = -4 >> 3
 Decimal:
  val=-4
  res=-1
 Binário:
  val=11111111111111111111111111111100
  res=11111111111111111111111111111111
 NOTA: mesmo resultado que acima; não se pode mover além do -1

--- MOVENDO BITS A ESQUERDA EM INTEIROS POSITIVOS ---
Expressão: 8 = 4 << 1
 Decimal:
  val=4
  res=8
 Binário:
  val=00000000000000000000000000000100
  res=00000000000000000000000000001000
 NOTA: preenche com zeros o lado direito

Expressão: 1073741824 = 4 << 28
 Decimal:
  val=4
  res=1073741824
 Binário:
  val=00000000000000000000000000000100
  res=01000000000000000000000000000000

Expressão: -2147483648 = 4 << 29
 Decimal:
  val=4
  res=-2147483648
 Binário:
  val=00000000000000000000000000000100
  res=10000000000000000000000000000000
 NOTA: bit de sinal movido para fora

Expressão: 0 = 4 << 30
 Decimal:
  val=4
  res=0
 Binário:
  val=00000000000000000000000000000100
  res=00000000000000000000000000000000
 NOTA: bits movidos para fora da esquerda

--- MOVENDO BITS A ESQUERDA EM INTEIROS NEGATIVOS ---
Expressão: -8 = -4 << 1
 Decimal:
  val=-4
  res=-8
 Binário:
  val=11111111111111111111111111111100
  res=11111111111111111111111111111000
 NOTA: preenche com zeros o lado direito

Expressão: -2147483648 = -4 << 29
 Decimal:
  val=-4
  res=-2147483648
 Binário:
  val=11111111111111111111111111111100
  res=10000000000000000000000000000000

Expressão: 0 = -4 << 30
 Decimal:
  val=-4
  res=0
 Binário:
  val=11111111111111111111111111111100
  res=00000000000000000000000000000000
 NOTA: bits movidos para fora pela esquerda, incluindo o bit de sinal
```

Saída do exemplo acima em máquinas de 64 bits:

```
--- MOVENDO BITS A DIREITA EM INTEIROS POSITIVOS ---
Expressão: 2 = 4 >> 1
 Decimal:
  val=4
  res=2
 Binário:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000010
 NOTA: cópia do bit de sinal trocada para a esquerda

Expressão: 1 = 4 >> 2
 Decimal:
  val=4
  res=1
 Binário:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000001

Expressão: 0 = 4 >> 3
 Decimal:
  val=4
  res=0
 Binário:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000000
 NOTA: move os bits para fora da direita

Expressão: 0 = 4 >> 4
 Decimal:
  val=4
  res=0
 Binário:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000000
 NOTA: mesmo resultado que acima; não se pode mover além do 0

--- MOVENDO BITS A DIREITA EM INTEIROS NEGATIVOS ---
Expressão: -2 = -4 >> 1
 Decimal:
  val=-4
  res=-2
 Binário:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1111111111111111111111111111111111111111111111111111111111111110
 NOTA: cópia do bit de sinal trocada para a esquerda

Expressão: -1 = -4 >> 2
 Decimal:
  val=-4
  res=-1
 Binário:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1111111111111111111111111111111111111111111111111111111111111111
 NOTA: move os bits para fora da direita

Expressão: -1 = -4 >> 3
 Decimal:
  val=-4
  res=-1
 Binário:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1111111111111111111111111111111111111111111111111111111111111111
 NOTA: mesmo resultado que acima; não se pode mover além do -1

--- MOVENDO BITS A ESQUERDA EM INTEIROS POSITIVOS ---
Expressão: 8 = 4 << 1
 Decimal:
  val=4
  res=8
 Binário:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000001000
 NOTA: preenche com zeros o lado direito

Expressão: 4611686018427387904 = 4 << 60
 Decimal:
  val=4
  res=4611686018427387904
 Binário:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0100000000000000000000000000000000000000000000000000000000000000

Expressão: -9223372036854775808 = 4 << 61
 Decimal:
  val=4
  res=-9223372036854775808
 Binário:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=1000000000000000000000000000000000000000000000000000000000000000
 NOTA: bit de sinal movido para fora

Expressão: 0 = 4 << 62
 Decimal:
  val=4
  res=0
 Binário:
  val=0000000000000000000000000000000000000000000000000000000000000100
  res=0000000000000000000000000000000000000000000000000000000000000000
 NOTA: bits movidos para fora da esquerda

--- MOVENDO BITS A ESQUERDA EM INTEIROS NEGATIVOS ---
Expressão: -8 = -4 << 1
 Decimal:
  val=-4
  res=-8
 Binário:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1111111111111111111111111111111111111111111111111111111111111000
 NOTA: preenche com zeros o lado direito

Expressão: -9223372036854775808 = -4 << 61
 Decimal:
  val=-4
  res=-9223372036854775808
 Binário:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=1000000000000000000000000000000000000000000000000000000000000000

Expressão: 0 = -4 << 62
 Decimal:
  val=-4
  res=0
 Binário:
  val=1111111111111111111111111111111111111111111111111111111111111100
  res=0000000000000000000000000000000000000000000000000000000000000000
 NOTA: bits movidos para fora pela esquerda, incluindo o bit de sinal
```

**Aviso**

Utilize as funções da extensão [gmp](book.gmp.md) para manipulações
de troca de bit em números maiores que **`PHP_INT_MAX`**.

### Veja também

- [pack()](function.pack.md)
- [unpack()](function.unpack.md)
- [gmp\_and()](function.gmp-and.md)
- [gmp\_or()](function.gmp-or.md)
- [gmp\_xor()](function.gmp-xor.md)
- [gmp\_testbit()](function.gmp-testbit.md)
- [gmp\_clrbit()](function.gmp-clrbit.md)

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
