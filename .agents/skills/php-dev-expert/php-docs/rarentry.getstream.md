# Obtém manipulador de arquivo para entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.getstream.php

---

# RarEntry::getStream

(PECL rar >= 2.0.0)

RarEntry::getStream — Obtém manipulador de arquivo para entrada

### Descrição

public function **RarEntry::getStream**([string](language.types.string.md) `$password` = ?): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Retorna um manipulador de arquivos que
oferece suporte a operações de leitura. Este manipulador fornece descompressão instantânea
para esta entrada.

manipulador não é invalidado chamando
[rar\_close()](rararchive.close.md).

**Aviso**

O fluxo resultante não possui verificação de integridade. Em particular, a corrupção e
a descriptografia de arquivos com uma chave errada não serão detectadas. É responsabilidade do programador usar o CRC
da entrada para verificar a integridade, se assim desejar.

### Parâmetros

`password`
:   A senha usada para criptografar esta entrada. Se a entrada não estiver criptografada, este valor não será usado e poderá
    ser omitido. Se este parâmetro for omitido e a entrada for criptografada, será usada a senha fornecida para
    [rar\_open()](rararchive.open.md), se houver. Se uma senha errada for fornecida, explícita
    ou implicitamente via [rar\_open()](rararchive.open.md), o fluxo resultante deste método produzirá uma saída
    errada. Se nenhuma senha for fornecida e uma for necessária, este método falhará e retornará **`false`**.
    Você pode verificar se uma entrada está criptografada com [RarEntry::isEncrypted()](rarentry.isencrypted.md).

### Valor Retornado

O manipulador de arquivo ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rar 3.0.0 | O suporte para arquivos RAR com nomes de entrada repetidos não apresenta mais defeitos. |

### Examples

**Exemplo #1 Exemplo de **RarEntry::getStream()****

```
<?php

$rar_file = rar_open('exemplo.rar');
if ($rar_file === false)
    die("Falha ao abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'Dir/arquivo.txt');
if ($entry === false)
    die("Falha ao pesquisar tal entrada");

$stream = $entry->getStream();
if ($stream === false)
    die("Falha ao obter fluxo.");

rar_close($rar_file); // fluxo é independente do arquivo

while (!feof($stream)) {
    $buff = fread($stream, 8192);
    if ($buff !== false)
        echo $buff;
    else
        break; // erro em fread
}

fclose($stream);

?>
```

### Veja também

- [RarEntry::extract()](rarentry.extract.md) - Extrai entrada do arquivo
- Empacotador [`rar://`](wrappers.rar.md)

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
