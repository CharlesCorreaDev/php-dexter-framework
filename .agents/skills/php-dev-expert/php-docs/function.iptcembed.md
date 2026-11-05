# Incorpora dados binários IPTC em uma imagem JPEG

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iptcembed.php

---

# iptcembed

(PHP 4, PHP 5, PHP 7, PHP 8)

iptcembed — Incorpora dados binários IPTC em uma imagem JPEG

### Descrição

function **iptcembed**([string](language.types.string.md) `$iptc_data`, [string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$spool` = 0): [string](language.types.string.md)|[bool](language.types.boolean.md)

Incorpora dados binários IPTC em uma imagem JPEG.

### Parâmetros

`iptc_data`
:   Os dados a serem escritos.

`filename`
:   Caminho para a imagem JPEG.

`spool`
:   Opção de enfileiramento. Se esta opção for menor que 2, o JPEG será
    retornado como uma string. Caso contrário será mostrado em STDOUT.

### Valor Retornado

Se `spool` for menor que 2, o JPEG será retornado,
ou **`false`** em caso de falha. Caso contrário, retorna **`true`** se bem sucedido
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Incorporando dados IPTC em um JPEG**

```
<?php

// função iptc_make_tag() por Thies C. Arntzen
function iptc_make_tag($rec, $data, $value)
{
    $length = strlen($value);
    $retval = chr(0x1C) . chr($rec) . chr($data);

    if($length < 0x8000)
    {
        $retval .= chr($length >> 8) .  chr($length & 0xFF);
    }
    else
    {
        $retval .= chr(0x80) .
                   chr(0x04) .
                   chr(($length >> 24) & 0xFF) .
                   chr(($length >> 16) & 0xFF) .
                   chr(($length >> 8) & 0xFF) .
                   chr($length & 0xFF);
    }

    return $retval . $value;
}

// Caminho para o arquivo JPEG
$path = './phplogo.jpg';

// Define as etiquetas IPTC
$iptc = array(
    '2#120' => 'Test image',
    '2#116' => 'Copyright 2008-2009, The PHP Group'
);

// Converte as etiquetas IPTC em código binário
$data = '';

foreach($iptc as $tag => $string)
{
    $tag = substr($tag, 2);
    $data .= iptc_make_tag(2, $tag, $string);
}

// Incorpora os dados IPTC
$content = iptcembed($data, $path);

// Grava os novos dados de imagem no arquivo.
$fp = fopen($path, "wb");
fwrite($fp, $content);
fclose($fp);
?>
```

### Notas

> **Nota**:
>
> Esta função não requer a biblioteca de imagens GD.

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
