# Afetando o comportamento do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.basic.php.php

---

# Afetando o comportamento do PHP

- [APCu](book.apcu.md) — Cache de Usuário APC
  - [Instalação/Configuração](apcu.setup.md)
  - [Constantes predefinidas](apcu.constants.md)
  - [APCu Funções](ref.apcu.md)
  - [APCUIterator](class.apcuiterator.md) — A classe APCUIterator
- [Componere](book.componere.md)
  - [Instalação/Configuração](componere.setup.md)
  - [Componere\Abstract\Definition](class.componere-abstract-definition.md) — A classe Componere\Abstract\Definition
  - [Componere\Definition](class.componere-definition.md) — A classe Componere\Definition
  - [Componere\Patch](class.componere-patch.md) — A classe Componere\Patch
  - [Componere\Method](class.componere-method.md) — A classe Componere\Method
  - [Componere\Value](class.componere-value.md) — A classe Componere\Value
  - [Funções de Componere](reference.componere.md)
- [Gerenciamento de Erros](book.errorfunc.md) — Gerenciamento e Registro de Erros
  - [Instalação/Configuração](errorfunc.setup.md)
  - [Constantes predefinidas](errorfunc.constants.md)
  - [Examples](errorfunc.examples.md)
  - [Funções para Manuseamento de Erros](ref.errorfunc.md)
- [FFI](book.ffi.md) — Interface de função externa
  - [Instalação/Configuração](ffi.setup.md)
  - [Examples](ffi.examples.md)
  - [FFI](class.ffi.md) — Interface principal ao código e aos dados em C
  - [FFI\CData](class.ffi-cdata.md) — Identificadores de dados em C
  - [FFI\CType](class.ffi-ctype.md) — Identificadores de Tipo em C
  - [FFI\Exception](class.ffi-exception.md) — Exceções FFI
  - [FFI\ParserException](class.ffi-parserexception.md) — Exceções do Analisador FFI
- [OPcache](book.opcache.md)
  - [Instalação/Configuração](opcache.setup.md)
  - [Preloading](opcache.preloading.md)
  - [Funções de OPcache](ref.opcache.md)
- [Sobrecarga de Operadores](book.operator.md) — Sobrecarga de Operadores para Objetos
  - [Instalação/Configuração](operator.setup.md)
  - [Métodos Mágicos de Sobrecarga de Operadores](operator.overloading.md)
- [Controle de Saída](book.outcontrol.md) — Controle de Buffer de Saída
  - [Instalação/Configuração](outcontrol.setup.md)
  - [Constantes predefinidas](outcontrol.constants.md)
  - [Buffer de Saída](outcontrol.output-buffering.md)
  - [Descarregando Buffers de Sistema](outcontrol.flushing-system-buffers.md)
  - [Buffers de Saída em Nível de Usuário](outcontrol.user-level-output-buffers.md)
  - [Examples](outcontrol.examples.md)
  - [Funções para Control de Saída](ref.outcontrol.md)
- [Opções/Info do PHP](book.info.md) — Informações e Opções do PHP
  - [Instalação/Configuração](info.setup.md)
  - [Constantes predefinidas](info.constants.md)
  - [Funções para Opções/Info do PHP](ref.info.md)
- [phpdbg](book.phpdbg.md) — Depurador PHP Interativo
  - [Instalação/Configuração](phpdbg.setup.md)
  - [Constantes predefinidas](phpdbg.constants.md)
  - [phpdbg Funções](ref.phpdbg.md)
- [runkit7](book.runkit7.md)
  - [Instalação/Configuração](runkit7.setup.md)
  - [Constantes predefinidas](runkit7.constants.md)
  - [Funções de runkit7](ref.runkit7.md)
- [uopz](book.uopz.md) — Operações do usuário para Zend
  - [Instalação/Configuração](uopz.setup.md)
  - [Constantes predefinidas](uopz.constants.md)
  - [Funções de Uopz](ref.uopz.md)
- [WinCache](book.wincache.md) — Cache do Windows para PHP
  - [Instalação/Configuração](wincache.setup.md)
  - [Funções de WinCache](ref.wincache.md)
  - [Construindo para Windows](wincache.win32build.md)
- [Xhprof](book.xhprof.md) — Perfilador Hierárquico
  - [Instalação/Configuração](xhprof.setup.md)
  - [Constantes predefinidas](xhprof.constants.md)
  - [Examples](xhprof.examples.md)
  - [Funções de Xhprof](ref.xhprof.md)
- [Yac](book.yac.md)
  - [Instalação/Configuração](yac.setup.md)
  - [Constantes predefinidas](yac.constants.md)
  - [Yac](class.yac.md) — A classe Yac

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
