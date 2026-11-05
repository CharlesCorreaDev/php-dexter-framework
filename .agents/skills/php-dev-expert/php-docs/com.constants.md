# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`CLSCTX_INPROC_SERVER`** ([int](language.types.integer.md))
:   O código que cria e gerencia objetos desta classe é
    uma DLL executada no mesmo processo que o chamador da
    função que especifica o contexto da classe.

**`CLSCTX_INPROC_HANDLER`** ([int](language.types.integer.md))
:   O código que gerencia objetos desta classe é um manipulador
    dentro do processo. Esta é uma DLL que é executada no processo do cliente e
    implementa estruturas desta classe no lado do cliente quando instâncias
    da classe são acessadas remotamente.

**`CLSCTX_LOCAL_SERVER`** ([int](language.types.integer.md))
:   O código EXE que cria e gerencia objetos desta classe é executado na
    mesma máquina, mas é carregado em um espaço de processo separado.

**`CLSCTX_REMOTE_SERVER`** ([int](language.types.integer.md))
:   Um contexto remoto. O código que cria e gerencia objetos desta
    classe é executado em um computador diferente.

**`CLSCTX_SERVER`** ([int](language.types.integer.md))
:   Indica o código do servidor, seja em processo, local ou remoto. Esta
    definição é uma operação binária OR de **`CLSCTX_INPROC_SERVER`**,
    **`CLSCTX_LOCAL_SERVER`**
    e **`CLSCTX_REMOTE_SERVER`**.

**`CLSCTX_ALL`** ([int](language.types.integer.md))
:   Indica todos os contextos de classe. Esta definição é uma operação binária OR de
    **`CLSCTX_INPROC_HANDLER`** e
    **`CLSCTX_SERVER`**.

**`VT_NULL`** ([int](language.types.integer.md))
:   Referência a ponteiro NULL.

**`VT_EMPTY`** ([int](language.types.integer.md))
:   Uma propriedade com um indicador de tipo **`VT_EMPTY`** não possui
    dados associados a ela; isto é, o tamanho do valor é zero.

**`VT_INT`** ([int](language.types.integer.md))
:   Valor inteiro com sinal de 4 bytes (equivalente a
    **`VT_I4`**).

**`VT_I1`** ([int](language.types.integer.md))
:   Inteiro de 1 byte com sinal.

**`VT_I2`** ([int](language.types.integer.md))
:   Dois bytes representando um valor inteiro de 2 bytes com sinal.

**`VT_I4`** ([int](language.types.integer.md))
:   Valor inteiro com sinal de 4 bytes.

**`VT_I8`** ([int](language.types.integer.md))
:   Valor inteiro com sinal de 8 bytes.

    Somente em x64.

**`VT_UINT`** ([int](language.types.integer.md))
:   Valor inteiro sem sinal de 4 bytes. (equivalente a
    **`VT_UI4`**).

**`VT_UI1`** ([int](language.types.integer.md))
:   Inteiro sem sinal de 1 byte.

**`VT_UI2`** ([int](language.types.integer.md))
:   Inteiro sem sinal de 2 bytes.

**`VT_UI4`** ([int](language.types.integer.md))
:   Inteiro sem sinal de 4 bytes.

**`VT_UI8`** ([int](language.types.integer.md))
:   Inteiro sem sinal de 8 bytes.

    Somente em x64.

**`VT_R4`** ([int](language.types.integer.md))
:   Valor de ponto flutuante IEEE de 32 bits.

**`VT_R8`** ([int](language.types.integer.md))
:   Valor de ponto flutuante IEEE de 64 bits.

**`VT_BOOL`** ([int](language.types.integer.md))
:   Valor booleano.

**`VT_ERROR`** ([int](language.types.integer.md))
:   Código de erro; contendo o código de status associado ao
    erro.

**`VT_CY`** ([int](language.types.integer.md))
:   Inteiro complemento de dois de 8 bytes (ampliado em 10.000).

**`VT_DATE`** ([int](language.types.integer.md))
:   Um número de ponto flutuante de 64 bits que representa o número de dias
    (não segundos) desde `31 de dezembro de 1899`.
    Por exemplo, `1º de janeiro de 1900` é `2.0`,
    `2 de janeiro de 1900` é `3.0`, etc.
    Isto é armazenado na mesma representação que **`VT_R8`**.

**`VT_BSTR`** ([int](language.types.integer.md))
:   Ponteiro para uma string Unicode terminada em nulo.

**`VT_DECIMAL`** ([int](language.types.integer.md))
:   Uma estrutura decimal.

**`VT_UNKNOWN`** ([int](language.types.integer.md))
:   Um ponteiro para um objeto que implementa a interface **IUnknown**.

