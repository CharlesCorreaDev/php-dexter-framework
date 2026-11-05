# Converte para maiúscula o primeiro caractere de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ucfirst.php

---

# mb\_ucfirst

(PHP 8 >= 8.4.0)

mb\_ucfirst — Converte para maiúscula o primeiro caractere de uma string

### Descrição

function **mb\_ucfirst**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Realizad uma operação [ucfirst()](function.ucfirst.md) segura para strings multi-byte,
e retorna uma string com o primeiro caractere do parâmetro
`string` convertido para letra de título.

### Parâmetros

`string`
:   A string de entrada.

`encoding`
:   A codificação da string.

### Valor Retornado

Retorna a string resultante.

### Notas

> **Nota**:
>
> Em contraste com as funções padrão de conversão de maiúsculas e minúsculas, como
> [strtolower()](function.strtolower.md) e [strtoupper()](function.strtoupper.md),
> a conversão é executada com base nas propriedades dos caracteres
> Unicode. Assim, o comportamento desta função não é afetado
> pelas configurações de localidade e pode converter quaisquer caracteres que tenham
> propriedade 'alphabetic' (alfabética), como trema (ä) por exemplo.

Para obter mais informações sobre as propriedades Unicode, consulte [» https://www.unicode.org/reports/tr21/](https://www.unicode.org/reports/tr21/).

### Veja também

- [mb\_lcfirst()](function.mb-lcfirst.md) - Converte parap minúscula o primeiro caractere de uma string
- [mb\_convert\_case()](function.mb-convert-case.md) - Realiza a conversão de caixa em uma string
- [ucfirst()](function.ucfirst.md) - Transforma o primeiro caractere de uma string em maiúsculo

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
