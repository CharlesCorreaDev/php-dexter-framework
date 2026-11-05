# Insere quebras de linha HTML antes de todos os caracteres de nova linha em um string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.nl2br.php

---

# nl2br

(PHP 4, PHP 5, PHP 7, PHP 8)

nl2br — Insere quebras de linha HTML antes de todos os caracteres de nova linha em um string

### Descrição

function **nl2br**([string](language.types.string.md) `$string`, [bool](language.types.boolean.md) `$use_xhtml` = **`true`**): [string](language.types.string.md)

Retorna a `string` com `<br />` ou
`<br>` inseridos antes de todas os caracteres de nova linha (`\r\n`,
`\n\r`, `\n` e `\r`).

### Parâmetros

`string`
:   A string de entrada.

`use_xhtml`
:   Informa se devem ser usadas quebras de linha compatíveis com XHTML ou não.

### Valor Retornado

Retorna a string modificada.

### Examples

**Exemplo #1 Usando **nl2br()****

```
<?php
echo nl2br("isto não é\n aquilo");
?>
```

O exemplo acima produzirá:

```
isto não é<br />
 aquilo
```

**Exemplo #2 Grando marcação HTML válida usando o parâmetro `use_xhtml`**

```
<?php
echo nl2br("Bem-vindo\r\nEste é meu documento HTML", false);
?>
```

O exemplo acima produzirá:

```
Bem-vindo<br>
Este é meu documento HTML
```

**Exemplo #3 Vários separadores de linha**

```
<?php
$string = "Isto\r\né\n\ruma\nstring\r";
echo nl2br($string);
?>
```

O exemplo acima produzirá:

```
Isto<br />
é<br />
uma<br />
string<br />
```

### Veja também

- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML
- [htmlentities()](function.htmlentities.md) - Converte todos os caracteres aplicáveis em entidades HTML
- [wordwrap()](function.wordwrap.md) - Quebra uma string em um dado número de caracteres
- [str\_replace()](function.str-replace.md) - Substitui todas as ocorrências da string de pesquisa com a string de substituição

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
