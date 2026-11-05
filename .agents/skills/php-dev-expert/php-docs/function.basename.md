# Retorna a última parte do caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.basename.php

---

# basename

(PHP 4, PHP 5, PHP 7, PHP 8)

basename — Retorna a última parte do caminho

### Descrição

function **basename**([string](language.types.string.md) `$path`, [string](language.types.string.md) `$suffix` = ""): [string](language.types.string.md)

Dada uma string contendo o caminho para um arquivo ou diretório, esta função
retornará a última parte do caminho.

> **Nota**:
>
> A função **basename()** opera de forma ingênua na string
> fornecida e não tem conhecimento do sistema de arquivos real ou dos
> componentes de caminho como "`..`".

**Cuidado**

A função **basename()** reconhece a localidade, portanto,
para obter o nome correto ao usar caminhos com caracteres multibyte,
a localidade correspondente deve ser definida com a função
[setlocale()](function.setlocale.md). Se o parâmetro `path` contiver caracteres inválidos
para a localidade atual, o comportamento de **basename()** será indefinido.

### Parâmetros

`path`
:   Um caminho.

    No Windows, tanto a barra (`/`) quanto a barra invertida
    (`\`) são usadas como caractere separador de diretório.
    Em outros ambientes, apenas a barra (`/`) é usada.

`suffix`
:   Se a última parte do caminho terminar em `suffix`,
    ele será removido.

### Valor Retornado

Retorna a última parte de um dado `path`.

### Examples

**Exemplo #1 Exemplo de **basename()****

```
<?php
echo "1) ".basename("/etc/sudoers.d", ".d").PHP_EOL;
echo "2) ".basename("/etc/sudoers.d").PHP_EOL;
echo "3) ".basename("/etc/passwd").PHP_EOL;
echo "4) ".basename("/etc/").PHP_EOL;
echo "5) ".basename(".").PHP_EOL;
echo "6) ".basename("/");
?>
```

O exemplo acima produzirá:

```
1) sudoers
2) sudoers.d
3) passwd
4) etc
5) .
6)
```

### Veja também

- [dirname()](function.dirname.md) - Retorna o caminho para o diretório pai
- [pathinfo()](function.pathinfo.md) - Retorna informações sobre um caminho de arquivo

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
