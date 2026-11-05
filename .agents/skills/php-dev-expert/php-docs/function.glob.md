# Encontra caminhos que combinam com uma expressão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.glob.php

---

# glob

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

glob — Encontra caminhos que combinam com uma expressão

### Descrição

function **glob**([string](language.types.string.md) `$pattern`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

A função **glob()** procura por todos os caminhos
que correspondem à expressão em `pattern` de acordo
com as regras usadas pela função glob() da libc, que é semelhante
às regras usadas por shells comuns.

O comportamento em sistemas Unix e macOS é determinado pela implementação
de glob() no sistema. No Windows, é usada uma implementação que está em conformidade
com a definição POSIX 1003.2 para glob() e inclui
uma extensão para lidar com a convenção `[!...]`
para negar um intervalo.

### Parâmetros

`pattern`
:   O padrão. Não é feita nenhuma expansão de til ou substituição de parâmetros.

    Caracteres especiais:

    - `*` - Corresponde a zero ou mais caracteres.
    - `?` - Corresponde a exatamente um caractere (qualquer caractere).
    - `[...]` - Corresponde a um caractere de um grupo de
      caracteres. Se o primeiro caractere for `!`,
      corresponde a qualquer caractere que não estiver no grupo.
    - `{a,b,c}` - Corresponde a uma string de um grupo de
      strings delimitadas por vírgula quando a opção **`GLOB_BRACE`**
      for usada.
    - `\` - Faz escape no caractere seguinte,
      exceto quando a opção **`GLOB_NOESCAPE`** for usada.

`flags`
:   Umas das constantes **`GLOB_*`**.

### Valor Retornado

Retorna um array contendo os arquivos/diretórios que corresponderam, um array
vazio se nenhum arquivo correspondeu ou **`false`** em caso de erro.
A menos que `GLOB_NOSORT` tenha sido usada, os nomes serão
ordenados alfabeticamente e numericamente.

### Examples

**Exemplo #1
Modo conveniente de como **glob()** pode susbstituir
[opendir()](function.opendir.md) e companhia.**

```
<?php
foreach (glob("*.txt") as $arquivo) {
    echo "tamanho de $arquivo " . filesize($arquivo) . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
tamanho de funclist.txt 44686
tamanho de funcsummary.txt 267625
tamanho de quickref.txt 137820
```

**Exemplo #2
Exemplo com uma expressão mais complexa**

```
<?php
foreach (glob("caminho/*/*.{txt,md}", \GLOB_BRACE) as $filename) {
    echo "$filename\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
caminho/docs/mailinglist-rules.md
caminho/docs/README.md
caminho/docs/release-process.md
caminho/pear/install-pear.txt
caminho/Zend/README.md
```

### Notas

> **Nota**:
>
> Esta função não funcionará em
> [arquivos remotos](features.remote-files.md), pois o arquivo a
> ser examinado deve ser acessível através do sistema de arquivos do servidor.

> **Nota**:
>
> Esta função não está disponível em alguns sistemas (ex.: antigo Sun OS).

### Veja também

- [opendir()](function.opendir.md) - Abre um manipulador de diretório
- [readdir()](function.readdir.md) - Lê entrada do manipulador do diretório
- [closedir()](function.closedir.md) - Fecha o manipulador do diretório
- [fnmatch()](function.fnmatch.md) - Compara nome de arquivo com um padrão

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
