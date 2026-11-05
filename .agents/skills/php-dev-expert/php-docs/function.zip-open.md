# Abre um arquivo ZIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-open.php

---

# zip\_open

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_open — Abre um arquivo ZIP

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_open**([string](language.types.string.md) `$filename`): [resource](language.types.resource.md)|[int](language.types.integer.md)|[false](language.types.singleton.md)

Abre um arquivo ZIP para ser lido.

### Parâmetros

`filename`
:   O nome do arquivo ZIP para abrir.

### Valor Retornado

Retorna um identificador que pode ser usado com as funções
[zip\_read()](function.zip-read.md) e [zip\_close()](function.zip-close.md)
ou retorna **`false`** ou ainda o número de erro se `filename`
não existir e/ou outras situações.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Essa função está desencorajada em relação à API orientada a objetos, veja [ZipArchive::open()](ziparchive.open.md). |

### Veja também

- [zip\_read()](function.zip-read.md) - Lê o próximo item em um arquivo ZIP
- [zip\_close()](function.zip-close.md) - Fecha um arquivo ZIP

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
