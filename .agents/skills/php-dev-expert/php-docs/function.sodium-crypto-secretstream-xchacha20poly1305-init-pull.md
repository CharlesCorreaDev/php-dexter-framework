# Inicializa um contexto secretstream para descriptografia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.php

---

# sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_pull

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_pull — Inicializa um contexto secretstream para descriptografia

### Descrição

function **sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_pull**([string](language.types.string.md) `$header`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)

Inicializa um contexto secretstream para descriptografia.

### Parâmetros

`header`
:   O cabeçalho do secretstream. Este deve ser um dos valores produzidos por
    [sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_push()](function.sodium-crypto-secretstream-xchacha20poly1305-init-push.md).

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

Estado secretstream.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_secretstream\_xchacha20poly1305\_init\_pull()****

```
<?php
function decrypt_file(string $inputFilePath, string $outputFilePath, string $key): void
{
    $inputFile = fopen($inputFilePath, 'rb');
    $outputFile = fopen($outputFilePath, 'wb');
    $header = fread($inputFile, 24);

    $state = sodium_crypto_secretstream_xchacha20poly1305_init_pull($header, $key);
    $inputFileSize = fstat($inputFile)['size'];

    // Descriptografa o arquivo e grava seu conteúdo no arquivo de saída:
    for ($i = 24; $i < $inputFileSize; $i += 8192) {
        $ctxt_chunk = fread($inputFile, 8192);

        // Não estamos usando $tag, mas em protocolos reais você pode usar isso na criptografia para, por exemplo,
        // acionar uma recodificação ou indicar o fim do arquivo. Então, na descriptografia, você pode afirmar
        // este comportamento.
        [$ptxt_chunk, $tag] = sodium_crypto_secretstream_xchacha20poly1305_pull($state, $ctxt_chunk);
        fwrite($outputFile, $ptxt_chunk);
    }

    sodium_memzero($state);
    fclose($inputFile);
    fclose($outputFile);
}

// sodium_crypto_secretstream_xchacha20poly1305_keygen()
$key = sodium_base642bin('MS0lzb7HC+thY6jY01pkTE/cwsQxnRq0/2L1eL4Hxn8=', SODIUM_BASE64_VARIANT_ORIGINAL);

$example = sodium_hex2bin('971e33b255f0990ef3931caf761c59136efa77b434832f28ec719e3ff73f5aec38b3bba1574ab5b70a8844d8da36a668e802cfea2c');
file_put_contents('hello.enc', $example);
decrypt_file('hello.enc', 'hello.txt.decrypted', $key);
var_dump(file_get_contents('hello.txt.decrypted'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(12) "Hello world!"
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
