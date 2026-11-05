# Muda o diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.chdir.php

---

# chdir

(PHP 4, PHP 5, PHP 7, PHP 8)

chdir — Muda o diretório

### Descrição

function **chdir**([string](language.types.string.md) `$directory`): [bool](language.types.boolean.md)

Muda o diretório atual do PHP para
`directory`.

### Parâmetros

`directory`
:   O novo diretório atual

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Dispara um aviso **`E_WARNING`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **chdir()****

```
<?php

// diretório atual
echo getcwd() . "\n";

chdir('public_html');

// diretório atual
echo getcwd() . "\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
/home/vincent
/home/vincent/public_html
```

### Notas

**Cuidado**

Se o interpretador PHP foi compilado com ZTS (Zend Thread Safety) habilitado,
quaisquer mudanças ao diretório atual através de **chdir()**
serão invisíveis ao sistema operacional. Todas as funções internas do PHP
ainda irão respeitar a mudança do diretório atual; mas funções de bibliotecas
externas, chamadas usando [FFI](book.ffi.md) não irão. Pode-se
verificar se a cópia do PHP foi compilada com ZTS habilitado usando
o comando **php -i** ou a constante interna
**`PHP_ZTS`**.

### Veja também

- [getcwd()](function.getcwd.md) - Obtém o diretório atual

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
