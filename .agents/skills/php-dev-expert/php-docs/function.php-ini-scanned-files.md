# Retorna uma lista de arquivos .ini analisados ​​do diretório ini adicional

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.php-ini-scanned-files.php

---

# php\_ini\_scanned\_files

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

php\_ini\_scanned\_files — Retorna uma lista de arquivos .ini analisados ​​do diretório ini adicional

### Descrição

function **php\_ini\_scanned\_files**(): [string](language.types.string.md)|[false](language.types.singleton.md)

**php\_ini\_scanned\_files()** retorna uma lista separada por vírgulas
de arquivos de configuração analisados ​​após o php.ini. Os diretórios
pesquisados ​​são definidos por uma opção em tempo de compilação e, opcionalmente, por uma
variável de ambiente em tempo de execução: mais informações podem ser encontradas no
[guia de instalação](configuration.file.md#configuration.file.scan).

Os arquivos de configuração retornados incluem o caminho completo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma sequência separada por vírgulas de arquivos .ini em caso de sucesso. Cada vírgula é
seguida por uma nova linha. Se a diretiva **--with-config-file-scan-dir** do comando configure não tiver sido definida e a
variável de ambiente PHP\_INI\_SCAN\_DIR também não estiver definida, **`false`**
é retornado. Se foi definida e o diretório estiver vazio, uma string vazia será
retornada. Se um arquivo estiver irreconhecível, o arquivo ainda aparecerá na
string retornada, mas também ocorrerá um erro de PHP. Este erro do PHP será
visto tanto em tempo de compilação quanto durante o uso de
**php\_ini\_scanned\_files()**.

### Examples

**Exemplo #1 Um exemplo simples para listar os arquivos ini retornados**

```
<?php
if ($filelist = php_ini_scanned_files()) {
    if (strlen($filelist) > 0) {
        $files = explode(',', $filelist);

        foreach ($files as $file) {
            echo "<li>" . trim($file) . "</li>\n";
        }
    }
}
?>
```

### Veja também

- [ini\_set()](function.ini-set.md) - Define o valor de uma opção de configuração
- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP
- [php\_ini\_loaded\_file()](function.php-ini-loaded-file.md) - Obtém o caminho para o arquivo php.ini carregado

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
