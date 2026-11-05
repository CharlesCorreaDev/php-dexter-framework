# Executa uma string como código Javascript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/v8js.executestring.php

---

# V8Js::executeString

(PECL v8js >= 0.1.0)

V8Js::executeString — Executa uma string como código Javascript

### Descrição

public function **V8Js::executeString**([string](language.types.string.md) `$script`, [string](language.types.string.md) `$identifier` = "V8Js::executeString()", [int](language.types.integer.md) `$flags` = **`V8Js::FLAG_NONE`**): [mixed](language.types.mixed.md)

Compila e executa a string passada com `script` como código Javascript.

### Parâmetros

`script`
:   A string do código a ser executado.

`identifier`
:   String identificadora do código executado. Usada para depuração.

`flags`
:   Sinalizadores de execução. Este valor deve ser uma das constantes
    `V8Js::FLAG_*`, cujo padrão é
    **`V8Js::FLAG_NONE`**.

    - **`V8Js::FLAG_NONE`**: nenhum sinalizador
    - **`V8Js::FLAG_FORCE_ARRAY`**: força todos os objetos Javascript
      passados ​​ao PHP a serem arrays associativos

### Valor Retornado

Retorna a última variável instanciada no código Javascript convertida para o tipo de variável PHP correspondente.

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
