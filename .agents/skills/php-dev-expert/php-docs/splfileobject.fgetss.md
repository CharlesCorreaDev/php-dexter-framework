# Obtém linha do arquivo e remove tags HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fgetss.php

---

# SplFileObject::fgetss

(PHP 5 >= 5.1.0, PHP 7)

SplFileObject::fgetss — Obtém linha do arquivo e remove tags HTML

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.3.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public function **SplFileObject::fgetss**([string](language.types.string.md) `$allowable_tags` = ?): [string](language.types.string.md)

Idêntico ao [SplFileObject::fgets()](splfileobject.fgets.md), exceto que
**SplFileObject::fgetss()** tenta remover quaisquer tags HTML e PHP do
texto que lê.
A função mantém o estado de análise de chamada para chamada, e como tal não é
equivalente a chamar [strip\_tags()](function.strip-tags.md) no valor de retorno de
[SplFileObject::fgets()](splfileobject.fgets.md).

### Parâmetros

`allowable_tags`
:   Parâmetro opcional para especificar tags que não devem ser removidas.

### Valor Retornado

Retorna uma string contendo a próxima linha do arquivo com código HTML e PHP
removido, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fgetss()****

```
<?php
$str = <<<EOD
<html><body>
 <p>Bem-vindo! Hoje é o <?php echo(date('jS')); ?> de <?= date('F'); ?>.</p>
</body></html>
Texto fora do bloco HTML.
EOD;
file_put_contents("sample.php", $str);

$file = new SplFileObject("sample.php");
while (!$file->eof()) {
    echo $file->fgetss();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Bem-vindo! Hoje é o  de .

Texto fora do bloco HTML.
```

### Veja também

- [fgetss()](function.fgetss.md) - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [SplFileObject::fgets()](splfileobject.fgets.md) - Obtém linha do arquivo
- [SplFileObject::fgetc()](splfileobject.fgetc.md) - Obtém caractere do arquivo
- [SplFileObject::current()](splfileobject.current.md) - Recupera linha atual do arquivo
- O filtro [string.strip\_tags](filters.string.md#filters.string.strip_tags)

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
