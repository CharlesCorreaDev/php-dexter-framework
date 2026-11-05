# Obtém informações estatísticas sobre o descritor de arquivo fd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-stat.php

---

# dio\_stat

(PHP 4 >= 4.2.0, PHP 5 < 5.1.0)

dio\_stat — 
Obtém informações estatísticas sobre o descritor de arquivo fd

### Descrição

function **dio\_stat**([resource](language.types.resource.md) `$fd`): [array](language.types.array.md)

**dio\_stat()** retorna informações sobre o
descritor de arquivo fornecido.

### Parâmetros

`fd`
:   O descritor de arquivo retornado por [dio\_open()](function.dio-open.md).

### Valor Retornado

Retorna um array associativo com as seguintes chaves:

- "device" - dispositivo
- "inode" - inode
- "mode" - modo
- "nlink" - número de links físicos
- "uid" - id do usuário
- "gid" - id do grupo
- "device\_type" - tipo de dispositivo (se inode for um dispositivo)
- "size" - tamanho total em bytes
- "blocksize" - tamanho do bloco
- "blocks" - número de blocos alocados
- "atime" - hora do último acesso
- "mtime" - hora da última modificação
- "ctime" - hora da última alteração

Em caso de erro **dio\_stat()** retorna **`null`**.

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
