# Obtém o caminho para o arquivo php.ini carregado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.php-ini-loaded-file.php

---

# php\_ini\_loaded\_file

(PHP 5 >= 5.2.4, PHP 7, PHP 8)

php\_ini\_loaded\_file — Obtém o caminho para o arquivo php.ini carregado

### Descrição

function **php\_ini\_loaded\_file**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Verifica se um php.ini arquivo está carregado e retorna seu caminho.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O caminho do arquivo php.ini, ou **`false`** se nenhum tiver sido carregado.

### Examples

**Exemplo #1 Exemplo de **php\_ini\_loaded\_file()****

```
<?php
$inipath = php_ini_loaded_file();

if ($inipath) {
    echo 'Arquivo php.ini carregado: ' . $inipath;
} else {
    echo 'Nenhum arquivo php.ini carregado';
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Arquivo php.ini carregado: /usr/local/php/php.ini
```

### Veja também

- [php\_ini\_scanned\_files()](function.php-ini-scanned-files.md) - Retorna uma lista de arquivos .ini analisados ​​do diretório ini adicional
- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP
- [O arquivo de configuração](configuration.file.md)

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
