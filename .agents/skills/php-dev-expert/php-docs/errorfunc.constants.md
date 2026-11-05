# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/errorfunc.constants.php

---

# Constantes predefinidas

As constantes abaixo estão sempre disponíveis como parte do núcleo do PHP.

As constantes a seguir (seus valores numéricos ou seus
nomes simbólicos) são usadas como máscaras de bits para especificar que erros devem ser reportados.
É possível usar
[operadores binários](language.operators.bitwise.md)
para combinar estes valores ou mascarar certos tipos de erro.

**Dica**

Os nomes destas constantes podem ser usados no php.ini,
no lugar de valores numéricos puros aos quais elas correspondem.
Entretanto, apenas os operadores
`|`,
`~`,
`^`,
`!` e
`&`
são compreendidos dentro do php.ini.

**Aviso**

Não é possível usar os nomes simbólicos fora do PHP.
Por exemplo, no httpd.conf, deve ser usado o valor da máscara de bits computada.

**`E_ERROR`** ([int](language.types.integer.md))
:   Erros fatais em tempo de execução.
    Indicam erros a partir dos quais não é possível retomar a execução,
    como problema de alocação de memória por exemplo.
    A execução do script é terminada.

    Valor da constante: `1`

**`E_WARNING`** ([int](language.types.integer.md))
:   Alertas em tempo de executação (erros não fatais).
    A execução do script não é terminada.

    Valor da constante: `2`

**`E_PARSE`** ([int](language.types.integer.md))
:   Erro de análise em tempo de compilação.
    Erros de análise somente devem ser gerados pelo analisador.

    Valor da constante: `4`

**`E_NOTICE`** ([int](language.types.integer.md))
:   Avisos em tempo de execução.
    Indicam que o script encontrou algo que pode indicar um erro,
    mas também pode acontecer no curso normal de execução de um script.

    Valor da constante: `8`

**`E_CORE_ERROR`** ([int](language.types.integer.md))
:   Erros fatais que ocorrem durante a inicialização do PHP.
    É como um **`E_ERROR`**,
    exceto por ser gerado pelo núcleo do PHP.

    Valor da constante: `16`

**`E_CORE_WARNING`** ([int](language.types.integer.md))
:   Alertas (erros não fatais) que ocorrem na inicialização do PHP.
    É como um **`E_WARNING`**,
    exceto por ser gerado pelo núcleo do PHP.

    Valor da constante: `32`

**`E_COMPILE_ERROR`** ([int](language.types.integer.md))
:   Erros fatais em tempo de compilação.
    É como um **`E_ERROR`**,
    exceto por ser gerado pelo mecanismo de scripts Zend.

    Valor da constante: `64`

**`E_COMPILE_WARNING`** ([int](language.types.integer.md))
:   Alertas em tempo de compilação (erros não fatais).
    É como um **`E_WARNING`**,
    exceto por ser gerado pelo mecanismo de scripts Zend.

    Valor da constante: `128`

**`E_DEPRECATED`** ([int](language.types.integer.md))
:   Avisos de descontinuação em tempo de execução.
    Habilite para receber alertas sobre código
    que não funcionará em versões futuras.

    Valor da constante: `8192`

**`E_USER_ERROR`** ([int](language.types.integer.md))
:   Mensagem de erro gerada pelo usuário.
    É como um **`E_ERROR`**,
    exceto por ser gerada no código PHP através do uso da função
    [trigger\_error()](function.trigger-error.md).

    Valor da constante: `256`

    **Aviso**

    O uso desta constante com [trigger\_error()](function.trigger-error.md) foi
    descontinuado a partir do PHP 8.4.0.
    É recomendado, alternativamente, fazer uso de `throw` com uma [Exception](class.exception.md)
    ou chamar [exit()](function.exit.md).

**`E_USER_WARNING`** ([int](language.types.integer.md))
:   Mensagem de alerta gerada pelo usuário.
    É como um **`E_WARNING`**,
    exceto por ser gerada no código PHP através do uso da função
    [trigger\_error()](function.trigger-error.md).

    Valor da constante: `512`

**`E_USER_NOTICE`** ([int](language.types.integer.md))
:   Mensagem de aviso gerada pelo usuário.
    É como um **`E_NOTICE`**,
    exceto por ser gerada no código PHP através do uso da função
    [trigger\_error()](function.trigger-error.md).

    Valor da constante: `1024`

**`E_USER_DEPRECATED`** ([int](language.types.integer.md))
:   Mensagem de descontinuação gerada pelo usuário.
    É como **`E_DEPRECATED`**,
    exceto por ser gerada nop código PHP através do uso da função
    [trigger\_error()](function.trigger-error.md).

    Valor da constante: `16384`

**`E_STRICT`** ([int](language.types.integer.md))
:   Sugestões em tempo de execução emitidas pelo PHP sobre o código executado
    para assegurar compatibilidade com versões futuras.

    Valor da constante: `2048`

    **Aviso**

    Este nível de erro não é utilizado
    e foi descontinuado a partir do PHP 8.4.0.

**`E_RECOVERABLE_ERROR`** ([int](language.types.integer.md))
:   "Exceções" legadas do mecanismo, que correspondem a um erro fatal capturável.
    Parecida com [Error](class.error.md) mas precisam ser capturadas através de
    um manipulador de erro definido pelo usuário (consulte [set\_error\_handler()](function.set-error-handler.md)).
    Se não tratado, se comporta como **`E_ERROR`**.

    Valor da constante: `4096`

    > **Nota**:
    >
    > Este nível de erro está efetivamente sem uso,
    > o único caso onde pode acontecer é na falha ao interpretar um
    > [object](language.types.object.md) como um [bool](language.types.boolean.md).
    > Isto só pode acontecer para objetos internos.
    >
    > O exemplo mais comum, antes do PHP 8.4.0, é usar
    > uma instância de [GMP](class.gmp.md) em uma condicional.

**`E_ALL`** ([int](language.types.integer.md))
:   Máscara de bits que contém todos os erros, alertas e avisos.

    Valor da constante: `30719`

    **Aviso**

    Antes do PHP 8.4, o valor da constante era `32767`.

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
