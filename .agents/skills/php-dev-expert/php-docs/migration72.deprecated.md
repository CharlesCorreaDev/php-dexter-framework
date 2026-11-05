# Recursos descontinuados na versão PHP 7.2.x

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration72.deprecated.php

---

## Recursos descontinuados na versão PHP 7.2.x

### Strings sem aspas

Strings sem aspas que não são constantes globais são consideradas
strings delas mesmas. Este comportamento costumava emitir um
**`E_NOTICE`**, mas agora irá emitir um
**`E_WARNING`**. Na próxima versão maior do PHP, uma exceção
[Error](class.error.md) será lançada no lugar.

```
<?php

var_dump(NONEXISTENT);

/* Output:
Warning: Use of undefined constant NONEXISTENT - assumed 'NONEXISTENT' (this will throw an Error in a future version of PHP) in %s on line %d
string(11) "NONEXISTENT"
*/
```

### [png2wbmp()](function.png2wbmp.md) e [jpeg2wbmp()](function.jpeg2wbmp.md)

As funções [png2wbmp()](function.png2wbmp.md) e [jpeg2wbmp()](function.jpeg2wbmp.md)
da extensão GD foram descontinuadas e serão removidas
na próxima versão maior do PHP.

### **`INTL_IDNA_VARIANT_2003`** variante

A extensão Intl descontinuou a variante
**`INTL_IDNA_VARIANT_2003`**, que está sendo usada atualmente
como padrão para [idn\_to\_ascii()](function.idn-to-ascii.md) e
[idn\_to\_utf8()](function.idn-to-utf8.md). PHP 7.4 irá mudar esses padrões para
**`INTL_IDNA_VARIANT_UTS46`**, e a próxima versão maior do
PHP irá remover **`INTL_IDNA_VARIANT_2003`** completamente.

### [\_\_autoload()](function.autoload.md) metódo

O método [\_\_autoload()](function.autoload.md) foi descontinuado porque é
inferior ao [spl\_autoload\_register()](function.spl-autoload-register.md) (devido a não ser
permitido encadear autoloaders), e não há interoperabilidade entre os dois
estilos de autoloading.

### Configuração ini `track_errors` e variável `$php_errormsg`

Quando a configuração ini `track_errors` está ativada, uma
variável `$php_errormsg` é criada no escopo local quando
um erro não fatal ocorre. Dado que a maneira preferida de recuperar tais
informações de erro é usando [error\_get\_last()](function.error-get-last.md), este
recurso foi descontinuado.

### [create\_function()](function.create-function.md) function

Dado os problemas de segurança desta função (sendo um encapsulador ao redor de
[eval()](function.eval.md)), esta função datada foi descontinuada.
A alternativa preferida é o uso de [funções anônimas](functions.anonymous.md).

### Configuração ini `mbstring.func_overload`

Dado os problemas de interoperabilidade das funções baseadas em string sendo usadas em
ambientes com esta configuração ativada, ela será despreciada.

### Conversão `(unset)`

Convertendo qualquer expressão para este tipo sempre resultará em **`null`**, e então
esta conversão de tipo supérflua foi descontinuada.

### [parse\_str()](function.parse-str.md) sem um segundo argumento

Sem o segundo argumento para [parse\_str()](function.parse-str.md), os parâmetros de
string de consulta preenchiam a tabela de símbolos local.
Dado as implicações de segurança disto, usar
[parse\_str()](function.parse-str.md) sem um segundo parâmetro foi
descontinuado. A função deve sempre ser usada com dois argumentos, como o
segundo argumento faz com que a string de consulta seja analisada em um array.

### Função [gmp\_random()](function.gmp-random.md)

Esta função gera um número aleatório baseado em um intervalo
calculado por um tamanho de membro específico da plataforma não exposto. Por isso, esta
função foi descontinuada. A maneira preferida de gerar um
número aleatório usando a extensão GMP é com
[gmp\_random\_bits()](function.gmp-random-bits.md) e
[gmp\_random\_range()](function.gmp-random-range.md).

### Função [each()](function.each.md)

Esta função é muito mais lenta na iteração do que um
`foreach` normal, e causa problemas de implementações para algumas
mudanças da linguagem. Portanto, ela foi descontinuada.

### [assert()](function.assert.md) com um argumento string

Usar [assert()](function.assert.md) com um argumento string requer que a string
seja passada para [eval()](function.eval.md). Dado o potencial para a execução de
código remoto, usar [assert()](function.assert.md) com um argumento string foi
descontinuado em favor de usar expressões booleanas.

### `$errcontext` argumento para manipuladores de erros

O argumento `$errcontext` contém todas as variáveis locais
de erro do site. Dado a raridade do uso, e os problemas causados com as
otimizações internas, ele foi descontinuado.
Ao invés disto, um debugger deve ser usado para recuperar
informações nas variáveis locais de erro do site.

### Função [read\_exif\_data()](function.read-exif-data.md)

O atalho [read\_exif\_data()](function.read-exif-data.md) foi descontinuado.
A função [exif\_read\_data()](function.exif-read-data.md) deve ser usada no lugar.

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
