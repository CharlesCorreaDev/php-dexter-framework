# Fecha um arquivo ZIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-close.php

---

# zip\_close

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_close — Fecha um arquivo ZIP

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_close**([resource](language.types.resource.md) `$zip`): [void](language.types.void.md)

Fecha um dado arquivo ZIP.

### Parâmetros

`zip`
:   Um arquivo ZIP previamente aberto com [zip\_open()](function.zip-open.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada em favor da API orientada a objetos, veja [ZipArchive::close()](ziparchive.close.md). |

### Veja também

- [zip\_open()](function.zip-open.md) - Abre um arquivo ZIP
- [zip\_read()](function.zip-read.md) - Lê o próximo item em um arquivo ZIP

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
