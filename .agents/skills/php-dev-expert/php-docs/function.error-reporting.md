# Define quais erros do PHP são relatados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.error-reporting.php

---

# error\_reporting

(PHP 4, PHP 5, PHP 7, PHP 8)

error\_reporting — Define quais erros do PHP são relatados

### Descrição

function **error\_reporting**([?](language.types.null.md)[int](language.types.integer.md) `$error_level` = **`null`**): [int](language.types.integer.md)

A função **error\_reporting()** define a diretiva
[error\_reporting](errorfunc.configuration.md#ini.error-reporting)
em tempo de execução. O PHP possui muitos níveis de erros, e o uso
desta função define esse nível para a duração (tempo de execução) do
seu script. Se o parâmetro opcional `error_level`
não for definido, a função **error\_reporting()** retornará apenas o
nível de relatório de erros atual.

### Parâmetros

`error_level`
:   O novo nível de [error\_reporting](errorfunc.configuration.md#ini.error-reporting).
    Pode ser uma máscara de bits ou constantes nomeadas. É altamente recomendado
    o uso de constantes nomeadas para garantir compatibilidade com futuras
    versões. Conforme são adicionados níveis de erro, o intervalo de inteiros aumenta,
    então os níveis de erro baseados em inteiros mais antigos nem sempre se comportarão como esperado.

    As constantes de nível de erro disponíveis e os significados reais
    desses níveis de erro são descritos nas
    [constantes predefinidas](errorfunc.constants.md).

### Valor Retornado

Retorna o nível de [error\_reporting](errorfunc.configuration.md#ini.error-reporting)
*antes* que ele seja alterado para
`error_level`.

> **Nota**:
>
> O [operador de controle de erro](language.operators.errorcontrol.md)
> `@` altera o `error_level` durante o tratamento de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `error_level` agora permite null. |

### Examples

**Exemplo #1 Exemplo **error\_reporting()****

```
<?php

// Desativar todos os relatórios de erros
error_reporting(0);

// Relatar erros simples durante a execução
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Relatar E_NOTICE também pode ser útil (para relatar variáveis não inicializadas
// ou capturar erros de digitação nos nomes das variáveis...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Relatar todos os erros, exceto E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Relatar todos os erros do PHP
error_reporting(E_ALL);

// Relatar todos os erros do PHP
error_reporting(-1);

// O mesmo que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

?>
```

### Notas

**Dica**

Passar o valor `-1` mostrará todos os erros possíveis,
mesmo quando novos níveis e constantes forem adicionados em futuras versões do PHP. O
comportamento é equivalente a passar a constante **`E_ALL`**.

### Veja também

- A diretiva [display\_errors](errorfunc.configuration.md#ini.display-errors)
- A diretiva [html\_errors](errorfunc.configuration.md#ini.html-errors)
- A diretiva [xmlrpc\_errors](errorfunc.configuration.md#ini.xmlrpc-errors)
- O operador [error control](language.operators.errorcontrol.md)
- [ini\_set()](function.ini-set.md) - Define o valor de uma opção de configuração

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
