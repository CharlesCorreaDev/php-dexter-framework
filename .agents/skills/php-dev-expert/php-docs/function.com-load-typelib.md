# Carrega uma biblioteca de tipos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.com-load-typelib.php

---

# com\_load\_typelib

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

com\_load\_typelib — Carrega uma biblioteca de tipos

### Descrição

function **com\_load\_typelib**([string](language.types.string.md) `$typelib`, [bool](language.types.boolean.md) `$case_insensitive` = **`true`**): [bool](language.types.boolean.md)

Carrega uma biblioteca de tipos e registra suas constantes no mecanismo, como se
fossem definidas usando [define()](function.define.md).

Observe que é muito mais eficiente usar a configuração [com.typelib-file](com.configuration.md#ini.com.typelib-file) do php.ini para pré-carregar e
registrar as constantes, embora não seja tão flexível.

Se [com.autoregister-typelib](com.configuration.md#ini.com.autoregister-typelib) estiver ativado,
o PHP tentará registrar automaticamente as constantes associadas a um
objeto COM quando for instanciado. Isto depende das interfaces
fornecidas pelo próprio objeto COM e nem sempre será possível.

### Parâmetros

`typelib`
:   `typelib` pode ser um dos seguintes valores:

    - O nome do arquivo `.tlb` ou o módulo executável
      que contém a biblioteca de tipos.
    - O GUID da biblioteca de tipos, seguido pelo número da versão, por exemplo
      `{00000200-0000-0010-8000-00AA006D2EA4},2,0`.
    - O nome da biblioteca de tipos, por ex. `Microsoft OLE DB
      ActiveX Data Objects 1.0 Library`.

    O PHP tentará resolver a biblioteca de tipos nesta ordem, pois o
    processo fica cada vez mais custoso à medida que se avança na lista;
    a pesquisa da biblioteca de tipos por nome é feita enumerando
    fisicamente o registro até que uma correspondência seja encontrada.

`case_insensitive`
:   O parâmetro `case_insensitive` comporta-se de forma inversa ao
    parâmetro `$case_insensitive` na função
    [define()](function.define.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
