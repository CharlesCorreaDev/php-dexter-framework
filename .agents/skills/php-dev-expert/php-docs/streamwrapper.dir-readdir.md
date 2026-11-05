# Lê entrada do manipulador de diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.dir-readdir.php

---

# streamWrapper::dir\_readdir

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::dir\_readdir — Lê entrada do manipulador de diretório

### Descrição

public function **streamWrapper::dir\_readdir**(): [string](language.types.string.md)|[bool](language.types.boolean.md)

Este método é chamado em resposta a [readdir()](function.readdir.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Deve retornar uma [string](language.types.string.md) representando a próxima entrada, ou
**`false`** se não existir uma próxima.

**Aviso**

Retornar [true](language.types.singleton.md) ou [false](language.types.singleton.md) terá o mesmo
efeito de sinalizar que não há próximo arquivo. No entanto, usar o valor
[true](language.types.singleton.md) é desencorajado e [false](language.types.singleton.md) deve ser
usado para sinalizar essa condição.

> **Nota**:
>
> Um valor de retorno não booleano será convertido para [string](language.types.string.md).

### Erros/Exceções

Emite
um **`E_WARNING`** se a chamada a este método falhar
(ou seja, não implementado).

### Examples

**Exemplo #1 Listando arquivos de arquivadores tar**

```
<?php
class streamWrapper {
    protected $fp;

    public function dir_opendir($path, $options) {
        $url = parse_url($path);

        $path = $url["host"] . $url["path"];

        if (!is_readable($path)) {
            trigger_error("$path não pode ser lido", E_USER_NOTICE);
            return false;
        }
        if (!is_file($path)) {
            trigger_error("$path não é um arquivo", E_USER_NOTICE);
            return false;
        }

        $this->fp = fopen($path, "rb");
        return true;
    }

    public function dir_readdir() {
        // Extrai o cabeçalho desta entrada
        $header      = fread($this->fp, 512);
        $data = unpack("a100filename/a8mode/a8uid/a8gid/a12size/a12mtime/a8checksum/a1filetype/a100link/a100linkedfile", $header);

        // Tira espaços do arquivo e do tamanho
        $filename    = trim($data["filename"]);

        // Nada? Estamos no final do arquivo
        if (!$filename) {
            return false;
        }

        $octal_bytes = trim($data["size"]);
        // Tamanho do arquivo é definido em octetos
        $bytes       = octdec($octal_bytes);

        // tar arredonda tamanhos em múltiplos de 512 bytes (preenchidos com zero)
        $rest        = $bytes % 512;
        if ($rest > 0) {
            $bytes      += 512 - $rest;
        }

        // Pesquisa o arquivo
        fseek($this->fp, $bytes, SEEK_CUR);

        return $filename;
    }

    public function dir_closedir() {
        return fclose($this->fp);
    }

    public function dir_rewinddir() {
        return fseek($this->fp, 0, SEEK_SET);
    }
}

stream_wrapper_register("tar", "streamWrapper");
$handle = opendir("tar://example.tar");
while (false !== ($file = readdir($handle))) {
    var_dump($file);
}

echo "Retrocedendo..\n";
rewind($handle);
var_dump(readdir($handle));

closedir($handle);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(13) "construct.xml"
string(16) "dir-closedir.xml"
string(15) "dir-opendir.xml"
string(15) "dir-readdir.xml"
string(17) "dir-rewinddir.xml"
string(9) "mkdir.xml"
string(10) "rename.xml"
string(9) "rmdir.xml"
string(15) "stream-cast.xml"
string(16) "stream-close.xml"
string(14) "stream-eof.xml"
string(16) "stream-flush.xml"
string(15) "stream-lock.xml"
string(15) "stream-open.xml"
string(15) "stream-read.xml"
string(15) "stream-seek.xml"
string(21) "stream-set-option.xml"
string(15) "stream-stat.xml"
string(15) "stream-tell.xml"
string(16) "stream-write.xml"
string(10) "unlink.xml"
string(12) "url-stat.xml"
Retrocedendo..
string(13) "construct.xml"
```

### Veja também

- [readdir()](function.readdir.md) - Lê entrada do manipulador do diretório

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
