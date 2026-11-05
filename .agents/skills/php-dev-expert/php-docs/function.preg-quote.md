# Escapa caracteres de expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-quote.php

---

# preg\_quote

(PHP 4, PHP 5, PHP 7, PHP 8)

preg\_quote — Escapa caracteres de expressão regular

### Descrição

function **preg\_quote**([string](language.types.string.md) `$str`, [?](language.types.null.md)[string](language.types.string.md) `$delimiter` = **`null`**): [string](language.types.string.md)

**preg\_quote()**
insere uma barra invertida na frente de cada caractere de `str` que seja parte
da sintaxe de expressões regulares. Isto é útil caso exista uma
string no momento da execução que precisa ser correspondida a algum texto e que
possa conter caracteres especiais de expressões regulares.

Os caracteres especiais de expressões regulares são:
`. \ + * ? [ ^ ] $ ( ) { } = ! < > | : - #`

Observe que `/` não é um caractere especial de expressões regulares.

> **Nota**:
>
> Veja que **preg\_quote()** não foi projetada para ser aplicada às
> strings de substituição da função [preg\_replace()](function.preg-replace.md) e outras.

### Parâmetros

`str`
:   A string de entrada.

`delimiter`
:   Se o parâmetro opcional `delimiter` for especificado, o
    ele também será escapado. Isto é útil para escapar o delimitador
    requerido pelas funções PCRE. A barra `/` é o delimitador
    mais comum.

### Valor Retornado

Retorna a string escapada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | O caractere `#` agora é escapado. |
| 7.2.0 | `delimiter` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **preg\_quote()****

```
<?php
$keywords = '$40 por um g3/400';
$keywords = preg_quote($keywords, '/');
echo $keywords; // retorna \$40 por um g3\/400
?>
```

**Exemplo #2 Transformando uma palavra em itálico dentro de um texto**

```
<?php
// Neste exemplo, preg_quote($word) é usada para impedir que
// os asteriscos tenham um significado especial na expressão
// regular.

$textbody = "Este livro é *muito* difícil de encontrar.";
$word = "*muito*";
$textbody = preg_replace ("/" . preg_quote($word, '/') . "/",
                          "<i>" . $word . "</i>",
                          $textbody);
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [Expressões regulares PCRE](pcre.pattern.md)
- [escapeshellcmd()](function.escapeshellcmd.md) - Escapa meta-caracteres shell

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
