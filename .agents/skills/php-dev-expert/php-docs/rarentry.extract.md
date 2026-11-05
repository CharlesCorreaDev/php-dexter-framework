# Extrai entrada do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.extract.php

---

# RarEntry::extract

(PECL rar >= 0.1)

RarEntry::extract — Extrai entrada do arquivo

### Descrição

public function **RarEntry::extract**(  
    [string](language.types.string.md) `$dir`,  
    [string](language.types.string.md) `$filepath` = "",  
    [string](language.types.string.md) `$password` = NULL,  
    [bool](language.types.boolean.md) `$extended_data` = **`false`**  
): [bool](language.types.boolean.md)

**RarEntry::extract()** extrai os dados da entrada.
Ele criará um novo arquivo no `dir` especificado
com o nome idêntico ao nome da entrada,
a menos que o segundo argumento seja especificado. Veja abaixo para mais informações.

### Parâmetros

`dir`
:   Caminho para o diretório onde os arquivos devem ser extraídos. Este parâmetro é
    considerado se e somente se `filepath` não for. Se ambos
    os parâmetros estiverem vazios, será tentada uma extração para o diretório
    atual.

`filepath`
:   Caminho (relativo ou absoluto) contendo o diretório e o nome do
    arquivo extraído. Este parâmetro substitui o parâmetro
    `dir` e o nome do arquivo original.

`password`
:   A senha usada para criptografar esta entrada. Se a entrada não estiver criptografada, este valor não será utilizado e poderá
    ser omitido. Se este parâmetro for omitido e a entrada for criptografada, será usada a senha
    fornecida para [rar\_open()](rararchive.open.md), se houver. Se uma senha errada for fornecida, explícita ou
    implicitamente via [rar\_open()](rararchive.open.md), a verificação CRC falhará e este método falhará e retornará **`false`**.
    Se nenhuma senha for fornecida e uma for necessária, este método falhará e retornará **`false`**.
    Você pode verificar se uma entrada está criptografada com [RarEntry::isEncrypted()](rarentry.isencrypted.md).

`extended_data`
:   Se **`true`**, informações estendidas, como ACLs NTFS e informações do proprietário do Unix, serão definidas nos arquivos de
    extração, desde que estejam presentes no arquivo.

**Aviso**

Antes da versão 2.0.0, esta função não tratava
caminhos corretamente. Use [realpath()](function.realpath.md) como solução alternativa.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rar 3.0.0 | `extended_data` foi adicionado. |
| PECL rar 3.0.0 | O suporte para arquivos RAR com nomes de entrada repetidos não apresenta mais defeitos. |

### Examples

**Exemplo #1 Exemplo de **RarEntry::extract()****

```
<?php

$rar_file = rar_open('example.rar') or die("Falha ao abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'Dir/arquivo.txt') or die("Falha ao pesquisar entrada");

$entry->extract('/dir/oara'); // cria /dir/para/Dir/arquivo.txt
$entry->extract(false, '/dir/para/novo_nome.txt'); // cria /dir/para/novo_nome.txt

?>
```

**Exemplo #2 Como extrair todos os arquivos do arquivo:**

```
<?php

/* exemplo por Erik Jenssen também conhecido como erix */

$filename = "foobar.rar";
$filepath = "/home/foo/bar/";

$rar_file = rar_open($filepath.$filename);
$list = rar_list($rar_file);
foreach($list as $file) {
    $entry = rar_entry_get($rar_file, $file);
    $entry->extract("."); // extrai para o diretório atual
}
rar_close($rar_file);

?>
```

### Veja também

- [RarEntry::getStream()](rarentry.getstream.md) - Obtém manipulador de arquivo para entrada
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
