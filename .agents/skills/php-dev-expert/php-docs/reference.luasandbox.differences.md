# Diferenças do Lua Padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reference.luasandbox.differences.php

---

# Diferenças do Lua Padrão

O LuaSandbox fornece um ambiente isolado (caixa de areia) que difere em alguns aspectos do Lua 5.1 padrão.

### Recursos que não estão disponíveis

- `dofile()`, `loadfile()` e o pacote `io`, pois eles permitem acesso direto ao sistema de arquivos. Se necessário, o acesso ao sistema de arquivos deve ser feito por meio de funções de retorno PHP.
- O pacote `package`, incluindo `require()` e `module()`, pois depende muito do acesso direto ao sistema de arquivos. Uma reescrita Lua pura, como a usada na extensão MediaWiki Scribunto, pode ser usada em vez disso.
- `load()` e `loadstring()`, para permitir análise estática do código Lua.
- `print()`, já que ele envia para a saída padrão. Se necessário, a saída deve ser feita via funções de retorno PHP.
- A maior parte do pacote `os`, pois permite a manipulação do processo e a execução de outros processos.

  - `os.clock()`, `os.date()`, `os.difftime()` e `os.time()` permanecem disponíveis.
- A maior parte do pacote `debug`, pois permite a manipulação do estado Lua e metadados de maneiras que podem quebrar o isolamento.

  - `debug.traceback()` permanece disponível.
- `string.dump()`, pois pode expor dados internos.
- `collectgarbage()`, `gcinfo()` e o pacote `coroutine` não foram revisados ​​quanto à segurança.

### Recursos que foram modificados

- `pcall()` e `xpcall()` não conseguem capturar certos erros, particularmente erros de tempo limite.
- `tostring()` não inclui endereços de ponteiros.
- `string.match()` foi corrigido para limitar a profundidade da recursão e verificar periodicamente se há um tempo limite.
- `math.random()` e `math.randomseed()` foram substituídos por versões que não compartilham estado com `rand()` do PHP.
- Os metamétodos `__pairs` e `__ipairs` do Lua 5.2 são suportados por `pairs()` e `ipairs()`.

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
