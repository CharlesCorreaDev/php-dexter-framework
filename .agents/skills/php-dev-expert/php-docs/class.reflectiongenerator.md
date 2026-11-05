# A classe ReflectionGenerator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectiongenerator.php

---

# A classe ReflectionGenerator

(PHP 7, PHP 8)

## Introdução

A classe **ReflectionGenerator** relata
informações sobre um gerador.

## Resumo da classe

final
class ****ReflectionGenerator****
{

/\* Métodos \*/

public function [\_\_construct](reflectiongenerator.construct.md)([Generator](class.generator.md) `$generator`)

public function [getExecutingFile](reflectiongenerator.getexecutingfile.md)(): [string](language.types.string.md)

public function [getExecutingGenerator](reflectiongenerator.getexecutinggenerator.md)(): [Generator](class.generator.md)

public function [getExecutingLine](reflectiongenerator.getexecutingline.md)(): [int](language.types.integer.md)

public function [getFunction](reflectiongenerator.getfunction.md)(): [ReflectionFunctionAbstract](class.reflectionfunctionabstract.md)

public function [getThis](reflectiongenerator.getthis.md)(): [?](language.types.null.md)[object](language.types.object.md)

public function [getTrace](reflectiongenerator.gettrace.md)([int](language.types.integer.md) `$options` = **`DEBUG_BACKTRACE_PROVIDE_OBJECT`**): [array](language.types.array.md)

public function [isClosed](reflectiongenerator.isclosed.md)(): [bool](language.types.boolean.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | A classe é final agora. |

## Índice

- [ReflectionGenerator::\_\_construct](reflectiongenerator.construct.md) — Constrói um objeto ReflectionGenerator
- [ReflectionGenerator::getExecutingFile](reflectiongenerator.getexecutingfile.md) — Obtém o nome do arquivo do gerador atualmente em execução
- [ReflectionGenerator::getExecutingGenerator](reflectiongenerator.getexecutinggenerator.md) — Obtém o objeto Generator em execução
- [ReflectionGenerator::getExecutingLine](reflectiongenerator.getexecutingline.md) — Obtém a linha do gerador atualmente em execução
- [ReflectionGenerator::getFunction](reflectiongenerator.getfunction.md) — Obtém o nome da função do gerador
- [ReflectionGenerator::getThis](reflectiongenerator.getthis.md) — Obtém o valor $this do gerador
- [ReflectionGenerator::getTrace](reflectiongenerator.gettrace.md) — Obtém o rastreamento do gerador em execução
- [ReflectionGenerator::isClosed](reflectiongenerator.isclosed.md) — Verifica se a execução terminou

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
