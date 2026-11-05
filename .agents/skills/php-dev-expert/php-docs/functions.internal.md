# Funções internas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functions.internal.php

---

## Funções internas

O PHP vem por padrão com muitas funções e construtores. Também existem
funções que necessitam que uma extensão específica esteja compilada, se não
erros fatais "undefined function" (função não definida) irão aparecer. Por exemplo, para usar
as funções [image](ref.image.md) como
[imagecreatetruecolor()](function.imagecreatetruecolor.md), o PHP deve ser compilado com suporte
GD. Ou, para usar
[mysqli\_connect()](function.mysqli-connect.md), PHP deve ser compilado com suporte
[MySQLi](book.mysqli.md). Existem muitas funções do núcleo
que são incluídas em cada versão do PHP, como
[string](ref.strings.md) e
[variable](ref.var.md). Uma chamada a
[phpinfo()](function.phpinfo.md) ou
[get\_loaded\_extensions()](function.get-loaded-extensions.md) irá mostrar quais extensões estão
carregadas no PHP. Note também que várias extensões são ativadas por padrão e que
o manual do PHP é dividido por extensão. Veja
[configuração](configuration.md),
[instalação](install.md), e os capítulos
individuais das extensões para como configurar o PHP.

A leitura e entendimento de um protótipo de função é explicado na
seção do manual intitulada
[como ler uma definição de função](about.prototypes.md).
É importante perceber o que a função retorna ou se a função trabalha
diretamente no valor passado como argumento. Por exemplo,
[str\_replace()](function.str-replace.md) irá retornar a string modificada enquanto
[usort()](function.usort.md) trabalha na própria variável passada no
argumento. Cada página do manual também contém informações específicas de cada
função, como: parâmetros da função, mudanças de comportamento,
valores de retorno tanto para sucesso e erros, como outras informações disponíveis.
O conhecimento destas diferenças importantes é crucial para escrever corretamente seu código PHP.

> **Nota**:
>
> Se os parâmetros dados a uma função não forem o que ela espera, como
> passar um [array](language.types.array.md) onde uma [string](language.types.string.md) é esperada,
> o valor de retorno da função é indefinido. Neste caso provavelmente
> irá retornar **`null`** mas isto é apenas uma convenção, e
> você não pode depender disso.
> A partir do PHP 8.0.0, uma exceção [TypeError](class.typeerror.md) é lançada
> nesses casos.

> **Nota**:
>
> Tipos escalares para funções embutidas são anuláveis por padrão no modo coercivo.
> A partir do PHP 8.1.0, passar **`null`** para um parâmetro de uma função interna que não é declarado anulável
> é desencorajado e emite um aviso de descontinuação no modo coercitivo para alinhar com o comportamento de funções definidas pelo usuário,
> onde tipos escalares precisam ser marcados como anuláveis explícitamente.
>
> Por exemplo, a função [strlen()](function.strlen.md) espera que o parâmetro `$string`
> seja uma [string](language.types.string.md) não anulável.
> Por razões históricas, o PHP permite a passagem de **`null`** para esse parâmetro no modo coercivo, e o parâmetro é
> implicitamente convertido para [string](language.types.string.md), resultando em um valor `""`.
> Em contrapartida, um [TypeError](class.typeerror.md) é emitido no modo estrito.
>
> ```
> <?php
> var_dump(strlen(null));
> // "Deprecated: Passing null to parameter #1 ($string) of type string is deprecated" as of PHP 8.1.0
> // int(0)
>
> var_dump(str_contains("foobar", null));
> // "Deprecated: Passing null to parameter #2 ($needle) of type string is deprecated" as of PHP 8.1.0
> // bool(true)
> ```

### Veja também

- [function\_exists()](function.function-exists.md)
- [A referência das funções](funcref.md)
- [get\_extension\_funcs()](function.get-extension-funcs.md)
- [dl()](function.dl.md)

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
