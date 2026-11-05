# Analisa os dados de fp e extrai cada arquivo uuencoded incorporado.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-uudecode-all.php

---

# mailparse\_uudecode\_all

(PECL mailparse >= 0.9.0)

mailparse\_uudecode\_all — 
Analisa os dados de fp e extrai cada arquivo uuencoded incorporado.

### Descrição

function **mailparse\_uudecode\_all**([resource](language.types.resource.md) `$fp`): [array](language.types.array.md)

Analisa os dados do ponteiro do arquivo fornecido e extrai cada
arquivo uuencoded incorporado em um arquivo temporário.

### Parâmetros

`fp`
:   Um identificador de arquivo válido.

### Valor Retornado

Retorna um array de arrays associativos listando informações sobre os nomes dos arquivos.

|  |  |
| --- | --- |
| `filename` | Caminho para o nome do arquivo temporário criado |
| `origfilename` | O nome do arquivo original, apenas para partes uuencoded |

A primeira entrada de nome de arquivo é o corpo da mensagem. As próximas entradas são os
arquivos uuencoded decodificados.

### Examples

**Exemplo #1 Exemplo de **mailparse\_uudecode\_all()****

```
<?php

$text = <<<EOD
To: fred@example.com

hello, this is some text hello.
blah blah blah.

begin 644 test.txt
/=&AI<R!I<R!A('1E<W0*
`
end

EOD;

$fp = tmpfile();
fwrite($fp, $text);

$data = mailparse_uudecode_all($fp);

echo "BODY\n";
readfile($data[0]["filename"]);
echo "UUE ({$data[1]['origfilename']})\n";
readfile($data[1]["filename"]);

// Clean up
unlink($data[0]["filename"]);
unlink($data[1]["filename"]);

?>
```

O exemplo acima produzirá:

```
BODY
To: fred@example.com

hello, this is some text hello.
blah blah blah.

UUE (test.txt)
this is a test
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
