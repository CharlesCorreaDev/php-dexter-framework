# Iterável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.iterable.php

---

## Iterável

[Iterable](language.types.iterable.md) é um sinônimo de tipo integrado em tempo de compilação para
`array|Traversable`.
Desde sua introdução no PHP 7.1.0 e antes do PHP 8.2.0,
[iterable](language.types.iterable.md) era um pseudotipo integrado que atuava como o sinônimo de tipo
mencionado anteriormente e podia ser usado como uma declaração de tipo.
Um tipo iterável pode ser usado em [`foreach`](control-structures.foreach.md) e com
**yield from** de dentro de um
[gerador](language.generators.md).

> **Nota**:
>
> As funções que declaram iterável como um tipo de retorno também podem ser
> [geradoras](language.generators.md).
>
> **Exemplo #1
> Exemplo de tipo de retorno do gerador iterável**
>
> ```
> <?php
>
> function gen(): iterable {
>     yield 1;
>     yield 2;
>     yield 3;
> }
>
> foreach(gen() as $value) {
>     echo $value, "\n";
> }
> ?>
> ```

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
