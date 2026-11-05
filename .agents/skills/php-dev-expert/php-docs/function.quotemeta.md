# Escapa meta caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.quotemeta.php

---

# quotemeta

(PHP 4, PHP 5, PHP 7, PHP 8)

quotemeta — Escapa meta caracteres

### Descrição

function **quotemeta**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma versão de da string com uma barra invertida (`\`)
antes de cada caractere que esteja neste conjunto:

. \ + \* ? [ ^ ] ( $ )

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a string com os meta caracteres escapados ou **`false`** se uma string
vazia for fornecida no parâmetro `string`.

### Examples

**Exemplo #1 Exemplo de **quotemeta()****

```
<?php

var_dump(quotemeta('PHP é uma linguagem de script popular. Rápida, flexível e pragmática.'));
?>
```

O exemplo acima produzirá:

```
string(71) "PHP é uma linguagem de script popular\. Rápida, flexível e pragmática\."
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [addslashes()](function.addslashes.md) - Adiciona barras invertidas a uma string
- [addcslashes()](function.addcslashes.md) - Escapa string com barras invertidas no estilo C
- [htmlentities()](function.htmlentities.md) - Converte todos os caracteres aplicáveis em entidades HTML
- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML
- [nl2br()](function.nl2br.md) - Insere quebras de linha HTML antes de todos os caracteres de nova linha em um string
- [stripslashes()](function.stripslashes.md) - Desfaz os escapes de uma string escapada
- [stripcslashes()](function.stripcslashes.md) - Remove o escape de strings escapadas com addcslashes
- [preg\_quote()](function.preg-quote.md) - Escapa caracteres de expressão regular

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
