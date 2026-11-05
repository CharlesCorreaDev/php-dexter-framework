# Escrita binary-safe em arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fwrite.php

---

# fwrite

(PHP 4, PHP 5, PHP 7, PHP 8)

fwrite — Escrita binary-safe em arquivos

### Descrição

function **fwrite**([resource](language.types.resource.md) `$stream`, [string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

**fwrite()** grava o conteúdo de
`data` no ponteiro de arquivo informado em
`stream`.

### Parâmetros

`stream`
:   Um [resource](language.types.resource.md) de ponteiro do sistema de arquivos
    que normalmente é criado usando [fopen()](function.fopen.md).

`data`
:   A string a ser escrita.

`length`
:   Se `length` for um [int](language.types.integer.md), a escrita irá parar
    depois que`length` forem escritos, ou o
    o fim de `data` for alcançado, o que ocorrer primeiro.

### Valor Retornado

**fwrite()** retorna o número de bytes
escritos, ou **`false`** em caso de falha.

### Erros/Exceções

**fwrite()** emite um **`E_WARNING`** em caso falhas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` pode ser null. |

### Examples

**Exemplo #1 Exemplo de **fwrite()****

```
<?php
$filename = 'test.txt';
$somecontent = "Acrescente isso no arquivo\n";

// Vamos garantir que o arquivo existe e pode ser escrito
if (is_writable($filename)) {

    // Nesse exemplo estamos abrindo o $filename em modo append.
    // O ponteiro do arquivo estará no final do arquivo
    // e portanto é aqui que $somecontent será posicionado pelo fwrite().
    if (!$fp = fopen($filename, 'a')) {
         echo "Erro ao abrir o ($filename)";
         exit;
    }

    // Escrever alguma coisa no arquivo.
    if (fwrite($fp, $somecontent) === FALSE) {
        echo "Erro ao escrever no arquivo ($filename)";
        exit;
    }

    echo "Sucesso, escrito ($somecontent) no arquivo ($filename)";

    fclose($fp);

} else {
    echo "O arquivo não permite escrita";
}
?>
```

### Notas

> **Nota**:
>
> Escrever em um fluxo de rede pode acabar antes de toda a string ser transmitida.
> O retorno de **fwrite()** precisa ser inspecionado:
>
> ```
> <?php
> function fwrite_stream($fp, $string) {
>     for ($written = 0; $written < strlen($string); $written += $fwrite) {
>         $fwrite = fwrite($fp, substr($string, $written));
>         if ($fwrite === false) {
>             return $written;
>         }
>     }
>     return $written;
> }
> ?>
> ```

> **Nota**:
>
> Em sistemas que diferenciam entre arquivos binários e texto
> (por exemplo Windows) o arquivo tem que ser aberto com 'b'
> incluído no parâmetro 'mode' na [fopen()](function.fopen.md).

> **Nota**:
>
> Se o `stream` foi aberto com [fopen()](function.fopen.md)
> em modo de adição, escritas com **fwrite()** são atômicas
> (a não ser que o tamanho da `data` exceda o tamanho
> de bloco do sistema de arquivos, em algumas plataformas, e contanto que o
> arquivo esteja em um sistema de arquivos local). Sendo assim,
> não há necessidade de bloquear um recurso com [flock()](function.flock.md) antes
> de chamar **fwrite()**; todos os dados serão escritos sem interrupção.

> **Nota**:
>
> Se escrever duas vezes no ponteiro do arquivo, então a informação
> será adicionado ao final do contéudo do arquivo:
>
> ```
> <?php
> $fp = fopen('data.txt', 'w');
> fwrite($fp, '1');
> fwrite($fp, '23');
> fclose($fp);
>
> // O conteúdo de 'data.txt' é 123, e não 23
> ?>
> ```

### Veja também

- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [file\_get\_contents()](function.file-get-contents.md) - Lê todo o conteúdo de um arquivo para uma string
- [pack()](function.pack.md) - Empacota dados em uma string binária

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
