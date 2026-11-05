# Abre um manipulador de diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opendir.php

---

# opendir

(PHP 4, PHP 5, PHP 7, PHP 8)

opendir — Abre um manipulador de diretório

### Descrição

function **opendir**([string](language.types.string.md) `$directory`, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Abre um manipulador de diretório para ser usado em chamadas subsequentes de
[closedir()](function.closedir.md), [readdir()](function.readdir.md) e
[rewinddir()](function.rewinddir.md).

### Parâmetros

`directory`
:   O caminho do diretório a ser aberto.

`context`
:   Para descrição do parâmetro `context`,
    consulte [a seção sobre fluxos](ref.stream.md) do
    manual.

### Valor Retornado

Retorna um manipulador de diretório em caso de sucesso,
ou **`false`** em caso de falha

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

Isto pode ocorrer se `directory` não for um nome de diretório válido,
o diretório não puder ser aberto por restrições de permissão,
ou por erros no sistema de arquivos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` agora pode ser nulo. |

### Examples

**Exemplo #1
Lista todas as entradas de um diretório, pulando os especiais `.`
e `..`**

Como os nomes de diretório e arquivo podem ser strings interpretadas como "falso" pelo PHP
(por exemplo um diretório com nome `"0"`) e
[readdir()](function.readdir.md) retorna **`false`** quando tiver lido todas as entradas
em um diretório, deve-se usar o [operador de comparação](language.operators.comparison.md)
`===`
para distinguir adequadamente entre uma entrada de diretório cujo nome seja interpretado como "falso" e
a função ter terminado de ler todas as entradas.

```
<?php

if ($handle = opendir('/path/to/files')) {
    echo "Entradas:\n";

    /* Lidando corretamente com entradas de diretório que podem ser interpretadas como "falso" */
    while (false !== ($entry = readdir($handle))) {
        if ($entry === '.' || $entry === '..') {
            continue;
        }
        echo "$entry\n";
    }

    closedir($handle);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Entradas:
base
en
fr
output.md
test.php
```

### Veja também

- [readdir()](function.readdir.md) - Lê entrada do manipulador do diretório
- [rewinddir()](function.rewinddir.md) - Retroceder o manipulador de diretório
- [closedir()](function.closedir.md) - Fecha o manipulador do diretório
- [dir()](function.dir.md) - Retorna uma instância da classe Directory
- [is\_dir()](function.is-dir.md) - Diz se o caminho é um diretório
- [glob()](function.glob.md) - Encontra caminhos que combinam com uma expressão
- [scandir()](function.scandir.md) - Lista arquivos e diretórios dentro do caminho especificado

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
