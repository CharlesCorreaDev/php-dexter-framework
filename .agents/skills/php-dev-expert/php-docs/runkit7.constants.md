# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/runkit7.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`RUNKIT7_IMPORT_FUNCTIONS`** ([int](language.types.integer.md))
:   Sinalizador de [runkit7\_import()](function.runkit7-import.md) indicando
    que funções normais devem ser importadas do
    arquivo especificado.

**`RUNKIT7_IMPORT_CLASS_METHODS`** ([int](language.types.integer.md))
:   Sinalizador de [runkit7\_import()](function.runkit7-import.md) indicando
    que os métodos de classe devem ser importados do
    arquivo especificado.

**`RUNKIT7_IMPORT_CLASS_CONSTS`** ([int](language.types.integer.md))
:   Sinalizador de [runkit7\_import()](function.runkit7-import.md) indicando
    que as constantes de classe devem ser importadas do
    arquivo especificado.

**`RUNKIT7_IMPORT_CLASS_PROPS`** ([int](language.types.integer.md))
:   Sinalizador de [runkit7\_import()](function.runkit7-import.md) indicando
    que as propriedades padrão da classe devem ser importadas
    do arquivo especificado.

**`RUNKIT7_IMPORT_CLASS_STATIC_PROPS`** ([int](language.types.integer.md))
:   Sinalizador de [runkit7\_import()](function.runkit7-import.md) que indica
    que as propriedades estáticas da classe devem ser importadas
    do arquivo especificado. Disponível desde o Runkit 1.0.1.

**`RUNKIT7_IMPORT_CLASSES`** ([int](language.types.integer.md))
:   O sinalizador de [runkit7\_import()](function.runkit7-import.md) representa
    um OR binário das constantes
    **`RUNKIT7_IMPORT_CLASS_*`**.

**`RUNKIT7_IMPORT_OVERRIDE`** ([int](language.types.integer.md))
:   Sinalizador de [runkit7\_import()](function.runkit7-import.md) que indica que
    se alguma das funções, métodos, constantes
    ou propriedades importadas já existirem, elas devem ser substituídas
    pelas novas definições. Se este sinalizador não estiver definido, quaisquer
    definições importadas que já existam serão descartadas.

**`RUNKIT7_ACC_RETURN_REFERENCE`** ([int](language.types.integer.md))
:   Inclua este sinalizador para fazer com que a função ou método que está sendo criado ou redeclarado retorne uma referência.

**`RUNKIT7_ACC_PUBLIC`** ([int](language.types.integer.md))
:   Sinalizador para [runkit7\_method\_add()](function.runkit7-method-add.md) e [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) para tornar o método público.

**`RUNKIT7_ACC_PROTECTED`** ([int](language.types.integer.md))
:   Sinalizador para [runkit7\_method\_add()](function.runkit7-method-add.md) e [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) para tornar o método protegido.

**`RUNKIT7_ACC_PRIVATE`** ([int](language.types.integer.md))
:   Sinalizador para [runkit7\_method\_add()](function.runkit7-method-add.md) e [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) para tornar o método privado.

**`RUNKIT7_ACC_STATIC`** ([int](language.types.integer.md))
:   Sinalizador para [runkit7\_method\_add()](function.runkit7-method-add.md) e [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) para tornar o método estático.

**`RUNKIT7_FEATURE_MANIPULATION`** ([int](language.types.integer.md))
:   Igual a 1 se a manipulação de tempo de execução estiver habilitada e 0 caso contrário.

**`RUNKIT7_FEATURE_SUPERGLOBALS`** ([int](language.types.integer.md))
:   Igual a 1 se superglobais personalizados estiverem habilitados e 0 caso contrário.

**`RUNKIT7_FEATURE_SANDBOX`** ([int](language.types.integer.md))
:   Sempre 0, é impraticável implementar o recurso sandbox no PHP 7.

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