**`VT_DISPATCH`** ([int](language.types.integer.md))
:   Um ponteiro para um objeto que implementa a interface **IDispatch**.

**`VT_VARIANT`** ([int](language.types.integer.md))
:   Um indicador de tipo seguido do valor correspondente.
    **`VT_VARIANT`** pode ser usada somente com
    **`VT_BYREF`**.

**`VT_ARRAY`** ([int](language.types.integer.md))
:   Se o indicador de tipo for combinado com
    **`VT_ARRAY`** por um operador OR, o valor será um ponteiro para um
    `SAFEARRAY`. **`VT_ARRAY`**
    pode usar o OR com os seguintes tipos de dados: **`VT_I1`**,
    **`VT_UI1`**, **`VT_I2`**, **`VT_UI2`**,
    **`VT_I4`**, **`VT_UI4`**, **`VT_INT`**,
    **`VT_UINT`**, **`VT_R4`**, **`VT_R8`**,
    **`VT_BOOL`**, **`VT_DECIMAL`**, **`VT_ERROR`**,
    **`VT_CY`**, **`VT_DATE`**, **`VT_BSTR`**,
    **`VT_DISPATCH`**, **`VT_UNKNOWN`** e
    **`VT_VARIANT`**.

**`VT_BYREF`** ([int](language.types.integer.md))
:   Se o indicador de tipo for combinado com **`VT_BYREF`**
    por um operador OR, o valor será uma referência. Os tipos de referência são
    interpretados como uma referência a dados, semelhante ao tipo de referência em
    C++.

**`CP_ACP`** ([int](language.types.integer.md))
:   Padrão para página de código ANSI.

**`CP_MACCP`** ([int](language.types.integer.md))
:   Página de código do Macintosh.

**`CP_OEMCP`** ([int](language.types.integer.md))
:   Padrão para página de código OEM.

**`CP_UTF7`** ([int](language.types.integer.md))
:   Unicode (UTF-7).

**`CP_UTF8`** ([int](language.types.integer.md))
:   Unicode (UTF-8).

**`CP_SYMBOL`** ([int](language.types.integer.md))
:   Traduções de `SYMBOL`.

**`CP_THREAD_ACP`** ([int](language.types.integer.md))
:   Página de código ANSI do thread atual.

**`VARCMP_LT`** ([int](language.types.integer.md))
:   O `bstr` esquerdo é menor que o
    `bstr` direito.

**`VARCMP_EQ`** ([int](language.types.integer.md))
:   Os dois parâmetros são iguais.

**`VARCMP_GT`** ([int](language.types.integer.md))
:   O `bstr` esquerdo é maior que o
    `bstr` direito.

**`VARCMP_NULL`** ([int](language.types.integer.md))
:   Uma das expressões é NULL.

**`NORM_IGNORECASE`** ([int](language.types.integer.md))
:   Ignora a distinção entre maiúsculas e minúsculas.

**`NORM_IGNORENONSPACE`** ([int](language.types.integer.md))
:   Ignora caracteres que não sejam de espaçamento.

**`NORM_IGNORESYMBOLS`** ([int](language.types.integer.md))
:   Ignora símbolos.

**`NORM_IGNOREWIDTH`** ([int](language.types.integer.md))
:   Ignora largura da string.

**`NORM_IGNOREKANATYPE`** ([int](language.types.integer.md))
:   Ignora o tipo de Kana.

**`NORM_IGNOREKASHIDA`** ([int](language.types.integer.md))
:   Ignora caracteres árabes kashida.

    A disponibilidade depende da biblioteca subjacente.

**`DISP_E_DIVBYZERO`** ([int](language.types.integer.md))
:   Um erro de retorno que indica um erro de divisão por zero.

**`DISP_E_OVERFLOW`** ([int](language.types.integer.md))
:   Um erro que indica que um valor não pôde ser convertida à força para
    a representação esperada.

**`DISP_E_BADINDEX`** ([int](language.types.integer.md))
:   Um erro que indica que não existe um índice de array.

**`DISP_E_PARAMNOTFOUND`** ([int](language.types.integer.md))
:   Um valor de retorno que indica que um dos IDs de parâmetro
    não corresponde a um parâmetro no método.

**`MK_E_UNAVAILABLE`** ([int](language.types.integer.md))
:   Código de status COM do iMoniker, retorna erros em que a chamada à função
    falhou devido à indisponibilidade.

**`LOCALE_NEUTRAL`** ([int](language.types.integer.md))
:   A localidade neutra. Essa constante geralmente não é usada ao chamar APIs NLS.
    No lugar dela, use LOCALE\_SYSTEM\_DEFAULT.

**`LOCALE_SYSTEM_DEFAULT`** ([int](language.types.integer.md))
:   A localidade padrão do sistema operacional.

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
