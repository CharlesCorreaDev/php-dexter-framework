# Traduz caracteres ou substitui substrings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strtr.php

---

# strtr

(PHP 4, PHP 5, PHP 7, PHP 8)

strtr — Traduz caracteres ou substitui substrings

### Descrição

function **strtr**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [string](language.types.string.md)

Assinatura alternativa (não suportada com argumentos nomeados):

function **strtr**([string](language.types.string.md) `$string`, [array](language.types.array.md) `$replace_pairs`): [string](language.types.string.md)

Se for chamada com três argumentos, esta função retorna uma cópia de
`string` onde todas as ocorrências de cada caractere
(de um byte) em `from` tenham sido traduzidas para o
caractere correspondente em `to`, isto é, cada
ocorrência de `$from[$n]` tenha sido substituída por
`$to[$n]`, onde `$n` é um deslocamento
válido em ambos os argumentos.

Se `from` e `to` tiverem
comprimentos diferentes, os caracteres adicionais no argumento mais longo
são ignorados. O comprimento de `string` será o mesmo do
valor de retorno.

Se for chamada com dois argumentos, o segundo deve ser um [array](language.types.array.md) na
forma `array('from' => 'to', ...)`. O valor de retorno é
uma [string](language.types.string.md) onde todas as ocorrências das chaves do array tenham sido
substituídas pelos valores correspondentes. As chaves mais longas são substituídas primeiro.
Assim que ums substring é substituída, seu novo valor não será pesquisado
novamente.

Neste caso, as chaves e os valores podem ter qualquer comprimento, desde que
não haja chave vazia; adicionalmente, o comprimento do valor de retorno pode ser
diferente do comprimento de `string`.
Entretanto, esta função será mais eficiente quando todas as chaves têm o
mesmo tamanho.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser traduzida.

`from`
:   A [string](language.types.string.md) que deverá ser traduzida para `to`.

`to`
:   A [string](language.types.string.md) que substituirá `from`.

`replace_pairs`
:   O parâmetro `replace_pairs` pode ser usado no lugar de
    `to` e `from`, como um
    [array](language.types.array.md) na forma `array('from' => 'to', ...)`.

    Se `replace_pairs` contiver uma chave que seja uma
    [string](language.types.string.md) vazia (`""`), o elemento será ignorado;
    a partir do PHP 8.0.0, um alerta **`E_WARNING`** é emitido neste caso.

### Valor Retornado

Retorna a [string](language.types.string.md) traduzida.

### Examples

**Exemplo #1 Exemplo de **strtr()****

```
<?php

$original = "He1Lo, w0rld!";

// Com 3 argumentos, strtr() faz uma tradução byte a byte.
$result = strtr($original, "1L0", "llo");
echo $result;
```

O exemplo acima produzirá:

```
Hello, world!
```

O exemplo a seguir mostra o comportamento de **strtr()** quando
chamada com apenas dois argumentos. Observe a preferência das substituições
(`"h"` não é capturado pois existem correspondências mais longas)
e como o texto já substituído não é pesquisado novamente.

**Exemplo #2 Exemplo de **strtr()** com dois argumentos**

```
<?php

$replace_pairs = ["h" => "-", "hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $replace_pairs);
```

O exemplo acima produzirá:

```
hello all, I said hi
```

Os dois modos de comportamento são substancialmente diferentes. Com três argumentos,
**strtr()** irá substituir bytes; com dois, ela pode substituir
substrings mais longas.

**Exemplo #3 Comparação de comportamentos de **strtr()****

```
<?php

// Caracteres de um só byte
$singlebyte_string = "baab";
echo strtr($singlebyte_string, "ab", "01"), "\n"; // Tradução byte por byte

$replace_pairs = ["ab" => "01"];
echo strtr($singlebyte_string, $replace_pairs), "\n"; // Tradução de substring

// Caracteres Multi-byte
$multibyte_string = "Ä"; // Em UTF-8, codificado como dois bytes: "\xC3\x84"

$result = strtr($multibyte_string, 'Ä', 'A');
echo bin2hex($result), "\n"; // "4184", onde "c3" se torna "41" ("A"), enquanto que "84" é mantido e quebra o UTF-8

$replace_pairs = ['Ä' => 'A'];
echo strtr($multibyte_string, $replace_pairs); // Uma tradução correta de substring multi-byte
```

O exemplo acima produzirá:

```
1001
ba01
4184
A
```

### Veja também

- [str\_replace()](function.str-replace.md) - Substitui todas as ocorrências da string de pesquisa com a string de substituição
- [preg\_replace()](function.preg-replace.md) - Realiza uma pesquisa por uma expressão regular e substitui

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
