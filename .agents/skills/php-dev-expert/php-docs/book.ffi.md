# Interface de função externa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.ffi.php

---

# Interface de função externa

# Introdução

Esta extensão permite o carregamento de bibliotecas compartilhadas (.DLL ou
.so), a chamada de funções escritas em C e o acesso à estruturas de dados de C
em PHP puro, sem a necessidade de maiores conhecimentos da API de extensões do Zend, e
sem a necessidade de aprender uma terceira linguagem "intermediária".
A API pública é implementada como uma única classe [FFI](class.ffi.md) com
diversos métodos estáticos (alguns deles podem ser chamados dinamicamente) e
métodos de objetos sobrecarregados, que realizam a interação com os dados em C.

**Cuidado**

A FFI é perigosa, visto que permite a interface com o sistema em um nível muito baixo.
A extensão FFI deve ser usada apenas por desenvolvedores que possuam experiência com C
e com as APIs de C utilizadas. Para minimizar o risco, a utilização da API da FFI pode ser restringida
com a opção [ffi.enable](ffi.configuration.md#ini.ffi.enable) do php.ini.

> **Nota**:
>
> A extensão FFI não torna a API de extensão clássica do PHP obsoleta; ela é apenas
> fornecida para interface ad-hoc com funções e estruturas de dados em C.

**Dica**

Atualmente, acessar estruturas de dados com a FFI é significativamente mais lento (aproximadamente 2 vezes)
do que acessar arrays e objetos nativos de PHP. Portanto, não faz sentido utilizar
a extensão FFI para ganhos de desempenho; entretanto, pode fazer sentido utilizá-la para reduzir o
consumo de memória.

- [Instalação/Configuração](ffi.setup.md)
  - [Dependências](ffi.requirements.md)
  - [Instalação](ffi.installation.md)
  - [Configurações de Execução](ffi.configuration.md)
- [Examples](ffi.examples.md)
  - [Uso básico da FFI](ffi.examples-basic.md)
  - [Funções de retorno PHP](ffi.examples-callback.md)
  - [Um exemplo completo de PHP/FFI/pré-carregamento](ffi.examples-complete.md)
- [FFI](class.ffi.md) — Interface principal ao código e aos dados em C
  - [FFI::addr](ffi.addr.md) — Cria um ponteiro não gerenciado para dado C
  - [FFI::alignof](ffi.alignof.md) — Obtém o alinhamento
  - [FFI::arrayType](ffi.arraytype.md) — Constrói dinamicamente um novo array tipo C
  - [FFI::cast](ffi.cast.md) — Realiza um conversão de tipo C
  - [FFI::cdef](ffi.cdef.md) — Cria um novo objeto FFI
  - [FFI::free](ffi.free.md) — Libera uma estrutura de dados não gerenciada
  - [FFI::isNull](ffi.isnull.md) — Verifica se um FFI\CData é um ponteiro nulo
  - [FFI::load](ffi.load.md) — Carrega declarações C a partir de um arquivo de cabeçalho
  - [FFI::memcmp](ffi.memcmp.md) — Compara áreas da memória
  - [FFI::memcpy](ffi.memcpy.md) — Copia uma área da memória para outra
  - [FFI::memset](ffi.memset.md) — Preenche uma área de memória
  - [FFI::new](ffi.new.md) — Cria uma estrutura de dados C
  - [FFI::scope](ffi.scope.md) — Instancia um objeto FFI com declarações C analisadas durante o pré-carregamento
  - [FFI::sizeof](ffi.sizeof.md) — Obtém o tamanho do dado ou tipo C
  - [FFI::string](ffi.string.md) — Cria uma string PHP a partir de uma área de memória
  - [FFI::type](ffi.type.md) — Cria um objeto FFI\CType a partir de uma declaração C
  - [FFI::typeof](ffi.typeof.md) — Obtém o FFI\CType de FFI\CData
- [FFI\CData](class.ffi-cdata.md) — Identificadores de dados em C
- [FFI\CType](class.ffi-ctype.md) — Identificadores de Tipo em C
  - [FFI\CType::getAlignment](ffi-ctype.getalignment.md) — Descrição
  - [FFI\CType::getArrayElementType](ffi-ctype.getarrayelementtype.md) — Descrição
  - [FFI\CType::getArrayLength](ffi-ctype.getarraylength.md) — Descrição
  - [FFI\CType::getAttributes](ffi-ctype.getattributes.md) — Descrição
  - [FFI\CType::getEnumKind](ffi-ctype.getenumkind.md) — Descrição
  - [FFI\CType::getFuncABI](ffi-ctype.getfuncabi.md) — Descrição
  - [FFI\CType::getFuncParameterCount](ffi-ctype.getfuncparametercount.md) — Obtém a contagem de parâmetros de um tipo de função
  - [FFI\CType::getFuncParameterType](ffi-ctype.getfuncparametertype.md) — Obtém o tipo de um parâmetro de função
  - [FFI\CType::getFuncReturnType](ffi-ctype.getfuncreturntype.md) — Descrição
  - [FFI\CType::getKind](ffi-ctype.getkind.md) — Descrição
  - [FFI\CType::getName](ffi-ctype.getname.md) — Descrição
  - [FFI\CType::getPointerType](ffi-ctype.getpointertype.md) — Descrição
  - [FFI\CType::getSize](ffi-ctype.getsize.md) — Descrição
  - [FFI\CType::getStructFieldNames](ffi-ctype.getstructfieldnames.md) — Descrição
  - [FFI\CType::getStructFieldOffset](ffi-ctype.getstructfieldoffset.md) — Descrição
  - [FFI\CType::getStructFieldType](ffi-ctype.getstructfieldtype.md) — Descrição
- [FFI\Exception](class.ffi-exception.md) — Exceções FFI
- [FFI\ParserException](class.ffi-parserexception.md) — Exceções do Analisador FFI

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
