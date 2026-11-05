# Carrega código Lua no ambiente Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.loadstring.php

---

# LuaSandbox::loadString

(PECL luasandbox >= 1.0.0)

LuaSandbox::loadString — Carrega código Lua no ambiente Lua

### Descrição

public function **LuaSandbox::loadString**([string](language.types.string.md) `$code`, [string](language.types.string.md) `$chunkName` = ''): [LuaSandboxFunction](class.luasandboxfunction.md)

Carrega código Lua no ambiente Lua.

Este é o equivalente à função `loadstring()` padrão do Lua.

### Parâmetros

`code`
:   Código Lua.

`chunkName`
:   Nome do bloco carregado, para uso em rastreamentos de erros.

### Valor Retornado

Retorna uma [LuaSandboxFunction](class.luasandboxfunction.md) que, quando executada, executará o $code passado.

### Examples

**Exemplo #1 Carregando código em Lua**

```
<?php

// Cria um novo LuaSandbox
$sandbox = new LuaSandbox();

// Carrega o código
$function = $sandbox->loadString(
<<<CODE
    return "Olá, mundo"
CODE
);

// Executa o código carregado
var_dump( $function->call() );

?>
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  string(10) "Olá, mundo"
}
```

### Veja também

- [LuaSandbox::registerLibrary()](luasandbox.registerlibrary.md) - Registra um conjunto de funções PHP como uma biblioteca Lua
- [LuaSandbox::wrapPhpFunction()](luasandbox.wrapphpfunction.md) - Encapsula um chamável PHP em uma LuaSandboxFunction

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
