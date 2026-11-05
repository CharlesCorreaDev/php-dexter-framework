# Retorna uma instância da classe Directory

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dir.php

---

# dir

(PHP 4, PHP 5, PHP 7, PHP 8)

dir — Retorna uma instância da classe Directory

### Descrição

function **dir**([string](language.types.string.md) `$directory`, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [Directory](class.directory.md)|[false](language.types.singleton.md)

Um mecanismo pseudo-orientado a objeto para ler um diretório.
O diretório fornecido pelo parâmetro `directory` é aberto.

### Parâmetros

`directory`
:   Diretório a ser aberto

`context`
:   Um [resource](language.types.resource.md) de
    [contexto de fluxo](stream.contexts.md).

### Valor Retornado

Retorna uma instância de [Directory](class.directory.md), ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo da **dir()****

Repare nos detalhes de como o valor retornado de [Directory::read()](directory.read.md)
é verificado no exemplo abaixo. É testado explicitamente
se o valor de retorno é idêntico a (igual e do
mesmo tipo que - consulte [operadores de comparação](language.operators.comparison.md) para mais informação) **`false`**, caso
contrário, qualquer entrada de diretório cujo nome seja interpretado como **`false`** fará
parar o loop.

```
<?php
$d = dir("/etc/php5");
echo "Handle: " . $d->handle . "\n";
echo "Caminho: " . $d->path . "\n";
while (false !== ($entry = $d->read())) {
   echo $entry."\n";
}
$d->close();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Handle: Resource id #2
Caminho: /etc/php5
.
..
apache
cgi
cli
```

### Notas

> **Nota**:
>
> A ordem em que as entradas do diretório são retornadas pelo método de leitura é
> dependente do sistema operacional.

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
