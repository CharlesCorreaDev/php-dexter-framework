# Lê o próximo item em um arquivo ZIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-read.php

---

# zip\_read

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_read — Lê o próximo item em um arquivo ZIP

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_read**([resource](language.types.resource.md) `$zip`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Lê o próximo item dentro de uma arquivo ZIP.

### Parâmetros

`zip`
:   Um arquivo ZIP anteriormente aberto com [zip\_open()](function.zip-open.md).

### Valor Retornado

Retorna uma conexao com o arquivo ZIP para ser usado com as funções
`zip_entry_...`, ou **`false`** se não houver
arquivos para serem lidos, ou um código de erro caso ocorra
algum.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Essa função está desencorajada em relação à API orientada a objetos, veja [ZipArchive::statIndex()](ziparchive.statindex.md). |

### Veja também

- [zip\_open()](function.zip-open.md) - Abre um arquivo ZIP
- [zip\_close()](function.zip-close.md) - Fecha um arquivo ZIP
- [zip\_entry\_open()](function.zip-entry-open.md) - Abre um arquivo para leitura
- [zip\_entry\_read()](function.zip-entry-read.md) - Obtém dados de um arquivo

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
