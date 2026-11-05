# Chama uma função Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandboxfunction.call.php

---

# LuaSandboxFunction::call

(PECL luasandbox >= 1.0.0)

LuaSandboxFunction::call — Chama uma função Lua

### Descrição

public function **LuaSandboxFunction::call**([string](language.types.string.md) `...$args`): [array](language.types.array.md)|[bool](language.types.boolean.md)

Chama uma função Lua.

Erros considerados como falha do código PHP resultarão na função
retornando **`false`** e **`E_WARNING`**
sendo emitido, por exemplo, um tipo [resource](language.types.resource.md) sendo usado como um
argumento. Erros Lua resultarão em uma exceção [LuaSandboxRuntimeError](class.luasandboxruntimeerror.md)
sendo lançada.

Os tipos PHP e Lua são convertidos da seguinte forma:

- O **`null`** do PHP é `nil` no Lua, e vice-versa.
- [int](language.types.integer.md) e [float](language.types.float.md) no PHP são convertidos para números
  Lua. Infinito e **`NAN`** são suportados.
- Números Lua sem uma parte fracionária entre aproximadamente `-2**53`
  e `2**53` são convertidos para [int](language.types.integer.md)s do PHP, com outros
  sendo convertidos para [float](language.types.float.md)s do PHP.
- [bool](language.types.boolean.md)s do PHP são booleanos do Lua, e vice-versa.
- [string](language.types.string.md)s do PHP são strings do Lua, e vice-versa.
- Funções do Lua são objetos [LuaSandboxFunction](class.luasandboxfunction.md) do PHP, e vice-versa.
  Tipos [callable](language.types.callable.md) do PHP em geral não são suportados.
- [array](language.types.array.md)s do PHP são convertidos para tabelas do Lua, e vice-versa.

  - Note que Lua normalmente indexa arrays a partir de 1, enquanto o PHP indexa
    arrays a partir de 0. Nenhum ajuste é feito para essas
    convenções diferentes.
  - Arrays autorreferenciais não são suportadas em nenhuma direção.
  - Referências PHP são desreferenciadas.
  - `__pairs` e `__ipairs` do Lua são processados
    `__index` é ignorado.
  - Ao converter de PHP para Lua, chaves inteiras entre
    `-2**53` e `2**53` são representadas
    como números Lua. Todas as outras chaves são representadas como strings Lua.
  - Ao converter de Lua para PHP, chaves diferentes de strings e
    números resultarão em erro, assim como colisões ao converter
    números em strings ou vice-versa (já que o PHP considera coisas como
    `$a[0]` e `$a["0"]` como sendo equivalentes).
- Todos os outros tipos não são suportados e gerarão um erro/exceção,
  incluindo [object](language.types.object.md)s PHP em geral e tipos de thread e userdata do Lua.

As funções Lua retornam inerentemente uma lista de resultados. Então, em caso de sucesso, este
método retorna um [array](language.types.array.md) contendo todos os valores retornados por Lua,
com chaves [int](language.types.integer.md) começando a partir de zero. Lua pode não retornar nenhum resultado,
nesse caso um array vazio é retornado.

### Parâmetros

`args`
:   Argumentos passados ​​para a função.

### Valor Retornado

Retorna um [array](language.types.array.md) de valores retornados pela função, que pode estar vazio,
ou **`false`** em caso de falha.

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
