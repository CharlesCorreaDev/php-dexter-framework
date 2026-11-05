# Escapa string com barras invertidas no estilo C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.addcslashes.php

---

# addcslashes

(PHP 4, PHP 5, PHP 7, PHP 8)

addcslashes — Escapa string com barras invertidas no estilo C

### Descrição

function **addcslashes**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$characters`): [string](language.types.string.md)

Retorna uma string com barras invertidas antes dos caracteres que estão
listados no parâmetro `characters`.

### Parâmetros

`string`
:   A string a ser escapada.

`characters`
:   Uma lista de caracteres a serem escapados. Se
    `characters` contiver caracteres
    `\n`, `\r` etc., eles serão
    convertidos no estilo da linguagem C, enquanto que outros caracteres não alfanuméricos
    com códigos ASCII menores que 32 e maiores que 126 serão convertidos para
    a representação octal.

    Ao definir uma sequência de caracteres no argumento `characters`
    certifique-se que são conhecidos todos os caracteres que aparecem entre aqueles
    definidos como o início e o final do intervalo.

    **Exemplo #1 **addcslashes()** com intervalos**

    ```
    <?php
    echo addcslashes('foo[ ]', 'A..z');
    // saída:  \f\o\o\[ \]
    // Todas as letras maiúsculas e minúsculas serão escapadas
    // ... mas também os caracteres [\]^_`
    ?>
    ```

    Adicionamente, se o primeiro caractere em uma sequência possuir um código ASCII maior
    que o segundo caractere na sequência, na verdade nenhum intervalo será
    construído. Apenas os caracteres do início, do final e o caractere "." serão
    escapados. Use a função [ord()](function.ord.md) para encontrar o
    código ASCII de um caractere.

    **Exemplo #2 **addcslashes()** com caracteres na ordem incorreta**

    ```
    <?php
    echo addcslashes("zoo['.']", 'z..A');
    // saída:  \zoo['\.']
    ?>
    ```

    Cuidado ao escapar os caracteres 0, a, b, f, n, r, t e
    v. Eles serão convertidos para \0, \a, \b, \f, \n, \r, \t e \v, que são
    sequências de escape predefinidas em C. Muitas dessas sequências são
    também definidas em outras linguagens derivadas do C, incluindo o PHP, o que significa que
    pode não ser obtido o resultado desejado se a saída de
    **addcslashes()** for usada para gerar código nessas linguagens
    com estes caracteres definidos no parâmetro `characters`.

### Valor Retornado

Retorna a string escapada.

### Examples

Parâmetro `characters` definido para algo como "\0..\37", que
escapa todos os caracteres com código entre 0 e 31 (octal \37).

**Exemplo #3 Exemplo de **addcslashes()****

```
<?php
$not_escaped = "PHP isThirty\nYears Old!\tYay to the Elephant!\n";
$escaped = addcslashes($not_escaped, "\0..\37!@\177..\377");
echo $escaped;
?>
```

### Veja também

- [stripcslashes()](function.stripcslashes.md) - Remove o escape de strings escapadas com addcslashes
- [stripslashes()](function.stripslashes.md) - Desfaz os escapes de uma string escapada
- [addslashes()](function.addslashes.md) - Adiciona barras invertidas a uma string
- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML
- [quotemeta()](function.quotemeta.md) - Escapa meta caracteres

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
