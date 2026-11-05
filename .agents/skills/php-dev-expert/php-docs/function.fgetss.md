# Ler uma linha de um ponteiro de arquivo e retira as tags HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fgetss.php

---

# fgetss

(PHP 4, PHP 5, PHP 7)

fgetss — Ler uma linha de um ponteiro de arquivo e retira as tags HTML

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.3.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **fgetss**([resource](language.types.resource.md) `$handle`, [int](language.types.integer.md) `$length` = ?, [string](language.types.string.md) `$allowable_tags` = ?): [string](language.types.string.md)

Idêntico a [fgets()](function.fgets.md), exceto que
**fgetss()** tenta retirar qualquer byte NUL, tag HTML ou PHP do
texto que ela lê.
A função retém o estado de interpretação de chamada para chamada, e desta forma não É
equivalente a chamar [strip\_tags()](function.strip-tags.md) no valor de retorno de
[fgets()](function.fgets.md).

### Parâmetros

`handle`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

`length`
:   Tamanho da informação a ser recebida.

`allowable_tags`
:   Pode-se usar o terceiro parâmetro opcional para especificar as tags
    que não devem ser removidas.
    Consulte [strip\_tags()](function.strip-tags.md) para detalhes sobre
    `allowable_tags`.

### Valor Retornado

Retorna uma string de até `length` - 1 bytes lidos do
arquivo apontado por `handle`, com todo o código HTML e PHP
removidos.

Se um erro ocorrer, retorna **`false`**.

### Examples

**Exemplo #1 Lendo um arquivo PHP linha por linha**

```
<?php
$str = <<<EOD
<html><body>
 <p>Bem-vindo! Hoje é <?php echo(date('jS')); ?> de <?= date('F'); ?>.</p>
</body></html>
Texto fora do bloco HTML.
EOD;
file_put_contents('sample.php', $str);

$handle = @fopen("sample.php", "r");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgetss($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Bem-vindo! Hoje é  de .

Texto fora do bloco HTML.
```

### Notas

> **Nota**:
>
> Se o PHP não estiver reconhecendo corretamente
> os finais de linha ao ler arquivos em um computador Macintosh ou que foram criados
> em um, habilitar a opção de configuração em tempo de execução
> [auto\_detect\_line\_endings](filesystem.configuration.md#ini.auto-detect-line-endings)
> pode ajudar a resolver o problema.

### Veja também

- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet
- [strip\_tags()](function.strip-tags.md) - Retira as tags HTML e PHP de uma string
- [SplFileObject::fgetss()](splfileobject.fgetss.md) - Obtém linha do arquivo e remove tags HTML
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
