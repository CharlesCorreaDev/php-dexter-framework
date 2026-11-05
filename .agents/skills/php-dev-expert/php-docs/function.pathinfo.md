# Retorna informações sobre um caminho de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pathinfo.php

---

# pathinfo

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

pathinfo — Retorna informações sobre um caminho de arquivo

### Descrição

function **pathinfo**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$flags` = **`PATHINFO_ALL`**): [array](language.types.array.md)|[string](language.types.string.md)

**pathinfo()** retorna informações sobre
o caminho em `path`: ou um array associativo ou uma string,
dependendo das opções em `flags`.

> **Nota**:
>
> Para informação sobre obtenção de informação sobre o caminho atual, leia
> a seção sobre [variáveis reservadas predefinidas](language.variables.predefined.md).

> **Nota**:
>
> **pathinfo()** opera ingenuamente na string de entrada,
> e não tem ciência sobre o sistema de arquivos real, ou componentes de caminho como
> "`..`".

> **Nota**:
>
> Apenas nos sistemas Windows, o caractere `\` será
> interpretado como um separador de diretório. Em outros sistemas será
> tratado como qualquer outro caractere.

**Cuidado**

**pathinfo()** é afetado pela localidade, então para que seja interpretado
corretamente um caminho contendo caracteres multibyte, a localização correspondente deve ser definida
pela função [setlocale()](function.setlocale.md).

### Parâmetros

`path`
:   O caminho a ser analisado.

`flags`
:   Se presente, define o elemento expecífico a ser retornado; pode ser
    **`PATHINFO_DIRNAME`**,
    **`PATHINFO_BASENAME`**,
    **`PATHINFO_EXTENSION`** ou
    **`PATHINFO_FILENAME`**.

    Se `flags` não for especificado, retorna todos
    os elementos disponíveis.

### Valor Retornado

Se o parâmetro `flags` não for passado, um
[array](language.types.array.md) associativo contendo os seguintes elementos é
retornado:
`dirname`, `basename`,
`extension` (se houver), e `filename`.

> **Nota**:
>
> Se `path` tiver mais de uma extensão,
> **`PATHINFO_EXTENSION`** retorna apenas a última e
> **`PATHINFO_FILENAME`** apenas remove a última.
> (veja o primeiro exemplo abaixo).

> **Nota**:
>
> Se `path` não tiver uma extensão, nenhum
> elemento `extension` será retornado
> (veja o segundo exemplo abaixo).

> **Nota**:
>
> Se o `basename` do parâmetro `path` começa
> com um ponto, os seguintes caracteres são interpretados como
> `extension`, e o `filename` estará vazio
> (veja o terceiro exemplo abaixo).

Se `flags` estiver presente, retorna uma
[string](language.types.string.md) contendo o elemento solicitado.

### Examples

**Exemplo #1 Exemplo de **pathinfo()****

```
<?php
$path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');

echo $path_parts['dirname'], "\n";
echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
echo $path_parts['filename'], "\n";
?>
```

O exemplo acima produzirá:

```
/www/htdocs/inc
lib.inc.php
php
lib.inc
```

**Exemplo #2 Exemplo de **pathinfo()** mostrando a diferença entre null e nenhuma extensão**

```
<?php
$path_parts = pathinfo('/path/emptyextension.');
var_dump($path_parts['extension']);

$path_parts = pathinfo('/path/noextension');
var_dump($path_parts['extension']);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(0) ""

Notice: Undefined index: extension in test.php on line 6
NULL
```

**Exemplo #3 Exemplo de **pathinfo()** para um arquivo iniciado por ponto**

```
<?php
print_r(pathinfo('/some/path/.test'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [dirname] => /some/path
    [basename] => .test
    [extension] => test
    [filename] =>
)
```

**Exemplo #4 Exemplo de **pathinfo()** com desconstrução de array**

O parâmetro `flags` não é uma máscara de bits. Apenas um único valor
pode ser fornecido. Para selecionar apenas um conjunto limitado de valores interpretados, use
desconstrução de array desta forma:

```
<?php
['basename' => $basename, 'dirname' => $dirname] = pathinfo('/www/htdocs/inc/lib.inc.php');

var_dump($basename, $dirname);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "lib.inc.php"
string(15) "/www/htdocs/inc"
```

### Veja também

- [dirname()](function.dirname.md) - Retorna o caminho para o diretório pai
- [basename()](function.basename.md) - Retorna a última parte do caminho
- [parse\_url()](function.parse-url.md) - Analisa uma URL e retorna seus componentes
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
