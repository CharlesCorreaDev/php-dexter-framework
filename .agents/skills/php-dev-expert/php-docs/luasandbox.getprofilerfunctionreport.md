# Obtém dados do profiler

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.getprofilerfunctionreport.php

---

# LuaSandbox::getProfilerFunctionReport

(PECL luasandbox >= 1.1.0)

LuaSandbox::getProfilerFunctionReport — Obtém dados do profiler

### Descrição

public function **LuaSandbox::getProfilerFunctionReport**([int](language.types.integer.md) `$units` = LuaSandbox::SECONDS): [array](language.types.array.md)

Para uma instância profiler iniciada anteriormente por
[LuaSandbox::enableProfiler()](luasandbox.enableprofiler.md), obtém um
relatório do custo de cada função.

A unidade de medida usada para o custo é determinada pelo
parâmetro $units:

**`LuaSandbox::SAMPLES`**
:   Medidas em número de amostras.

**`LuaSandbox::SECONDS`**
:   Medidas em segundos de tempo de CPU.

**`LuaSandbox::PERCENT`**
:   Medidas em porcentagem de tempo da CPU.

### Parâmetros

`units`
:   Constante da unidade de medida.

### Valor Retornado

Retorna medições do profiler, classificadas em ordem decrescente, como um [array](language.types.array.md)
associativo. Chaves são os nomes das funções Lua (com arquivo de origem e linha
definidos entre colchetes angulares), valores são as medições como [int](language.types.integer.md)
ou [float](language.types.float.md).

> **Nota**:
>
> No Windows, esta função sempre retorna um array vazio. Em sistemas operacionais que
> não suportam **`CLOCK_THREAD_CPUTIME_ID`**, como FreeBSD
> e Mac OS X, esta função relatará o tempo decorrido do relógio de parede, não
> o tempo da CPU.

### Examples

**Exemplo #1 Profiling Lua code**

```
<?php

// Cria um novo LuaSandbox
$sandbox = new LuaSandbox();

// Inicia o profiler
$sandbox->enableProfiler( 0.01 );

// Executa aqui algum código Lua

// Obtém os dados do profiler
$data = $sandbox->getProfilerFunctionReport();

?>
```

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
