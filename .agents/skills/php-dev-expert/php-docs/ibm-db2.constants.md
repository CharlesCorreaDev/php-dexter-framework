# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ibm-db2.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`DB2_BINARY`** ([int](language.types.integer.md))
:   Especifica que os dados binários devem ser retornados como estão. Este é o modo
    padrão.

**`DB2_CONVERT`** ([int](language.types.integer.md))
:   Especifica que os dados binários devem ser convertidos em uma codificação hexadecimal
    e retornados como uma string ASCII.

**`DB2_PASSTHRU`** ([int](language.types.integer.md))
:   Especifica que os dados binários devem ser convertidos em um valor **`null`**.

**`DB2_SCROLLABLE`** ([int](language.types.integer.md))
:   Especifica um cursor rolável para um recurso de instrução. Este modo permite
    acesso aleatório a linhas em um conjunto de resultados, mas atualmente é suportado apenas por
    IBM DB2 Universal Database.

**`DB2_FORWARD_ONLY`** ([int](language.types.integer.md))
:   Especifica um cursor somente para frente para um recurso de instrução. Este é o
    tipo de cursor padrão e é suportado em todos os servidores de banco de dados.

**`DB2_PARAM_IN`** ([int](language.types.integer.md))
:   Especifica que a variável PHP deve ser vinculada como um parâmetro IN para um
    procedimento armazenado.

**`DB2_PARAM_OUT`** ([int](language.types.integer.md))
:   Especifica que a variável PHP deve ser vinculada como um parâmetro OUT para um
    procedimento armazenado.

**`DB2_PARAM_INOUT`** ([int](language.types.integer.md))
:   Especifica que a variável PHP deve ser vinculada como um parâmetro INOUT para um
    procedimento armazenado.

**`DB2_PARAM_FILE`** ([int](language.types.integer.md))
:   Especifica que a coluna deve ser vinculada diretamente a um arquivo para entrada.

**`DB2_AUTOCOMMIT_ON`** ([int](language.types.integer.md))
:   Especifica que a autoconfirmação deve ser ativada.

**`DB2_AUTOCOMMIT_OFF`** ([int](language.types.integer.md))
:   Especifica que a autoconfirmação deve ser desativada.

**`DB2_DOUBLE`** ([int](language.types.integer.md))
:   Especifica que a variável deve ser vinculada como um tipo de dados DOUBLE,
    FLOAT ou REAL.

**`DB2_LONG`** ([int](language.types.integer.md))
:   Especifica que a variável deve ser vinculada como um tipo de dados SMALLINT, INTEGER ou
    BIGINT.

**`DB2_CHAR`** ([int](language.types.integer.md))
:   Especifica que a variável deve ser vinculada como um tipo de dado CHAR ou VARCHAR.

**`DB2_CASE_NATURAL`** ([int](language.types.integer.md))
:   Especifica que os nomes das colunas serão retornados em suas maiúsculas e minúsculas naturais.

**`DB2_CASE_LOWER`** ([int](language.types.integer.md))
:   Especifica que os nomes das colunas serão retornados em letras minúsculas.

**`DB2_CASE_UPPER`** ([int](language.types.integer.md))
:   Especifica que os nomes das colunas serão retornados em letras maiúsculas.

**`DB2_DEFERRED_PREPARE_ON`** ([int](language.types.integer.md))
:   Especifica que a preparação adiada deve ser ativada para o recurso de instrução especificado.

**`DB2_DEFERRED_PREPARE_OFF`** ([int](language.types.integer.md))
:   Especifica que a preparação adiada deve ser desativada para o recurso de instrução especificado.

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
