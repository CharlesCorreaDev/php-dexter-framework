# Atualiza as entradas de cache para os arquivos armazenados em cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wincache-refresh-if-changed.php

---

# wincache\_refresh\_if\_changed

(PECL wincache >= 1.0.0)

wincache\_refresh\_if\_changed — 
Atualiza as entradas de cache para os arquivos armazenados em cache

### Descrição

function **wincache\_refresh\_if\_changed**([array](language.types.array.md) `$files` = NULL): [bool](language.types.boolean.md)

Atualiza as entradas de cache dos arquivos cujos nomes foram passados ​​no argumento de entrada.
Se nenhum argumento for especificado, atualiza todas as entradas no cache.

### Parâmetros

`files`
:   Um array de nomes de arquivos para arquivos que precisam ser atualizados.
    É possível usar caminhos de arquivo absolutos ou relativos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

O WinCache realiza verificações regulares nos arquivos em cache para
garantir que, se algum arquivo for alterado, a entrada correspondente no cache seja
atualizada. Por padrão, essa verificação é realizada a cada 30 segundos. Se, por exemplo,
um script PHP atualizar outro script PHP onde as
configurações do aplicativo estão armazenadas, pode acontecer que, após as
configurações terem sido salvas em um arquivo, o aplicativo ainda esteja usando
as configurações antigas por algum tempo até que o cache seja atualizado. Nesses casos, pode ser
preferível atualizar o cache logo após a alteração do arquivo. O
exemplo a seguir mostra como isso pode ser feito.

**Exemplo #1 Um exemplo de **wincache\_refresh\_if\_changed()****

```
<?php
$filename = 'C:\inetpub\wwwroot\config.php';
$handle = fopen($filename, 'w+');
if ($handle === FALSE) die('Falha ao abrir o arquivo '.$filename.' para gravação');
fwrite($handle, '<?php $setting=something; ?>');
fclose($handle);
wincache_refresh_if_changed(array($filename));
?>
```

### Veja também

- [wincache\_fcache\_fileinfo()](function.wincache-fcache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache de arquivos
- [wincache\_fcache\_meminfo()](function.wincache-fcache-meminfo.md) - Recupera informações sobre o uso da memória cache do arquivo
- [wincache\_ocache\_fileinfo()](function.wincache-ocache-fileinfo.md) - Recupera informações sobre arquivos armazenados em cache no cache do opcode
- [wincache\_ocache\_meminfo()](function.wincache-ocache-meminfo.md) - Recupera informações sobre o uso da memória cache do opcode
- [wincache\_rplist\_fileinfo()](function.wincache-rplist-fileinfo.md) - Recupera informações sobre o cache do caminho do arquivo de resolução
- [wincache\_rplist\_meminfo()](function.wincache-rplist-meminfo.md) - Recupera informações sobre o uso de memória pelo cache do caminho do arquivo de resolução
- [wincache\_ucache\_meminfo()](function.wincache-ucache-meminfo.md) - Recupera informações sobre o uso da memória cache do usuário
- [wincache\_ucache\_info()](function.wincache-ucache-info.md) - Recupera informações sobre dados armazenados no cache do usuário

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
