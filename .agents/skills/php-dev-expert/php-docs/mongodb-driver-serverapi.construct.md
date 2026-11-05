# Cria uma nova instância de ServerApi

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-serverapi.construct.php

---

# MongoDB\Driver\ServerApi::\_\_construct

(mongodb >=1.10.0)

MongoDB\Driver\ServerApi::\_\_construct — Cria uma nova instância de ServerApi

### Descrição

final public function **MongoDB\Driver\ServerApi::\_\_construct**([string](language.types.string.md) `$version`, [?](language.types.null.md)[bool](language.types.boolean.md) `$strict` = **`null`**, [?](language.types.null.md)[bool](language.types.boolean.md) `$deprecationErrors` = **`null`**)

Cria uma nova instância [MongoDB\Driver\ServerApi](class.mongodb-driver-serverapi.md)
usada para declarar uma versão da API ao criar um
[MongoDB\Driver\Manager](class.mongodb-driver-manager.md).

### Parâmetros

`version`
:   Uma versão da API do servidor.

    Versões de API suportadas são fornecidas como constantes em
    [MongoDB\Driver\ServerApi](class.mongodb-driver-serverapi.md). A única versão da API
    suportada é **`MongoDB\Driver\ServerApi::V1`**.

`strict`
:   Se o parâmetro `strict` estiver definido como **`true`**, o
    servidor gerará um erro para qualquer comando que não faça parte da
    versão da API especificada. Se nenhum valor for fornecido, o valor padrão do servidor
    (**`false`**) será usado.

`deprecationErrors`
:   Se o parâmetro `deprecationErrors` estiver definido como **`true`**,
    o servidor gerará um erro ao usar um comando que está obsoleto na
    versão da API especificada. Se nenhum valor for fornecido, o valor padrão do servidor
    (**`false`**) será usado.

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
