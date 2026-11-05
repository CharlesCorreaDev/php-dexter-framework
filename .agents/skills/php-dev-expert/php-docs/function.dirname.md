# Retorna o caminho para o diretório pai

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dirname.php

---

# dirname

(PHP 4, PHP 5, PHP 7, PHP 8)

dirname — Retorna o caminho para o diretório pai

### Descrição

function **dirname**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$levels` = 1): [string](language.types.string.md)

Dada uma string contendo um caminho para um arquivo ou diretório, esta função
irá retornar o caminho do diretório pai que é
`levels` acima do diretório atual.

> **Nota**:
>
> **dirname()** opera ingenuamente sobre a string de entrada,
> e não tem conhecimento do sistema de arquivos real, ou componentes de caminho de diretório
> como "`..`".

**Cuidado**

No Windows, **dirname()** assume o código de página atual, portanto para que possa
ver os nomes corretos de diretório com caracteres multi-byte, o código de página correspondente deve
ser configurado.
Se `path` contiver caracteres que são inválidos para o código
de página ativo, o comportamento de **dirname()** será indefinido.

Em outros sistemas, **dirname()** assume que `path`
estará codificado em formato compatível com ASCII. Caso contrário o comportamento da
função será indefinido.

### Parâmetros

`path`
:   Um caminho.

    No Windows, tanto a barra (`/`) quanto a
    barra invertida (`\`) são usadas como caractere
    separador de diretório. Em outros ambientes, é utilizada a barra (`/`).

`levels`
:   O número de diretórios pai para subir.

    Deve ser um inteiro maior que 0.

### Valor Retornado

Retorna o caminho do diretório pai. Se não houver nenhuma barra no
`path`, um ponto ('`.`') é retornado,
indicando o diretório atual. Do contrário, a string retornada é o
`path` com qualquer `/componente`
ao final da string removido.

**Cuidado**

Deve-se tomar cuidado ao usar esta função em um loop que alcança
o diretório raiz pois isto pode resultar em um loop infinito.

```
<?php
dirname('.');    // Retornará '.'.
dirname('/');    // Retornará `\` no Windows e '/' em sistemas *nix.
dirname('\\');   // Retornará `\` no Windows e '.' em sistemas *nix.
dirname('C:\\'); // Retornará 'C:\' no Windows e '.' em sistemas *nix.
?>
```

### Examples

**Exemplo #1 Exemplo de **dirname()****

```
<?php
 echo dirname("/etc/passwd") . PHP_EOL;
 echo dirname("/etc/") . PHP_EOL;
 echo dirname(".") . PHP_EOL;
 echo dirname("C:\\") . PHP_EOL;
 echo dirname("/usr/local/lib", 2);
```

O exemplo acima produzirá
algo semelhante a:

```
/etc
 / (ou \ no Windows)
 .
 C:\
 /usr
```

### Veja também

- [basename()](function.basename.md) - Retorna a última parte do caminho
- [pathinfo()](function.pathinfo.md) - Retorna informações sobre um caminho de arquivo
- [realpath()](function.realpath.md) - Retorna o path absoluto canonizado

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
