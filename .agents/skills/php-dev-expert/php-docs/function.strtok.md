# Divide uma string em tokens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strtok.php

---

# strtok

(PHP 4, PHP 5, PHP 7, PHP 8)

strtok — Divide uma string em tokens

### Descrição

function **strtok**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$token`): [string](language.types.string.md)|[false](language.types.singleton.md)

Assinatura alternativa (não suportada com argumentos nomeados):

function **strtok**([string](language.types.string.md) `$token`): [string](language.types.string.md)|[false](language.types.singleton.md)

**strtok()** divide a `string`
em partes menores (tokens), com cada token sendo delimitado pelo
caractere definido em `token`.
Isto é, em uma string como "Este é um texto de exemplo", pode-se
dividir esta string em palavras individuais usando-se o
caractere de espaço como o `token`.

Observe que somente a primeira chamada a strtok usa o argumento `string`.
Cada chamada subsequente a strtok precisará apenas do parâmetro `token`, já
que ela guarda a posição atual na string. Para reiniciar,
ou para dividir uma nova string em tokens, deve-se simplesmente chamar strtok com o
argumento `string` novamente. Observe que pode-se incluir
múltiplos tokens no parâmetro `token`. A string será
dividida sempre que qualquer dos caracteres presentes no argumento `token` for
encontrado.

> **Nota**:
>
> Esta função comporta-se de maneira um pouco diferente do que o esperado
> quando se está familiar com [explode()](function.explode.md).
> Primeiramente uma sequência de dois ou mais caracteres contíguos de `token`
> na string é considerado como um único delimitador.
> Além disso, um `token` situado no início ou no final da
> string é ignorado.
> Por exemplo, se uma string `";aaa;;bbb;"` for usada, chamadas
> sucessivas a **strtok()** com `";"` como
> `token` retornaria as strings
> "aaa" e "bbb", e depois **`false`**.
> Como resultado, a string seria dividida em apenas dois elementos, enquanto que
> `explode(";", $string)` retornaria um array com 5 elementos.

### Parâmetros

`string`
:   A [string](language.types.string.md) que será dividida em strings menores (tokens).

`token`
:   O delimitador usado ao dividir a `string`.

### Valor Retornado

Um token de [string](language.types.string.md) ou **`false`** se nenhum token adicional estiver disponível.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora emite um alerta **`E_WARNING`** quando `token` não for informado. |

### Examples

**Exemplo #1 Exemplo de **strtok()****

```
<?php
$string = "Este é\tum texto de\nexemplo";
/* Pode-se usar também tabulação e nova linha como caracteres de divisão */
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Palavra={$tok}\n";
    $tok = strtok(" \n\t");
}
?>
```

**Exemplo #2 Comportamento de **strtok()** com uma parte vazia encontrada**

```
<?php
$first_token  = strtok('/palavra', '/');
$second_token = strtok('/');
var_dump($first_token, $second_token);
?>
```

O exemplo acima produzirá:

```
string(7) "palavra"
bool(false)
```

**Exemplo #3 A diferença entre **strtok()** e [explode()](function.explode.md)**

```
<?php
$string = ";aaa;;bbb;";

$parts = [];
$tok = strtok($string, ";");
while ($tok !== false) {
    $parts[] = $tok;
    $tok = strtok(";");
}
echo json_encode($parts),"\n";

$parts = explode(";", $string);
echo json_encode($parts),"\n";
```

O exemplo acima produzirá:

```
["aaa","bbb"]
["","aaa","","bbb",""]
```

### Notas

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Veja também

- [explode()](function.explode.md) - Divide uma string com base em outra string

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
