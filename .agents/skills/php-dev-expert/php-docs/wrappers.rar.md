# RAR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.rar.php

---

# rar://

rar:// — RAR

### Descrição

Este empacotador usa o caminho para o arquivo RAR (relativo ou absoluto) codificado em url,
um asterisco opcional (`*`), um símbolo de número opcional
(`#`) e uma entrada de nome opcional codificada em url, como armazenado no
arquivo. Especificar uma entrada de nome requer o símbolo de número; Uma barra (/) no início
da entrada de nome é opcional.

Este empacotador pode abrir tanto arquivos quanto diretórios. Quando abre diretórios,
o asterisco força o retorno não codificado dos nomes das entradas do diretório. Se não houver
asterisco, eles serão retornados com codificação url – a razão para isto é permitir
que o empacotador seja usado corretamente com funcionalidades internas como
[RecursiveDirectoryIterator](class.recursivedirectoryiterator.md) na presença de nomes de arquivo que se parecem
com dados codificados de url.

Se o símbolo de número (#) e a parte de nome de entrada não forem incluídos, a raiz dos arquivos
será mostrada. Isto difere de diretórios comuns pelo fato que o fluxo
resultante não conterá informações como horário de modificação, já que o diretório
raiz não é armazenado em uma entrada individual no arquivo.
O uso do empacotador com [RecursiveDirectoryIterator](class.recursivedirectoryiterator.md) requer
que o símbolo de número seja incluído na URL ao acessar a raiz, para que as
URLs dos ramos filhos sejam construídos corretamente.

> **Nota**:
> **Este empacotador não é habilitado por padrão**  
>
> Para usar o empacotador rar://,
> a extensão
> [» rar](https://pecl.php.net/package/rar)
> disponível em [» PECL](https://pecl.php.net/) deve ser instalada.

rar://
Disponível desde o PECL rar 3.0.0

### Uso

- rar://<nome de arquivo codificado como url>[\*][#[<nome de entrada codificado como url>]]

### Opções

**Sumário do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Não |
| Restrito por [allow\_url\_include](filesystem.configuration.md#ini.allow-url-include) | Não |
| Permite Leitura | Sim |
| Permite Escrita | Não |
| Permite Adição | Não |
| Permite Leitura e Escrita Simultâneas | Não |
| Suporta [stat()](function.stat.md) | Sim |
| Suporta [unlink()](function.unlink.md) | Não |
| Suporta [rename()](function.rename.md) | Não |
| Suporta [mkdir()](function.mkdir.md) | Não |
| Suporta [rmdir()](function.rmdir.md) | Não |

**Opções de contexto**

| Nome | Uso | Padrão |
| --- | --- | --- |
| `open_password` | A senha utilizada para criptografar os cabeçalhos do arquivo, se houver. WinRAR irá criptografar todos os arquivos com a mesma senha do cabeçalho quando ela estiver presente, ou seja, para arquivos com cabeçalhos criptografados, `file_password` será ignorada. |  |
| `file_password` | A senha utilizada para criptografar um arquivo, se houver. Se os cabeçalhos também estiverem criptografados, esta opção será ignorada em favor de `open_password`. A razão pela qual existem duas opções é para cobrir a possibilidade de suportar arquivos com senhas diferentes para cabeçalhos e arquivos, se este tipo de arquivo porventura vier a existir. Note que se o arquivo não tiver seus cabeçalhos criptografados, `open_password` será ignorada e esta opção deve ser usada no lugar. |  |
| `volume_callback` | Uma função de retorno para determinar o caminho de volumes faltantes. Consulte [RarArchive::open()](rararchive.open.md) para mais informação. |  |

### Examples

**Exemplo #1 Explorando um arquivo RAR**

```
<?php

class MyRecDirIt extends RecursiveDirectoryIterator {
    function current() {
        return rawurldecode($this->getSubPathName()) .
            (is_dir(parent::current())?" [DIR]":"");
    }
}

$f = "rar://" . rawurlencode(dirname(__FILE__)) .
    DIRECTORY_SEPARATOR . 'dirs_and_extra_headers.rar#';

$it = new RecursiveTreeIterator(new MyRecDirIt($f));

foreach ($it as $s) {
    echo $s, "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
|-allow_everyone_ni [DIR]
|-file1.txt
|-file2_אּ.txt
|-with_streams.txt
\-אּ [DIR]
  |-אּ\%2Fempty%2E [DIR]
  | \-אּ\%2Fempty%2E\file7.txt
  |-אּ\empty [DIR]
  |-אּ\file3.txt
  |-אּ\file4_אּ.txt
  \-אּ\אּ_2 [DIR]
    |-אּ\אּ_2\file5.txt
    \-אּ\אּ_2\file6_אּ.txt
```

**Exemplo #2 Abrindo um arquivo criptografado (criptografia de cabeçalho)**

```
<?php
$stream = fopen("rar://" .
    rawurlencode(dirname(__FILE__)) . DIRECTORY_SEPARATOR .
    'encrypted_headers.rar' . '#encfile1.txt', "r", false,
    stream_context_create(
        array(
            'rar' =>
                array(
                    'open_password' => 'samplepassword'
                )
            )
        )
    );
var_dump(stream_get_contents($stream));
/* datas de criação e de último acesso são opcionais no WinRAR, por isso a maioria
 * dos arquivos não as possui */
var_dump(fstat($stream));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(26) "Encrypted file 1 contents."
Array
(
    [0] => 0
    [1] => 0
    [2] => 33206
    [3] => 1
    [4] => 0
    [5] => 0
    [6] => 0
    [7] => 26
    [8] => 0
    [9] => 1259550052
    [10] => 0
    [11] => -1
    [12] => -1
    [dev] => 0
    [ino] => 0
    [mode] => 33206
    [nlink] => 1
    [uid] => 0
    [gid] => 0
    [rdev] => 0
    [size] => 26
    [atime] => 0
    [mtime] => 1259550052
    [ctime] => 0
    [blksize] => -1
    [blocks] => -1
)
```

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
