# Define o limite de memória para o ambiente Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.setmemorylimit.php

---

# LuaSandbox::setMemoryLimit

(PECL luasandbox >= 1.0.0)

LuaSandbox::setMemoryLimit — Define o limite de memória para o ambiente Lua

### Descrição

public function **LuaSandbox::setMemoryLimit**([int](language.types.integer.md) `$limit`): [void](language.types.void.md)

Define o limite de memória para o ambiente Lua.

Se esse limite for excedido, uma exceção [LuaSandboxMemoryError](class.luasandboxmemoryerror.md)
será lançada.

### Parâmetros

`limit`
:   Limite de memória em bytes.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Chamando uma função Lua**

```
<?php

// Cria um novo LuaSandbox
$sandbox = new LuaSandbox();

// Define um limite de memória
$sandbox->setMemoryLimit( 50 * 1024 * 1024 );

// Executa código Lua
$sandbox->loadString( 'local x = "x"; while true do x = x .. x; end' )->call();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
PHP Fatal error:  Uncaught LuaSandboxMemoryError: not enough memory
```

### Veja também

- [LuaSandbox::getMemoryUsage()](luasandbox.getmemoryusage.md) - Obtém o uso atual da memória do ambiente Lua
- [LuaSandbox::getPeakMemoryUsage()](luasandbox.getpeakmemoryusage.md) - Busca o pico de uso de memória do ambiente Lua
- [LuaSandbox::setCPULimit()](luasandbox.setcpulimit.md) - Define o limite de tempo da CPU para o ambiente Lua

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
