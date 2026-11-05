# Quebra uma string em um dado número de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wordwrap.php

---

# wordwrap

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

wordwrap — Quebra uma string em um dado número de caracteres

### Descrição

function **wordwrap**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$width` = 75,  
    [string](language.types.string.md) `$break` = "\n",  
    [bool](language.types.boolean.md) `$cut_long_words` = **`false`**  
): [string](language.types.string.md)

Quebra uma string em um dado número de caracteres usando um caractere de
quebra de string.
As strings são quebradas após um caractere de espaço (U+0020) a menos que `cut_long_words`
seja definido para **`true`**.

### Parâmetros

`string`
:   A string de entrada.

`width`
:   O número de caracteres nos quais a string será quebrada.

`break`
:   A linha é quebrada inserindo o caractere informado no parâmetro opcional `break`.
    Não pode ser uma string vazia. O padrão é "\n".

`cut_long_words`
:   Se `cut_long_words` for definido para **`true`**, a string será
    sempre quebrada na largura especificada em `width` ou antes. Então se
    existir uma palavra mais longa que a largura informada, ela será quebrada
    (veja o segundo exemplo). Quando for definido para **`false`**, a função não quebrará a palavra
    mesmo se `width` for menor que o comprimento dela.

### Valor Retornado

Retorna a string informada quebrada na largura especificada.

### Erros/Exceções

Se `break` for uma string vazia,
uma exceção [ValueError](class.valueerror.md) é lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se `break` for uma string vazia, uma exceção [ValueError](class.valueerror.md) é lançada; anteriormente, neste caso, um **`E_WARNING`** era emitido e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo de **wordwrap()****

```
<?php
$text = "Um pequeno jabuti xereta viu dez cegonhas felizes.";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;
?>
```

O exemplo acima produzirá:

```
Um pequeno jabuti<br />
xereta viu dez<br />
cegonhas felizes.
```

**Exemplo #2 Exemplo de **wordwrap()****

```
<?php
$text = "Uma longa palaaaaaaaaavra.";
$newtext = wordwrap($text, 8, "\n", true);

echo "$newtext\n";
?>
```

O exemplo acima produzirá:

```
Uma
longa
palaaaaa
aaaavra.
```

**Exemplo #3 Exemplo de **wordwrap()****

```
<?php
$text = "Uma longa palaaaaaaaaaaaaaaavra e reticências";
$newtext = wordwrap($text, 8, "\n", false);

echo "$newtext\n";
?>
```

O exemplo acima produzirá:

```
Uma
longa
palaaaaaaaaaaaaaaavra
e
reticências
```

### Veja também

- [nl2br()](function.nl2br.md) - Insere quebras de linha HTML antes de todos os caracteres de nova linha em um string
- [chunk\_split()](function.chunk-split.md) - Divide uma string em pedaços menores

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
