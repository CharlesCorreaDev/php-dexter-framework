# A classe mysqli_driver

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysqli-driver.php

---

# A classe mysqli\_driver

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe **mysqli\_driver** é uma instância do padrão monostate,
ou seja, existe apenas um driver que pode ser acessado por meio de uma quantidade arbitrária
de instâncias **mysqli\_driver**.

## Resumo da classe

final
class ****mysqli\_driver****
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$client\_info](class.mysqli-driver.md#mysqli-driver.props.client-info);

public
readonly
[int](language.types.integer.md)
[$client\_version](class.mysqli-driver.md#mysqli-driver.props.client-version);

public
readonly
[int](language.types.integer.md)
[$driver\_version](class.mysqli-driver.md#mysqli-driver.props.driver-version);

public
[int](language.types.integer.md)
[$report\_mode](class.mysqli-driver.md#mysqli-driver.props.report-mode);

}

## Propriedades

client\_info
:   A versão do cabeçalho da API do cliente

client\_version
:   A versão do cliente

driver\_version
:   A versão do driver MySQLi

    **Aviso**

    Esta propriedade
    foi *descontinuada* a partir do PHP 8.1.0. Confiar nesta
    propriedade é altamente desencorajado.

embedded
:   Se o suporte MySQLi Embedded está ativado

    **Aviso**

    Esta propriedade
    foi *removida* a partir do PHP 8.0.0.

reconnect
:   Permitir ou impedir a reconexão (consulte a diretiva [mysqli.reconnect](mysqli.configuration.md#ini.mysqli.reconnect) INI)

    **Aviso**

    Esta propriedade foi *removida*
    juntamente com a diretiva INI [mysqli.reconnect](mysqli.configuration.md#ini.mysqli.reconnect) a partir do PHP 8.2.0.

report\_mode
:   Defina como **`MYSQLI_REPORT_OFF`**,
    **`MYSQLI_REPORT_ALL`** ou qualquer combinação de
    **`MYSQLI_REPORT_STRICT`** (lança exceções para erros),
    **`MYSQLI_REPORT_ERROR`** (reporta erros) e
    **`MYSQLI_REPORT_INDEX`** (erros relacionados a índices).
    Veja também [mysqli\_report()](function.mysqli-report.md).

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | [mysqli\_driver::$reconnect](class.mysqli-driver.md#mysqli-driver.props.reconnect) foi removido. |
| 8.1.0 | [mysqli\_driver::$driver\_version](class.mysqli-driver.md#mysqli-driver.props.driver-version) foi descontinuada. |
| 8.0.0 | [mysqli\_driver::$embedded](class.mysqli-driver.md#mysqli-driver.props.embedded) foi removido. |
| 7.4.0 | [mysqli\_driver::embedded\_server\_start()](mysqli-driver.embedded-server-start.md) e **mysqli\_driver:embedded\_server\_end()** foram removidos. |

## Índice

- [mysqli\_driver::embedded\_server\_end](mysqli-driver.embedded-server-end.md) — Para o servidor incorporado
- [mysqli\_driver::embedded\_server\_start](mysqli-driver.embedded-server-start.md) — Inicializa e dispara o servidor incorporado
- [mysqli\_driver::$report\_mode](mysqli-driver.report-mode.md) — Define o modo de relatório de erros do mysqli

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
