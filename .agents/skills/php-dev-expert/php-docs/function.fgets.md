# Lê uma linha de um ponteiro de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fgets.php

---

# fgets

(PHP 4, PHP 5, PHP 7, PHP 8)

fgets — Lê uma linha de um ponteiro de arquivo

### Descrição

function **fgets**([resource](language.types.resource.md) `$stream`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma linha do ponteiro do arquivo.

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

`length`
:   A leitura termina quando `length` - 1 bytes tenham sido
    lidos, ou uma quebra de linha (que é incluída no retorno), ou no final do arquivo
    (EOF), o que acontecer primeiro. Se nenhum comprimento for especificado, a leitura
    do fluxo continuará até chegar ao final da linha.

### Valor Retornado

Retorna uma string de até `length` - 1 bytes lida do
arquivo apontado por `stream`. Se não tiver mais dados
para ler no ponteiro do arquivo, então retorna **`false`**.

Se um erro ocorrer, é retornado **`false`**.

### Examples

**Exemplo #1 Lendo um arquivo linha por linha**

```
<?php

$fp = @fopen("/tmp/arquivodeentrada.txt", "r");

if ($fp) {
    while (($buffer = fgets($fp, 4096)) !== false) {
        echo $buffer, PHP_EOL;
    }

    if (!feof($fp)) {
        echo "Erro: falha inexperada de fgets()\n";
    }

    fclose($fp);
}

?>
```

### Notas

> **Nota**:
>
> Se o PHP não estiver reconhecendo corretamente
> os finais de linha ao ler arquivos em um computador Macintosh ou que foram criados
> em um, habilitar a opção de configuração em tempo de execução
> [auto\_detect\_line\_endings](filesystem.configuration.md#ini.auto-detect-line-endings)
> pode ajudar a resolver o problema.

> **Nota**:
>
> Pessoas acostumadas à semântica do **fgets()** em 'C' devem notar a
> diferença em como o fim do arquivo (`EOF`) é retornado.

### Veja também

- [fgetss()](function.fgetss.md) - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fgetc()](function.fgetc.md) - Lê um caractere do ponteiro de arquivo
- [stream\_get\_line()](function.stream-get-line.md) - Obtém uma linha do recurso do fluxo até um delimitador informado
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet
- [stream\_set\_timeout()](function.stream-set-timeout.md) - Define o limite de tempo em um fluxo

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
